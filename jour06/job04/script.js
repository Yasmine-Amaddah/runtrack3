const nav = document.getElementById("nav");
const btn = document.getElementById("burger");

btn.addEventListener("click", function() {
    if (nav.style.display == "none"){
        nav.style.display = "";
    }
    else {
        nav.style.display = "none";
    }
})

window.onload = function() { //on recalcul au chargement de la page
    let ww = window.innerWidth;
    if (ww > 768) {
        nav.style.display = "";
    }
    else {
        nav.style.display = "none";
    }
    if (ww > 768) {
        btn.style.display = "none";
    }
    else {
        btn.style.display = "";
    }
}

window.onresize = function() { //on recalcul en fonction de si on zoom ou dezoom la page
    let ww = window.innerWidth;
    if (ww > 768) {
        nav.style.display = "";
    }
    else {
        nav.style.display = "none";
    }
    if (ww > 768) {
        btn.style.display = "none";
    }
    else {
        btn.style.display = "";
    }
}