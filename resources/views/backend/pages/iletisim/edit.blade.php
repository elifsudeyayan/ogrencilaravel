@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">İletişim</h4>

                @if ($errors)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                    @endforeach
                @endif
                @if (session()->get('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
                @endif


                <form action="{{route('iletisim.update',$iletisim->id)}}" class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf

                   @method('PUT')
                  <div class="form-group">
                    <label for="name">Ad Soyad</label>
                    <input type="text" class="form-control" id="name" readonly value="{{$iletisim->ad_soyad ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" readonly value="{{$iletisim->email ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label for="subject">Telefon</label>
                    <input type="text" class="form-control" id="subject" readonly  value="{{$iletisim->telefon ?? ''}}">
                  </div>
                  <div class="form-group">
                    <label for="message">Mesaj</label>
                    <textarea class="form-control" id="message" rows="3" readonly>{!! $iletisim->mesaj ?? '' !!}</textarea>
                  </div>



                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection
