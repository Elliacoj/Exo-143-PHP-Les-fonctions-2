<?php
//exo1
function returnTrue($bool) {
    if(is_bool($bool)) {
        return true;
    }
    return false;
}

//exo2
function stringReturn(String $monString) {
    return $monString;
}

//exo3
function stringReturn2(String $monString, String $monSecondS) {
    return $monString . $monSecondS;
}

//exo4
function compar(Int $number1, Int $number2) {
    if($number1 > $number2) {
        return "Le nombre " . $number1 . " est plus grand";
    }
    elseif($number1 < $number2) {
        return "Le nombre " . $number1 . " est plus petit";
    }
    else {
        return "Les 2 nombres sont égaux";
    }
}

//exo5

function stringReturn3(String $monString, Int $monNumber) {
return $monString . $monNumber;
}

//exo6
function salutation(String $nom, String $prenom, Int $age) {
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans";
}

//exo7
function exo7(Int $age, $genre) {
    if($genre === "Homme" || $genre === "homme") {
        if($age > 17) {
            return "Vous êtes un homme et vous êtes majeur";
        }
        else {
            return "Vous êtes un homme et vous êtes mineur";
        }
    }
    elseif ($genre === "Femme" || $genre === "femme") {
        if($age > 17) {
            return "Vous êtes une femme et vous êtes majeur";
        }
        else {
            return "Vous êtes une femme et vous êtes mineur";
        }
    }
    else {
        return "Veuillez indiquer Homme ou Femme dans le genre";
    }
}
echo exo7(5, "Homme");

//exo8
function exo8(Int $number1 = 1, Int $number2 = 2, Int $number3 = 3) {
    return $number1 + $number2 + $number3;
}