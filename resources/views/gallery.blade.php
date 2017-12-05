<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8" />

<title>XI project</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<script src="https://use.fontawesome.com/9a89b9a705.js"></script>

<!-- bootstrap -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- animate.css -->
<link rel="stylesheet" href="{{asset('assets/animate/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/animate/set.css')}}" />

<!-- font -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Pattaya');
</style>
<style>
@import url('https://fonts.googleapis.com/css?family=Kanit');
</style>
<!-- gallery -->
<link rel="stylesheet" href="{{asset('assets/gallery/blueimp-gallery.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

<!-- Header Starts -->
<div class="navbar">
        <ul class="nav-tabs">
            <li role="presentation">
                <a href="/home">หน้าแรก</a>
            </li>
            <li role="presentation">
                <a href="/history">พระราชประวัติ</a>
            </li>
            <li role="presentation" class="active">
                <a href="/gallery">แกลเลอรี่</a>
            </li>
            <li role="presentation">
                <a href="/sign">ลงนามถวายความอาลัย</a>
            </li>
            <li role="presentation">
                <a href="/com">รายชื่อ</a>
            </li>
        </ul>
    </div>
          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="{{asset('images/back1.jpg')}}" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="{{asset('images/back2.jpg')}}" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="{{asset('images/back3.jpg')}}" style="object-position: center" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="{{asset('images/back4.jpg')}}" alt="banner">
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slider Ends -->
</div>


<!-- works -->
<div id="works"  class=" clearfix grid">
    @php
        $works = ['<br>ถ่ายภาพกับจักรยาน<br><br>', '<br>ภาพถ่ายในชุดลูกเสือ<br><br>','<br>ภาพถ่ายตอนทรงพระเยาว์<br><br>','<br>ถ่ายภาพกับพระราชชนนี<br><br>',
        '<br>ถ่ายคู่กับรัชกาลที่๘ <br>ตอนทรงพระเยาว์<br><br>', '<br>ถ่ายคู่กับรัชกาลที่๘<br>ตอนทรงพระเยาว์<br><br>', '<br>รัชกาลที่๙กับกรมหลวงสงขลานครินทร์<br><br>',
        '<br>ฉลองพระองค์ในชุดไทย<br><br>', '<br>รัชกาลที่๙กับพระสหายที่เมืองโลซาน<br><br>', '<br>รัชกาลที่๙กับพระบิดา<br>(กรมหลวงสงขลานครินทร์)<br><br>', 
        'สามพี่น้อง สมเด็จพระพี่นาง ในหลวงอานันทมหิดล และพระบาทสมเด็จพระเจ้าอยู่หัวฯ ขณะยังทรงพระเยาว์ <br>', 'สามพี่น้อง สมเด็จพระพี่นาง ในหลวงอานันทมหิดล และพระบาทสมเด็จพระเจ้าอยู่หัวฯ ขณะยังทรงพระเยาว์ <br>',
        'สมเด็จพระราชชนนี พระพันวัสสาอัยยิกาเจ้า<br>สมเด็จพระพี่นางฯ รัชกาลที่๘ และรัชกาลที่๙<br>', '<br>ในหลวงทรงสนใจปืนใหญ่<br>', '<br>ขึ้นครองราชย์<br><br>', '<br>รัชกาลที่๙กับพระราชินี<br><br>',
        '<br>รัชกาลที่๙กับพระราชินี<br><br>', '<br>รัชกาลที่๘ สมเด็จย่า <br>และรัชกาลที่๙<br><br>', '<br>รัชกาลที๙ พระราชินี<br>พระราชโอรส และพระราชธิดา<br><br>', '<br>รัชกาลที่๙กับพระราชินี<br><br>',
        '<br>ภาพตอนทรงงาน<br><br>', '<br>ถ่ายภาพกับสมเด็จย่า<br><br>', '<br>ทรงพระผนวช<br><br>', '<br>รัชกาลที่๙ ทรงดนตรี<br><br>', '<br>รัชกาลที่๙ <br>และพระราชินีทรงดนตรี <br><br>',
        '<br>สนามบินมิงกาลาดอน<br>นครย่างกุ้ง สหภาพพม่า<br><br>', '<br>เสด็จเยือนประเทศเวียดนาม<br><br>', '<br>เสด็จเยือนสหราชอาณาจักรประเทศอังกฤษ<br><br>', 'เสด็จเยือนตลาดหุ้นวอลล์สตรีทสหรัฐอเมริกา <br>ระหว่างวันที่ 14 มิถุนายน – 15 กรกฎาคม 2503<br>',
        '<br>ประธานาธิบดรไอเซนฮาวร์ สหรัฐอเมริกา<br><br>', '<br>ประธานาธิบดีซูกาโน อินโดนีเซีย<br><br>', 'ในหลวงเสด็จเยือนฟิลิปินส์ ประธานาธิบดี มาร์กอส <br>และนางอิเมลดา(ภริยา) จากกระเทศฟิลลิปินส์<br>',
        '<br>สมเด็จพระราชินีนาถเอลิซาเบธที่ 2 แห่งสหราชอาณาจักร<br><br>', '<br>พระราชกรณียกิจ<br>โครงการแกล้งดิน<br><br>', '<br>พระราชกรณียกิจ<br>โครงการปลูกหญ้าแฝก<br><br>',
        '<br>พระราชกรณียกิจ<br>โครงการหน่วยแพทย์พระราชทาน<br><br>', '<br>พระราชกรณียกิจ<br>โแนวคิดเศรษฐกิจพอเพียง : เกษตรทฤษฎีใหม่<br><br>', '<br>พระราชกรณียกิจ<br>โครงการส่วนพระองค์สวนจิตรลดา<br><br>',
        '<br>พระราชกรณียกิจ<br>โครงการฝนหลวง<br><br>', '<br>พระราชกรณียกิจ<br>กังหันน้ำชัยพัฒนา<br><br>', '<br>พระราชกรณียกิจ<br>โครงการหลวงอ่างขาง<br><br>',
        '<br>พระราชกรณียกิจ<br>โครงการแก้มลิง<br><br>'];
    @endphp
    @foreach ($works as $work)
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ asset('images/photo/'.$loop->iteration.'.jpg') }}"/>
        <figcaption>
            <p>{!! $work !!}
            <a href="{{ asset('images/photo/'.$loop->iteration.'.jpg') }}" title="1" data-gallery>ดูรูป</a></p>
        </figcaption>
    </figure>
    @endforeach

</div>
<!-- works -->

<!-- Footer Starts -->
<div class="footer text-center spacer">

</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <!-- <h3 class="title">Title</h3> -->
    <a class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
    <a class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
    <a class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- jquery -->
<script src="{{asset('assets/jquery.js')}}"></script>

<!-- wow script -->
<script src="{{asset('assets/wow/wow.min.js')}}"></script>


<!-- boostrap -->
<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="{{asset('assets/mobile/touchSwipe.min.js')}}"></script>
<script src="{{asset('assets/respond/respond.js')}}"></script>

<!-- gallery -->
<script src="{{asset('assets/gallery/jquery.blueimp-gallery.min.js')}}"></script>

<!-- custom script -->
<script src="{{asset('assets/script.js')}}"></script>

</body>
</html>
