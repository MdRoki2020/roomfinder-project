<?php
require_once('include/links.php');
?>
<link rel="stylesheet" href="css/blog.css"/>
<title>Destination</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    <a class="nav-link customStyle" href="blog.php"><i class="fa-solid fa-rss"></i> Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php"><i class="fa-solid fa-comment"></i> Contact</a>
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
            <h3 class="main-heading animate__animated animate__flipInX">Blog</h3>
            <div class="underline"></div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="blogWrapper1 animate__animated animate__zoomIn">
                <div class="row mb-4">
                    <div class="col-lg-4 d-lg-flex">
                        <div class="card bg-dark singleCard">
                            <a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="images/blog1.jpg"/></a>
                            <div class="card-body">
                                <h4><a href="#">How to Own Your Audience by Creating an Email List</a></h4>
                                <p class="card-text">This is the best form of communicating with your customers. Even though social media gets a lot of attention,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex">
                        <div class="card bg-dark singleCard">
                            <a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="images/blog2.jpg"/></a>
                            <div class="card-body">
                                <h4><a href="#">Top 10 Toolkits for Deep Learning in 2020</a></h4>
                                <p class="card-text">Vs Code, PyTorch, Keras, Caffe are some of the popular tools which are being widely used to carry out Deep Learning algorithms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex">
                        <div class="card bg-dark singleCard">
                            <a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="images/blog3.jpg"/></a>
                            <div class="card-body">
                                <h4><a href="#">Everything You Need to Know About Web Accessibility</a></h4>
                                <p class="card-text">According to this guideline, web content should be perceivable, operable, understandable, robust, and conforming.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogWrapper2 animate__animated animate__zoomIn">
                <div class="row mb-4">
                    <div class="col-lg-4 d-lg-flex">
                        <div class="card bg-dark singleCard">
                            <a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="images/blog4.jpg"/></a>
                            <div class="card-body">
                                <h4><a href="#">How to Inject Humor & Comedy Into Your Brand</a></h4>
                                <p class="card-text">While I’ve always known that injecting humor into situations makes the mood lighter, I have hard data showing that comedy sells products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex">
                        <div class="card bg-dark singleCard">
                            <a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="images/blog5.jpg"/></a>
                            <div class="card-body">
                                <h4><a href="#">Men in Web Development: How To Achieve Success</a></h4>
                                <p class="card-text">Choose a Development Specialization. Each element of a website is linked to something else, and it's a complex job to build a website successfully. ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex">
                        <div class="card bg-dark singleCard">
                            <a href="#" class="d-block position-relative overflow-hidden"><img class="card-img-top" src="images/blog6.jpg"/></a>
                            <div class="card-body">
                                <h4><a href="#">Evergreen versus topical content: An overview</a></h4>
                                <p class="card-text">Content will either be topical or evergreen. You should always include both categories in your marketing strategy, as each has its ideal purpose.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="paginationBox">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item open"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                </ul>
            </div>
        </div>
    </section>



    <?php
    require_once('include/footer.php');
    ?>
