<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Certificate of Appreciation</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.certificate {
    width: 800px;
    padding: 40px;
    background-color: white;
    border-radius: 15px;
    position: relative;
}

.certificate-border {
    border: 10px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    position: relative;
}

.certificate-content {
    text-align: center;
    padding: 40px;
    border: 2px solid #004d40;
    border-radius: 8px;
    background: linear-gradient(45deg, #ffffff, #e8f5e9);
}

.certificate-header h1 {
    color: #004d40;
    font-size: 2.5em;
    margin-bottom: 0;
}

.certificate-header p {
    color: #004d40;
    font-size: 1.3em;
    margin-top: 0;
}

.presented {
    margin: 30px 0 10px;
    font-size: 1.2em;
    color: #333;
}

.recipient-name {
    font-size: 2em;
    font-style: italic;
    color: #004d40;
    margin-bottom: 20px;
}

.certificate-description {
    font-size: 1em;
    line-height: 1.5;
    margin-bottom: 30px;
}

.signature {
    margin-top: 40px;
    text-align: left;
    display: inline-block;
    width: 300px;
}

.signature-text {
    font-style: italic;
    color: #004d40;
    font-size: 1.2em;
    margin-bottom: 5px;
}

.signature-name {
    font-weight: bold;
    font-size: 1.3em;
    color: #004d40;
}

.signature-role {
    font-size: 0.9em;
    color: #777;
}

        </style>
</head>
<body>
    <div class="certificate">
        <div class="certificate-border">
            <div class="certificate-content">
                <div class="certificate-header">
                    <img src="badge.png" alt="Badge" class="certificate-badge">
                    <h1>CERTIFICATE</h1>
                    <p>OF APPRECIATION</p>
                </div>
                <p class="presented">This certificate is proudly presented to:</p>
                <h2 class="recipient-name">Samira Hadid</h2>
                <p class="certificate-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum maximus mauris sed sodales.
                    Ut rhoncus lacinia nisi eu tempus. Proin justo eros, mollis laoreet massa non, tincidunt pharetra leo.
                </p>
                <div class="signature">
                    <p class="signature-text">Signature</p>
                    <p class="signature-name">Juliana Silva</p>
                    <p class="signature-role">Manager</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
