document.addEventListener("DOMContentLoaded", () => {

  const tableau = ["ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown", "ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight", "b", "a"];

  let compteur = 0;

  document.addEventListener("keydown", event => {
    console.log(event.key);
    if (event.key === tableau[compteur]) { //si la keydown = truc tableau on incremente
      compteur++;

      if (compteur === tableau.length) {
        document.querySelector("main").style.background = "blue";
        document.querySelector("main").style.color = "white";
      }
    } 
    else {
      compteur = 0;
    }
  });
})
