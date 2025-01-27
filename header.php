<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tasty Recipes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="home.php">
                                    <h1 style="color:white;">Well<span style="color:red;">fed</span></h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="main-menu <?php if(basename($_SERVER['PHP_SELF']) !== 'home.php') echo 'white_text'; ?> d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                    <?php
                                    if ($_SESSION['type'] == 'Admin') {
                                    ?>
                                        <li><a href="home.php">home</a></li>
                                        <li><a href="category.php">Category</a></li>
                                        <li><a href="add-chef.php">Add Chef</a></li>
                                        <li><a href="delivery-person.php">Delivery</a></li>
                                        <li><a href="view-order.php">View orders</a></li>
                                        <li><a href="manage-users.php">Manage Users</a></li>
                                        <li><a href="payment-view.php">Payments</a></li>
                                        <li><a href="include/logout.php">Logout</a></li>
                                    <?php
                                    } elseif ($_SESSION['type'] == 'Chef'){
                                    ?>
                                        <li><a href="home.php">home</a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="add-food.php">Add food</a></li>
                                        <li><a href="view-order.php">View orders</a></li>
                                        <li><a href="view-review.php">View review</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="include/logout.php">Logout</a></li>
                                    <?php
                                    } elseif ($_SESSION['type'] == 'Delivery person'){
                                    ?>
                                        <li><a href="home.php">home</a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="delivery-orders.php">Delivery Orders</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="include/logout.php">Logout</a></li>
                                    <?php
                                    } else{
                                    ?>
                                        <li><a href="home.php">home</a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="food.php">Recipee</a></li>
                                        <li><a href="orders.php">Orders</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="include/logout.php">Logout</a></li>
                                    <?php
                                    }
                                    ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                        <?php
                            if ($_SESSION['type'] == 'Customer') {
                        ?>
                            <div class="search_icon">
                                <a href="checkout.php">
                                    <i class="bi bi-cart-check-fill"></i>
                                </a>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->