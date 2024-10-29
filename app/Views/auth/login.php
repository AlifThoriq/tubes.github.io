<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }

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

        .custom-input {
            background-color: #f7fafc;
            border: 1px solid #cbd5e0;
            padding: 12px 16px;
            border-radius: 8px;
            width: 100%;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .custom-input::placeholder {
            color: #a0aec0;
        }

        .custom-input:focus {
            border-color: #3182ce;
            outline: none;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.3);
        }

        .container {
            max-width: 400px;
            width: 90%;
        }

        .circular-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .circular-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-teal-500 flex items-center justify-center min-h-screen">
    <div class="container bg-white p-8 rounded-lg shadow-lg fade-in">
        <!-- Circular Image -->
        <div class="circular-image mb-4">
            <img src="<?= base_url('images/Ellipse 2.png') ?>" alt="Logo">
        </div>

        <!-- Title -->
        <h2 class="text-center text-3xl font-bold text-blue-800 mb-6">THE NOTES</h2>

        <!-- Login Form -->
        <form action="" method="POST" class="space-y-4">
            <!-- Username Input -->
            <div>
                <input type="text" name="username" placeholder="Username" class="custom-input" required>
            </div>

            <!-- Password Input -->
            <div>
                <input type="password" name="password" placeholder="Password" class="custom-input" required>
            </div>

            <!-- Login Button -->
            <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Login</button>
            </div>

            <!-- Links -->
            <div class="text-center mt-4">
                <a href="#" class="text-gray-600 hover:underline">Lupa Password</a> |
                <a href="/auth/register" class="text-blue-600 hover:underline">Registrasi</a>
            </div>
        </form>

        <?php
        // PHP Code to Handle Login
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Here you would typically check the username and password against your database
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Dummy check for demonstration; replace with your actual login logic
            if ($username === 'admin' && $password === 'password') {
                // Redirect to the homepage
                header('Location: ' . base_url('views/home.php'));
                exit(); // Make sure to exit after the redirect
            } else {
                echo "<p class='text-red-500 text-center'>Username atau password salah!</p>";
            }
        }
        ?>
    </div>
</body>

</html>