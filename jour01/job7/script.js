

function jourtravaille(annee, mois, jour) {
    let date = new Date(annee+'/'+mois+'/'+jour).toLocaleDateString('fr');
    let date1 = new Date(annee+'/'+mois+'/'+jour);
    let jourferier = ["01/01/2020","13/04/2020", "01/05/2020", "08/05/2020"];
    for (let i = 0; i < jourferier.length; i++) {
        console.log(date1.getDay());
        if (date == jourferier[i]) {
            return console.log("Le", jourferier[i], "est un jour férié.");
        }
        else if (date1.getDay() == 0 || date1.getDay() == 6){
            return console.log("Le "+jour+"/"+mois+"/"+annee+" est un weekend.");
        }
    }
    console.log("Le "+jour+"/"+mois+"/"+annee+" est un jour travaillé.");
}
jourtravaille('2020','03','07');