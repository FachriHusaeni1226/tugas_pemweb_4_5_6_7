<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Login</title>
    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
            overflow: hidden;
        }

        .container {
            text-align: center;
            padding: 40px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 0 20px #00ffcc, 0 0 40px #00ffcc;
        }

        h1 {
            color: #00ffcc;
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 0 0 20px #00ffcc, 0 0 40px #00ffcc;
        }

        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            color: #00ffcc;
            font-size: 1rem;
            outline: none;
            box-shadow: 0 0 10px #00ffcc, 0 0 20px #00ffcc;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(90deg, #00ffcc, #0088ff);
            color: black;
            font-size: 1rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 0 20px #00ffcc, 0 0 40px #0088ff;
        }

        form input[type="submit"]:hover {
            transform: scale(1.1);
            box-shadow: 0 0 30px #00ffcc, 0 0 60px #0088ff;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #00ffcc 10%, transparent 90%);
            z-index: -1;
            animation: moveBackground 10s infinite linear;
        }

        @keyframes moveBackground {
            0% {
                transform: translateX(0) translateY(0);
            }
            100% {
                transform: translateX(-100vw) translateY(-100vh);
            }
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h1>Login</h1>
        <form action="./backend/login.php" method="post">
            <input type="email" name="email" placeholder="Masukkan email Anda" required>
            <input type="password" name="password" placeholder="Masukkan password Anda" required>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>
</body>
</html>
