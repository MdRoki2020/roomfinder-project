<?php
require_once('../include/links.php');
?>
<link rel="stylesheet" href="css/adminLogin.css"/>
<title>Admin-Login</title>
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
                    <a class="nav-link " href="../findRoom.php"><i class="fa-solid fa-circle-info"></i> Find Room</a>
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
                        <a class="dropdown-item " href="../publisher/publisherLogin.php"><i class="fa-solid fa-user-tie"></i> Publisher</a>
                        <a class="dropdown-item customStyle" href="adminLogin.php"><i class="fa-solid fa-lock"></i> Admin</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <header/>

    <section>
        <div class="container mb-4">
            <h3 class="main-heading animate__animated animate__flipInX">Admin Login</h3>
            <div class="underline"></div>
        </div>
    </section>

    <section class="loginBoxWrapper">
        <div class="container">
            <div class="row animate__animated animate__zoomIn">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="login">
                        <h3>Login</h3>
                        <p>Login To Your Account</p>
                        <div class="popUpmsz text-center text-danger font-weight-bold">
                            <?php
                            if(isset($_REQUEST['wrong'])){
                                echo "Invalid Email Or Password !";
                            }
                            ?>
                        </div>
                        <form action="adminLoginCore.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Login</button>
                        </form>
                    </div>
                    <div class="loginContains">
                        <p class="text-center">Privacy Policy Tearms Of Use</p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>



    <?php
    require_once('../include/footer.php');
    ?>
