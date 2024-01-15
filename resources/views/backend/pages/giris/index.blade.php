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

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ad Soyad</th>
                                    <th>Şifre</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($kullanicis) && $kullanicis->count() > 0)
                                    @foreach ($kullanicis as $kullanici)
                                        <tr class="item" item-id="{{ $kullanici->id }}">
                                            <td>{{ $kullanici->username }}</td>
                                            <td>{{ $kullanici->password }}</td>

                                            <td class="d-flex">
                                                <a href="{{ route('kullanici.edit', $kullanici->id) }}"
                                                    class="btn btn-primary mr-2">Düzenle</a>

                                                <form action="{{ route('giris.destroy', $kullanici->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Sil</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "DELETE",
        url: "{{ route('giris.destroy', $kullanici->id) }}",
        success: function (response) {
            if (response.error == false) {
                item.remove();
                alertify.success(response.message);
            } else {
                alertify.error("Bir Hata Oluştu");
            }
        }
    });
    </script>


@endsection
