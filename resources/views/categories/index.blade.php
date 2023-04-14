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
        <a class="btn btn-success" href="categories/create"><i class="fa-sharp fa-solid fa-boxes-stacked"></i></a>
      </div>
    <table class="table align-items-center mb-0">
        <thead>
          <tr class="text-center">
            <th class="text-center">#</th>
            <th class="text-center">Tipo</th>
            <th class="text-center">Nombre Producto</th>
            <th class="text-center">Ver</th>
            <th class="text-center">Eliminar</th>
            <th class="text-center">Editar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $cate)
          <tr>
            <td>{{$cate->id}}</td>
            <td>{{$cate->name_category}}</td>
            <td>{{$cate->name_p}}</td>
            <td><a class="btn btn-success m-6" href="categories/{{$cate->id}}" ><i class="fa-regular fa-eye"></i></a></td>
            <td>
              <form action="{{ route('categories.destroy',$cate->id) }}" class="d-inline formulario-eliminar" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger m-6"><i class="fa-solid fa-trash"></i></button>
              </form>
            </td>
            <td><a href="categories/{{ $cate->id }}/edit" class="btn btn-warning m-6"><i class="fa-solid fa-pen"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@include('layouts.footer')
@if(session('editar') == 'Ok')
<script>
  Swal.fire(
    'Modificado',
    'Categoria Modificada',
    'success'
  )
</script>
@endif

@if(session('agregar') == 'Ok')
<script>
  swal.fire(
    'Agregado!',
    'La Categoria a sido agregada.',
    'success'
  )
</script>
@endif


@if(session('eliminar') == 'Ok')
<script>
  Swal.fire(
    'Eliminado',
    'Categoria Eliminada',
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
