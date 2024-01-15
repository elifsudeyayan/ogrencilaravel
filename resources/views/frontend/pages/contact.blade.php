 @extends('frontend.layout.layout')

 @section('content')


 <!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Easy Learner</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body class="sub_page">
  <div class="top_container ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>

            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->



  <!-- contact section -->

  <section class="contact_section ">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center d-md-block">
            <h2>
              Bizimle iletişime geçin !
            </h2>
          </div>

          @if (session()->has('message'))
          <div class="alert alert-success">
            {{session()->get ('success')}}
          </div>

          @endif
          @if (count($errors))
          @foreach ( $errors->all() as $error)
          <div class= "alert alert-danger">{{$error}}</div>
          @endforeach
       @endif


          <form action="{{route('iletisim.kaydet')}}" method="GET">
            @csrf
            <div class="contact_form-container">
              <div>
                <div>
                    <label for="c_fad_soyad" class="text-black">Ad-Soyad <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fad_soyad" name="ad_soyad">
                </div>
                <div>
                    <label for="c_femail" class="text-black">E-mail <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_femail" name="email">
                </div>
                <div>
                    <label for="c_ftelefon" class="text-black">Telefon <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_ftelefon" name="telefon">
                </div>
                <div class="mt-5">
                    <label for="c_fmesaj" class="text-black">Mesaj <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fmesaj" name="mesaj">
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" > Gönder </button>
                </div>
              </div>

            </div>

          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="{{ asset('images/about.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        EASY LEARNER
      </h2>

  </section>

  <!-- footer section -->

  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>


@endsection
