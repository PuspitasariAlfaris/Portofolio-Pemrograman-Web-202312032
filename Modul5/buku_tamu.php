<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ffe6f0;
            padding: 40px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #d63384;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        input[type="submit"] {
            background-color: #d63384;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
        .result {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 5px solid #d63384;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Buku Tamu Digital STITEK Bontang</h1>

    <?php
    $nama = $email = $pesan = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
            $error = "Semua kolom wajib diisi!";
        } else {
            // Bersihkan input
            $nama = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $pesan = htmlspecialchars($_POST["pesan"]);
        }
    }
    ?>

    <form method="post" action="">
        <?php
        if (!empty($error)) {
            echo "<div class='error'>$error</div>";
        }
        ?>
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">

        <label>Alamat Email:</label>
        <input type="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">

        <label>Pesan/Komentar:</label>
        <textarea name="pesan"><?= isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : '' ?></textarea>

        <input type="submit" value="Kirim Pesan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
        echo "<div class='result'>";
        echo "<h3>Pesan Berhasil Dikirim!</h3>";
        echo "<strong>Nama:</strong> $nama<br>";
        echo "<strong>Email:</strong> $email<br>";
        echo "<strong>Pesan:</strong><br>" . nl2br($pesan);
        echo "</div>";
    }
    ?>
</div>

</body>
</html>