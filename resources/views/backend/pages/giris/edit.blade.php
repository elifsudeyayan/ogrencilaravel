@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>

                    @if (session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if (isset($kullanicilar) && $kullanicilar->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ad Soyad</th>
                                        <th>Şifre</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kullanicilar as $kullanici)
                                        <tr class="item" item-id="{{ $kullanici->id }}">
                                            <td>{{ $kullanici->username }}</td>
                                            <td>{{ $kullanici->password }}</td>

                                            <td class="d-flex">
                                                <a href="{{ route('kullanici.edit', $kullanici->id) }}"
                                                    class="btn btn-primary mr-2">Düzenle</a>
                                                <button type="button" class="silBtn btn btn-danger"
                                                    data-id="{{ $kullanici->id }}">Sil</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>Henüz kullanıcı bulunmamaktadır.</p>
                    @endif


                    <form action="{{ route('kullanici.update', $kullanici->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{ $kullanici->id }}">

                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" value="{{ old('username', $kullanici->username) }}" required>

                        <label for="password">Şifre</label>
                        <input type="password" name="password" value="{{ old('password', $kullanici->password) }}" required>



                        <button type="submit" class="btn btn-primary mr-2">Güncelle</button>
                    </form>



                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
