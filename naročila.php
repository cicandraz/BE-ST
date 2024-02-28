<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $naslov = $_POST['naslov'];
    $kolicina = $_POST['kolicina'];
    $opomba = $_POST['opomba'];

    $to = "cicandraz@gmail.com"; // Spremenite v vaš Gmail naslov
    $subject = "Novo naročilo";
    $message = "Ime: " . $ime . "\n" .
               "Priimek: " . $priimek . "\n" .
               "Naslov: " . $naslov . "\n" .
               "Količina: " . $kolicina . "\n" .
               "Opomba: " . $opomba;

    $headers = "From: cicandraz@gmail.com"; // Spremenite v vaš Gmail naslov
    mail($to, $subject, $message, $headers);
    echo "Naročilo je bilo oddano. Hvala!";
} else {
    echo "Napaka pri oddaji naročila.";
}
?>
