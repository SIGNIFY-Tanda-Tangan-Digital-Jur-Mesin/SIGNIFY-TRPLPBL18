<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Info</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 50px;
            background-color: #4CAF50; /* Background color changed to green */
            color: #fff; /* Text color changed to white for better contrast */
        }

        h1 {
            margin-bottom: 20px;
            font-size: 36px; /* Larger font size for the heading */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items to the top */
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333; /* Text color inside container changed to dark for better readability */
        }

        .qrcode-container {
            padding: 20px;
        }

        .info {
            padding: 20px;
            flex: 1; /* Allow the info section to take the remaining space */
            text-align: left; /* Align text to the left */
        }

        .info p {
            font-size: 24px; /* Larger font size for the info text */
            margin: 10px 0; /* Margin between paragraphs */
        }
    </style>
</head>
<body>
    <h1>QR Code Info</h1>
    <div class="container">
        <div class="qrcode-container" id="qrcode"></div>
        <div class="info" id="info"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        // Function to parse query parameters from URL
        function getQueryVariable(variable) {
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for (var i = 0; i < vars.length; i++) {
                var pair = vars[i].split("=");
                if (pair[0] === variable) {
                    return decodeURIComponent(pair[1]);
                }
            }
            console.log('Query variable %s not found', variable);
        }

        // Display information based on query parameters
        var nama = getQueryVariable('nama');
        var tanggal = getQueryVariable('tanggal');
        var perihal = getQueryVariable('perihal');

        var infoDiv = document.getElementById('info');
        infoDiv.innerHTML = `
            <p><strong>Nama yang memberikan ttd:</strong> ${nama}</p>
            <p><strong>Tanggal:</strong> ${tanggal}</p>
            <p><strong>Perihal:</strong> ${perihal}</p>
        `;

        // Generate QR code based on current URL
        var currentUrl = window.location.href;
        var qrcodeDiv = document.getElementById('qrcode');
        new QRCode(qrcodeDiv, {
            text: currentUrl,
            width: 200, // Larger width for the QR code
            height: 200, // Larger height for the QR code
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
    </script>
</body>
</html>
