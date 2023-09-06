<?php
    var_dump($_POST);
    $parag = $_POST["parag"];
    $old_count = strlen($parag);
    $badword = $_POST["filter"];
    $new_text = str_replace($badword,"***", $parag);
    $count = strlen($new_text);
    



    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p><?php echo $parag. " ". $old_count ?></p>
                <p><?php echo $new_text. " ". $count ?></p>

            </div>
        </div>
    </div>
</body>
</html>