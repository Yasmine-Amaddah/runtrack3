const btn = document.getElementById("booter");
let citation = ["J'ai vu tant de choses, que vous, humains, ne pourriez pas croire... </br> De grands navires en feu surgissant de l'épaule d'Orion, j'ai vu des rayons fabuleux, briller dans l'ombre de la Porte de Tannhaüser. </br> Tous ces moments se perdront dans l'oubli, comme les larmes dans la pluie.", "Tous ces moments se perdront dans l'oubli, comme des larmes dans la pluie.", "T'endors pas, c'est l'heure de mourir.", "Avez-vous déjà désactivé un humain par erreur ?", "C'est dommage qu'elle doive mourir, mais on en est tous là !"];

btn.addEventListener("click", () => {
    var index = Math.floor(Math.random() * citation.length);
    document.getElementById("citation").innerHTML = citation[index];
})

var nombrePages = 3;

function pageSuivante() {
    if (pageActuelle < nombrePages) {
        pageActuelle++;
        changerPage(pageActuelle);
    }
}

function pagePrecedente() {
    if (pageActuelle > 1) {
        pageActuelle--;
        changerPage(pageActuelle);
    }
}

var principal = document.getElementById("principal");
var page1 = document.getElementById("page1");
var page2 = document.getElementById("page2");
var page3 = document.getElementById("page3");

function changerPage(page) {
    if (page == 1) {
        page1.addEventListener("click", () => {
            principal.innerHTML = "Il existe plusieurs visions du terme : </br>le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</br>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.";
            pageActuelle = 1;
        })
    }
    if (page == 2) {
        page2.addEventListener("click", () => {
            principal.innerHTML = "blabla : nom - masculin (orthographe rectifiée de 1990)(Familier) </br> Flux de paroles inutiles ou incohérentes, discours creux.";
            pageActuelle = 2;
        })
    }
    if (page == 3) {
        page3.addEventListener("click", () => {
            principal.innerHTML = "En cas de manquement au règlement, nous vous invitons à signaler les messages concernés avec le motif adéquat. </br> Ces signalements seront traités par les administrateurs ( les modérateurs n'ayant pas accès au traitement des alertes).";
            pageActuelle = 3;
        })
    }
}

// Pour rendre le truc active en bleu dans la liste

var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("list-group-item list-group-item-action");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

// monter ou descendre la progress bar

const progressBar = document.getElementById("progress-bar");
const prevButton = document.getElementById("prev-button");
const nextButton = document.getElementById("next-button");

// Ajoutez un événement de clic au bouton précédent
prevButton.addEventListener("click", function () {
    if (progressBar.style.width !== "0%") {
        progressBar.style.width = (parseInt(progressBar.style.width) - 10) + "%";
        progressBar.setAttribute("aria-valuenow", parseInt(progressBar.style.width));
    }
});

// Ajoutez un événement de clic au bouton suivant
nextButton.addEventListener("click", function () {
    if (progressBar.style.width !== "100%") {
        progressBar.style.width = (parseInt(progressBar.style.width) + 10) + "%";
        progressBar.setAttribute("aria-valuenow", parseInt(progressBar.style.width));
    }
});

const modale = document.getElementById("myModal");
document.addEventListener("DOMContentLoaded", () => {
    const tableau = ["d", "g", "c"];
    let compteur = 0;
    document.addEventListener("keydown", event => {
        if (event.key === tableau[compteur]) { //si la keydown = truc tableau on incremente
            compteur++;

            if (compteur === tableau.length) {
                console.log('test');
                const myModalAlternative = new bootstrap.Modal(modale);
                myModalAlternative.show();
            }
        } else {
            compteur = 0;
        }
    });
})

const form = document.getElementById('theForm');
const spinner = document.getElementById('spinner');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email !== '' && password !== '') {
        console.log('ok');
        const colors = ['#3498db', '#2ecc71', '#e74c3c', '#9b59b6', '#f1c40f'];
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        spinner.style.color = randomColor;
    }
});

