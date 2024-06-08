<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="date"] {
            padding: 10px;
            width: calc(100% - 20px);
            margin: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #qrcode {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>QR Code Generator</h1>
        <div class="form-group">
            <input type="text" id="nama" placeholder="Nama yang memberikan ttd">
        </div>
        <div class="form-group">
            <input type="date" id="tanggal">
        </div>
        <div class="form-group">
            <input type="text" id="perihal" placeholder="Perihal">
        </div>
        <button onclick="generateQRCode()">Generate QR Code</button>
        <div id="qrcode"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        function generateQRCode() {
            var nama = document.getElementById('nama').value;
            var tanggal = document.getElementById('tanggal').value;
            var perihal = document.getElementById('perihal').value;

            if (!nama || !tanggal || !perihal) {
                alert("Please fill out all fields");
                return;
            }

            var params = new URLSearchParams({
                nama: nama,
                tanggal: tanggal,
                perihal: perihal
            }).toString();

            // URL for when the QR code is scanned
            var url = `{{ url('/info') }}?${params}`;

            document.getElementById('qrcode').innerHTML = "";
            var qrcode = new QRCode(document.getElementById('qrcode'), url);

            // Redirect to clicked URL on QR code click
            document.getElementById('qrcode').addEventListener('click', function() {
                window.location.href = url;
            });
        }
    </script>
</body>
</html>
