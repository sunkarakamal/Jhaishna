<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="button"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="button"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
            <h2>Login</h2>
            <form id="loginForm" method="post">

                <input type="text" id="username" name="username" placeholder="Username" required>
                <br><br>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <br><br>
                <button type="button" onclick="validateLogin()">Login</button>
            </form>
        </div>
    </center>

    <script>
        function validateLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Check if username and password are correct
            if (username === 'gopi' && password === '1234') {
                // Redirect to another page upon successful login
                window.location.href = 'loginintoanotherpage.php';
            } else {
                // Display error message
                alert('Invalid username or password.');
            }
        }
    </script>
</body>
</html>