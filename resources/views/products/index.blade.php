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
            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href="products/create"><i class="fa-sharp fa-solid fa-boxes-stacked"></i></a>
              </div>
          <div class="card-header pb-0">
            <h6>Productos</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Color</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Precio</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripcion</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Talla</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Existencias</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mostrar</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Eliminar</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Editar</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->color}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->name_p}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->size}}</td>
                        <td>{{$product->existence}}</td>
                        <td><a href="products/{{ $product->id }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                       <td> <form action="{{ route('products.destroy',$product->id) }}" class="d-inline formulario-eliminar" method="POST">
@method('DELETE')
@csrf
<button class="btn btn-danger m-6"><i class="fa-solid fa-trash"></i></button>
</form>
                    </td>
                        <td><a href="products/{{ $product->id }}/edit" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              @include('layouts.footer')

              @if(session('editar') == 'Ok')
              <script>
                Swal.fire(
                  'Modificado',
                  'Producto Modificado',
                  'success'
                )
              </script>
              @endif
  
              @if(session('agregar') == 'Ok')
              <script>
                swal.fire(
                  'Agregado!',
                  'El producto a sido agregado.',
                  'success'
                )
              </script>
              @endif
  
  
              @if(session('eliminar') == 'Ok')
              <script>
                Swal.fire(
                  'Eliminado',
                  'Producto Eliminado',
                  'success'
                )
              </script>
              @endif
              <script>
                $('.formulario-eliminar').submit(function(e) {
                  e.preventDefault();
                  Swal.fire({
        title: '¿Estás seguro?',
        text: "No Puedes Revertir Esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: 'red',
        confirmButtonText: 'Si,Eliminalo!',
        cancelButtonText:'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
        this.submit();
        }else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
        ) {
        swal.fire(
        'Cancelado',
        '¿Te Arrepentiste?',
        'error'
        )
        }
        })
        });
              </script>
          