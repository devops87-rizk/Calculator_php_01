<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Calculator</title>
</head>
<body>

    <form action="" method="post">
        Number 1 <input type="text" name="number1"> <br>
        Number 2 <input type="text" name="number2"> <br>
        Operator <select name="operator" id=""> 
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <button type="submit" name="eksekusi">Eksekusi</button>
    </form>

    <?php
        if(isset($_POST['eksekusi'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operator = $_POST['operator'];
            echo "<br>";
            echo "$number1 $operator $number2";
        }
         


    ?>
    
</body>
</html>