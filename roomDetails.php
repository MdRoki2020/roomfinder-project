<?php
require_once('config.php');
require_once('include/links.php');

if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
}
?>
<link rel="stylesheet" href="css/roomDetails.css"/>
<title>Room-Details</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="/"><i class="fa-solid fa-building-columns"></i> Find Destination</a>
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
                    <a class="nav-link " href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link customStyle" href="roomDetails.php"><i class="fa-solid fa-circle-info"></i> Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php"><i class="fa-solid fa-rss"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fa-solid fa-comment"></i> Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="publisherLogin.php"><i class="fa-solid fa-user-tie"></i> Publisher</a>
                        <a class="dropdown-item" href="Admin/adminLogin.php"><i class="fa-solid fa-lock"></i> Admin</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <header/>

    <section>
        <div class="container mb-4">
            <h3 class="main-heading animate__animated animate__flipInX">Details</h3>
            <div class="underline"></div>
        </div>
    </section>

    <?php
    $selectQuery="SELECT * FROM `family` WHERE `id`='$id'";
    $runQuery=mysqli_query($connect,$selectQuery);
    $row=mysqli_fetch_assoc($runQuery);
    ?>
    <section class="productDetailsWrapper">
        <div class="productDetails">
            <div class="container">
                <div class="row animate__animated animate__zoomIn">
                    <div class="col-sm-4">
                        <div class="SingleProductImage">
                            <img id="zoom_01" width="350" height="250" class="zoom img-fluid img-thumbnail" src="publisher/family_room_images/<?php echo $row['photo']?>" data-zoom-image="publisher/family_room_images/<?php echo $row['photo']?>"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="singleProductDetails">
                            <h3><?php echo $row['appertmentName']?></h3>
                            <p><b>Flat Number:</b> <i><?php echo $row['flatNumber']?></i></p>
                            <p><b>Location:</b> <i><?php echo $row['location']?></i></p>
                            <p><b>Description:</b> <i><?php echo $row['description']?></i></p>
                            <p><b>Category:</b> <i><?php echo $row['flat_category']?></i></p>
                            <p><b>Rent:</b> <i><?php echo $row['rent']?> ৳</i></p>
                        </div>
                        <div class="buttonWrapper mb-3">
                            <a href="ensure.php?id=<?php echo $row['id']?>"><button class="btn btn-primary "><i class="fas fa-shopping-bag"></i> Ensure</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="deliveryOptions">
                            <span class="option"> <i class="fas fa-exclamation-circle"></i> Options</span>
                            <p class="option"><i class="fa-solid fa-money-bill-1"></i> Payment First</p>
                            <p class="option"><i class="fa-solid fa-user-astronaut"></i> Admin Charge<span class="taka"></span></p>
                            <p class="option"><i class="fa-brands fa-researchgate"></i> Requirement Available</p>
                            <span class="option returnsWarranty"><i class="fas fa-exchange-alt"></i> Return & Warranty</span>
                            <p class="option return mt-2"><i class="fas fa-undo-alt"></i> Return Not Available</p>
                            <p class="option"><i class="far fa-calendar-alt"></i> Warranty Not Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="postMetaWrapper mb-3">
        <div class="container">
            <div class="row animate__animated animate__zoomIn">
                <div class="col-sm-3">
                    <div class="popularPost mt-4 ">
                        <h5>POPULAR POSTS</h5>
                        <hr/>
                        <div class="Post1 ">
                            <span><img width="60" height="60" src="images/post1.jpg"/> Nature</span>
                        </div>
                        <div class="post2 mt-3">
                            <span><img width="60" height="60" src="images/post2.jpg"/> Shopping for New Dress</span>
                        </div>
                        <div class="post3 mt-3">
                            <span><img width="60" height="60" src="images/post3.jpg"/> Breathtaking Places</span>
                        </div>
                        <div class="post4 mt-3">
                            <span><img width="60" height="60" src="images/post4.jpg"/> Fashion Trend</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="archive mt-4 ">
                        <h5>ARCHIVE</h5>
                        <hr/>
                        <ul>
                            <li><i class="fas fa-arrows-alt"></i> <?php echo date('Y'); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="categories mt-4 ">
                        <h5>CATEGORIES</h5>
                        <hr/>
                        <ul>
                            <li><i class="fas fa-arrows-alt"></i> Fruits And Vegetables</li>
                            <li><i class="fas fa-arrows-alt"></i> Electronics</li>
                            <li><i class="fas fa-arrows-alt"></i> Beauty Products</li>
                            <li><i class="fas fa-arrows-alt"></i> Beverages</li>
                            <li><i class="fas fa-arrows-alt"></i> Health Products</li>
                            <li><i class="fas fa-arrows-alt"></i> Cooking</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="meta mt-4 ">
                        <h5>META</h5>
                        <hr/>
                        <ul>
                            <li><i class="fas fa-arrows-alt"></i> Log in</li>
                            <li><i class="fas fa-arrows-alt"></i> Entries feed</li>
                            <li><i class="fas fa-arrows-alt"></i> Comments feed</li>
                            <li><i class="fas fa-arrows-alt"></i> WordPress.org</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once('include/footer.php');
    ?>
