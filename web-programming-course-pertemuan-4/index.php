<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: black;
            overflow: hidden;
        }

        h1 {
            font-size: 2rem;
            color: #00ffcc;
            text-shadow: 0 0 15px #00ffcc, 0 0 30px #00ffcc;
            opacity: 0;
            animation: fadeIn 2s ease-in-out forwards;
            margin-bottom: 20px;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #00ffcc;
            color: black;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 0 20px #00ffcc, 0 0 30px #00ffcc;
            transition: transform 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.1);
        }

        .btn:active {
            transform: scale(0.95);
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
            z-index: -1;
        }

        .grid {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #00ffcc, transparent 60%);
            opacity: 0.05;
            animation: gridMove 10s linear infinite;
        }

        @keyframes gridMove {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="grid"></div>
    </div>
    <h1>Hallo, Welcome Back Admin</h1>
    <button class="btn">Go to Dashboard</button>
</body>
</html>
