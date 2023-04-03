
$('#melanger').click(function () {
   var image = $('.jeu').find('img');
   image.sort(() => Math.random() - 0.5);
   $('.jeu').append(image);
});

$(function() {
   // Initialisation
   var emptyRow = 3;
   var emptyCol = 3;
   shuffle();
 
   // Click event pour les pièces du puzzle
   $('.puzzle-piece').click(function() {
     var row = parseInt($(this).attr('data-row'));
     var col = parseInt($(this).attr('data-col'));
 
     // Si la pièce est à côté de la case vide, on la déplace
     if ((row == emptyRow && Math.abs(col - emptyCol) == 1) || (col == emptyCol && Math.abs(row - emptyRow) == 1)) {
       $(this).animate({
         top: (emptyRow - 1) * 100 + 'px',
         left: (emptyCol - 1) * 100 + 'px'
       }, 200);
 
       // Mise à jour de la position de la case vide
       $(this).attr('data-row', emptyRow);
       $(this).attr('data-col', emptyCol);
       emptyRow = row;
       emptyCol = col;
 
       // Vérification de la victoire
       if (isVictory()) {
         alert('Victoire !');
       }
     }
   });
 
   // Mélange les pièces du puzzle
   function shuffle() {
     var pieces = $('.puzzle-piece');
     for (var i = 0; i < pieces.length; i++) {
       var randIndex = Math.floor(Math.random() * pieces.length);
       var tempRow = $(pieces[i]).attr('data-row');
       var tempCol = $(pieces[i]).attr('data-col');
       $(pieces[i]).attr('data-row', $(pieces[randIndex]).attr('data-row'));
       $(pieces[i]).attr('data-col', $(pieces[randIndex]).attr('data-col'));
       $(pieces[randIndex]).attr('data-row', tempRow);
       $(pieces[randIndex]).attr('data-col', tempCol);
     }
     updatePositions();
   }
})