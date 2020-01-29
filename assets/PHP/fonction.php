
<?php
/* ADRESSE MAIL  */
function testmail()
{
    $mail = new DOMDocument();
    $mail->validateOnParse = true;
    $errormail = new DOMDocument();
    $errormail->validateOnParse = true;

    $filtre = '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
    $mail->getElementById("email");
    $result = $mail.preg_match($mail,$filtre);
    $errormail->getElementById("errorMail");
    if ($mail == "") {
        $errormail = "Champs obligatoire *";
        $mail->style->boxShadow = "0 0 5px 1px red";
        $errormail->style->color = "red";
    } else if (!$result) {
        $errormail->textContent = "Saisi invalide *";
        $errormail = "red";
        $mail->style->boxShadow = "0 0 5px 1px orange";
    } else {
        $errormail->textContent = "";
        $mail->style->boxShadow = "0 0 5px 1px green";
    }
}
//les appels en PHP ce font avec "->" et JS avec "."

testmail();

?>