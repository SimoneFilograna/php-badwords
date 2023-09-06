<?php
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
    <link rel="stylesheet" href="style-filter.css">
</head>
<body>
    <div class="container p-5 mt-3">
        <h1 class="text-center text-white display-1">FILTERED WORD AND PARAGRAPH</h1>

        <div class="card-container mt-4">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card text-center mt-5 h-100 rounded-pill">
                        <h3 class="pt-4">Original Text</h3>
                        <div class="card-body d-flex flex-column">
                            <h2 class="fs-2 fw-bold"><?php echo $parag ?></h2>   
                            <p class="mt-auto fs-5"><?php echo "(" . "Length: " . $old_count . ")" ?> </p>           
                        </div>
                    </div>                 
                </div>
                <div class="col-4">
                    <div class="card text-center mt-5 h-100 rounded-pill">
                        <h3 class="pt-4">Filtered Text</h3>
                        <div class="card-body d-flex flex-column">
                            <h2 class="fs-2 fw-bold"><?php echo $new_text ?></h2> 
                            <p class="mt-auto fs-5"><?php echo "(". "Length: " . $count . ")" ?></p>           
                        </div>
                    </div>
                </div>
            </div>


    
        </div>

    </div>
</body>
</html>