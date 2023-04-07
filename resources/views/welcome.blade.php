<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech storm</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/firstbage.css') }}">
    <link rel="stylesheet" href="firstbage.css">
</head>
<body >
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " dir="rtl" lang="ar">
    <div class="container-fluid ms-auto">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mt-1 mx-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">من نحن؟</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#learning">آلية التعلم</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#question">الاسئلة الشائعة</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#Social">حساباتنا</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
<section id="banner" class="text-center">
  <div class="container flex">
    <div class="d-flex">
    <div class="row">
      <div class="col-md-6">
        <p class="promo-title">Tech <span class="info">Storm</span></p>
        <p class="descripton">
Welcom Back Lets Started to learn
        </p>
        <a href="{{route('login')}}"><button class="btn btn-info btn1 m-3">بوابة الطالب </button></a>
        <br>



      </div>
      <div class="col-md-6 text-center   ">
        <img src="images/home2.png" alt="" class="img-fluid ">
      </div>
    </div>

  </div>

</div>
<img src="images/Digital_agency_site_Img/images/wave1.png" alt="" class="bottom-img">
</section>
<!--HOw to learning-->
<section dir="rtl" lang="ar" class="process-container py-5 " id="learning">
<div class="process-blk container ">
  <div class="row ">
    <div class="container d-lg-flex">
    <div class="col-md-12 col-lg-7 process-text  " >
      <h2 class="title pb-3">آلية التعلم</h2>
      <p class="pl-5 text-right textlearn">
يمكنك استخدام المنصة  عن بعد بكل سهولة ويسر ، حيث يمكنك اختيار الكورس من الصفحة الرئيسية ثم اختيار المادة التعليمية ضمن جدول الكورسات.
      </p>
    </div>
    <div class="col-md-12 col-lg-5 pt-7  ">
      <img src="images/flow (1).png" class="float-lg-start float-sm-end imagelearn mx-5 imagelearn" width="70%">
    </div>
  </div>
</div>
</div>
</section>
<!--questoin-->
<section dir="rtl" lang="ar" class="mt-5" >
  <h2 class="m-4 text-center textques" id="question">الاسئلة الشائعة</h2>
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         هل جميع السنوات مشمولة ؟
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong class="mx-2">حالياً فقط من السنة الاولى الى الثالثة</strong>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ما آلية عمل المنصة
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>يمكن للطالب الدخول الى بوابة الطالب ومن ثم ادخال رقمه الجامعي و كلمة السرالتي تم اعطائه اياها ومن ثم يصل الى واجهة االمنصة</strong>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed"  dir="rtl" lang="ar" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         كيف سيتم الرجوع للمواد التي تم عرضها على المنصة سابقاً في حال رغب الطالب بمراجعة أي مادة ؟
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>سيتم رفع الدروس بشكل يومي وسيكون المحتوى متاحًا على المنصة. </strong>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Social media-->
<section class="bg-dark text-center text-light  text-sm-start py-5 justify-content-center mt-5" id="Social">
  <div class="container">
      <div class="row align-items-center justify-content-center">
          <div class="col-md ">
              <img src="images/socialmedia.svg" alt="" class="img-fluid w-100 fotimg" width="25%" height="100%">
          </div>

          <div class="col-md py-1  ">
          <h2 class="fottext1">Social <span class="text-info">Media</span></h2>
         <p class="fottext">للاستفسار هذه حساباتنا </p>



         <div class="dropdown mx-3">
              <button class="btn btn-info dropdown-toggle  fottext " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              Social Media
              </button>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item active" href="https://twitter.com/mo_abdullah0" > Twitter</a></li>
                <li><a class="dropdown-item" href="https://www.instagram.com/mo_abdullah0/" ><i class="fa-brands fa-instagram m-1"></i>Instagram</a></li>
                <li><a class="dropdown-item" href="http://t.me/techst_bot" ><i class="fa-brands fa-telegram m-1"></i>Telegram</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCtgQEfWELcdyBoVNQWfrIuw" ><i class="fa-brands fa-youtube m-1"></i>You Tube</a></li>
              </ul>
            </div>
      </div>
        </div>


      </div>

  </div>
      </div>



  </div>
</section >
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
