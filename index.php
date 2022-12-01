<?php ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="parola.php">
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" value=""
                    required></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Parola da togliere</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="parola" name="parola"
                    value="" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Go</button>
            </div>
        </form>

    </div>
</body>

</html>