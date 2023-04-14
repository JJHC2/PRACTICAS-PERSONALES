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
                 
            <form action="{{url('categories/' .$categories->id) }}" id="edit" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                <label for="">ID</label>
                <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                <input class="form-control" type="text" value="{{$categories->id}}" aria-label="Disabled input example" disabled>
                </div>
                <label for=""> Categoria:</label><br>
                <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" id="name_category" name="name_category" value="{{$categories->name_category}}">
                </div>
                <label for="">Producto:</label><br>
                <select class="form-control form-select" aria-label="Default select example" name="product_id">
                    <option selected>Elige el Producto:</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" @if($product->id == $categories->product_id) selected @endif>{{ $product->name_p }}</option>
                    @endforeach
                </select>
                <div class="row">
                    <a class="btn btn-danger m-1"  href="/categories" >Cancelar</a>
                    <br>
                    <button type="submit" class="btn btn-success m-1" value="update">Guardar</button>
                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>
</div>

</div>
@include('layouts.footer')
<script>
     $('#edit').submit(function(a){
        a.preventDefault();
        Swal.fire({
  title: '¿Estas seguro?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: 'green',
  cancelButtonColor: 'red',
  confirmButtonText: 'Si,Modificalo!',
  cancelButtonText:'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
});
</script>