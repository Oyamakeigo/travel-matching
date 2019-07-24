<?php
require_once("common/head.php");
require_once "../classes/Category.php";

$category = new Category;
$category_id = $_GET['category_name'];
$get_category = $category->selectOne($category_id);

?>
<style>
    header .navbar {
        background: #000 !important;
    }
</style>
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center mb-2">
                <h2><span>This is <?php echo $get_category['category_name']; ?></span></h2>
                
            </div>
        
        <div class="row top-destination">
            <div>
                <a href="culture.php" class="place">
                    <img src="images/img_1.jpg" alt="Image placeholder">
                    <h2 class="text-center">LANGUAGE</h2>

                </a>
            </div>

        </div>
        </div>
    </div>
</section>


<?php 
require_once "common/foot.php";
?>