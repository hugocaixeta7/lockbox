// Animações e interatividade

document.addEventListener("DOMContentLoaded", () => {
    // Adicionar animação de fade-in aos elementos quando entram na viewport
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1"
                entry.target.style.transform = "translateY(0)"
            }
        })
    }, observerOptions)

    // Observar cards e elementos animáveis
    document.querySelectorAll(".card, .form-group").forEach((el) => {
        el.style.opacity = "0"
        el.style.transform = "translateY(20px)"
        el.style.transition = "opacity 0.6s ease-out, transform 0.6s ease-out"
        observer.observe(el)
    })

    // Validação de formulário em tempo real
    const forms = document.querySelectorAll("form")
    forms.forEach((form) => {
        const inputs = form.querySelectorAll(".form-input")

        inputs.forEach((input) => {
            // Adicionar feedback visual ao focar
            input.addEventListener("focus", function () {
                this.parentElement.classList.add("focused")
            })

            input.addEventListener("blur", function () {
                this.parentElement.classList.remove("focused")

                // Validação básica
                if (this.hasAttribute("required") && !this.value.trim()) {
                    this.style.borderColor = "var(--color-error)"
                } else {
                    this.style.borderColor = ""
                }
            })

            // Remover erro ao digitar
            input.addEventListener("input", function () {
                const errorElement = this.parentElement.querySelector(".form-error")
                if (errorElement) {
                    errorElement.style.display = "none"
                }
                this.style.borderColor = ""
            })
        })

        // Adicionar loading ao submeter
        form.addEventListener("submit", function (e) {
            const submitBtn = this.querySelector('button[type="submit"]')
            if (submitBtn && !submitBtn.disabled) {
                submitBtn.disabled = true
                const originalText = submitBtn.textContent
                submitBtn.innerHTML = '<span class="loading"></span> Processando...'

                // Restaurar após 5 segundos (caso haja erro)
                setTimeout(() => {
                    submitBtn.disabled = false
                    submitBtn.textContent = originalText
                }, 5000)
            }
        })
    })

    // Auto-hide para mensagens de alerta
    const alerts = document.querySelectorAll(".alert")
    alerts.forEach((alert) => {
        setTimeout(() => {
            alert.style.opacity = "0"
            alert.style.transform = "translateX(100%)"
            setTimeout(() => alert.remove(), 300)
        }, 5000)
    })

    // Adicionar efeito ripple aos botões
    document.querySelectorAll(".btn").forEach((button) => {
        button.addEventListener("click", function (e) {
            const ripple = document.createElement("span")
            const rect = this.getBoundingClientRect()
            const size = Math.max(rect.width, rect.height)
            const x = e.clientX - rect.left - size / 2
            const y = e.clientY - rect.top - size / 2

            ripple.style.width = ripple.style.height = size + "px"
            ripple.style.left = x + "px"
            ripple.style.top = y + "px"
            ripple.classList.add("ripple")

            this.appendChild(ripple)

            setTimeout(() => ripple.remove(), 600)
        })
    })

    // Validação de confirmação de email
    const emailConfirmInput = document.querySelector('input[name="email_confirmacao"]')
    const emailInput = document.querySelector('input[name="email"]')

    if (emailConfirmInput && emailInput) {
        emailConfirmInput.addEventListener("blur", function () {
            if (this.value && this.value !== emailInput.value) {
                this.style.borderColor = "var(--color-error)"

                // Criar mensagem de erro se não existir
                let errorMsg = this.parentElement.querySelector(".form-error")
                if (!errorMsg) {
                    errorMsg = document.createElement("span")
                    errorMsg.className = "form-error"
                    errorMsg.textContent = "Os emails não coincidem"
                    this.parentElement.appendChild(errorMsg)
                }
            } else {
                this.style.borderColor = ""
                const errorMsg = this.parentElement.querySelector(".form-error")
                if (errorMsg) errorMsg.remove()
            }
        })
    }

    // Força de senha
    const senhaInput = document.querySelector('input[name="senha"]')
    if (senhaInput && senhaInput.type === "password") {
        senhaInput.addEventListener("input", function () {
            const strength = calculatePasswordStrength(this.value)
            updatePasswordStrengthIndicator(this, strength)
        })
    }

    function calculatePasswordStrength(password) {
        let strength = 0
        if (password.length >= 8) strength++
        if (password.length >= 12) strength++
        if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++
        if (/\d/.test(password)) strength++
        if (/[^a-zA-Z\d]/.test(password)) strength++
        return strength
    }

    function updatePasswordStrengthIndicator(input, strength) {
        let indicator = input.parentElement.querySelector(".password-strength")
        if (!indicator) {
            indicator = document.createElement("div")
            indicator.className = "password-strength"
            indicator.style.cssText = "height: 3px; margin-top: 0.5rem; border-radius: 2px; transition: all 0.3s;"
            input.parentElement.appendChild(indicator)
        }

        const colors = ["#ef4444", "#f59e0b", "#fbbf24", "#84cc16", "#10b981"]
        const widths = ["20%", "40%", "60%", "80%", "100%"]

        if (input.value.length > 0) {
            indicator.style.width = widths[strength]
            indicator.style.backgroundColor = colors[strength]
        } else {
            indicator.style.width = "0"
        }
    }

    // Smooth scroll para links internos
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault()
            const target = document.querySelector(this.getAttribute("href"))
            if (target) {
                target.scrollIntoView({ behavior: "smooth", block: "start" })
            }
        })
    })
})

// Função para copiar texto (útil para notas)
function copyToClipboard(text) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(() => {
            showNotification("Copiado para a área de transferência!", "success")
        })
    } else {
        // Fallback para navegadores antigos
        const textarea = document.createElement("textarea")
        textarea.value = text
        textarea.style.position = "fixed"
        textarea.style.opacity = "0"
        document.body.appendChild(textarea)
        textarea.select()
        document.execCommand("copy")
        document.body.removeChild(textarea)
        showNotification("Copiado para a área de transferência!", "success")
    }
}

// Função para mostrar notificações
function showNotification(message, type = "success") {
    const notification = document.createElement("div")
    notification.className = `alert alert-${type}`
    notification.textContent = message
    notification.style.cssText = "position: fixed; top: 20px; right: 20px; z-index: 1000; min-width: 300px;"

    document.body.appendChild(notification)

    setTimeout(() => {
        notification.style.opacity = "0"
        notification.style.transform = "translateX(100%)"
        setTimeout(() => notification.remove(), 300)
    }, 3000)
}
