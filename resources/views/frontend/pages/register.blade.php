
@extends('frontend.layout.layout')

@section('content')


<section class="contact_section">

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-center d-md-block">
                    <h2>KAYIT OL</h2>
                </div>
                <form action="{{route('kayit')}}" method="POST">
                    @csrf
                    <div class="contact_form-container">
                        <div>
                            <label for="username">Kullanıcı Adı:</label>
                            <input type="text" id="username" name="username" required>

                            <label for="email">E-posta:</label>
                            <input type="email" id="email" name="email" required> <br>

                            <label for="password">Şifre:</label> <br>
                            <input type="password" id="password" name="password" required>

                            <label for="password_confirmation">Şifre Tekrar:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>





                            <button type="submit">Kayıt Ol</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact_img-box">
                    <img src="{{ asset('images/why.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
