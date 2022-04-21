<?php
session_start();
require_once('config.php');
require_once('../include/links.php');
?>

<?php
if(!isset($_COOKIE['currentAdmin'])){
    header('location: adminLogin.php');
}
?>

<link rel="stylesheet" href="css/adminDashboard.css"/>
<title>Admin-Dashboard</title>
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
                    <a class="nav-link" href="../index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link customStyle" href="adminDashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="family_room.php"><i class="fa-solid fa-people-arrows-left-right"></i> Family Room List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bachelor_room.php"><i class="fa-solid fa-person"></i> Bachelor Room List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutCore.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                </li>

            </ul>
        </div>
    </nav>
<header/>

<section>
    <div class="container mb-4">
        <h3 class="main-heading animate__animated animate__flipInX">Admin Dashboard</h3>
        <div class="underline"></div>
    </div>
</section>
    <?php
    $publisher_selectQuery="SELECT * FROM `registered_user`";
    $publisher_runQuery=mysqli_query($connect,$publisher_selectQuery);
    $publisher_rowCount=mysqli_num_rows($publisher_runQuery);

    $order_selectQuery="SELECT * FROM `billing_details`";
    $order_runQuery=mysqli_query($connect,$order_selectQuery);
    $order_rowCount=mysqli_num_rows($order_runQuery);

    $family_selectQuery="SELECT * FROM `family`";
    $family_runQuery=mysqli_query($connect,$family_selectQuery);
    $family_rowCount=mysqli_num_rows($family_runQuery);

    $bachelor_selectQuery="SELECT * FROM `bachelor`";
    $bachelor_runQuery=mysqli_query($connect,$bachelor_selectQuery);
    $bachelor_rowCount=mysqli_num_rows($bachelor_runQuery);
    ?>

<section>
        <div class="dashboardWrapper">
            <div class="row animate__animated animate__zoomIn">
                <div class="col-sm-3">
                    <div class="singleDashboard">
                        <span>PUBLISHER</span>
                        <h2><?php echo $publisher_rowCount?></h2>
                        <span><i class="fa-solid fa-user-tie"></i></span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="singleDashboard">
                        <span>ORDER</span>
                        <h2><?php echo $order_rowCount ?></h2>
                        <span><i class="fa-solid fa-arrow-up-short-wide"></i></span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="singleDashboard">
                        <span>FAMILY ROOM</span>
                        <h2><?php echo $family_rowCount ?></h2>
                        <span><i class="fa-solid fa-house-chimney-window"></i></span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="singleDashboard">
                        <span>BACHELOR ROOM</span>
                        <h2><?php echo $bachelor_rowCount?></h2>
                        <span><i class="fa-solid fa-person"></i></span>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>

    <div>
        <span class="clintMszs animate__animated animate__zoomIn">Clint Orders <i class="fas fa-chevron-down"></i></span>
    </div>

    <div class="tableWrapper animate__animated animate__zoomIn">
        <table class="my-4 px-3 table table-striped table table-bordered table table-hover table-responsive">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">FLAT CATEGORY</th>
                <th scope="col">ORDER ID</th>
                <th scope="col">CLINT NAME</th>
                <th scope="col">CLINT EMAIL</th>
                <th scope="col">CLINT NID/STUDENT ID</th>
                <th scope="col">FLAT NUMBER</th>
                <th scope="col">PUBLISHER EMAIL</th>
                <th scope="col">ORDER TIME</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <?php
            $selectQuery="SELECT * FROM `billing_details`";
            $runQuery=mysqli_query($connect,$selectQuery);
            while($row=mysqli_fetch_assoc($runQuery)){?>
                <tbody>
            <tr>
                <td scope="row"><?php echo $row['userId']?></td>
                <td><?php echo $row['flatCategory']?></td>
                <td><?php echo $row['orderId']?></td>
                <td><?php echo $row['userName']?></td>
                <td><?php echo $row['userEmail']?></td>
                <td><?php echo $row['nid']?></td>
                <td><?php echo $row['flatNumber']?></td>
                <td><a href='mailto: <?php echo $row['publisherEmail']?>'>Click & Mail Publisher</a></td>
                <td><?php echo $row['orderTime']?></td>
                <td><a onclick="alert('Are U Sure ?')" class="btn btn-danger" href="order_remove_core.php?id=<?php echo $row['userId']?>">Remove Order <i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</section>





    <?php
    require_once('../include/footer.php');
    ?>
