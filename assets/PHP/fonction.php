
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
    $result = $mail.preg_match_all($filtre,$mail);
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
testmail();


if(empty ($_POST["nom"]))
{
    $aErreur[] = "erreur1=true";
}
else if(!preg_match("/^[A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+([-'\s][A-zA-ZñéèîïÉÈÎÏ][A-zA-Zñéèêàçîï]+)?$/",($_POST["nom"])))
{
    $aErreur[] = "erreur1b=true";
}
else
{
    echo "Nom : ". $_POST["nom"] . "<br>";
}
/* ADRESSE MAIL  */

// function testmail() {
//     // let filtre = /[@]{1}/; mode no friendly
//     let filtre = /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/;
//     let mail = document.getElementById("email").value;
//     let result = filtre.test(mail);
//     let errormail = document.getElementById("errorMail");
//     if(mail ==""){
//         event.preventDefault();
//         errormail.textContent = "Champs obligatoire *";
//         email.style.boxShadow = "0 0 5px 1px red";
//         errormail.style.color = "red";
//     }
//     else if (!result) {
//         event.preventDefault();
//         errormail.textContent = "Saisi invalide *";
//         errormail.style.color = "red";
//         email.style.boxShadow = "0 0 5px 1px orange";
//     } else {
//         errormail.textContent = "";
//         email.style.boxShadow = "0 0 5px 1px green";
//     }
// }


//les appels en PHP ce font avec "->" et JS avec "."



?>