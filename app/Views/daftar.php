<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar - Fate's Saber</title>
    <link rel="icon" type="icon.ico" href="icon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #6a95ff, #a1c4fd);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: linear-gradient(to bottom, #6a95ff, #a1c4fd);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 350px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border: 5px solid #ccc;
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            color: gold;
            margin-bottom: 15px;
        }

        .profile-pic {
            width: 110px;
            height: 105px;
            border-radius: 55%;
            margin-bottom: 15px;
            background-color: white;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            color: black;
        }

        .form-group input {
            width: 93%;
            padding: 10px;
            margin-top: 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-daftar {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-daftar:hover {
            background-color: #0056b3;
        }

        .bottom-text {
            margin-top: 10px;
            font-size: 14px;
            color: black;
        }

        .bottom-text a {
            color: gold;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- Menampilkan pesan kesalahan -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <?= implode('<br>', session()->getFlashdata('errors')) ?>
        </div>
    <?php endif; ?>

    <!-- Menampilkan pesan sukses -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <!-- Menampilkan pesan error -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>



    <div class="container">
        <div class="title">Gabung Ke Fate’s Saber</div>
        <img src="images/logo.png" alt="Profile" class="profile-pic"> <!-- Ganti dengan URL gambar jika perlu -->

        <form action="<?= site_url('/register-user') ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn-daftar"><a href="transaksi">Daftar</a></button>
        </form>

        <div class="bottom-text">
            Sudah Memiliki Akun? <a href="login">Masuk</a>
        </div>
    </div>

</body>

</html>