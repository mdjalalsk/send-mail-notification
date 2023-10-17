<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
</head>
<body>

    <h1>This is Send Mail Blade</h1>
    <a href="{{route('sendMail')}}"><button>Send Mail</button></a>
    <a href="{{route('emailNotification')}}"><button>SendMail Notification</button></a>
    <a href="{{route('generate-pdf')}}" target="_blank"><button>PDF Generate</button></a>
    <a href="{{route('generate-qr-code')}}" target="_blank"><button>QR code Generate</button></a>

</body>
</html>
