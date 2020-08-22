<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion PHP</title>
    <link rel="stylesheet" href="../php - forms/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="body">
    <?php
        $nombre = $_REQUEST["nombre"];
        $apellido = $_REQUEST["apellido"];
        $edad = $_REQUEST["edad"];
        $signo = $_REQUEST["signo"];
        $ec = $_REQUEST["ec"];
        $genero = $_REQUEST["genero"];
        $checkbox = $_REQUEST["checkbox"];
        $ta = $_REQUEST["ta"];
    ?>
    <div class="container ">
        <div class="form-row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <a href="index.php" class="form-group btn btn-primary stretched-link">Ir a formulario</a>
                <div class="card bg-secundario">
                    <h1 class="card-header text-center">Informacion PHP</h1>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col">
                                <h4 class="card-title">Nombre Completo</h4>
                                <p class="card-text text-capitalize"><?php echo $nombre." ".$apellido?></p>
                            </div>
                            
                            <div class="form-group col">
                                <h4 class="card-title">Edad</h4>
                                <?php if ($edad > 0 & $edad < 130) {?>
                                    <p class="card-text text-capitalize"><?php echo $edad?></p>
                                <?php }else{ ?>
                                    <p class="card-text text-capitalize">NO SE PUEDE UTILIZAR LETRAS O NUMEROS MENORES A 0</p>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <h4 class="card-title">Signo Zodiacal</h4>
                                <p class="card-text text-capitalize"><?php echo $signo?></p>
                            </div>
                            <div class="form-group col">
                                <h4 class="card-title">Estado Civil</h4>
                                <p class="card-text text-capitalize"><?php echo $ec?></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <h4 class="card-title">Genero</h4>
                                <p class="card-text text-capitalize"><?php echo $genero?></p>
                            </div>
                            <div class="form-group col">
                                <h4 class="card-title">Tipo de vehiculo</h4>
                                <?php if ($checkbox=="ninguno") {?>
                                    <p class="card-text">No maneja ningun tipo de vehiculo</p>
                                <?php }else{ ?>
                                <p class="card-text text-capitalize"><?php echo $checkbox?></p>
                                <?php }?>
                            </div>
                        </div>
                        <h4 class="card-title">Descripcion</h4>
                        <p class="card-text"><?php echo $ta?></p>
                    </div>
                </div>
            </div>
            <div class="col-2">

            </div>
        </div>
        
        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>