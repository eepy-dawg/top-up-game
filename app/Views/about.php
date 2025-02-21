<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creators</title>
    <link rel="icon" type="icon.ico" href="icon.ico">
    
    <!-- Import Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            font-family: Arial, sans-serif;
            background:  linear-gradient(to bottom, #6a95ff, #a1c4fd);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            color: white;
            text-shadow: 2px 2px 5px black;
            font-size: 3rem;
            margin-bottom: 30px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .image-box {
            width: 150px;
            height: 150px;
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .center-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .center-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    
       
    </style>
</head>
<body>

    <h1>Creators</h1>

    <div class="container">
        <div class="image-box animate__animated animate__backInLeft">
            <img src="<?= base_url('images/Ingwie.jpg') ?>" alt="Person 1">
        </div>
        <div class="image-box animate__animated animate__backInDown">
            <img src="<?= base_url('images/Bakaaa.jpg') ?>" alt="Person 2">
        </div>
        <div class="image-box animate__animated animate__backInRight">
            <img src="<?= base_url('images/Pais.jpg') ?>" alt="Person 3">
        </div>
    </div>

    <div class="center-img animate__animated animate__backInUp">
        <img src="<?= base_url('images/logo.png') ?>" alt="Mascot">
    </div>

</body>
</html>
