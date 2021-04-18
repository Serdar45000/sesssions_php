<?php 

        require 'inc/data/products.php'; 
        require 'inc/head.php';

        session_start();
        if(empty($_SESSION['loginname'])) 
        {
          header('Location: login.php');
          exit();
        }
?>
<section class="cookies container-fluid">
                    <div class="container-fluid text-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php if(isset($_SESSION['loginname'])){ ?>
                                <span class="btn" aria-hidden="true"> Bienvenue
                                <?php {echo htmlentities(trim($_SESSION['loginname'])); }?> 
                                <a href="/login.php" class="btn btn-primary">D&eacute;connexion</a>
                                </span>  
                                <?php }?>
                            </li>
                        </ul>
                    </div>
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
