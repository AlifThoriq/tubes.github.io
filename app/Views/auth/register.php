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

        /* Positioning for eye icon */
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

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="container bg-white p-8 rounded-lg shadow-lg fade-in text-center">
        <!-- Circular Image -->
        <div class="circular-image mb-4">
            <img src="<?= base_url('images/Ellipse 2.png') ?>" alt="Logo">
        </div>

        <h2 class="text-3xl font-bold text-blue-800 mb-6">THE NOTES</h2>

        <form action="" method="POST" class="space-y-6">
            <div>
                <input type="text" name="full_name" placeholder="Full Name" class="custom-input w-full">
            </div>

            <div class="flex items-center space-x-4">
                <label class="flex items-center space-x-2">
                    <input type="radio" name="gender" value="male" class="form-radio text-blue-600"> <span>Male</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="gender" value="female" class="form-radio text-blue-600"> <span>Female</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="gender" value="other" class="form-radio text-blue-600"> <span>Other</span>
                </label>
            </div>

            <div>
                <input type="text" name="nip_nim" placeholder="NIP/NIM" class="custom-input w-full">
            </div>

            <div>
                <input type="tel" name="phone" placeholder="Phone Number" class="custom-input w-full">
            </div>

            <div>
                <input type="email" name="email" placeholder="Email" class="custom-input w-full">
            </div>

            <div>
                <input type="date" name="birthdate" placeholder="Date of Birth" class="custom-input w-full">
            </div>

            <div>
                <input type="text" name="username" placeholder="Username" class="custom-input w-full">
            </div>

            <!-- Password input with eye icon -->
            <div class="relative-icon">
                <input type="password" id="password" name="password" placeholder="Password" class="custom-input w-full">
                <svg class="eye-icon" id="togglePassword" onclick="togglePasswordVisibility('password', this)" viewBox="0 0 24 24">
                    <path d="M12 4.5c-4.36 0-8.04 2.66-9.65 6.5 1.61 3.84 5.29 6.5 9.65 6.5s8.04-2.66 9.65-6.5c-1.61-3.84-5.29-6.5-9.65-6.5zm0 11c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5zm0-2c1.38 0 2.5-1.12 2.5-2.5s-1.12-2.5-2.5-2.5-2.5 1.12-2.5 2.5 1.12 2.5 2.5 2.5z" />
                </svg>
            </div>

            <!-- Confirm Password input with eye icon -->
            <div class="relative-icon">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="custom-input w-full">
                <svg class="eye-icon" id="toggleConfirmPassword" onclick="togglePasswordVisibility('confirm_password', this)" viewBox="0 0 24 24">
                    <path d="M12 4.5c-4.36 0-8.04 2.66-9.65 6.5 1.61 3.84 5.29 6.5 9.65 6.5s8.04-2.66 9.65-6.5c-1.61-3.84-5.29-6.5-9.65-6.5zm0 11c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5zm0-2c1.38 0 2.5-1.12 2.5-2.5s-1.12-2.5-2.5-2.5-2.5 1.12-2.5 2.5 1.12 2.5 2.5 2.5z" />
                </svg>
            </div>

            <div>
                <label for="security_question" class="block text-sm font-medium text-gray-700">Security Question:</label>
                <select name="security_question" class="custom-input w-full mt-2">
                    <option value="">Select a question</option>
                    <option value="q1">What is your pet's name?</option>
                    <option value="q2">What was your first school?</option>
                    <option value="q3">What is your mother's maiden name?</option>
                    <option value="q4">What was your childhood nickname?</option>
                    <option value="q5">What is your favorite color?</option>
                </select>
            </div>

            <div>
                <input type="text" name="security_answer" placeholder="Answer" class="custom-input w-full">
            </div>

            <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Register</button>
            </div>

            <p class="text-center mt-4 text-gray-600">Already have an account? <a href="/auth/login" class="text-blue-600 hover:underline">Login</a></p>
        </form>
    </div>

    <script>
        // Function to toggle password visibility
        function togglePasswordVisibility(inputId, icon) {
            const inputField = document.getElementById(inputId);
            const isPassword = inputField.type === "password";
            inputField.type = isPassword ? "text" : "password";

            // Change icon color or style based on visibility state
            icon.classList.toggle("active");
            icon.style.fill = isPassword ? "#3182ce" : "#718096";
        }
    </script>
</body>

</html>