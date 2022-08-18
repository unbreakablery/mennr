<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    <h1>Hi,</h1>
    <h1>{{ $details['title'] }}</h1>

    <p>You are now part of our email adverting subscriber!</p>
    
    <p>if you do not wish to get email from us please click on below link.</p>

    <p><a href='{{ $details['link'] }}' target="_blank">UnSubscribe</a> </p>
   
    <p>Thank you</p>
</body>
</html>