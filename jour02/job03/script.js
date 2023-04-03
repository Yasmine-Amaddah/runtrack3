document.addEventListener("DOMContentLoaded", () => {

    const btn = document.getElementById("button");
    const p = document.createElement("compteur");
 
    function addone() {
       p.textContent++;
       console.log(p.innerHTML);
    }
    btn.addEventListener("click",addone);
 })