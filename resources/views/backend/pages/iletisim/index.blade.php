@extends('backend.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Table</h4>

            @if (session()->get('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
                @endif


          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Ad Soyad</th>
                  <th>Email</th>
                  <th>Telefon</th>
                  <th>Mesaj</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                @if (!empty($iletisims) && $iletisims->count() > 0)
                    @foreach ($iletisims as $iletisim)
                    <tr class="item" item-id="{{ $iletisim->id }}">
                        <td>{{$iletisim->ad_soyad}}</td>
                        <td>{{$iletisim->email ?? ''}}</td>
                        <td>{{$iletisim->telefon}}</td>
                        <td>{{$iletisim->mesaj}}

                        <td>{{$iletisim->ip}}</td>
                        <td class="d-flex">
                            <a href="{{route('iletisim.edit',$iletisim->id)}}" class="btn btn-primary mr-2">Düzenle</a>

                            <form action="{{ route('iletisim.destroy', $iletisim->id) }}" method="POST"
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
    $(document).on('click', '.silBtn', function(e) {
        e.preventDefault();
        var item = $(this).closest('.item');
        var id = item.attr('item-id');

        alertify.confirm("Silmek İstediğine Eminmisin?", "Silmek İstediğine Eminmisin?",
            function () {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "DELETE",
                    url: "{{ route('iletisim.destroy' , $iletisim->id) }}", // Bu endpoint'i kendi route'unuza göre ayarlayın
                    data: {
                        id: id,
                    },
                    success: function (response) {
                        if (response.error == false) {
                            item.remove();
                            alertify.success(response.message);
                        } else {
                            alertify.error("Bir Hata Oluştu");
                        }
                    }
                });
            },
            function () {
                alertify.error('Silme İptal Edildi');
            });
    });
</script>

@endsection











