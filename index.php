<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maak je eigen pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Maak je eigen pizza</h1>

    <form method="post">
        <label for="bodemformaat">Bodemformaat</label>

        <select name="bodemformaat" id="bodemformaat">
            <option>Maak je keuze</option>
            <option value="25">25 cm</option>
            <option value="30">30 cm</option>
        </select>

        <label for="bodemformaat">Bodemformaat</label>

        <select name="bodemformaat" id="bodemformaat">
            <option>Maak je keuze</option>
            <option value="25">25 cm</option>
            <option value="30">30 cm</option>
        </select>

        <div>Pizzatoppings</div>

        <input class="form-check-input" type="radio" name="pizzatoppings" id="vegan">
        <label class="form-check-label" for="vegan"> Vegan</label>

        <input class="form-check-input" type="radio" name="pizzatoppings" id="vegetarisch">
        <label class="form-check-label" for="vegetarisch"> Vegetarisch</label>

        <input class="form-check-input" type="radio" name="pizzatoppings" id="vlees">
        <label class="form-check-label" for="vlees"> Vlees</label>

        <button>Bestel</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>