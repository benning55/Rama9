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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Kanit');
        </style>
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>XI Project</title>
</head>

<body style="background-image: url('{{ asset('images/bgg.png') }}'); background-size: cover; background-position: center bottom; background-repeat: no-repeat; background-attachment: fixed;">
    <img class"black-ribbon" src="{{ URL::asset('images/black_ribbon_top_right.png')}}" class="black-ribbon stick-top stick-right" />
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
            <li role="presentation" class="active">
                <a href="/sign" class="active">ลงนามถวายความอาลัย</a>
            </li>
            <li role="presentation">
                <a href="/com">รายชื่อ</a>
            </li>
        </ul>
    </div>

    <div style="margin-bottom: 50px;" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" id="king">
                    <img class="king" src="images/rama9.png">  
                </div>
            </div>
           <div class="row">
                <h1 style="color: #fff; font-family: 'Kanit', sans-serif;">ลงนามถวายความอาลัย</h1>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <form action="sign" method="POST" id="form-sign">
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label for="name" class="txt1">ชื่อ-นามสกุล</label>
                            <input class="form-control" type="text" id="name" name=name>
                        </div>
                        
                        <div class="form-group">
                            <label for="surname" class="txt1">จังหวัด</label>
                            <input class="form-control" type="text" id="surname" name=surname>
                        </div>
                        
                        <div class="form-group">
                            <label for="comment" class="txt1">ข้อความถวายความอาลัย</label>
                            <input class="form-control" type="text" id="comment" name=comment>
                        </div>
                        <input type="submit" class="btn btn-default" value="ส่งข้อความ">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
 
</html>