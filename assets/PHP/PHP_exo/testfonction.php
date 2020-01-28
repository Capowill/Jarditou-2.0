


<?php
/* ADRESSE MAIL  */
function testmail() {
    // let filtre = /[@]{1}/; mode no friendly
    $filtre = /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/;
    $mail = document.getElementById("email").value;
    $result = $filtre.test($mail);
    $errormail = document.getElementById("errorMail");
    if($mail ==""){
        event.preventDefault();
        $errormail.textContent = "Champs obligatoire *";
        $email.style.boxShadow = "0 0 5px 1px red";
        $errormail.style.color = "red";
    }
    else if (!$result) {
        event.preventDefault();
        $errormail.textContent = "Saisi invalide *";
        $errormail.style.color = "red";
        $email.style.boxShadow = "0 0 5px 1px orange";
    } else {
        $errormail.textContent = "";
        $email.style.boxShadow = "0 0 5px 1px green";
    }
}
?>