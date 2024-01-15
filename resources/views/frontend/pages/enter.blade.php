

@extends('frontend.layout.layout')

@section('content')
    <section class="contact_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center d-md-block">
                        <h2>GİRİŞ YAP</h2>
                    </div>

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif

                    <form action="{{ route('giris') }}" method="POST">
                        @csrf
                        <div class="contact_form-container">
                            <div>
                                <label for="c_fusername" class="text-black">Ad-Soyad <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fusername" name="username">
                            </div>
                            <div>
                                <label for="c_fpassword" class="text-black">Şifre <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="c_fpassword" name="password">
                            </div>
                            <br>
                            <button type="submit">Giriş Yap</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact_img-box">
                        <img src="{{ asset('images/students.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
