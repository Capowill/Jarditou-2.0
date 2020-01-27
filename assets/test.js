





/*  PRIX  */ /* original */
function testprice() {
    let filtre = /^(?!^0\.00$)(([1-9][\d]{0,6})|([0]))\.[\d]{2}$/;
    let prix = document.getElementById("prix").value;
    let result = filtre.test(prix);
    let errorePrix = document.getElementById("errorPrice");
    if (!result) {
        event.preventDefault();
        errorePrix.innerHTML = "Entrez un prix \n Exemple : 50.00";
        errorePrix.style.color = "red";
    } else {
        errorePrix.innerHTML = "Champs valide";
        errorePrix.style.color = "green";
    }
}
/* JS on appel les ID */
/*  PRIX  Modified */
function testprice() {
    let filtre = /^(?!^0\.00$)(([1-9][\d]{0,6})|([0]))\.[\d]{2}$/;
    let prix = document.getElementById("prix").value;
    let result = filtre.test(prix);
    let errorePrix = document.getElementById("errorPrice");
    if (!result) {
        event.preventDefault();
        prix.innerHTML = "Entrez un prix \n Exemple : 50.00";
        errorePrix.style.color = "red";
        prix.style.boxShadow = "0 0 5px 1px red";
    } else {
        errorePrix.innerHTML = "Champs valide";
        errorePrix.style.color = "green";
    }
}
document.getElementById("submit").addEventListener("click", testprice);




        /*  PRIX  */ /* JS on appel les ID */ /* modif2 */
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

/* <div class="row">
            <label class="col-2 m-2">Prix :</label><input type="text" class="col-2" id="prix" name="prix">
            <span id="errorPrice" class="col-2">*</span>
        </div>*/

        /*  PRIX  */ /* JS on appel les ID */ /* modif 3 */
function testprice() {
    let filtre = /^(?!^0\.00$)(([1-9][\d]{0,6})|([0]))\.[\d]{2}$/;
    let price = document.getElementById("prix").value;
    let result = filtre.test(price);
    let errorePrix = document.getElementById("errorPrice");
    if (!result) {
        event.preventDefault();
        errorePrix.textContent = "Entrez un prix \n Exemple : 50.00";
        errorePrix.style.color = "red";
        prix.style.boxShadow = "0 0 5px 1px red";
        prix.style.color = "red";
    } else {
        prix.style.color = "green";
        errorePrix.textContent = "";
        prix.style.boxShadow ="none";
    }
}
document.getElementById("submit").addEventListener("click", testprice);