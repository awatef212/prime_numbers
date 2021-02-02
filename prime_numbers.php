<?php

function prime_numbers($n) 
{
   //boucle de 2 à n-1
    for ($i = 2; $i < $n; $i++) 
    {
        //si n est divisible par i (qui est différent de 1 et lui-même), alors il n'est pas premier, on retourne false
        if ($n % $i == 0)
        {
            return FALSE;
        }
    }
 
    //sinon aucun diviseur (hors 1 et n) trouvé, n n'est pas premier, retourner false
    return TRUE;
}

//test du programme : 

echo intval(prime_numbers(19)); // renvoi 1, veut dire true, 19 est bien premier ça fonctionne
echo intval(prime_numbers(10)); // renvoi 0, veut dire false, 10 est bien non premier ça fonctionne

?>

