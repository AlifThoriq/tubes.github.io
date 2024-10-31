<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            transition: border-color 0.3s;
        }

        .custom-input:focus {
            border-color: #3182ce;
            outline: none;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.3);
        }

        .container {
            max-width: 400px;
        }

        .relative-icon {
            position: relative;
        }

        .eye-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            width: 24px;
            height: 24px;
            fill: #718096;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="container bg-white p-8 rounded-lg shadow-lg fade-in text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-6">THE NOTES</h2>

        <div class="space-y-6">
            <div>
                <input type="text" id="name" placeholder="Name" class="custom-input w-full">
            </div>

            <div class="relative-icon">
                <input type="password" id="password" placeholder="Password" class="custom-input w-full">
                <svg class="eye-icon" onclick="togglePasswordVisibility()" viewBox="0 0 24 24">
                    <path d="M12 4.5c-4.36 0-8.04 2.66-9.65 6.5 1.61 3.84 5.29 6.5 9.65 6.5s8.04-2.66 9.65-6.5c-1.61-3.84-5.29-6.5-9.65-6.5zm0 11c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5zm0-2c1.38 0 2.5-1.12 2.5-2.5s-1.12-2.5-2.5-2.5-2.5 1.12-2.5 2.5 1.12 2.5 2.5 2.5z" />
                </svg>
            </div>

            <div>
                <button onclick="submitData()" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    Submit
                </button>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";
        }

        function submitData() {
            const name = document.getElementById("name").value;
            const password = document.getElementById("password").value;

            // Simulate form submission (console log or AJAX can be used here)
            console.log("Name:", name);
            console.log("Password:", password);

            // Additional logic here to send data to your server or handle submission as needed
            alert("Data submitted: Name = " + name + ", Password = " + password);
        }
    </script>
</body>

</html>