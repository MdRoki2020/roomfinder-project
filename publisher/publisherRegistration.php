<?php
require_once('../include/links.php');
?>
<link rel="stylesheet" href="css/publisherRegistration.css"/>
<title>Publisher-Login</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">Room Finder</a>
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
                        <a class="dropdown-item customStyle" href="publisherLogin.php"><i class="fa-solid fa-user-tie"></i> Publisher</a>
                        <a class="dropdown-item" href="../Admin/adminLogin.php"><i class="fa-solid fa-lock"></i> Admin</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <header/>

    <section>
        <div class="container mb-4">
            <h3 class="main-heading">Publisher Registration</h3>
            <div class="underline"></div>
        </div>
    </section>

    <section class="loginBoxWrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="login">
                        <h3>Registration</h3>
                        <p>Register To Your Account</p>
                        <div class="text-center text-success font-weight-bold">
                            <?php
                            if(isset($_REQUEST['right'])){
                                echo 'Your Registration Is Done <i class="fa-solid fa-face-smile"></i>';
                            }
                            ?>
                        </div>
                        <div class="text-center text-danger font-weight-bold">
                            <?php
                            if(isset($_REQUEST['pasNotMatch'])){
                                echo 'Do Not Match Confirm Password <i class="fa-solid fa-face-frown"></i>';
                            }
                            ?>
                        </div>
                        <div class="text-center text-danger font-weight-bold">
                            <?php
                            if(isset($_REQUEST['exist'])){
                                echo 'User Already Exist <i class="fa-solid fa-face-frown"></i>';
                            }
                            ?>
                        </div>
                        <form action="publisherRegistrationCore.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name *</label>
                                <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="name" placeholder="Enter Full Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address *</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email " required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password *</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name='password' required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password *</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter confirm Password" name="confirmPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="photo">Publisher Photo *</label>
                                <input type="file" class="form-control" id="photo" placeholder="Enter Room photo" name="photo" required />
                            </div>
                            <button type="submit" class="btn btn-primary form-control">Registration</button>
                        </form>
                    </div>
                    <div class="loginContains">
                        <p class="text-center">Already Registered ? <a href="publisherLogin.php"><b>Login</b></a></p>
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
