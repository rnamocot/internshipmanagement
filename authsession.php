<!DOCTYPE html>
<html>
<head>
    <title>QR Code Generator</title>
</head>
<body>
    <h1>QR Code Generator</h1>
    <form method="post" action="">
        <input type="text" name="link" placeholder="Enter link URL" required>
        <input type="submit" name="generate" value="Generate">
        <button id="save" type="button" disabled>Save</button>
    </form>

    <div id="qrcode"></div>

	<script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
        var qrcode = null;

        function generateQRCode(link) {
            if (qrcode === null) {
                qrcode = new QRCode(document.getElementById("qrcode"), {
                    width: 256,
                    height: 256,
                    colorDark: "#000000",
                    colorLight: "#ffffff",
                    correctLevel: QRCode.CorrectLevel.H
                });
            }
            qrcode.clear();
            qrcode.makeCode(link);
        }

        document.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault();
            var link = event.target.link.value;
            generateQRCode(link);
            document.getElementById("save").disabled = false;
        });

        document.getElementById("save").addEventListener('click', function (event) {
            html2canvas(document.getElementById("qrcode")).then(function(canvas) {
                var link = document.createElement("a");
                link.download = "qrcode.png";
                link.href = canvas.toDataURL();
                link.click();
            });
        });
    </script>
</body>
</html>
