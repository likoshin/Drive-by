document.addEventListener('DOMContentLoaded', function() {
    let user = localStorage.getItem('username');
    if (user) {
        document.getElementById('user').textContent = user;
    } else {
        window.location.href = 'index.html';
    }
});
