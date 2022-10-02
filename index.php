<?php

$noticias = array(
    array("titulo"=>"Futbol Clasico desembarca en Japon",
    "fecha"=>"25/02/2020",
    "imagen"=>"noticia.jpg",
    "descripcion"=>"El cortejo fúnebre llegará esta tarde al palacio de Holyroodhouse, residencia real, tras pasar por las localidades de Ballater, Aberdeen y Dundee | El funeral de Estado por la reina se celebrará el 19 de septiembre en Londres | El príncipe Guillermo, sobre la muerte de la monarca: “Estuvo a mi lado durante los días más tristes de mi vida”"),
    array("titulo"=>"Empresa local busca incorporar 50 nuevos empleados",
    "fecha"=>"25/02/2021",
    "imagen"=>"noticia1.jpeg",
    "descripcion"=>"La selección, con Lorenzo Brown al mando, remonta ante Lituania después de una prórroga (102-94) en una demostración de mucha personalidad y alcanza los cuartos de final del Eurobasket"),array(
      "titulo" => "Boom de ventas de pelotas clasicas",
    "fecha"=>"25/02/2022",
    "imagen"=>"noticia2.jpg",
    "descripcion"=>"Boca y River reeditarán una nueva edición del Superclásico del fútbol argentino este domingo, desde las 17, cuando se midan en La Bombonera por la fecha 18 de la Liga Profesional, en un duelo clave para sus aspiraciones de ir por el título. A continuación, todo lo que tenés que saber del partido que será dirigido por Darío Herrera")
)


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TP 1 - WEB</title>
    
    



    <?php require('maquetado/_css.php') ?>


</head>
<body>

    

<?php require('maquetado/_nav.php') ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="maquetado/carrousel-1.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="maquetado/carrousel-2.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="maquetado/carrousel-3.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<section class="container mt-4">
    <h1>Lo que hacemos</h1>
    <p>“José Antonini” se caracteriza por la fabricación de pelotas y cámaras de Fútbol desde hace más de 60 años; cuya calidad y diseño ya son reconocidas en el mercado nacional.

Esta empresa comienza en los años ´55 con el señor Blas Angel Antonini con la fabricación de artículos de goma y preparando gomas moldeadas para la fábrica “Superball”.

Luego van a integrar cámaras y algunos diseños de pelotas de fútbol; a la que tiempo más tarde la venden y se dedican únicamente a fabricar cámaras. En 1995 emprenden nuevamente con las pelotas.

Esto les ha permitido producir artículos que satisfacen la más alta exigencia del deporte nacional.</p>
</section>

<section class="container mt-4" id="noticias">
    <h2>Novedades</h2>

    <div class="row justify-center-center align-items-center m-0 p-2">

      <?php foreach ($noticias as $n):?>
          <article class="col-lg-4 p-2">
                      <img src="maquetado/<?php echo $n['imagen'] ?>" class="img-fluid"/>
                      <h3><?php echo $n['titulo']?></h3>
                      <hr className='mx-auto w-75'/>
                      <h4><?php echo $n['fecha']?></h4>
                      <p><?php echo $n['descripcion']?></p>
                      <button  type="button" class="text-center">
                              Ver mas
                          <span class="glyphicon glyphicon-heart"></span>
                      </button>
          </article>
      <?php endforeach?>
    </div>
</section>


<?php require('maquetado/_footer.php') ?>
   



    <?php require('maquetado/_js.php') ?>
</body>
</html>