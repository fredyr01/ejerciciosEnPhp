<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $full_name = $_POST["full_name"];
        echo $full_name;
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="mb-3">
        <label for="full_name" class="form-label">Full name:</label>
        <input type="text"
            class="form-control" name="full_name" id="full_name" aria-describedby="helpId" placeholder=""
            value="<?php echo $full_name; ?>">
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>