<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Top-Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #3e0854;
            color: #fff;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }
        .step {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #4c0963;
            border-radius: 8px;
        }
        .step-title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .step-title span {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #ffd700;
            color: #3e0854;
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
            color: #ffd700;
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
            background-color: #ffd700;
            color: #3e0854;
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
    </style>
</head>
<body>
    <div class="container">
        <!-- Step 1: Masukkan User ID -->
        <div class="step">
            <div class="step-title">
                <span>1</span>
                <h2>Masukkan User ID</h2>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Masukkan User ID">
                <input type="text" placeholder="Zone ID">
            </div>
            <small>
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
            <span class="info-badge">10.781 item dibeli dalam satu jam terakhir</span>
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
                <h2>Pilih Pembayaran</h2>
            </div>
            <div class="payment-grid">
                <!-- Card Pembayaran -->
                <div class="payment-card">
                    <img src="images/dana.jpg" alt="Dana">
                    <p>Dana</p>
                </div>
                <div class="payment-card">
                    <img src="https://via.placeholder.com/100?text=QRIS" alt="QRIS">
                    <p>QRIS</p>
                </div>
                <div class="payment-card">
                    <img src="images/gopay.jpg" alt="GoPay">
                    <p>GoPay</p>
                </div>
                <div class="payment-card">
                    <img src="https://via.placeholder.com/100?text=Bank+Transfer" alt="Bank Transfer">
                    <p>Bank Transfer</p>
                </div>
                <div class="payment-card">
                    <img src="https://via.placeholder.com/100?text=ShopeePay" alt="ShopeePay">
                    <p>ShopeePay</p>
                </div>
                <div class="payment-card">
                    <img src="images/OVO.jpg" alt="OVO">
                    <p>OVO</p>
                </div>
                <!-- Tambahkan metode pembayaran lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>
</body>
</html>
