<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ticket Theatre</title>
    <style type="text/css">
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            background-image: url(alevision-co-nz-UtZz81fI-unsplash.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    require_once "ticket.php";

    class TicketTheatre extends Ticket
    {
        public $choixPieceTheatre;
        public $heurePiece = "20h";
        public $heureEntracte = "21h30";


        public function __construct($date = null, $numeroPlace = null, $tarif = null, $choixPieceTheatre = null)
        {
            parent::__construct($date, $numeroPlace, $tarif);
            $this->choixPieceTheatre = $choixPieceTheatre;
        }
        public function display()
        {
            echo "<div class=ticketTheatre>
        <h3 class=`titreTicket`>Ticket de Theatre</h3>" .
                "Date : " . $this->date . "<br>" .
                "Place n° " . $this->numeroPlace . "<br>" .
                "Tarif : " . $this->tarif . "<br>" .
                "Numéro Unique ticket:" . $this->numeroUnique . "<br>" .
                "Nom de la pièce :" . $this->choixPieceTheatre . "<br>" .
                "Heure de la pièce :" . $this->heurePiece . "<br>" .
                "Heure de l'entracte:" . $this->heureEntracte . "<br>
                </div>";
        }
    };

    ?>

    <?php


    $ticketTheatre = new TicketTheatre(

        $_POST["date"],
        $_POST["numeroPlace"],
        $_POST["tarif"],
        $_POST["choixPieceTheatre"],

    );
    $ticketTheatre->display();


    ?>
</body>

</html>