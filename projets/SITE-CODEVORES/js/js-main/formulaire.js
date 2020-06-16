
// JS PAGE FORMULAIRE //


 document.forms["inscription"].addEventListener("submit", function(e) {
   var erreur;
   var inputs = this.getElementsByTagName("input");

   if(erreur) {
     e.preventDefault();
     document.getElementById("erreur").innerHTML = erreur;
     return false;
   } else {
     alert("Formulaire envoyé");
   }

   var nom = document.getElementById("nom");
    var prenom = document.getElementById("prenom");
    var telephone = document.getElementById("telephone");
    var email = document.getElementById("email");


      if (!email.value) {
        erreur = "Veuillez renseigner un email";
      }

 });
