document.addEventListener('DOMContentLoaded', function () {
    const userMenuBtn = document.getElementById('userMenuBtn');
    const dropdown = userMenuBtn.closest('.navbar-dropdown');

    userMenuBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        dropdown.classList.toggle('active');
    });

    document.addEventListener('click', function () {
        dropdown.classList.remove('active');
    });
});