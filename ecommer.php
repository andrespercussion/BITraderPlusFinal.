<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITraderPlus+</title>
    <!--link bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"/>
    <!--link Swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <!--link iconos-boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--link logo de pestaña-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--link css-->
    <link rel="stylesheet" href="ecommer.css" />
</head>
<body>

<!--HEADER-->

<header class="header">
  <nav class="nav container flex">
   <a href="#" class="logo-content flex">
  <i class='bx bx-objects-vertical-bottom logo-icon'></i>
  <span class="logo-text">BITrader<span class="color-acento">Plus+</span></span></a>

    <div class="menu-content">
      <ul class="menu-list flex" id="pills-tab"
      role="tablist">
      <li class="nav-item text-primary" role="presentation">
        <a
          class="nav-link "
          id="pills-home-tab"
         class="news-btn" href="#"
          type="button"
          role="tab"
          aria-controls="pills-home"
          aria-selected="true"
          >Home</a>
      </li>
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
          >Productos</a
        >
      </li>
      <li class="nav-item" role="presentation">
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
      <li><a href="#contacto" class="nav-link">contacto</a></li></ul>
</ul>

    <div class="media-icons flex"></div>
    <i class='bx bx-x navClose-btn'></i>

  </div>

    <div class="login-content flex">
      <span><a href="LoginRegister.php" id ="login" class="login">Inicie Sesion</a></span>
      <i class='bx bx-log-in login-icon'></i>

         </div>

        <i class='bx bx-menu navOpen-btn'></i>

    </nav>

</header>

<!--SWIPER-->

    <main>
      <section class="home" id="home">
          <div class="home-content">
              <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <img src="images/imagen 1.webp" alt="" class="home-img">
  
                          <div class="home-details">
                              <div class="home-text">
                              <h4 class="homeSubtitle">Sueñalo.Creelo.Vivelo</h4>
                              <h2 class="homeTitle">BITraderPlus+</h2>
                              </div>
  
  <button class="button">Explora tu nueva hablidad</button>
  
                          </div>
                       </div>
  
                       <div class="swiper-slide">
                          <img src="images/imagen 3.jpg" alt="" class="home-img">
  
                          <div class="home-details">
                              <div class="home-text">
                              <h4 class="homeSubtitle">Sueñalo.Creelo.Vivelo</h4>
                              <h2 class="homeTitle">BITraderPlus+</h2>
                              </div>
  
  <button class="button">Explora tu nueva hablidad</button>
  
                          </div>
                       </div>
  
<!--cada dos div puedo anexar otro swiper-->
  
                  </div>
  
                  <div class="swiper-button-next swiper-navBtn"></div>
                  <div class="swiper-button-prev swiper-navBtn"></div>
                  <div class="swiper-pagination"></div>
  
              </div>
          </div>
      </main>

<!--ALERTAS DEL CARRITO-->

    <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
        Producto Añadido al carrito!
        </div>
        <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
          Producto removido!
        </div>

<!--CARRITO-->

        <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade "
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
            >
              1
            </div>
            <div
              class="tab-pane fade show active container"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
              <h2 class="texto">Productos</h2>
      
              <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
      
                <div class="col d-flex justify-content-center mb-4">
                  <div class="targeta" style="width: 20rem;">
                    <h5 class="card-title pt-2 text-white text-center text-primary">Curso de FRX</h5>
                    <img src="../LOGIN/images/1 HD FRX.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-white description">Curso aplicable en estrategias a largo plazo.</p>
                      <h5 class="text-white text-primary">Precio: <span class="text-white precio">$ 200</span></h5>
                      <div class="d-grid gap-2">
                      <button  class="btn btn-primary button">Añadir a Carrito</button>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col d-flex justify-content-center mb-4">
                  <div class="targeta" style="width: 20rem;">
                    <h5 class= "card-title pt-2 text-white text-center text-primary">Curso de HFX</h5>
                    <img src="../LOGIN/images/2 HD HFX.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-white description">Curso aplicable en estrategia a corto plazo.</p>
                      <h5 class="text-white text-primary">Precio: <span class="precio text-white">$ 250</span></h5>
                      <div class="d-grid gap-2">
                      <button  class="btn btn-primary button">Añadir a Carrito</button>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col d-flex justify-content-center mb-4">
                  <div class="targeta" style="width: 20rem;">
                    <h5 class="card-title pt-2 text-white text-center text-primary">Curso de DCX</h5>
                    <img src="../LOGIN/images/3 HD DCX.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-white description">Curso aplicable para el desarrollo de un portafolio.</p>
                      <h5 class="text-white text-primary">Precio: <span class="precio text-white">$ 300</span></h5>
                      <div class="d-grid gap-2">
                      <button  class="btn btn-primary button">Añadir a Carrito</button>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col d-flex justify-content-center mb-4">
                  <div class="targeta" style="width: 20rem;">
                    <h5 class="card-title pt-2 text-white text-center text-primary">Curso de CDX</h5>
                    <img src="../LOGIN/images/4 ECX HD.webp"  class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-white description">Curso para el manejo de mercadeo y venta en productos afines.</p>
                      <h5 class="text-white text-primary">Precio: <span class="precio text-white ">$ 50</span></h5>
                      <div class="d-grid gap-2">
                      <button  class="btn btn-primary button">Añadir a Carrito</button>
                    </div>
                    </div>
                  </div>
                </div>
      
      
             </div>
       
            </div>

<!--TABLA DE REGISTRO DEL PRODUCTO-->

            <div
              class="tab-pane fade carrito"
              id="pills-contact"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
            >
            <br>
            <table class="table table-dark table-hover">
              <thead>
                <tr class="text-primary">
                  <th scope="col">#</th>
                  <th scope="col">Productos</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Cantidad</th>
                </tr>
              </thead>
              <tbody class="tbody">
                
              
                
              </tbody>
            </table>
            <br><br>
            <div class="row mx-4">
              <div class="col">
                <h3 class="itemCartTotal text-black">Total: 0</h3>
              </div>
              <div class="col d-flex justify-content-end">
      <a  href="https://buy.stripe.com/test_dR6g333Yy6oRbrGeUU" target="_blank"  class="btn btn-success" >COMPRAR</a>
              </div>
            </div>
            
            </div>
          </div>
      
<!--FOOTER-->

          <footer class="section newsletter" id="contacto">
            <div class="newletter-container container">
                <a href="#" class="logo-content flex">
                    <i class='bx bx-objects-vertical-bottom logo-icon'></i>
                    <span class="logo-text">BITrader<span class="color-acento">Plus+</span></span>
                </a>
                <p class="section-description">"La clave del exito en los negocios es detectar hacia donde va el mundo y llegar alli primero" $BILL GATES$</p>
                <p class="section-description">¡Recibe las últimas noticias, anuncios y otras actualizaciones!</p>

                <div class="newsletter-inputBox">
                    <input type="email" placeholder="email@example.com" class="newletter-input">
                    <button class="button newsletter-button">Suscribete</button>
                </div>
                <div class=" newsletter media-icons flex">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitch"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-copyRight">© BITraderPlus+ All rigths reserverd</div>
        </footer>



          <script
          src="https://code.jquery.com/jquery-3.5.1.js"
          integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
          crossorigin="anonymous"
        ></script>
        <!-- JavaScript Bundle with Popper -->
        <!--Script bootstrap-->
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
          crossorigin="anonymous"
        ></script>
        <!--Script fontawesome fuente de texto-->
    <script src="https://kit.fontawesome.com/f7caa02850.js" crossorigin="anonymous"></script>
    <!--Script iconos-boxicons-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Script swiper-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!--Script para la funcionalidad del carrito-->
    <script src="scripts.js"></script>
   <!--Script para la funcionalidad del swiper--> 
    <script src="ecommer.js"></script>
</body>
</html>