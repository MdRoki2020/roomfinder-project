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
<title>Bachelor-Room-List</title>
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
                    <a class="nav-link " href="adminDashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="family_room.php"><i class="fa-solid fa-people-arrows-left-right"></i> Family Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link customStyle" href="bachelor_room.php"><i class="fa-solid fa-person"></i> Bachelor Room</a>
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
            <h3 class="main-heading animate__animated animate__flipInX">Bachelor Room List</h3>
            <div class="underline"></div>
        </div>
    </section>

    <div>
        <span class="clintMszs animate__animated animate__flipInX">Bachelor Room List <i class="fas fa-chevron-down"></i></span>
    </div>

    <div class="tableWrapper animate__animated animate__zoomIn">
        <table class="my-4 table table-striped table-bordered table-hover table-responsive">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">FLAT CATEGORY</th>
                <th scope="col">PUBLISHER EMAIL</th>
                <th scope="col">APARTMENT NAME</th>
                <th scope="col">FLAT NUMBER</th>
                <th scope="col">LOCATION/AREA</th>
                <th scope="col">FLAT DESCRIPTION</th>
                <th scope="col">FLAT RENT</th>
                <th scope="col">FLAT PHOTO</th>
                <th scope="col">POST TIME</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <?php
            $selectQuery="SELECT * FROM `bachelor`";
            $runQuery=mysqli_query($connect,$selectQuery);
            while($row=mysqli_fetch_assoc($runQuery)){?>
                <tbody>
                <tr>
                    <td scope="row"><?php echo $row['id']?></td>
                    <td><?php echo $row['flat_category']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['appertmentName']?></td>
                    <td><?php echo $row['flatNumber']?></td>
                    <td><?php echo $row['location']?></td>
                    <td><?php echo $row['description']?></td>
                    <td><?php echo $row['rent']?></td>
                    <td><img width="50" height="50" src="../publisher/bachelor_room_images/<?php echo $row['photo']?>" alt=""/></td>
                    <td><?php echo $row['submitTime']?></td>
                    <td><a onclick="alert('Are U Sure ?')" class="btn btn-danger" href="bachelor_room_delete_core.php?id=<?php echo $row['id']?>">Delete <i class="fa-solid fa-trash-can"></i></a></td>
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


