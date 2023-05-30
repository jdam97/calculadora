<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>

</head>
<body>
    <div class="form-container">
        <h1>Calculadora</h1>
        <form action="index.php" method="POST">
            <input type="number" name="numero1" placeholder="Numero 1">
            <input type="number" name="numero2" placeholder="Numero 2">
            <br>
            <label>Operacion</label>
            <select name="operacion" >
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
                <option value="potencia">Potencia</option>
                <option value="raiz">Raiz</option>
                <option value="modulo">Modulo</option>
            </select><br>
            <input type="submit" value="Resultado">
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

