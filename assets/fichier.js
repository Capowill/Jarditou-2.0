// Exercice 7 JS eval



/* ADRESSE MAIL  */
function testmail() {
    // let filtre = /[@]{1}/; mode no friendly
    let filtre = /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/;
    let mail = document.getElementById("email").value;
    let result = filtre.test(mail);
    let errormail = document.getElementById("errorMail");
    if (!result) {
        event.preventDefault();
        console.log("Email non valide, comprenant au moins '@'");
        errormail.innerHTML = "Champs incorrect *";
        errormail.style.color = "red";
    } else {
        console.log(mail);
        errormail.innerHTML = "Champs valide";
        errormail.style.color = "green";
    }
}

/* CODE POSTAL */
function testcode() {
    let filtre = /^[0-9]{5}$/;
    let code = document.getElementById("code").value;
    let result = filtre.test(code);
    let errorpost = document.getElementById("errorPostal");
    if (!result) {
        event.preventDefault();
        console.log("Code postal incorrect !");
        errorpost.innerHTML = "Champs obligatoire *";
        errorpost.style.color = "red";
    } else {
        console.log(code);
        errorpost.innerHTML = "Champs valide";
        errorpost.style.color = "green";
    }
}

/* NOM */
function testnom() {
        let filtre = /[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/;
    let nom = document.getElementById("nom").value;
    let result = filtre.test(nom);
    let errorNom = document.getElementById("errorNom");
    if (!result) {
        event.preventDefault();
        console.log("Nom  non valide !");
        errorNom.innerHTML = "Champs incorrect *";
        errorNom.style.color = "red";
    } else {
        console.log(nom);
        errorNom.innerHTML = "Champs valide";
        errorNom.style.color = "green";
    }
}

/*  PRENOM */
function testprenom() {
    let filtre = /[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/;
    let prenom = document.getElementById("prenom").value;
    let result = filtre.test(prenom);
    let errorPrenom = document.getElementById("errorPrenom");
    if (!result) {
        event.preventDefault();
        console.log(" Prenom non valide !");
        errorPrenom.innerHTML = "Champs incorrect *";
        errorPrenom.style.color = "red";
    } else {
        console.log(prenom);
        errorPrenom.innerHTML = "Champs valide";
        errorPrenom.style.color = "green";
    }
}

function testdate(){
    let filtre = /^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/; // resultat 00/00/0000
    let naissance = document.getElementById("naissance").value;
    let result = filtre.test(naissance);
    let errorDate = document.getElementById("errordate");
    if (!result) {
        event.preventDefault();
        console.log(naissance);
        console.log("Date de naissance non valide !");
        errorDate.innerHTML = "Champs incorrect *";
        errorDate.style.color = "red";
    } else {
        console.log(naissance);
        errorDate.innerHTML = "Champs valide";
        errorDate.style.color = "green";
    }
}

document.getElementById("submit").addEventListener("click", testdate);
document.getElementById("submit").addEventListener("click", testnom);
document.getElementById("submit").addEventListener("click", testprenom);
document.getElementById("submit").addEventListener("click", testcode);
document.getElementById("submit").addEventListener("click", testmail);


/*  PRIX  */ /* JS on appel les ID */
function testprice() {
    let filtre = /^(?!^0\.00$)(([1-9][\d]{0,6})|([0]))\.[\d]{2}$/;
    let price = document.getElementById("prix").value;
    let result = filtre.test(price);
    let errorePrix = document.getElementById("errorPrice");
    if (!result) {
        event.preventDefault();
        errorePrix.innerHTML = "Entrez un prix \n Exemple : 50.00";
        errorePrix.style.color = "red";
        prix.style.boxShadow = "0 0 5px 1px red";
    } else {
        errorePrix.innerHTML = "Champs valide";
        errorePrix.style.color = "green";
        price.style.color = "green";
    }
}
document.getElementById("submit").addEventListener("click", testprice);
