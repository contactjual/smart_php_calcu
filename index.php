<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart_php_calcu</title>
    <link rel="stylesheet" href="style.css">
</head>


<!-- php file  -->
<?php

session_start();

if (!isset($_SESSION["current"])) {
    $_SESSION["current"] = "";
}

if (!isset($_SESSION["result"])) {
    $_SESSION["result"] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $input = $_POST['number'];

    if ($input === 'c') {
        $_SESSION['current'] = '';
        $_SESSION['result'] = 0;
    } else if ($input === '=') {

        if ($_SESSION['current'][0] === "/" || $_SESSION['current'][0] === "*" || substr($_SESSION['current'], -1) === "+" || substr($_SESSION['current'], -1) === "-" || substr($_SESSION['current'], -1) === "*" || substr($_SESSION['current'], -1) === "/") {
            $_SESSION['current'] = ' ';
        } else {
            try {
                $_SESSION['result'] = eval ('return ' . $_SESSION['current'] . ';');
                $_SESSION['current'] = $_SESSION['result'];
            } catch (Exception $e) {
                $_SESSION['current'] = ' ';
            }
        }

    } else {
        $_SESSION["current"] .= $input;
    }
}

?>

<div class="container">
    <main>

        <div class="calculator">
            <h2>---- Smart calcu ----</h2>
            <div class="display display_area">
                <?php
                echo !empty($_SESSION['current']) ? $_SESSION['current'] : '0';
                ?>
                <!-- <input type="text" id="display" class="display" disabled> -->
            </div>
            <div>
                <form action="#" method="post" class="buttons">
                    <button class="btn" name="number" type="submit" value="7">7</button>
                    <button class="btn" name="number" type="submit" value="8">8</button>
                    <button class="btn" name="number" type="submit" value="9">9</button>
                    <button class="btn operator" name="number" type="submit" value="+">+</button>

                    <button class="btn" name="number" type="submit" value="4">4</button>
                    <button class="btn" name="number" type="submit" value="5">5</button>
                    <button class="btn" name="number" type="submit" value="6">6</button>
                    <button class="btn operator" name="number" type="submit" value="-">-</button>

                    <button class="btn" name="number" type="submit" value="1">1</button>
                    <button class="btn" name="number" type="submit" value="2">2</button>
                    <button class="btn" name="number" type="submit" value="3">3</button>
                    <button class="btn operator" name="number" type="submit" value="*">*</button>

                    <button class="btn" name="number" type="submit" value="0">0</button>
                    <button class="btn" name="number" type="submit" value="c">C</button>
                    <button class="btn" name="number" type="submit" value="=">=</button>
                    <button class="btn operator" name="number" type="submit" value="/">/</button>
                </form>
            </div>
        </div>

    </main>
</div>
</body>

</html>