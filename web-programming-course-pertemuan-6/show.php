<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #1f1f1f, #111);
            color: #00ffcc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            text-shadow: 0 0 15px #00ffcc, 0 0 30px #00ffcc;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px #00ffcc, 0 0 40px #0088ff;
        }

        th, td {
            padding: 15px;
            text-align: center;
            color: #fff;
            border-bottom: 1px solid #00ffcc;
        }

        th {
            background: rgba(0, 255, 204, 0.2);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:hover {
            background: rgba(0, 255, 204, 0.1);
        }

        a {
            color: #00ffcc;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #ff00cc;
        }

        .table-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @keyframes glow {
            0% {
                box-shadow: 0 0 10px #00ffcc, 0 0 20px #00ffcc;
            }
            50% {
                box-shadow: 0 0 20px #0088ff, 0 0 40px #00ffcc;
            }
            100% {
                box-shadow: 0 0 10px #00ffcc, 0 0 20px #00ffcc;
            }
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>Data Produk</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require './config/db.php';
                    $products = mysqli_query($db_connect,"SELECT * FROM products");
                    $no = 1;
                    while($row = mysqli_fetch_assoc($products)) {
                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row['name'];?></td>
                        <td>Rp <?=$row['price'];?></td>
                        <td><a href="<?=$row['image'];?>" target="_blank">Unduh</a></td>
                        <td>
                            <a href="edit.php?id=<?=$row['id'];?>">Edit</a>
                            <a href="delete.php?id=<?=$row['id'];?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
