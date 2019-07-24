<?php
require_once("common/head.php");
require_once "../classes/Country.php";

$country = new Country;
$country_id = $_GET['country'];
$get_country = $country->selectOne($country_id);

?>
<style>
    header .navbar {
        background: #000 !important;
    }
</style>
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center mb-2">
                <h2><span>This is <?php echo $get_country['country_name']; ?></span></h2>
                <p>What Category of Country Do You Want To Know?</p>
            </div>
        </div>
        <div class="row top-destination">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <form action="result_culture.php" method="get">
                    <input type="hidden" name="country_id" value="<?php echo $_GET['country'];?>">
                    <h2 class="text-center">CULTURE</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium nemo quis mollitia inventore
                        magnam tempore facilis dignissimos reiciendis nesciunt blanditiis itaque, sapiente maxime
                        eveniet id molestiae nulla sed deserunt quaerat?</p>


                    <button type="submit" class="btn btn-warning " name="view">View</button>
                </form>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <form action="result_history.php" method="get">
                <input type="hidden" name="country_id" value="<?php echo $_GET['country'];?>">
                    <h2 class="text-center">HISTORY</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae et possimus iure fuga
                        illo modi temporibus a dicta nesciunt? Minus pariatur fugiat et, debitis expedita accusamus.
                        Culpa, unde aliquid?</p>
                    <button type="submit" class="btn btn-warning " name="view">View</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <form action="result_language.php" method="get">
                <input type="hidden" name="country_id" value="<?php echo $_GET['country'];?>">
                    <h2 class="text-center">LANGUAGE</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi numquam totam temporibus eos
                        aliquid enim voluptas cumque labore cupiditate, accusamus corporis facere consequatur
                        doloremque, eaque nobis non laudantium, minus voluptates.</p>

                    <button type="submit" class="btn btn-warning" name="view">View</button>

                </form>
            </div>

        </div>
    </div>
</section>

<?php
require_once "common/foot.php";
?>