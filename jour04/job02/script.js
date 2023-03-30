function jsonValueKey(texte, cle) {
   const a = JSON.parse(texte);
   return a[cle];
}

const texte = '{ "name": "La Plateforme_", "address": "8 rue d hozier", "city": "Marseille", "nb_staff": "11","creation":"2019"}';

jsonValueKey(texte, "city");
console.log(jsonValueKey(texte, "city"));