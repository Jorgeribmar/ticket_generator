
<?php

class Ticket
{

    public $date;
    public $numeroPlace;
    public $tarif;
    public $numeroUnique;

    public function __construct($date = null, $numeroPlace = null, $tarif = null)
    {
        $this->date = $date;
        $this->numeroPlace = $numeroPlace;
        $this->tarif = $tarif;
        $this->numeroUnique = date("m-Y", strtotime($date)) . "-" .  rand(1, 99);
    }
    public function display()
    {
        echo "<h3>Ticket</h3>" .
            "Date : " . $this->date . "<br>" .
            "Catégorie : " . $this->numeroPlace . "<br>" .
            "Tarif : " . $this->tarif . "<br>" .
            "code unique ticket:" . $this->numeroUnique;
    }
};


?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ticket = new Ticket();

    if (isset($_POST["date"])) {
        $ticket->date = $_POST["date"];
    }
    if (isset($_POST["numeroPlace"])) {
        $ticket->numeroPlace = $_POST["numeroPlace"];
    }
    if (isset($_POST["tarif"])) {
        $ticket->tarif = $_POST["tarif"];
    };
}



?>