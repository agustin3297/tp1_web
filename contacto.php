<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <?php require('maquetado/_css.php') ?>
</head>
<body>
    <?php $pagina = "contacto";?>
    <?php require('maquetado/_nav.php') ?>

<section class="container mb-4">


    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactanos!</h2>

    <p class="text-center w-responsive mx-auto mb-5">Tienes alguna duda? Preguntanos!. Nuestro equipo de soporte te contestara a la brevedad.</p>

    <div class="container">
    
        <form class="coontainer">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control my-2" id="nombre">
            </div>

            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="email" class="form-control my-2" id="email">
            </div>


            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control my-2" id="mensaje" rows="4"></textarea>
            </div>

        </form>

        <div class="container row"  id="datos-contacto">
            <div class="col-lg-6 col-12">
                <h2>Encontranos aqui !</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.7050896638816!2d-58.40850583505038!3d-34.63689218045095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb24d1c7593f%3A0xee0529f5103c15d7!2sMercadoLibre%20S.R.L.!5e0!3m2!1ses!2snl!4v1663000341965!5m2!1ses!2snl" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 col-12">
                <h2>Escribinos aqui</h2>
                <h3>soportearrobafubtol</h3>
                <h3>soportearrobafubtol</h3>
            </div>
        </div>
    </div>

</section>

    <?php require('maquetado/_footer.php') ?>
    <?php require('maquetado/_js.php') ?>
</body>
</html>