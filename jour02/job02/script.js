document.addEventListener("DOMContentLoaded", () => {

   const btn = document.getElementById("button");
   const article = document.createElement("article");
   article.textContent = "L'important n'est pas la chute, mais l'atterrissage."

   function showhide() {
      const body = document.querySelector("body");// = retourn tout le boutton et pas que l'id avec getElementById par exemple
      body.appendChild(article)//rajouter article dans le body
      if (article.style.display === "none"){
         article.style.display = "block";
      }
      else {
         article.style.display = "none";
      }
   }
   btn.addEventListener("click",showhide);
})