// const p = document.querySelector("p");
const btn = document.getElementById('update');

btn.addEventListener('click', () => {

   var xmlhttp = new XMLHttpRequest();
  
   xmlhttp.onreadystatechange = function() {

       if (this.readyState == 4 && this.status == 200) {
           var users = JSON.parse(this.responseText);
           var tbody = document.getElementById("tab");
           tbody.innerHTML = "";


           for(var i=0; i<users.length; i++) {
               var tr = "<tr>";
               tr += "<td>" + users[i].id + "</td>";
               tr += "<td>" + users[i].prenom + "</td>";
               tr += "<td>" + users[i].nom + "</td>";
               tr += "<td>" + users[i].email + "</td>";
               tr += "</tr>";
               tbody.innerHTML += tr;
           }
       }
   };

   xmlhttp.open("GET", "user.php", true);
   xmlhttp.send();
});