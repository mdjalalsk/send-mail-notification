<!DOCTYPE html>
<html>
<head>
    <title>QR Code</title>
</head>
<body>
    <h2>Contact Information QR Code</h2>
    <?php //echo $qrCode?>

    <img src="data:image/png;base64,{!! base64_encode($qrCode) !!}" alt="QR Code">


</body>
</html>
