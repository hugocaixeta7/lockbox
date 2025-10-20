function closeAlert() {
    const alert = document.getElementById('alertMessage');
    alert.style.animation = 'slideUp 0.3s ease-out';
    setTimeout(() => alert.remove(), 300);
}

// Auto-hide after 5 seconds
setTimeout(closeAlert, 5000);

// Add slideUp animation
const style = document.createElement('style');
style.textContent = `
        @keyframes slideUp {
            to {
                opacity: 0;
                transform: translateX(-50%) translateY(-20px);
            }
        }
    `;
document.head.appendChild(style);