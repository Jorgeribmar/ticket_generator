<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Atelier 11</title>
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            background-image: url("pexels-henry-&-co-1939485.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>



    <form id="formulairechoix" method="post" action="">
        <select name="choixTypeTicket">
            <option value="ticketCinema">Ticket cinema</option>
            <option value="ticketTheatre">Ticket theatre</option>
        </select>
        <br>
        <button type="submit">submit</button>
    </form>
    <br>
    <?php
    if ($_POST["choixTypeTicket"] == "ticketCinema") {
    ?>
        <div id="ticketCinema">
            <form id="formulaire" action="/atelier11/ticketcinema.php" method="post">
                <h1>Cinéma</h1>
                <label for="date">Date:</label>
                <input type="date" name="date" placeholder="date" required>
                <br>
                <label for="numeroPlace">N° de place</label>
                <input type="number" name="numeroPlace" placeholder="1-300" min="1" max="300" required>
                <br>
                <label for="tarif">Tarif</label>
                <select name="tarif" id="" required>
                    <option value="Enfant">Enfant</option>
                    <option value="Adulte">Adulte</option>
                </select>
                <br>
                <label for="film">Choix du film:</label>
                <select name="film" id="" required>
                    <option value="Titanic">Titanic</option>
                    <option value="Harry Potter">Harry Potter</option>
                    <option value="Bienvenue chez les Chtis">Bienvenue chez les Chtis</option>
                </select>
                <br>
                <label for="heureFilm">Horaire de la scéance:</label>
                <select name="heureFilm" id="" required>
                    <option value="14h">14h</option>
                    <option value="18h">18h</option>
                    <option value="22h">22h</option>
                </select>
                <br>
                <input type="submit" value="Valider Choix" placeholder="">
            </form>
        </div>
    <?php } else if ($_POST["choixTypeTicket"] == "ticketTheatre") { ?>
        <div id="inputTheatre">
            <form id="formulaire" action="/atelier11/tickettheatre.php" method="post">
                <h1>Théatre</h1>
                <label for="date">Date:</label>
                <input type="date" name="date" placeholder="date" required>
                <br>
                <label for="numeroPlace">N° de place</label>
                <input type="number" name="numeroPlace" placeholder="N° de place" required>
                <br>
                <label for="tarif">Tarif</label>
                <select name="tarif" id="" required>
                    <option value="Enfant">Enfant</option>
                    <option value="Adulte">Adulte</option>
                </select>
                <br>
                <label for="theatre">Choix de la pièce:</label>
                <select name="choixPieceTheatre" id="" required>
                    <option value="Cyrano de Bergerac">Cyrano de Bergerac</option>
                    <option value="Antigone">Antigone</option>
                    <option value="Roméo et Juliette">Roméo et Juliette </option>
                </select>
                <br>
                <br>
                <input type="submit" value="Valider Choix" placeholder="">
                <br>
            </form>
        </div>
    <?php  };
    ?>


</body>

</html>