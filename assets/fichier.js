// Exercice 7 JS eval



/* ADRESSE MAIL  */
function testmail() {
    // let filtre = /[@]{1}/; mode no friendly
    let filtre = /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/;
    let mail = document.getElementById("email").value;
    let result = filtre.test(mail);
    let errormail = document.getElementById("errorMail");
    if(mail ==""){
        event.preventDefault();
        errormail.textContent = "Champs obligatoire *";
        email.style.boxShadow = "0 0 5px 1px red";
        errormail.style.color = "red";
    }
    else if (!result) {
        event.preventDefault();
        errormail.textContent = "Saisi invalide *";
        errormail.style.color = "red";
        email.style.boxShadow = "0 0 5px 1px orange";
    } else {
        errormail.textContent = "";
        email.style.boxShadow = "0 0 5px 1px green";
    }
}

/* CODE POSTAL */
function testcode() {
    let filtre = /^[0-9]{5}$/;
    let code = document.getElementById("Code").value;
    let result = filtre.test(code);
    let errorpost = document.getElementById("errorPostal");
    if (!result) {
        event.preventDefault();
        errorpost.textContent = "Champs obligatoire *";
        errorpost.style.color = "red";
        Code.style.boxShadow = "0 0 5px 1px red";
    } else {
        errorpost.textContent = "";
        Code.style.boxShadow = "0 0 5px 1px green";
    }
}

/* NOM */
function testnom() {
        let filtre = /[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/;
    let nom = document.getElementById("Nom").value;
    let result = filtre.test(nom);
    let errorNom = document.getElementById("errorNom");
    if(nom ==""){
        event.preventDefault();
        errorNom.textContent = "Champs obligatoire *";
        errorNom.style.color = "red";
        Nom.style.boxShadow = "0 0 5px 1px red";
    }
    else if (!result) {
        event.preventDefault();
        errorNom.textContent = "Saisi incorrect *";
        errorNom.style.color = "red";
        Nom.style.boxShadow = "0 0 5px 1px orange";
    } else {
        errorNom.textContent = "";
        Nom.style.boxShadow ="0 0 5px 1px green";
    }
}

/*  PRENOM */
function testprenom() {
    let filtre = /[a-zA-Z\â\ä\ê\é\è\-\ï\ë\î\ô\ö\û\ü]+$/;
    let prenom = document.getElementById("Prenom").value;
    let result = filtre.test(prenom);
    let errorPrenom = document.getElementById("errorPrenom");
    if(prenom ==""){
        event.preventDefault();
        errorPrenom.textContent = "Champs obligatoire *";
        errorPrenom.style.color = "red";
        Prenom.style.boxShadow = "0 0 5px 1px red";
    }
    else if (!result) {
        event.preventDefault();
        errorPrenom.textContent = "Saisi incorrect *";
        errorPrenom.style.color = "red";
        Prenom.style.boxShadow = "0 0 5px 1px orange";
    } else {
        errorPrenom.textContent = "";
        Prenom.style.boxShadow ="0 0 5px 1px green";
    }
}

function testdate(){
    let filtre = /^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/; // resultat 00/00/0000
    let naiss = document.getElementById("Naissance").value;
    let result = filtre.test(naiss);
    let errorDate = document.getElementById("errordate");
    if (!result) {
        event.preventDefault();
        errorDate.textContent = "Champs obligatoire *";
        errorDate.style.color = "red";
        Naissance.style.boxShadow = "0 0 5px 1px red";
    } else {
        errorDate.textContent = "";
        Naissance.style.boxShadow ="0 0 5px 1px green";
        
    }
}

document.getElementById("submit").addEventListener("click", testdate);
document.getElementById("submit").addEventListener("click", testnom);
document.getElementById("submit").addEventListener("click", testprenom);
document.getElementById("submit").addEventListener("click", testcode);
document.getElementById("submit").addEventListener("click", testmail);


/*  PRIX  */ /* Ceci est un teste */
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
        prix.style.color = "red";
    } else {
        prix.style.color = "black";
        errorePrix.textContent ="";
        prix.style.boxShadow ="0 0 5px 1px green";
    }
}
