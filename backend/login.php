<?php
    // Mulai sesi
    session_start();

    // Daftar user (username => password)
    $users = array(
        "user1" => "password1",
        "user2" => "password2"
    );

    // Jika form login disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cek apakah username dan password cocok
        if (isset($users[$username]) && $users[$username] == $password) {
            // Set session untuk login
            $_SESSION['username'] = $username;
            header("Location: ./../dashboard.php"); // Redirect ke halaman setelah login
            exit();
        } else {
            $error = "Username atau password salah.";
        }
    }
?>