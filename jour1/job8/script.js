
function premier(a) {
  for(var i = 2; i < a; i++)
    if(a%i === 0) return false;
  return true;
}

function premier(b) {
    for(var i = 2; i < b; i++)
      if(b%i === 0) return false;
    return true;
  }

function sommenombrespremiers(a, b) {
    if (premier(a) == true && premier(b) == true) {
      return console.log(a + b);
    }
    else { return false }
  }
sommenombrespremiers(7, 13);