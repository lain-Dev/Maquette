  
<div class="card m-5" style="width: 18rem;">
  <img src="<?php echo $_SESSION['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_SESSION['name'] ?></h5>
    <p class="card-text">
        descrition: <?php echo $_SESSION['description'] ?> <br>
        prix: <?php echo $_SESSION['prixinit'] ?> <br>
        prix du clic: <?php echo $_SESSION['prixClic'] ?> <br>
    </p>
    <a href="#" class="btn btn-large btn-danger">Enchérir</a>
  </div>
</div>

