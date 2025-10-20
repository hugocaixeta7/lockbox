function clearSearch() {
    const input = document.querySelector('.search-input');
    input.value = '';
    input.form.submit();
}

// Auto-submit on input with debounce
let searchTimeout;
document.querySelector('.search-input')?.addEventListener('input', function (e) {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
        if (e.target.value.length >= 2 || e.target.value.length === 0) {
            e.target.form.submit();
        }
    }, 500);
});