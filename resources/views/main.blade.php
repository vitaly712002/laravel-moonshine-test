<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @php
        $test =  122;
        $arr = [];
        if(isset($arr)) {
            $test = 11;
        }
    @endphp
    @dump($test);
</body>
</html>
