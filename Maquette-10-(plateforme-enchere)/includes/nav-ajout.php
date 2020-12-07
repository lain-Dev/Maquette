<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">Toto &#9400;orp</a>

    <button type="button" class="btn btn-info border-0 btn-login"><a href="<?php echo $_SESSION['pageLogin'] ?>" class="text-white"><?php echo $_SESSION['nomBouton'] ?></a></button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Administration enchère
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="page-produitOff.php">Voir produits désactiver</a>
                </div>
            </li>
        </ul>
    </div>
</nav>