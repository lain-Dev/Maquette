<?php 
//Si la méthode pour accéder à la page est "POST", lorsqu'il y a une requête "POST" pour l'un des produits (aka que quelqu'un à cliquer sur le bouton "acheter") le prix du produit augmente de 0.02.
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_un']))
{
   
        $_SESSION['produit_un']+=0.02;
    
}


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_deux']))
{
   
        $_SESSION['produit_deux']+=0.02;
   
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_trois']))
{
  
        $_SESSION['produit_trois']+=0.02;
   
} 


if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_quatre']))
{
        $_SESSION['produit_quatre']+=0.02;
    
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_cinq']))
{
    
        $_SESSION['produit_cinq']+=0.02;
    
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['produit_csix']))
{
 
        $_SESSION['produit_six']+=0.02;
    
}
