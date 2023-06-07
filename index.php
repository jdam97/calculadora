<?php
    // session_start();
    function sumar ($numero1,$numero2){
        $_SESSION=$numero1+$numero2;
    }

    function restar ($numero1,$numero2){
        $_SESSION=$numero1-$numero2;
    }
    function dividir ($numero1,$numero2){
        if($numero2==0){
            $_SESSION = "No se puede dividir entre 0";
        }
        else{
            $_SESSION=$numero1/$numero2;
        }
    }
    function multiplicar ($numero1,$numero2){
        $_SESSION=$numero1*$numero2;
    }
    function potencia ($numero1,$numero2){
        $_SESSION=pow($numero1,$numero2);
    }

    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora con PHP</title>

</head>
<body>
    <div class="form-container">
        <h1>Calculadora</h1>
        <form action="index.php" method="POST">
            <input type="number" name="resultado" value="">
            <br>
            <div class="contenedor-botones">
                <button type="submit" name="numero" value="0">0</button>
                <button type="submit" name="numero" value="1">1</button>
                <button type="submit" name="numero" value="2">2</button>
                <button type="submit" name="numero" value="3">3</button>
                <button type="submit" name="numero" value="4">4</button>
                <button type="submit" name="numero" value="5">5</button>
                <button type="submit" name="numero" value="6">6</button>
                <button type="submit" name="numero" value="7">7</button>
                <button type="submit" name="numero" value="8">8</button>
                <button type="submit" name="numero" value="9">9</button>
                <button type="submit" name="numero" value="-">-</button>
                <button type="submit" name="numero" value="+">+</button>
                <button type="submit" name="numero" value="/">/</button>
                <button type="submit" name="numero" value="*">*</button>
                <button type="submit" name="numero" value="^">^</button>
                <button type="submit" name="numero" value="C">C</button>
            </div>
            <input class="button" type="submit" value="Resultado">
        </form>
    </div>
    <?php
    
   if (($_POST['numero1'])){
    $operacion = $_POST['operacion'];
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    
    switch ($operacion) {
        case 'suma':
                $resultado = $numero1 + $numero2;
            break;

        case 'resta':
                $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacion':
                $resultado = $numero1 * $numero2;
            break;
        case 'division':
                if($numero1!==0 && $numero2!==0){
                    $resultado = $numero1 / $numero2;
                }

                else {
                    echo 'No se puede dividir entre cero';
                }  
            break;
        case 'potencia':
                $resultado = pow($numero1,$numero2);
            break;
        case 'raiz':
                $resultado = sqrt($numero1);
            break;
            case 'modulo':
                $resultado = $numero1 % $numero2;
            break;
    }
    echo 'El resultado es: ',$resultado;

   };

?>
</body>
</html>

