<?php
require_once('include/links.php');
?>
    <link rel="stylesheet" href="css/contact.css"/>
    <title>Destination</title>
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
                        <a class="nav-link" href="findRoom.php"><i class="fa-solid fa-magnifying-glass"></i> Find Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php"><i class="fa-solid fa-rss"></i> Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link customStyle" href="contact.php"><i class="fa-solid fa-comment"></i> Contact</a>
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
        <h3 class="main-heading animate__animated animate__flipInX">Anything Wrong? Contact Admin !</h3>
        <div class="underline"></div>
    </div>
</section>

<section>
    <div class='section'>
        <div class='container'>
            <div class='card shadow'>
                <div class='card-body'>
                    <div class='row animate__animated animate__zoomIn'>
                        <div class='col-md-6'>
                            <h6>Contact Form & Write Your Feedback</h6>
                            <hr />
                            <div class='form-group'>
                                <label class='mb-1'>Full Name</label>
                                <input type='text' class='form-control' placeholder='Enter Full Name'/>
                            </div>
                            <div class='form-group'>
                                <label class='mb-1'>Phone Number</label>
                                <input type='text' class='form-control' placeholder='Enter Full Name'/>
                            </div>
                            <div class='form-group'>
                                <label class='mb-1'>Email Address</label>
                                <input type='text' class='form-control' placeholder='Enter Full Name'/>
                            </div>
                            <div class='form-group'>
                                <label class='mb-1'>Message</label>
                                <textarea rows="3" class='form-control' placeholder="Type your message.."></textarea>
                            </div>
                            <div class='form-group py-3'>
                                <button type='button' class='btn btn-primary shadow w-100'>Send Message</button>
                            </div>
                        </div>
                        <div class='col-md-6 border-start'>
                            <h5 class='main-heading'>Address Information</h5>
                            <div class='underline'></div>
                            <p>
                                #XXX Bangladesh, Rangpur
                            </p>
                            <p>
                                Phone: +91 88XXXXXX
                            </p>
                            <p>
                                Email: email: mroki815@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once('include/footer.php');
?>