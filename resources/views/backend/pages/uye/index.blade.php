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
                                    <th>Email</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($uyes) && $uyes->count() > 0)
                                    @foreach ($uyes as $uye)
                                        <tr class="item" item-id="{{ $uye->id }}">
                                            <td>{{ $uye->username }}</td>
                                            <td>{{ $uye->password }}</td>

                                            <td class="d-flex">
                                                <a href="{{ route('uye.edit', $uye->id) }}"
                                                    class="btn btn-primary mr-2">Düzenle</a>

                                                <form action="{{ route('uye.destroy', $uye->id) }}" method="POST"
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
        url: "{{ route('uye.destroy', $uye->id) }}",
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
