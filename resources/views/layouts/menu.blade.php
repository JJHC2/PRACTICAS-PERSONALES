@yield('menu')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css">
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> 
<div class="wrapper">
    <div class="sidebar" data-image="{{asset('img/sidebar-5.jpg')}}">
         <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="/">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./products">
                            <i class="fa-solid fa-clipboard"></i>
                            <p>Productos</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./categories">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Categorias</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./estados">
                            <i class="fa-solid fa-location-crosshairs"></i>
                            <p>Estados</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./municipios">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Municipios</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">