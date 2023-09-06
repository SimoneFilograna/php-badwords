

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container p-5 mt-3">
        <h1 class="display-1 text-center text-white">
            BAD WORDS
        </h1>
        <form action="filter.php" method="POST">  
            <div class="mb-5">
                <label for="filter" class="form-label h2 text-white">Bad Word</label>
                <input type="text" name="filter" id="filter" class="form-control">
            </div>

            <div class="mb-5">
                <label for="parag" class="form-label h2 text-white">Your Text</label>
                <input type="text" name="parag" id="parag" class="form-control">
            </div>

            <button type="submit" class="btn btn-outline-light mt-3">Submit</button>
        </form>
    </div>
</body>
</html>