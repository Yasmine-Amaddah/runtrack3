numbers = [0,1,2,3,4,5];

function tri(numbers,order) {
   if (order == 'asc'){
      return console.log(numbers.sort());
   }
   else if (order == 'desc'){
    return console.log(numbers.reverse());
   }
}

tri(numbers,'asc');