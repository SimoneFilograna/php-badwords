

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="display-1 text-center">
            BAD WORDS
        </h1>
        <form action="filter.php" method="POST">  
            <div class="mb-3">
                <label for="filter" class="form-label h2">Bad Word</label>
                <input type="text" name="filter" id="filter" class="form-control">
            </div>

            <div class="mb-3">
                <label for="parag" class="form-label h2">Your Text</label>
                <input type="text-area" name="parag" id="parag" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>