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
                <form action="{{ url('products') }}" id="agregar" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="">Color</label>
                        <input type="text" name="color" placeholder="Ingresa el color del producto" class="form-control" required>
                        <label for="">Precio</label>
                        <input type="number" name="price" class="form-control" placeholder="Ingrese el precio del producto" required>
                        <label for="">Nombre:</label>
                        <input type="text" name="name_p" class="form-control" placeholder="Ingresa el nombre del producto" id="" required>
                        <label for="">Descripcion:</label>
                        <input type="text" name="description" class="form-control" placeholder="Ingresa la descripcion" required>
                        <label for="">Estatus:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="status">
                            <option>Dañado</option>
                            <option>Buen Estado</option>
                        </select>
                        <label for="">Talla:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="size">
                            <option>16.5</option>
                            <option>17</option>
                            <option>17.5</option>
                            <option>18</option>
                            <option>18.5</option>
                            <option>20</option>
                            <option>20.5</option>
                            <option>21</option>
                        </select>
                        <label for="">Existencias:</label>
                        <input type="number" class="form-control" name="existence" placeholder="Ingresa la cantidad de producto disponible" required>
                        <div class="row">
                            <a href="/products" class="btn btn-danger m-3">Cancelar</a>
                            <button type="submit" class="btn btn-success m-3" value="save">Agregar</button>
                        </div>
                        </div>
        </div>
                    </form>
                    @include('layouts.footer')

</div>
<!-- End of Main Content -->
<script type="text/javascript">
                                    $('#agregar').submit(function(r){
                                        r.preventDefault();
                             Swal.fire({
                                        title: '¿Estas Seguro?',
  text: "No Puedes Revertir Esto!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Si,Agregalo!',
  cancelButtonText: 'No, Cancelalo!',
  cancelButtonColor: 'red',
  confirmButtonColor: 'green',
  reverseButtons: true
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