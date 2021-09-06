<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        h1{
            border-color: red;
        }
    </style>
</head>
<body>

<div class="visible-print text-center">
    <h1> Laravel QR Code Generator Example </h1>

    {!! QrCode::size(250)->generate('codingdriver.com'); !!}
</div>

</body>
</html>
