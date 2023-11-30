<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menù Pizzeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="./accesso.php">
        <div class="row g-3">
            <div class="col">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"><br>
            </div>
            <div class="col">
            <label for="cognome">Cognome:</label>
            <input type="text" id="cognome" name="cognome"><br>
            </div>
        </div>

        <div class="col-md-6">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>
        </div>
        <div class="col-md-6">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="col-md-6">
            <label for="sport">Sport preferito:</label>
            <input type="text" id="sport" name="sport"><br>
        </div>
        <div class="col-md-4">
            <label for="age">Età:</label>
            <input type="number" id="age" name="age"><br>  
        </div>
        <div class="col-md-2">
            <label for="colore">Inserire colore sfondo:</label>
            <input type="color" id="colore" name="colore"><br>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Accedi</button>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>