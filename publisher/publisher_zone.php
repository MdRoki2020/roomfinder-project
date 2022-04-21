<?php
session_start();
require_once('../include/links.php');
require_once('config.php');
?>
<?php
if(!isset($_COOKIE['currentUser'])){
    header('location: publisherLogin.php');
}

if(isset($_COOKIE['currentUser'])){
    $crntUser=$_COOKIE['currentUser'];
}
?>

<link rel="stylesheet" href="css/publisherZone.css"/>
<title>Publisher-zone</title>
</head>
<body>
<?php
$selectQuery="SELECT * FROM `registered_user` WHERE `email`='$crntUser'";
$runQuery=mysqli_query($connect,$selectQuery);
$row=mysqli_fetch_assoc($runQuery);
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">Room Finder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="email mr-auto">
                <span>Login Id: </span><span class="text-success font-weight-bold"><?php echo $row['email']?></span>
            </div>
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link customStyle" href="publisher_zone.php"><i class="fa-solid fa-chart-line"></i> Publisher Zone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../blog.php"><i class="fa-solid fa-rss"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact.php"><i class="fa-solid fa-comment"></i> Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutCore.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                </li>

            </ul>
        </div>
    </nav>
<header/>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <h3 class="main-heading animate__animated animate__flipInX">Publisher Zone</h3>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="user_profile animate__animated animate__backInRight">
                    <img class="img-thumbnail" src="publisher_images/<?php echo $row['photo']?>" alt=""/>
                </div>
                <div class="profile_name animate__animated animate__backInUp">
                    <h4><?php echo $row['name']?></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row animate__animated animate__zoomIn">
            <div class="col-md-6">
                <div class="singleAddFlat">
                    <h3>Add Family Flat</h3>
                    <div class="text-center text-success">
                        <?php
                        if(isset($_REQUEST['familyRight'])){
                            echo "Your Flat Insert Successfully !";
                        }
                        ?>
                    </div>
                    <form action="familyFlat_core.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="product_category">Category *</label>
                            <select class="form-control" name="flat_category" required>
                                <option value="family">Family</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_title">Email *</label>
                            <input type="email" class="form-control" id="product_title" placeholder="Enter Your Email" name="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_title">Appertment Name *</label>
                            <input type="text" class="form-control" id="product_title" placeholder="Enter Appertment Name" name="appertmentName" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_desc">Flat Number *</label>
                            <input type="text" class="form-control" id="product_desc" placeholder="Enter Flat Number" name="flatNumber" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Location *</label>
                            <input type="text" class="form-control" id="product_price" placeholder="Enter Location" name="location" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Description *</label>
                            <input type="text" class="form-control" id="product_price" placeholder="Enter Flat Description" name="description" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Rent *</label>
                            <input type="number" class="form-control" id="product_price" placeholder="Enter Rent" name="rent" required/>
                        </div>
                        <div class="form-group">
                            <label for="photo">Room Photo *</label>
                            <input type="file" class="form-control" id="photo" placeholder="Enter Room photo" name="photo" required />
                        </div>
                        <button type="submit" class="btn btn-primary form-control" value="submit" name="submit">Add Flat</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="singleAddFlat">
                    <h3>Add Bachelor Flat</h3>
                    <div class="text-center text-success">
                        <?php
                        if(isset($_REQUEST['bachelorRight'])){
                            echo "Your Flat Insert Successfully !";
                        }
                        ?>
                    </div>
                    <form action="bachelorFlat_core.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="product_category">Category *</label>
                            <select class="form-control" name="flat_category" required>
                                <option value="bachelor">Bachelor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_title">Email *</label>
                            <input type="email" class="form-control" id="product_title" placeholder="Enter Your Email" name="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_title">Appertment Name *</label>
                            <input type="text" class="form-control" id="product_title" placeholder="Enter Appertment Name" name="appertmentName" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_desc">Flat Number *</label>
                            <input type="text" class="form-control" id="product_desc" placeholder="Enter Flat Number" name="flatNumber" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Location *</label>
                            <input type="text" class="form-control" id="product_price" placeholder="Enter Location" name="location" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Description *</label>
                            <input type="text" class="form-control" id="product_price" placeholder="Enter Flat Description" name="description" required/>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Rent *</label>
                            <input type="number" class="form-control" id="product_price" placeholder="Enter Rent" name="rent" required/>
                        </div>
                        <div class="form-group">
                            <label for="photo">Room Photo *</label>
                            <input type="file" class="form-control" id="photo" placeholder="Enter Room photo" name="photo" required />
                        </div>
                        <button type="submit" class="btn btn-primary form-control" value="submit" name="submit">Add Flat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>







    <?php
    require_once('../include/footer.php');
    ?>
