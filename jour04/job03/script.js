// const p = document.querySelector("p");
const btn = document.getElementById('filtrer');
const result = document.getElementById('result');


btn.addEventListener('click', () => {

   const id = document.getElementById('id').value.trim().toLowerCase();// .value... c pour faire une verification au niveau des chaines de caracteres
   const name = document.getElementById('name').value.trim().toLowerCase();
   const type = document.getElementById('type').value;

   fetch('pokemon.json')
      .then(response => response.json())
      .then(data => {
         const filtre = data.filter(item => {
            if (id && !item.id.toString().toLowerCase().includes(id)) {
               return false;
            }
            if (name && !item.name.french.toLowerCase().includes(name)) {
               return false;
            }
            if (type && !item.type.includes(type)) {
               return false;
            }
            console.log(item.id);
            return true;
         });

         // Afficher le résultat dans la page
         const resultDiv = document.getElementById('result');
         resultDiv.innerHTML = '';
         if (filtre.length === 0) {
            resultDiv.innerHTML = 'Aucun résultat';
         } else {
            filtre.forEach(item => {
               const pokemonDiv = document.createElement('div');
               pokemonDiv.textContent = `${item.id} - ${item.name.french} (${item.type.join(', ')})`;
               resultDiv.appendChild(pokemonDiv);
            });
         }
      });
});