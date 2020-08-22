<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms</title>
    <link rel="stylesheet" href="../php - forms/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="body">
    <div class="container pt-2">
    <fieldset class="container p-3 border">
    <h2>FORMULARIO PHP</h2>
        <form class="pt-3" action="informacion.php" method="POST">
            <legend>Nombre Completo</legend>
            <div class="form-group form-row">
                <div class="col">
                <input type="text" class="form-control" name="nombre"  title="Solamente letras de la A a la Z, no se puede letras o caracteres especiales" placeholder="Nombre" required autocomplete=off>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="apellido" title="Solamente letras de la A a la Z, no se puede letras o caracteres especiales" placeholder="Apellido" required autocomplete=off>
                </div>
            </div>
            <div class="form-group form-row">
                <div class="col-4">
                    <legend>Digite su edad</legend>
                    <input type="number" class="form-control"  name="edad" pattern="[0-9]" min="0" max="130" required>
                </div>
                <div class="col-4">
                    <legend>Escriba su signo zodiacal</legend>
                    <input type="text" class="form-control" title="Solamente letras de la A a la Z, no se puede letras o caracteres especiales" name="signo" required autocomplete=off> 
                </div>
                <div class="col-4">
                    <legend>Estado civil</legend>
                    <select class="form-control" name="ec" required>
                        <option value="">Seleccione su estado civil..</option>
                        <option value="soltero">Soltero</option>
                        <option value="comprometido">Comprometido</option>
                        <option value="casado">Casado</option>
                        <option value="divorciado">Divorciado</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-row">
                <div class="col-6">
                    <legend> Seleccione por favor su genero</legend>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" value="masculino" required>
                        <label class="form-check-label">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" value="femenino" required>
                        <label class="form-check-label">
                            Femenino
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <legend>¿Que tipo de vehiculo maneja?</legend>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox" id="c1" value="ninguno" required>
                        <label class="form-check-label">
                            Ninguno
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox" id="c2" value="moto" required>
                        <label class="form-check-label">
                            Moto
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="checkbox" id="c3" value="automovil" required>
                        <label class="form-check-label">
                            Automovil
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <legend>Escriba una descripcion</legend>
                <textarea class="form-control" name="ta" rows="3" placeholder="Escriba una descripcion breve de su perfil como persona..." required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
        </fieldset>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript">

    document.getElementById("c1").onclick = function(){
    	if (document.getElementById("c2").disabled & document.getElementById("c3").disabled){
    		document.getElementById("c2").disabled = false; 
            document.getElementById("c3").disabled = false; 
    	}else{
    		document.getElementById("c2").disabled = true;
            document.getElementById("c3").disabled = true;
    	}
    }
    document.getElementById("c2").onclick = function(){
    	if (document.getElementById("c1").disabled & document.getElementById("c3").disabled){
    		document.getElementById("c1").disabled = false; 
            document.getElementById("c3").disabled = false; 
    	}else{
    		document.getElementById("c1").disabled = true;
            document.getElementById("c3").disabled = true;
    	}
    }
    document.getElementById("c3").onclick = function(){
    	if (document.getElementById("c2").disabled & document.getElementById("c1").disabled){
    		document.getElementById("c2").disabled = false; 
            document.getElementById("c1").disabled = false; 
    	}else{
    		document.getElementById("c2").disabled = true;
            document.getElementById("c1").disabled = true;
    	}
    }
    </script>
    </div>
    
</body>
</html>