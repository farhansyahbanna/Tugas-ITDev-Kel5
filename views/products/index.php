

<?php
    require_once '../../app/config/config.php';
    /require_once __DIR__'../../app/controllers/ProductsContorller.php';
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";


?>
    
<section id="Get_Product">
    <div class="text-header text-center">
        <h3 align="center" style="padding-bottom: 40px;">Get Product</h3>   
    </div>
        <?php 
    echo "<pre>";
    print_r($products); // Untuk menampilkan data produk
    echo "</pre>";
    ?>

</section>

<!-- <script src="<?=BASEURL?>/public/js/index.js"></script> -->
<?php
    require_once VIEWS . "partials/footer.php";
?>
