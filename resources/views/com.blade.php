<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Pattaya');
    </style>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>XI Project</title>
</head>
<body>
    <img class"black-ribbon" src="{{ URL::asset('images/black_ribbon_top_right.png')}}" class="black-ribbon stick-top stick-right" />
    <div id="container">
        <div id="upper"></div>
    </div>
    <div class="navbar">
        <ul class="nav-tabs">
            <li role="presentation">
                <a href="/home">หน้าแรก</a>
            </li>
            <li role="presentation">
                <a href="/history">พระราชประวัติ</a>
            </li>
            <li role="presentation">
                <a href="/gallery">แกลเลอรี่</a>
            </li>
            <li role="presentation">
                <a href="/sign">ลงนามถวายความอาลัย</a>
            </li>
            <li role="presentation" class="active">
                <a href="/com">รายชื่อ</a>
            </li>
        </ul>
    </div>
    <header>
        <img class="headbg" src="{{ URL::asset('images/bg.jpg')}}">
        <div class="centered">
            @foreach($expression as $item)
            <p style="font-size: 2rem">ชื่อ : {{$item->name}}</p>
            <p style="font-size: 2rem">คำถวายพระพร : {{$item->comment}}</p>
            @endforeach
        </div>
    </header>
    <div id="container">

        <div id="footer">
        </div>
    </div>
    
</body>

</html>