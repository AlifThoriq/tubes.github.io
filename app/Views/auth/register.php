<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS RESET */
        /* Tambahkan ke styles.css */

        /* Styling untuk kontainer form */
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease-in-out;
            /* Animasi saat muncul */
        }

        /* Animasi untuk fadeIn */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Styling untuk form */
        .form {
            display: flex;
            flex-direction: column;
        }

        .form label {
            margin-top: 10px;
        }

        .form input {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s ease;
        }

        .form input:focus {
            border-color: #333;
            /* Border berwarna gelap saat fokus */
        }

        .form button {
            margin-top: 15px;
            padding: 10px;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form button:hover {
            background-color: #555;
            /* Warna latar belakang tombol saat hover */
        }

        /* Styling untuk tombol Google */
        .primary-button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            padding: 10px;
            border: none;
            background-color: #db4437;
            /* Warna merah Google */
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .primary-button:hover {
            background-color: #c13530;
            /* Warna lebih gelap saat hover */
        }

        .icon {
            margin-right: 5px;
            /* Jarak antara ikon dan teks */
        }

        /* Styling untuk link login */
        .form p {
            margin-top: 10px;
            /* Jarak atas untuk teks login */
            text-align: center;
            /* Rata tengah teks */
        }

        .form a {
            color: #333;
            /* Warna link */
            text-decoration: none;
            /* Menghilangkan garis bawah */
        }

        .form a:hover {
            text-decoration: underline;
            /* Garis bawah saat hover */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Styling untuk header dan navbar */
        header {
            background-color: #333;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            color: #fff;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 1.5rem;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        /* Burger menu untuk responsive */
        .burger-menu {
            display: none;
            font-size: 2rem;
            color: #fff;
            cursor: pointer;
        }

        /* Konten Utama */
        main {
            margin-top: 100px;
            padding: 2rem;
            background-color: #f0f0f0;
            min-height: 100vh;
        }

        h1,
        h2 {
            margin-bottom: 1rem;
        }

        .profile-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Animasi untuk smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .burger-menu {
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Register</h2>
        <form action="" method="POST" class="form">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" required><br>

            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <button type="submit">Register</button>

            <p>Already have an account? <a href="/login">Sign in here</a></p>

            <?php if (isset($error)): ?>
                <div class="error"><?= $error; ?></div>
            <?php endif; ?>
        </form>
    </div>
    <script>
        document.getElementById('burger-menu').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        });

        window.addEventListener('resize', function() {
            const navLinks = document.querySelector('.nav-links');
            if (window.innerWidth > 768) {
                navLinks.classList.remove('active');
            }
        });
    </script> <!-- Link ke JS -->
</body>

</html>