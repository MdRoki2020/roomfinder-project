<?php
require_once('include/links.php');
?>
    <link rel="stylesheet" href="css/index.css"/>
    <title>Destination</title>
</head>
    <body onload="invisible()">
    <!-- --------preloader start--------- -->
    <div id="loading-page">
            <div class="container">
                <div class="imageBox">
                    <img class="img-fluid" id="loader_gif" src="images/loading1.gif"/>
                </div>
            </div>
    </div>
<!-- --------preloader end--------- -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <a class="navbar-brand" href="/"><i class="fa-solid fa-building-columns"></i> Find Destination</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="" method="post" class="form-inline my-2 my-lg-0 mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="searchRoom" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link customStyle" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="findRoom.php"><i class="fa-solid fa-magnifying-glass"></i> Find Room</a>
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
    <div class="sliderImage">
        <div class="container">
            <div class="slidercontains">
                <h1 class="animate__animated animate__fadeInLeftBig">Best Quality Rooms Our Collection</h1>
                <p class="animate__animated animate__fadeInLeftBig">Mauris mattis auctor cursus. Phasellus tellus tellus</p>
                <p class="animate__animated animate__fadeInLeftBig"> imperdiet ut imperdiet eu, iaculis a sem.</p>
                <button class="my-4 btn btn-warning shadow animate__animated animate__fadeInUpBig">More Details</button>
            </div>
        <div>
    </div>
</section>

<section class="mb-4 catagories">
    <div class="container py-4 catagoriesContains">
        <h3 class="main-heading text-center">Categories</h3>
        <div class="underline mx-auto"></div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="family.php">
                    <div class="contains">
                        <img class="img-fluid img-thumbnail" src="images/family.jpg" alt=""/>
                        <h2 class="contains centered">Family</h2>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="bachelor.php">
                    <div class="contains">
                        <img class="img-fluid img-thumbnail" src="images/bachelor.jpg" alt=""/>
                        <h2 class="contains centered">Bachelor</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="feedback border-top pb-4">
    <div class="container py-4 feedbackContains">
        <h3 class="main-heading text-center">Feedback</h3>
        <div class="underline mx-auto"></div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="singleBox">
                    <div class="singleBoxImg"><img class="img-thumbnail rounded-circle" src="images/mizan.jpg" alt=""/></div>
                    <div class="avaterName"><strong>Mizan</strong></div>
                    <div class="ratingIcon"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> </div>
                    <div class="title">RoomFinder is a good choice for me</div>
                    <div class="description"><p><i>I'm a student with a small budget, so I love going through Roomster for sharing my room.  It makes finding roommates faster and more efficient.  Roomster is a good choice for me!</i></p></div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="singleBox">
                    <div class="singleBoxImg"><img class="img-thumbnail rounded-circle" src="images/noor.jpg" alt=""/></div>
                    <div class="avaterName"><strong>Noor</strong></div>
                    <div class="ratingIcon"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></div>
                    <div class="title">RoomFinder is a good choice for me</div>
                    <div class="description"><p><i>I'm a student with a small budget, so I love going through Roomster for sharing my room.  It makes finding roommates faster and more efficient.  Roomster is a good choice for me!</i></p></div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="singleBox">
                    <div class="singleBoxImg"><img class="img-thumbnail rounded-circle" src="images/nafisa.jpg" alt=""/></div>
                    <div class="avaterName"><strong>Nafisa</strong></div>
                    <div class="ratingIcon"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div>
                    <div class="title">RoomFinder is a good choice for me</div>
                    <div class="description"><p><i>I'm a student with a small budget, so I love going through Roomster for sharing my room.  It makes finding roommates faster and more efficient.  Roomster is a good choice for me!</i></p></div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="singleBox">
                    <div class="singleBoxImg"><img class="img-thumbnail rounded-circle" src="images/roki.jpg" alt=""/></div>
                    <div class="avaterName"><strong>Roki</strong></div>
                    <div class="ratingIcon"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-solid fa-star-half-stroke"></i> </div>
                    <div class="title">RoomFinder is a good choice for me</div>
                    <div class="description"><p><i>I'm a student with a small budget, so I love going through Roomster for sharing my room.  It makes finding roommates faster and more efficient.  Roomster is a good choice for me!</i></p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="googleMap">
    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

<?php
require_once('include/footer.php');
?>