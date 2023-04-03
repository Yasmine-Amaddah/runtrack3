
function bisextile(annee) {
    if (annee % 4 == 0) {
        if (annee % 100 == 0) {
            if (annee % 400 == 0) {
                console.log("true");
                return true;
            }
            else {
                console.log("false");
                return false;
            }
        } 
        else {
            console.log("true");
            return true;
        }
    }
    else {
        console.log("false");
        return false;
    }
}
bisextile(2022);