<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="icon" href="icon.ico">
    <style>
        body {
            background: linear-gradient(to bottom, #6a95ff, #a1c4fd);
            /* background-color: #3b6cb7; */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
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

        .container {
            display: flex;
            align-items: center;
            gap: 50px;
            animation: slideUp 1s ease-in-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .image-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .circle-green {
            width: 60px;
            height: 60px;
            background-color: #00ff00;
            border-radius: 50%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        .login-box {
            background-color: linear-gradient(to bottom, #6a95ff, #a1c4fd);
            padding: 30px;
            border: solid #ccc;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        .profile-circle {
            width: 80px;
            height: 80px;
            /* background-color: #d3d3d3; */
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-circle img {
            height: auto;
            width: 100%;

        }

        .textbox {
            width: 100%;
            height: 40px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            padding-left: 12px;
            color: #333;
            font-size: 16px;
        }

        .textbox:focus {
            border-color: #3b6cb7;
            outline: none;
            box-shadow: 0px 0px 5px rgba(59, 108, 183, 0.5);
        }

        .login-button {
            width: 100%;
            height: 40px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: darkred;
        }
    </style>

</head>

<body>

    <!-- Menampilkan pesan kesalahan -->
    <?php if (session()->getFlashdata('errors')): ?>
        <script type="text/javascript">
            window.onload = function() {
                var errors = <?php echo session()->getFlashdata('errors'); ?>;
                var errorMessage = '';
                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        errorMessage += errors[key] + '\n'; // Menggabungkan semua pesan kesalahan
                    }
                }
                alert('Kesalahan:\n' + errorMessage); // Menampilkan alert dengan pesan kesalahan
            };
        </script>
    <?php endif; ?>

    <!-- Menampilkan pesan error -->
    <?php if (session()->getFlashdata('error')): ?>
        <script type="text/javascript">
            alert('<?= session()->getFlashdata('error') ?>');
        </script>
    <?php endif; ?>

    <div class="container">
        <div class="image-section">
            <div class="circle-green"></div>
            <div class="circle-green"></div>
            <div class="circle-green"></div>
        </div>
        <div class="login-box">
            <div class="profile-circle"><img src="images/logo.png" alt=""></div>
            <form action="<?= base_url('/login-user') ?>" method="post">
                <input type="text" class="textbox" placeholder="Username">
                <input type="password" class="textbox" placeholder="Password">
                <button class="login-button">Login</button>
            </form>
        </div>
    </div>
</body>

</html>