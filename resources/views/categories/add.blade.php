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
                <form action="{{ url('categories') }}" id="agregar" method="post">
                    {!! csrf_field() !!}
                        <label >Categoria:</label>
                        <input class="form-control" type="text" id="name_category" name="name_category" required>
                        <div class="form-group">
                        <label for="">Producto:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="product_id">
                            <option selected>Elige el producto</option>
                                @foreach($products as $product)   
                            <option value={{$product->id}}>{{$product->name_p}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-success m-3" value="save">Agregar</button>
        
                        </div>
                    </form>
                    </div>
                </div>
        
               
        
            </div>
        
          
        </div>
        
        </div>
        <!-- /.container-fluid -->
        
        </div>
        @include('layouts.footer')
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