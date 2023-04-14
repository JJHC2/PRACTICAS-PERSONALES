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
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-center"><i  class="fa-solid fa-id-badge"></i></th>
                        <th class="text-center"><i class="fa-sharp fa-solid fa-palette"></i>Color</th>
                        <th class="text-center"><i class="fa-solid fa-money-bill"></i>Precio</th>
                        <th class="text-center"><i class="fa-sharp fa-solid fa-file-signature"></i>Nombre</th>
                        <th class="text-center"><i class="fa-solid fa-comment"></i>Descripcion</th>
                        <th class="text-center"><i class="fa-solid fa-shield-halved"></i>Estatus</th>
                        <th class="text-center"><i class="fa-duotone fa-square-5"></i></i>Talla</th>  
                        <th class="text-center">Existencias</th>                                                                             
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>{{$product->id}}</td>
                        <td>{{$product->color}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->name_p}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->size}}</td>
                        <td>{{$product->existence}}</td>
                        </tr>
                        <div class="row">
 <a href="/products" class="btn btn-danger m-3">Salir</a>
                        </div>
                </tbody>
            </table>