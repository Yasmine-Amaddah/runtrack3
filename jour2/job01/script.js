document.addEventListener("DOMContentLoaded", () => {

   const btn = document.getElementById("button");

   function citation() {
      const article = document.getElementById("citation");
      console.log(article.innerHTML); //inner = recupere le contenu de la balise (sinon elle va recuperer la balise avec)
   }
   btn.addEventListener("click",citation);
})