<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

var_dump($_POST);
$texto = null;
if (isset($_POST["botones"])){
    $texto =$_POST["resultado"]. $_POST["botones"];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <div class="calculadora">
        <div class="col" style="margin-left: 15rem;margin-top: 9rem;">
        <form  method="POST">
            <div class="row">
                <h1>Calculadora</h1>
                <input type="text" class="resultado" name="resultado" readonly value="<?php echo $texto ?>">
            </div>
            <div class="row">
                <div class="col">
                        <div class="row">
                            <button type="submit" class="borrador" name="botones"  value="←">←</button>
                            <button type="submit" class="botones" name="botones"  value="π">π</button>
                            <button type="submit" class="botones" name="botones"  value="*">*</button>
                            <button type="submit" class="botones" name="botones"  value="-">-</button>
                        </div>
                        <div class="row">
                            <button type="submit" class="botones" name="botones"  value="7">7</button>
                            <button type="submit" class="botones" name="botones"  value="8">8</button>
                            <button type="submit" class="botones" name="botones"  value="9">9</button>
                            <button type="submit" class="botones" name="botones"  value="+">+</button>
                        </div>
                        <div class="row">
                            <button type="submit" class="botones" name="botones"  value="4">4</button>
                            <button type="submit" class="botones" name="botones"  value="5">5</button>
                            <button type="submit" class="botones" name="botones"  value="6">6</button>
                            <button type="submit" class="botones" name="botones"  value=" /">/</button>
                        </div>
                        <div class="row" style="margin-bottom: -66px;">
                            <button type="submit" class="botones" name="botones"  value="1">1</button>
                            <button type="submit" class="botones" name="botones"  value="2">2</button>
                            <button type="submit" class="botones" name="botones"  value="3">3</button>
                            <button type="submit" name="botones"  id="igual" value="=">=</button>
                        </div>
                        <div class="row ultimos">
                            <button type="submit" class="botones" name="botones"  value="4">0</button>
                            <button type="submit" class="botones" name="botones"  value="²">X²</button>
                            <button type="submit" class="botones" name="botones"  value="5">c</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>