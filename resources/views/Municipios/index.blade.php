@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
            <h6>Estados</h6>
          </div>
            <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead class=" text-primary">
                    <th scope="col">
                      ID
                    </th>
                    <th scope="col">
                      Estado
                    </th>
                    <th scope="col">Municipio</th>
                  </thead>
                  <tbody>
                    @foreach($municipios as $municipio)
                    <tr>
                    <td>{{$municipio->id}}</td>
                    <td>{{$municipio->nombre_e}}</td>
                    <td>{{$municipio->nombre}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                    {!!$municipios->links()!!}
                  </tfoot>
                </table>
        </div>
    </div>
          @include('layouts.footer')