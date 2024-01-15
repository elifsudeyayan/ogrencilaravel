<header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{route('anasayfa')}}">
          <span>
            EASY LEARNER
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('anasayfa')}}"> ANASAYFA <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('hakkında')}}"> HAKKIMIZDA </a>
              </li>

              <li class="nav-item ">
                <a class="nav-link" href="{{route('giris')}}"> ÖĞRENCİ GİRİŞ </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('kayit.form')}}"> ÖĞRENCİ KAYIT </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('iletisim.form')}}">İLETİŞİM</a>
              </li>

            </ul>
          </div>
      </nav>
    </div>
  </header>
