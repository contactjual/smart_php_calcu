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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
    }
}

?>



<div class="container">
    <main>

        <div class="calculator">
            <h2>---- Smart calcu ----</h2>
            <div class="display display_area">
                <?php echo $number; ?>
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