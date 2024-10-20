<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
    <?php
    $identifier = $_POST['username_email']; // username or email
    $password = $_POST['password'];

    // Check user data from database (example query)
    $db = \Config\Database::connect();
    $builder = $db->table('users');
    $user = $builder->where('username', $identifier)
        ->orWhere('email', $identifier)
        ->get()
        ->getRow();

    // Verify user credentials
    if ($user && password_verify($password, $user->password)) {
        // Set session
        session()->set([
            'user_id' => $user->id,
            'user_name' => $user->full_name,
            'logged_in' => true
        ]);
        return redirect()->to('/home');
    } else {
        $error = "Invalid username/email or password!";
    }
    ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: slideIn 1s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h2 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            font-size: 1rem;
            border: none;
            background-color: #000;
            /* Changed to black */
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
            /* Darker black for hover */
        }

        .primary-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            font-size: 1rem;
            background-color: #000;
            /* Changed to black */
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .primary-button:hover {
            background-color: #333;
            /* Darker black for hover */
        }

        .primary-button i {
            margin-right: 10px;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Login</h2>
        <form action="/auth/processLogin" method="POST" class="form">
            <label for="username_email">Username atau Email:</label>
            <input type="text" name="username_email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <button type="submit">Login</button>

            <button class="primary-button sign-in-button">
                <i class="fab fa-google icon"></i>
                <span>Login with Google</span>
            </button>

            <p>Don't have an account? <a href="/register">Sign up now</a></p>

            <?php if (isset($error)): ?>
                <div class="error"><?= $error; ?></div>
            <?php endif; ?>
        </form>
    </div>

</body>

</html>