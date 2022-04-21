<?php
require_once('include/links.php');
require_once('config.php');
?>
<link rel="stylesheet" href="css/family.css"/>
<title>Find-Room</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="/"><i class="fa-solid fa-building-columns"></i> Find Destination</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="" method="post" class="form-inline my-2 my-lg-0 mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Area" name="searchLocation" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link " href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link customStyle" href="findRoom.php"><i class="fa-solid fa-magnifying-glass"></i> Find Rooms</a>
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
            <h3 class="main-heading">Rooms</h3>
            <div class="underline"></div>
        </div>
    </section>

    <section class="mb-4">
        <div class='container'>

<!--for family-->
            <div class='row d-block d-lg-flex animate__animated animate__zoomIn'>
                <?php
                if(isset($_REQUEST['searchLocation'])) {
                    $searchItem = $_REQUEST['searchLocation'];
                }

                    $selectQuery = "SELECT * FROM `family` WHERE `location` LIKE '%$searchItem%'";
                    $runQuery = mysqli_query($connect, $selectQuery);


                while($row=mysqli_fetch_assoc($runQuery)){ ?>
                    <div class="col-lg-2 d-block d-lg-flex singleProducts mb-4">
                        <div class="card">
                            <img class="card-img-top" src="publisher/family_room_images/<?php echo $row['photo']?>" alt='family flat image'/>
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $row['appertmentName']?></b></h5>
                                <p class="card-text"><b>Location:</b> <i><?php echo $row['location']?></i></p>
                                <p class="card-text"><b>Rent:</b><i><?php echo $row['rent']?></i></p>
                                <a href="roomDetails.php?id=<?php echo $row['id']?>"><button class='btn btn-success shadow'><i class="fa-solid fa-circle-info"></i> Details</button></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

<!--            for bachelor-->
            <div class='row d-block d-lg-flex animate__animated animate__zoomIn'>
                <?php
                if(isset($_REQUEST['searchLocation'])) {
                    $search = $_REQUEST['searchLocation'];
                }
                    $selectQuery="SELECT * FROM `bachelor` WHERE location LIKE '%$search%'";
                    $runQuery=mysqli_query($connect,$selectQuery);


                while($row=mysqli_fetch_assoc($runQuery)){?>
                    <div class="col-lg-2 d-block d-lg-flex singleProducts mb-4">
                        <div class="card">
                            <img class="card-img-top" src="publisher/bachelor_room_images/<?php echo $row['photo']?>" alt='family flat image'/>
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $row['appertmentName']?></b></h5>
                                <p class="card-text"><b>Location:</b> <i><?php echo $row['location']?></i></p>
                                <p class="card-text"><b>Rent:</b><i><?php echo $row['rent']?></i></p>
                                <a href="b_roomDetails.php?id=<?php echo $row['id']?>"><button class='btn btn-success shadow'><i class="fa-solid fa-circle-info"></i> Details</button></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <?php
    require_once('include/footer.php');
    ?>
