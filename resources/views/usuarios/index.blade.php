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
            
        </div>
      </div>
    </div>
</div>
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
          
