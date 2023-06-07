<?php
    session_start();
    function sumar ($numero1,$numero2){
        $_SESSION['n1']=$numero1+$numero2;
    };

    function restar ($numero1,$numero2){
        $_SESSION['n1']=$numero1-$numero2;
    };
    function dividir ($numero1,$numero2){
        if($numero2==0){
            $_SESSION['n1'] = "No se puede dividir entre 0";
        }
        else{
            $_SESSION['n1']=$numero1/$numero2;
        }
    };
    function multiplicar ($numero1,$numero2){
        $_SESSION['n1']=$numero1*$numero2;
    };
    function potencia ($numero1,$numero2){
        $_SESSION['n1']=pow($numero1,$numero2);
    };

    if(isset($_POST['numero'])){
        if($_POST['numero']=='C'){
            $_SESSION['n1'] = null;
        }
        else if($_POST['numero']=='+'||$_POST['numero']=='-'||$_POST['numero']=='/'||$_POST['numero']=='*'||$_POST['numero']=='^' ){
            $_SESSION['valor1']=$_SESSION['n1'];
            $_SESSION['operacion'] = $_POST['numero'];
            $_SESSION['n1'] = null;
        }
        else if($_POST['numero'] == "="){
            $_SESSION['valor2'] = $_SESSION['n1'];
            switch ($_SESSION['operacion']) {
                case '+':
                    sumar($_SESSION['valor1'], $_SESSION['valor2']);
                    break;
                case '-':
                    restar($_SESSION['valor1'], $_SESSION['valor2']);
                    break;
                case '/':
                    dividir($_SESSION['valor1'], $_SESSION['valor2']);
                    break;
                case '*':
                    multiplicar($_SESSION['valor1'], $_SESSION['valor2']);
                    break;
                case '^':
                    potencia($_SESSION['valor1'], $_SESSION['valor2']);
                    break;
            }

        }
        else{
            if (isset($_SESSION['n1'])) {
                $_SESSION['n1'] .= $_POST['numero'];
                echo $_SESSION['n1'];
            } 
            else {
                $_SESSION['n1'] =  $_POST['numero'];
                echo $_SESSION['n1'];
            };
        };
    };

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
        <form method="POST">
            <input type="number" name="resultado" value="<?php echo isset($_SESSION['n1']) ? $_SESSION['n1'] :0;?>" >
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
            <button class="button" type="submit" name="numero" value="=">Resultado</button>
        </form>
    </div>
 
</body>
</html>

