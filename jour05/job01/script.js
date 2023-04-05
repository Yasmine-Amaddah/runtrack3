const myForm = document.getElementById("myForm");
const submitBtn = document.getElementById("submitBtn");

// Fonction de validation du formulaire
function valider() {
   const nom = document.getElementById("nom");
   const prenom = document.getElementById("prenom");
   const email = document.getElementById("email");
   const password = document.getElementById("password");
   const emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   const passwordFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;

   if (nom.value == "") {
      document.getElementById("message").innerText = "Champ Nom Vide";
      return false;
   }
   else if (nom.value.length < 3) {
      alert("Le nom doit avoir au moins 3 caractères");
      return false;
   }

   else if (prenom.value == "") {
      document.getElementById("message").innerText = "Champ Prenom Vide";
      return false;
   }
   else if (prenom.value.length < 3) {
      alert("Le prenom doit avoir au moins 3 caractères");
      return false;
   }

   else if (email.value == "") {
      document.getElementById("message").innerText = "Champ Email Vide";
      return false;
   }
   else if (!emailFormat.test(email.value)) {
      alert("Veuillez saisir une adresse e-mail valide");
      return false;
   }

   else if (password.value == "") {
      document.getElementById("message").innerText = "Champ Password Vide";
      return false;
   }
   else if (password.value.length < 8) {
      alert("Le mot de passe doit avoir au moins 8 caractères");
      return false;
   }

   else if (!passwordFormat.test(password.value)) {
      alert("Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial");
      return false;
   }
   else {
      return true;
   }
}

myForm.addEventListener("submit", (event) => {
   if (valider() == false) {
      event.preventDefault(); // Empêcher le formulaire de se soumettre normalement
   }
});
