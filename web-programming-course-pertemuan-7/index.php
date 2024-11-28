<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Futuristik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #00ffcc;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        h1 {
            color: #00ffcc;
            text-shadow: 0 0 10px #00ffcc, 0 0 20px #00ffcc;
        }

        form {
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px #00ffcc, 0 0 40px #0088ff;
        }

        .form-label {
            color: #00ffcc;
        }

        .form-control {
            background: transparent;
            border: 1px solid #00ffcc;
            color: #00ffcc;
            box-shadow: 0 0 10px rgba(0, 255, 204, 0.2);
        }

        .form-control:focus {
            border-color: #0088ff;
            box-shadow: 0 0 20px #0088ff, 0 0 40px #00ffcc;
        }

        .btn-success {
            background: linear-gradient(135deg, #00ffcc, #0088ff);
            border: none;
            color: black;
            font-weight: bold;
            box-shadow: 0 0 20px #00ffcc, 0 0 40px #0088ff;
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #0088ff, #00ffcc);
            box-shadow: 0 0 30px #00ffcc, 0 0 60px #0088ff;
        }

        a.text-primary {
            color: #00ffcc !important;
            text-shadow: 0 0 10px #00ffcc;
        }

        a.text-primary:hover {
            color: #ff00cc !important;
        }

        .container {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Login Futuristik</h1>

        <form action="./backend/login.php" method="post" class="w-50 mx-auto p-4 rounded">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-success w-100">Login</button>
            </div>
            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="./register.php" class="text-primary">Daftar</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
