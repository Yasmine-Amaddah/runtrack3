$("p").empty();

$('#melanger').click(function () {
   var image = $('#div0').find('img');
   image.sort(() => Math.random() - 0.5);
   $('#div0').append(image);
});
let compteur = 1;
let erreur = 0;
for (let i = 1; i < 7; i++) {
   $('#arc' + i).click(function () {
      var image = $('#div0').find('#arc' + i);
      $('#div' + compteur).append(image);
      $('#arc' + i).attr("data-id", compteur);

      if (($('#arc' + i).attr("data-id") != $('#div' + i).attr("data-id"))) {
         erreur++;
      }
      if (compteur === 6) {
         if (erreur === 0) {
            $("p").text("Vous avez gagné");
            $("p").css("color","green");
         }
         else {
            $("p").text("Vous avez perdu");
            $("p").css("color","red");
         }
      }
      compteur++;
   });
}

