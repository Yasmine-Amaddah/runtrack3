
const myForm = document.getElementById("myForm");
const submitBtn = document.getElementById("submitBtn");


myForm.addEventListener("submit", (event) => {
   event.preventDefault(); // Empêcher le formulaire de se soumettre normalement
   validateForm(); // Valider le formulaire
});

// Fonction de validation du formulaire
function validateForm() {
   const nom = document.getElementById("nom");
   const prenom = document.getElementById("prenom");
   const email = document.getElementById("email");
   const password = document.getElementById("password");

   // Valider le nom
   if (nom.value.length < 3) {
      alert("Le nom doit avoir au moins 3 caractères");
      return;
   }

   // Valider le prenom
   if (prenom.value.length < 3) {
      alert("Le prenom doit avoir au moins 3 caractères");
      return;
   }

   // Valider l'e-mail
   const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
   if (!emailRegex.test(email.value)) {
      alert("Veuillez saisir une adresse e-mail valide");
      return;
   }

   // Valider le mot de passe
   if (password.value.length < 8) {
      alert("Le mot de passe doit avoir au moins 8 caractères");
      return;
   }
   const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
   if (!passwordRegex.test(password.value)) {
      alert("Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial");
      return;
   }


   // Si toutes les validations réussissent, soumettre le formulaire via AJAX
   const formData = new FormData(myForm);
   const xhr = new XMLHttpRequest();
   xhr.open("POST", "inscription.php");
   xhr.onload = () => {
      if (xhr.status === 200) {
         alert(xhr.responseText);
      } else {
         alert("Une erreur s'est produite lors de la soumission du formulaire");
      }
   };
   xhr.send(formData);
}