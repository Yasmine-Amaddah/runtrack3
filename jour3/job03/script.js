$("p").empty();

$('#melanger').click(function () {
   var image = $('#div0').find('img');
   image.sort(() => Math.random() - 0.5);
   $('#div0').append(image);
});


