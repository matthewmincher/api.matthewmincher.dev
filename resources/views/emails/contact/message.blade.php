<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $subject }}</title>
</head>

<body style="font-size: 15px; line-height: 1.6; font-family: Georgia, Times New Roman, Courier, serif;">
<div style="position: relative; width: 100%; max-width: 600px; box-sizing: border-box; margin: 40px auto; padding: 20px;">
    <h1 style="margin-top: 0; margin-bottom: 25px; font-weight: 300; font-size: 32px; line-height: 1.2; letter-spacing: -1px;">{{ $subject }}</h1>
    <hr style="margin-bottom: 30px; border-top-style: solid; border-top-color: #E1E1E1; border-width: 1px 0 0;">

    <h2 style="margin-top: 0; margin-bottom: 25px; font-weight: 300; font-size: 21px; line-height: 1.2; letter-spacing: -1px;">From: {{ $senderAddress }}</h2>

    @if ($senderName)
        <h2 style="margin-top: 0; margin-bottom: 25px; font-weight: 300; font-size: 21px; line-height: 1.2; letter-spacing: -1px;">Name: {{ $senderName }}</h2>
    @endif

    <hr style="margin-bottom: 30px; border-top-style: solid; border-top-color: #E1E1E1; border-width: 1px 0 0;">

    {{ $senderMessage }}


</div>
</body>

</html>
