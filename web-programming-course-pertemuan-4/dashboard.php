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
            background: linear-gradient(120deg, #34495e, #ecf0f1);
            animation: backgroundShift 10s infinite alternate;
        }

        @keyframes backgroundShift {
            0% {
                background: linear-gradient(120deg, #34495e, #ecf0f1);
            }
            100% {
                background: linear-gradient(120deg, #2c3e50, #bdc3c7);
            }
        }

        h1 {
            font-size: 2rem;
            color: #2c3e50;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
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
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background-color: #2980b9;
            transform: scale(1.1);
        }

        .btn:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <h1>Hallo, Welcome Back Admin</h1>
    <button class="btn">Go to Dashboard</button>
</body>
</html>
