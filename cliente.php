<?php session_start();?>
<?php 
global $totalcantidad;
global $total;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<title>Carrito de compras</title>
</head>
<body background="img/shop.jpg">


<?php 
$carrito_mio=$_SESSION['carrito'];
$_SESSION['carrito']=$carrito_mio;

// contamos nuestro carrito
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i++){
    if($carrito_mio[$i]!=NULL){ 
    $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    $totalcantidad += $total_cantidad;
    }}}
?>
Programación Web con Frameworks S8A - Climaco Ruiz Manuel de Jesús
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="nav-item nav-link disabled" href="#">¡Hola! Bienvenido a tu tienda favorita de ropa :)</a> 
    <a class="navbar-brand" href="index.php">Cerrar sesión</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: cyan;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->



<!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
  
        <h5 class="modal-title" id="exampleModalLabel">Subtotal: Resumen de carrito de compras</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
   
     
			<div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){
						
            ?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; // echo substr($carrito_mio[$i]['titulo'],0,10); echo utf8_decode($titulomostrado)."..."; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span   style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> $</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
							}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total (MX)</span>
							<strong  style="text-align: left; color: #000000;"><?php
							if(isset($_SESSION['carrito'])){
							$total=0;
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){ 
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}}}
							echo $total; ?> $</strong>
							</li>
						</ul>
					</div>
				</div>
			</div>
			


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" href="borrar.php">Vaciar carrito</a>
        <a type="button" class="btn btn-primary" href="pago.php">Pagar carrito</a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->





<!-- ARTICULOS -->
<div class="container mt-5">
<div class="row" style="justify-content: center;">

<div class="card m-4" style="width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="carro.php">
        <input name="precio" type="hidden" id="precio" value="1299" />
        <input name="titulo" type="hidden" id="titulo" value="Tenis Converse" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="img/tennis.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title"> Tenis Converse</h5>
                        <p class="card-text">Talla: 27</p>
                        <p class="card-text">Precio $1299.00 MNX</p>
                        <p class="card-text">Stock: 9</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Agregar al carrito</button>
                </div>
        </form>
</div>



<div class="card m-4" style="width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="carro.php">
        <input name="precio" type="hidden" id="precio" value="749" />
        <input name="titulo" type="hidden" id="titulo" value="Chamarra de Mezclilla OGGI" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="img/chamarra.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Chamarra de Mezclilla OGGI</h5>
                        <p class="card-text">Talla: Chica </p>
                        <p class="card-text"> Precio $749.00 MNX</p>
                        <p class="card-text"> Stock: 10 </p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>


<div class="card m-4" style="width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="carro.php">
        <input name="precio" type="hidden" id="precio" value="350" />
        <input name="titulo" type="hidden" id="titulo" value="Pantalon de Mezclilla Marca LEVIS Caballero" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="img/pantalon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Pantalon de Mezclilla Marca LEVIS Caballero</h5>
                        <p class="card-text">Talla: 36 </p>
                        <p class="card-text">Precio $350.00 MNX</p>
                        <p class="card-text">Stock: 22</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>

<div class="card m-4" style="width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="carro.php">
        <input name="precio" type="hidden" id="precio" value="250" />
        <input name="titulo" type="hidden" id="titulo" value="Camisa de Vestir Marca ZEROYAA" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="img/camisa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Camisa de Vestir Marca ZEROYAA</h5>
                        <p class="card-text">Talla: CH-M</p>
                        <p class="card-text">Precio $250.00 MNX</p>
                        <p class="card-text">Stock: 16</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>

<div class="card m-4" style="width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="carro.php">
        <input name="precio" type="hidden" id="precio" value="519" />
        <input name="titulo" type="hidden" id="titulo" value="Sudadera Zoé Diseño 1" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="img/sudadera.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Sudadera Zoé Diseño 1</h5>
                        <p class="card-text">Talla: CH</p>
                        <p class="card-text">Precio $519.00 MNX</p>
                        <p class="card-text">Stock: 23</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>

<div class="card m-4" style="width: 18rem;">
        <form id="formulario" name="formulario" method="post" action="carro.php">
        <input name="precio" type="hidden" id="precio" value="220" />
        <input name="titulo" type="hidden" id="titulo" value="Playera Demon Slayer Tanjiro" />
        <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
        <img src="img/playera.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Playera Demon Slayer Tanjiro</h5>
                        <p class="card-text">Talla: CH</p>
                        <p class="card-text">Precio $220.00 MNX</p>
                        <p class="card-text">Stock: 6</p>
                        <button class="btn btn-primary" type="submit" ><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
                </div>
        </form>
</div>





</div>
</div>
<!-- END ARTICULOS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>