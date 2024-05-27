<?php
session_start();

$users = [
    'user' => 'password'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        echo "<script>
                localStorage.setItem('username', '$username');
                window.location.href = 'welcome.html';
              </script>";
    } else {
        echo "<script>
                alert('Невірний логін або пароль');
                window.location.href = 'index.html';
              </script>";
    }
}
?>
