<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Top-Up</title>
    <style>
        .wrapper {
        width: 1100px;
        margin: auto;
        position: relative;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #344CB7;
            color: #fff;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }
        .wrapper{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000957;
            padding: 10px 20px;
            /* border-radius: 8px;  */
            width: 1440px;
        }
        .wrapper img{
            height: auto;
            width: 60px;
        }
        .login {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #577BC1;
            padding: 10px 20px;
            border-radius: 8px; 
        }
        .login a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }
        .step {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #577BC1;
            border-radius: 8px;
        }
        .step-title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: black;
        }
        .step-title span {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-size: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .step-title h2 {
            font-size: 20px;
            margin: 0;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex;
        }
        .form-group input {
            width: calc(50% - 10px);
            padding: 10px;
            border: none;
            border-radius: 8px;
            margin-right: 10px;
        }
        .form-group input:last-child {
            margin-right: 0;
        }
        .form-group small {
            font-size: 12px;
            color: rgb(0, 0, 0);
        }
        .category-grid, .payment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .category-card, .payment-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .category-card img, .payment-card img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 10px;
        }
        .category-card p, .payment-card p {
            font-size: 14px;
            font-weight: bold;
        }
        .category-card:hover, .payment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .info-badge {
            display: inline-block;
            background-color: #ff4c4c;
            color: #fff;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .menu {
        float: right;
        }
        .login-form {
            display: none;
            position: absolute;
            top: 20px;
            right: 20px;
            width: 250px;
            background-color: rgb(181, 221, 212);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .login-form.active {
            display: block;
        }
        .login-form h2 {
            color: black;
            margin-bottom: 15px;
            font-size: 18px;
        }
        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 6px;
        }
        .login-form button {
            width: 100%;
            padding: 8px;
            background-color: rgb(30, 144, 255);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: rgb(255, 223, 186);
        }
        .btn-primary {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #5848d6;
            color: #fff;
            text-align: center;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-primary:hover {
            background-color:#FFEB00;
            color: black;
            
        }
        footer {
            background-color: #5848d6;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 5px;
            
        }
        footer p {
            margin: 0;
            font-size: 14px;
        }
        footer a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
        footer a:hover {
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <div class="wrapper">
        <img src="images/logo.png" alt="">
        <div class="menu" >
            <div class="login">
                <a href="#" onclick="showLoginForm()" >Daftar</a>
            </div>
        </div>
    </div>
        <div class="container">
        <!-- Step 1: Masukkan User ID -->
        <div class="step">
            <div class="step-title">
                <span>1</span>
                <h2>Masukkan User ID</h2>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Masukkan User ID" required>
                <input type="text" placeholder="Zone ID" required>
            </div>
            <small style="color: black;">
                Untuk mengetahui User ID Anda, silakan klik menu profil di bagian kiri atas pada menu utama game.
                Contoh: 12345678(1234).
            </small>
        </div>

        <!-- Step 2: Pilih Nominal Top-Up -->
        <div class="step">
            <div class="step-title">
                <span>2</span>
                <h2>Pilih Nominal Top-Up</h2>
            </div>
            <span class="info-badge">65.989 item dibeli dalam satu jam terakhir</span>
            <div class="category-grid">
                <!-- Card Produk -->
                <div class="category-card">
                    <img src="images/recharge.png" alt="2x Recharge Bonus">
                    <p>2x Recharge Bonus</p>
                </div>
                <div class="category-card">
                    <img src="images/5000diamond.png" alt="Diamond">
                    <p>Diamond</p>
                </div>
                <div class="category-card">
                    <img src="images/weeklydiamondpass.png" alt="Weekly Diamond Pass">
                    <p>Weekly Diamond Pass</p>
                </div>
                <div class="category-card">
                    <img src="images/twilightpass.png" alt="Twilight Pass">
                    <p>Twilight Pass</p>
                </div>
            </div>
        </div>

        <!-- Step 3: Pilih Pembayaran -->
        <div class="step">
            <div class="step-title">
                <span>3</span>
                <h2>Metode Pembayaran</h2>
            </div>
            <div class="payment-grid">
                <!-- Card Pembayaran -->
                <div class="payment-card">
                    <img src="images/dana.jpg" alt="Dana">
                    <p>Dana</p>
                </div>
                <div class="payment-card">
                    <img src="images/qris.jpg" alt="QRIS">
                    <p>QRIS</p>
                </div>
                <div class="payment-card">
                    <img src="images/gopay.jpg" alt="GoPay">
                    <p>GoPay</p>
                </div>
                <div class="payment-card">
                    <img src="images/indomaret.jpg" alt="Bank Transfer">
                    <p>Indomaret</p>
                </div>
                <div class="payment-card">
                    <img src="images/shoppee.jpg" alt="ShopeePay">
                    <p>ShopeePay</p>
                </div>
                <div class="payment-card">
                    <img src="images/OVO.jpg" alt="OVO">
                    <p>OVO</p>
                </div>
                <!-- Tambahkan metode pembayaran lainnya sesuai kebutuhan -->
            </div>
        </div>

        <!-- Login Form -->
        <div class="login-form" id="loginForm">
            <h2>Form Login</h2>
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <button type="submit">Login</button>
        </div>
        <!-- Step 4: Beli -->
        <div class="step">
            <div class="step-title">
                <span>4</span>
                <h2>Beli!</h2>
            </div>
            <p style="color: black;">
                Masukkan alamat email untuk mendapatkan <strong>Coda Rewards sampai dengan 2%</strong> pada pembelian kamu.
                Kamu juga akan mendapatkan bukti pembayaran dan berhak untuk mendapatkan promosi.
            </p>
            <form>
                <div class="form-group">
                    <input type="email" placeholder="Alamat E-mail" >
                </div>
                <!-- <div class="form-group">
                    <label style="color: black;">
                        <input type="checkbox"> Ya, Saya ingin menerima berita dan promosi melalui SMS atau WhatsApp
                    </label>
                </div> -->
                <button type="submit" class="btn-primary">Beli Sekarang</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Top-Up Game Inc. | <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat dan Ketentuan</a></p>
    </footer>
    <script>
        function showLoginForm() {
            const loginForm = document.getElementById('loginForm');
            loginForm.classList.toggle('active');
        }
    </script>
</body>
</html>





        