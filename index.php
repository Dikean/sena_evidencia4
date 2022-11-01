<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Cine</title>
</head>
<body>

<nav class="navbar bg-light shadow-lg">
  <div class="container ">
    <a class="navbar-brand" href="#">
      <img src="https://mpng.subpng.com/20180604/bqf/kisspng-clapperboard-film-clip-art-monocrome-5b1518f16b9f64.6543733415281092974408.jpg" alt="Bootstrap" width="50" height="40">
       Venta de Boletas
    </a>
  </div>
</nav>

<br/><br/>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            
<section class="grid-1">
  <div class="item-1"></div>
  <div class="item-1">1 <i class="bi bi-caret-down-fill"></i></div>
  <div class="item-1">2 <i class="bi bi-caret-down-fill"></i></div>
  <div class="item-1">3 <i class="bi bi-caret-down-fill"></i></div>
  <div class="item-1">4 <i class="bi bi-caret-down-fill"></i></div>
  <div class="item-1">5 <i class="bi bi-caret-down-fill"></i></div>
</section>
<br/>
<section class="grid-1">
  <div class="item-1">1 <i class="bi bi-caret-right-fill"></i></div>
  <div class="item-2">
  </div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-1">2 <i class="bi bi-caret-right-fill"></i></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-1">3 <i class="bi bi-caret-right-fill"></i></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-1">4 <i class="bi bi-caret-right-fill"></i></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  <div class="item-2"></div>
  
</section>
        </div>
        <div class="col-md-3" >
            <div class="container" id="form">
            <form>
  <div class="form-row">
    <div class="col">
      <input type="text" name="fila" class="form-control" placeholder="FILA">
    </div>
    <br/>
    <div class="col">
      <input type="text" name="puesto" class="form-control" placeholder="PUESTO">
    </div>
    <br/>
    <div class="col">
      <select name="Elegir">
        <option value="Reservar">Reservar</option>
        <option value="Comprar">Comprar</option>
        <option value="Liberar">Liberar</option>
      </select>
    </div>
    <br/>
    <div class="row">
    <div class="col-md-6">
    <button type="button" class="btn btn-primary btn-lg btn-block">Enviar</button>
    </div>
    <div class="col-md-6">
    <button type="button" class="btn btn-primary btn-lg btn-block">delete</button>
   </div>
   </div>
  </div>
</form>
            </div>
        </div>
    </div>
</div>

<?php   

  $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


  ?> 

</body>
</html>