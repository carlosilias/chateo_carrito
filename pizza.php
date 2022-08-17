<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />
    <title>Chateo</title>
    
    <!--================ Google web fonts ================-->
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
    rel="stylesheet">

    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/styles.css" />


    <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="assets/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/linearicons.css">
  <link rel="stylesheet" href="assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.min.css">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="assets/settings.css">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/responsive.css">
  <!--================ Vendor JS ================-->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  </head>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <body>
  <div class="mad-preloader"></div>
    
    <!--================ Header ================-->
    <header id="mad-header" class="mad-header">
    <div class="mad-message">
        Obtén un 10% de descuento + envío GRATIS. Por compras superiores a 45.000.
        
      </div>
      <div class="mad-pre-header">
        <div class="mad-our-info">
          <div class="mad-info"><i class="material-icons-outlined">location_on</i> <span>Calle 84 # 126-05 Los Almendros III</span></div>
          <div class="mad-info"><i class="material-icons">access_time</i> <span>Lun - Vie: 4pm - 1am, Sab - Dom: 4pm - 2am</span></div>
        </div>
        
      </div>
      <div class="mad-header-section--sticky-xl">
        <div class="mad-header-items">
          <div class="mad-header-item">
            <a href="index.html" class="mad-logo"><img src="img/LOGO200.png" alt=""></a>
          </div>
          <!--================ Navigation ================-->
          <nav class="mad-navigation-container">
            <ul class="mad-navigation mad-navigation--vertical-sm">
              <li class="menu-item menu-item-has-children current-menu-item"><a href="index.php">Inicio</a></li>
              <li class="menu-item menu-item-has-children"><a href="menu.php">Menu</a></li>
              <li class="menu-item menu-item-has-children"><a href="#">Ubicación</a></li>
              <li class="menu-item menu-item-has-children"><a href="#">Contácto</a></li>
            
            </ul>
          </nav>
          <!--================ End of Navigation ================-->
          <div class="mad-header-item">
            <div class="mad-our-info type-2">
              <div class="mad-info">
                <i class="material-icons-outlined">call</i>
                <div class="mad-info-content">
                  <span>Domicilios Gratis</span>
                  <div class="mad-info-title">3013391971</div>
                </div>
              </div>
            </div>
          </div>
          <div class="mad-header-item">
            <div class="mad-actions">
              <div class="mad-item">
                
                 <!--<a href="#" class="mad-item-link" data-arctic-modal="#search-modal"><i
                    class="material-icons">search</i></a>-->
                <!-- <a href="#" class="mad-item-link"><i class="material-icons">person_outline</i></a>-->
                <div>
                <a href="carrito.php" class="mad-item-link mad-dropdown-title"><i
                      class="material-icons-outlined">shopping_cart</i><span class="quantity">$</span></a>
                  
              </div>
              <div class="mad-item">
                <!--<a href="#" class="btn btn-small"><span>Order Online</span></a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--================ End of Header ================-->
    
      <ul
        class="nav nav-pills mb-5 py-5 container"
        id="pills-tab"
        role="tablist"
      >
      
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Pizzas</a
          >
        </li>
        <!-- <li class="a" role="presentation">
          <a
            class="nav-link"
            id="pills-hamburgesa-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-hamburgesa"
            type="button"
            role="tab"
            aria-controls="pills-hamburgesa"
            aria-selected="true"
            >burger</a
          >
        </li>
        <li class="a" role="presentation">
          <a
            class="nav-link"
            id="pills-pizza-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-pizza"
            type="button"
            role="tab"
            aria-controls="pills-pizza"
            aria-selected="true"
            >pizza</a
          >
        </li> -->
        <li class="a" role="presentation">
          <a
            class="nav-link"
            id="pills-contact-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-contact"
            type="button"
            role="tab"
            aria-controls="pills-contact"
            aria-selected="false"
            >Carrito</a
          >
        </li>
      </ul>

    <div class="alert container position-sticky top-0 alert-success hide" role="alert">
    Plato Añadido al carrito!
    </div>
    <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
    Plato removido!  
    </div>


    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade"
        id="pills-pizza"
        role="tabpanel"
        aria-labelledby="pills-pizza-tab"
      >
         <h1>pizza</h1>
      </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade "
        id="pills-hamburgesa"
        role="tabpanel"
        aria-labelledby="pills-hamburgesa-tab"
      >

      <h1>burger</h1>
        
    </div>

      <div
        class="tab-pane fade show active container"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
        style="border-top: -100%;"
      >
        <center><h2 class="mad-page-title">Menu</h2></center>
        <span><h2 class="h4 m-4">Categorias👇</h2></span> 
        
        <div class="mad-tabs">
            <!--================ Tabs Navigation ================-->
            <div aria-label="Tabs v1" class="mad-tabs-nav justify-content-center">

              <a  href="menu.php" >Salchipapas ⠀⠀</a>   
              <a  href="burger.php" >Hamburgesas ⠀⠀</a>
              <a  href="perro.php" >Perros ⠀⠀</a>
              <a  href="pizza.php" >Pizzas</a>

        </div>
        </div>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-2">

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 22rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Pizza hawaiana</h5>
              <img src="img/platos/pi_hawai.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-30 description">Pizza con toping de piña, jamon y queso.</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 22000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 22rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Pizza peperoni</h5>
              <img src="img/platos/p_peperoni.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-10 description">Pizza con toping de peperoni</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 24000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 22rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Pizza pollo o carne</h5>
              <img src="img/platos/p_pollo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-10 description">Pizza con toping de pollo o carne</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 25000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 22rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Pizza champiñones</h5>
              <img src="img/platos/p_cham.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-10 description">Pizza con toping de champiñones</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 25000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 22rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Pizza champiñones y pollo</h5>
              <img src="img/platos/p_champo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-10 description">Pizza con toping de champiñones y pollo</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 28000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 22rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Pizza carne y pollo</h5>
              <img src="img/platos/p_carpo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-10 description">Pizza con toping de carne y pollo</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 30000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
         <!--  <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Salchipapa para 2</h5>
              <img src="img/platos/s_para2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-10 description">Papas, salchicha, chorizo, butifarra,mozarella,cheddar, Tocineta.</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 18000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1  rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center" style="color: #FF0000;">Salchipapa para 2</h5>
              <img src="img/platos/s_para2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-10 description">Papas, salchicha, chorizo, butifarra,mozarella,cheddar, Tocineta.</p>
                <h5 class="" style="color: #FF0000;">Precio: <span class="precio">$ 18000</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
 -->

        </div>
      </div>
      
      <div
        class="tab-pane fade carrito"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <center><h2 class="mad-page-title">Pedido</h2></center>

    <div class="container" style="width: 100%">
    <div class="row">
        <div class="col-lg-12">
                    <div class="table-responsive">
      <table class=""  style="width: 950px;">
        <thead>
          <tr class="text-primary" >
            <th scope="col" style="width: 5px;">#</th>
            <th scope="col" >Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
      </tbody>
      </table>
      </div>
     </div>
     </div>
     </div>

      
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success">COMPRAR</button>
        </div>
      </div>
      
      </div>
    </div>

    <ul class="mad-pagination justify-content-center">

                  <li><a href="perro.php" class="prev mad-arrows"><img src="yummi_svg_icons/arrow_left.svg" alt="" class="svg"></a></li>
                  <li><a href="menu.php" class="page-numbers">1</a></li>
                  <li><a href="burger.php" class="page-numbers">2</a></li>
                  <li><a href="perro.php" class="page-numbers">3</a></li>
                  <li><a href="pizza.php" class="page-numbers current">4</a></li>
                  <li><a href="menu.php" class="next mad-arrows"><img src="yummi_svg_icons/arrow_right.svg" alt="" class="svg"></a></li>

    </ul>

    <?php

    include "footer.php"

    ?>


    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
