<?php
require_once("common/head.php");
require_once "../classes/User.php";

$user = new User;
$get_user = $user->selectOne($id)

?>
<style>
    header .navbar {
        background: #000 !important;
    }
</style>
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">


            <div class="container">

                <!-- Outer Row -->
                <div class="row justify-content-center">

                    <div class="col-xl-6 col-lg-12 col-md-9">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <div class="card-body text-center">
                                                <h1 class="h4 text-gray-900 mb-4">User Review</h1>
                                            </div>
                                            <div class="card">
                                                <div class="form-group">
                                                    <div class="text-center">User Name</div>
                                                    <div class="text-center"><?php echo $get_user['username'] ?></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-center">First Name</div>
                                                    <div class="text-center"><?php echo $get_user['firstname'] ?></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-center">Last Name</div>
                                                    <div class="text-center"><?php echo $get_user['lastname'] ?></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-center">User Email</div>
                                                    <div class="text-center"><?php echo $get_user['email'] ?></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-center">User Bio</div>
                                                    <div class="text-center"><?php echo $get_user['bio'] ?></div>
                                                </div>

                                            </div>
                                            <div class="text-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php 
require_once "common/foot.php";
?>