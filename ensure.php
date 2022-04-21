<?php
include_once('config.php');
require_once('include/links.php');

?>
<link rel="stylesheet" href="css/ensure.css"/>
<title>Ensure</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-building-columns"></i> Find Destination</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link " href="../index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link customStyle" href="../roomDetails.php"><i class="fa-solid fa-magnifying-glass"></i> Find Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../blog.php"><i class="fa-solid fa-rss"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact.php"><i class="fa-solid fa-comment"></i> Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="publisher/publisherLogin.php"><i class="fa-solid fa-user-tie"></i> Publisher</a>
                        <a class="dropdown-item" href="Admin/adminLogin.php"><i class="fa-solid fa-lock"></i> Admin</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <header/>

<section>
    <div class="container mb-4">
        <h3 class="main-heading animate__animated animate__flipInX">Ensure</h3>
        <div class="underline"></div>
    </div>
</section>

<section>

    <?php
    if(isset($_REQUEST['id'])){
        $id=$_REQUEST['id'];
        $selectQuery="SELECT * FROM `family` WHERE `id`='$id'";
        $runQuery=mysqli_query($connect,$selectQuery);
        $row=mysqli_fetch_assoc($runQuery);
    }
    ?>
    <div class="billingDetails">
        <div class="container">
            <div class="row animate__animated animate__zoomIn">
                <div class="col-sm-5">
                    <div class="allInputBoxWrapper">
                        <h3 class="mb-4">Billing Details <span> (Fillup Carefully)</span></h3>
                        <form action="ensureCore.php" method="post">

                            <?php

                            if(isset($_REQUEST['right'])){
                                echo '<span class="text-success text-center">We Have Successfully Received Your Order! We Will Contact You Shortly !</span>';
                            }

                            ?>

                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?php echo $row['id']?>"  name="orderId" required>
                            </div>
                            <div class="form-group">
                                <label for="fullname">Full name*</label>
                                <input type="text" class="form-control" placeholder="Enter Full Name" name="userName" required>
                            </div>
                            <div class="form-group">
                                <label for="city">Email*</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="userEmail" required>
                            </div>
                            <div class="form-group">
                                <label for="district">NID/Student ID*</label>
                                <input type="text" class="form-control" placeholder="Enter NID/Student ID" name="nid" required>
                            </div>
                            <div class="form-group">

                                <input type="hidden" class="form-control" name="flatNumber" value="<?php echo $row['flatNumber']?>" >
                            </div>
                            <div class="form-group">

                                <input type="hidden" class="form-control" name="flatCategory" value="<?php echo $row['flat_category']?>" >
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?php echo $row['email']?>" name="publisherEmail" required>
                            </div>

                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-7">

                    <?php

                    if(isset($_REQUEST['right'])){
                        echo '<h3 class="text-center mt-4 mb-3 text-success">Yahoo!! Congratulations Sir.</h3>
                                <p class="text-center text-info">We Have Successfully Received Your Order! We Will Contact You Shortly <i class="fas fa-phone"></i></p>
                                ';
                    }else{

                        $rent= $row['rent'];
                        $vat=155;
                        $adminCharge=350;
                        $total=$rent+$adminCharge+$vat;

                        ?>

                        <div class="yourOrderWrapper">
                            <div class="orderHeading">
                                <h3>Your Order</h3>
                            </div>

                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">PRODUCT</th>
                                    <th scope="col">SUBTOTAL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><strong><img width="40" height="40"  src="publisher/family_room_images/<?php echo $row['photo']?>"/> Flat Id</strong></td>
                                    <td><strong class="text-success"><?php echo $row['id']?></strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Apartment Name</strong></td>
                                    <td><strong class="text-success"><?php echo $row['appertmentName']?></strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Flat Number</strong></td>
                                    <td><strong class="text-success"><?php echo $row['flatNumber']?></strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Category</strong></td>
                                    <td><strong class="text-success"><?php echo $row['flat_category']?></strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Flat Charge</strong></td>
                                    <td><strong class="text-success"><?php echo $row['rent']?>৳</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Admin Charge</strong></td>
                                    <td><strong class="text-success"><?php echo $adminCharge?>৳</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Vat</strong></td>
                                    <td><strong class="text-success"><?php echo $vat?>৳</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL  <small>Bkash Send Money (01717453205)</small></strong></td>
                                    <td><strong class="text-success"><?php echo $total?>৳</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <?php

                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
</section>



    <?php
    require_once('include/footer.php');
    ?>
