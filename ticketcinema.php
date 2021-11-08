<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ticket Cinema</title>
    <style type="text/css">
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            background-image: url(./felix-mooneeram-evlkOfkQ5rE-unsplash.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    require_once "ticket.php";

    class TicketCinema extends Ticket
    {
        public $film;
        public $heureFilm;

        public function __construct($date, $numeroPlace, $tarif, $film, $heureFilm)
        {
            parent::__construct($date, $numeroPlace, $tarif);
            $this->film = $film;
            $this->heureFilm = $heureFilm;
        }
        public function display()
        {
            echo "<div class=ticketCinema>
            <h3>Ticket de Cinema</h3>" .
                "Date : " . $this->date . "<br>" .
                "Place n° " . $this->numeroPlace . "<br>" .
                "Tarif : " . $this->tarif . "<br>" .
                "Numéro Unique ticket:" . $this->numeroUnique . "<br>" .
                "Nom du film :" . $this->film . "<br>" .
                "Heure du film :" . $this->heureFilm . "<br>
            </div>";
        }
    };

    ?>

    <?php


    $ticketCinema = new TicketCinema(
        $_POST["date"],
        $_POST["numeroPlace"],
        $_POST["tarif"],
        $_POST["film"],
        $_POST["heureFilm"],
    );

    $ticketCinema->display();


    ?>
</body>

</html>