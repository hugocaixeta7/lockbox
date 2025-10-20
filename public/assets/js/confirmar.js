// Add enter key support
document.querySelector('.confirm-form')?.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        e.target.closest('form').submit();
    }
});

// Add loading state
document.querySelector('.confirm-form')?.addEventListener('submit', (e) => {
    const submitBtn = e.target.querySelector('.btn-primary');
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner"></span> Verificando...';
});