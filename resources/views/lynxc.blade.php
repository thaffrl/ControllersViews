<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LYNXC Streaming</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <style>
        h3 {
            color: white;
        }
        .bg-purple {
            background-color: black !important;
        }

        #main a {
            color: gray;
        }

        #main a:hover {
            color: rgb(73, 73, 73);
        }

        img.img-fluid {
            max-width: 100%; /* Memastikan gambar tidak melebihi ukuran wadah */
            height: auto; /* Mempertahankan rasio aspek gambar */
        }

        #footer a {
            text-decoration: none;
            color: black;
        }

        #footer a:hover {
            text-decoration: underline;
            color: var(--bs-primary) !important;
        }

        .img-fluid {
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
        <!-- Container -->
        <div class="container py-2 px-4">
            <!-- Navbar Brand -->
            <h3>LYNXC</h3>
            
            <!-- Navbar Toggler -->
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Offcanvas -->
            <div class="offcanvas offcanvas-end bg-black" id="offcanvasNavbar">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Bootstrap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Offcanvas Body -->
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-md-none text-white-50"> <!-- Horizontal Line -->

                    <!-- Top Menu -->
                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-6 col-md-auto"><a href="index.html" class="nav-link active">Home</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="movies.html" class="nav-link">Movies</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">TV Shows</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Anime</a></li>
                        <li class="nav-item col-6 col-md-auto"><a href="#" class="nav-link">Top</a></li>
                    </ul>

                    <hr class="d-md-none text-white-50"> <!-- Horizontal Line -->
                    
                    <!-- Sosial Media  -->
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-instagram"></i><small class="ms-2 d-md-none">Instagram</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-twitter"></i><small class="ms-2 d-md-none">Twitter</small>
                            </a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a href="#" class="nav-link active">
                                <i class="bi-slack"></i><small class="ms-2 d-md-none">Slack</small>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item">
                            <!-- Dropdown -->
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-lg-none">Bootstrap</span> v5.3
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><h6 class="dropdown-header">v5 releases</h6></li>
                                    <li><button class="dropdown-item active bg-purple" type="button"><small>Latest (5.3.x) <i class="bi-check"></i></small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v5.2.3</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v5.1.3</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v5.0.2</small></button></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><h6 class="dropdown-header">Previous releases</h6></li>
                                    <li><button class="dropdown-item" type="button"><small>v4.6.x</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v3.4.1</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small>v2.3.2</small></button></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button class="dropdown-item" type="button"><small>All versions</small></button></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item">
                            <!-- Dropdown -->
                            <div class="dropdown" data-bs-theme="light">
                                <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-brightness-high-fill"></i><span class="d-lg-none">Toggle theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><button class="dropdown-item active bg-purple" type="button"><small><i class="bi-brightness-high-fill me-2"></i>Light</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small><i class="bi-moon-stars-fill me-2"></i>Dark</small></button></li>
                                    <li><button class="dropdown-item" type="button"><small><i class="bi-circle-half me-2"></i>Auto</small></button></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <div class="bg-light mt-5" id="main">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row align-items-center">
                <div class="col-md-5 order-md-2 text-center">
                    <img class="img-fluid" src="images/Lynxc.png" alt="main logo">
                </div>
                <div class="col-md-7 order-md-1">
                    <h1 class="mt-4 display-3"><b>Watch Movies With The Best Quality</h1></b>
                    <p class="fs-5 mt-3">Lynxc is a subscription-based digital streaming platform that provides a wide range of on-demand movies, series and entertainment content. Lynxc offers a flexible viewing experience with personalised recommendations and unlimited access via the internet..</p>
                    <div class="row">
                        <div class="d-flex flex-column flex-md-row">
                            <button type="button" class="btn bg-purple text-white btn-lg mb-3 me-md-3 px-4 py-3">Get Started</button>
                            <button type="button" class="btn btn-outline-dark btn-lg mb-3 px-4 py-3">Download</button>
                        </div>
                    </div>
                    <div class="text-muted">
                        Currently <strong>v1.0</strong> · <a href="#">v1.0 docs</a> · <a href="#">All releases</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Icons -->
    <div id="bs-icons">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <img src="images/Lynxc.png" alt="Custom Icon" 
                             class="py-2 px-3 rounded-3" 
                             style="background-color: white; width: 100px; height: 100  px;">
                    </div>
                    <h2 class="display-5 mb-3">1917</h2>
                    <p class="fs-5"><a href="https://www.imdb.com/title/tt8579674/">1917</a> Two soldiers, assigned the task of delivering a critical message to another battalion, risk their lives for the job in order to prevent them from stepping right into a deadly ambush.</p>
                    <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="https://www.netflix.com/id/">
                        Streaming Now
                        <i class="bi bi-arrow-right mb-2"></i>
                    </a>
                </div>            
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/1917.jpg" alt="Bootstrap Icons">
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Official Themes -->
    <div id="bs-themes">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/Lynxc.png" alt="Custom Icon" 
                             class="py-2 px-3 rounded-3" 
                             style="background-color: white; width: 100px; height: 100  px;">
                </div>
                <h2 class="display-5">Kingdom of The Planet of The Apes</h2>
                <p class="fs-5">Many years after the reign of Caesar, a young ape goes on a journey that will lead him to question everything he's been taught <br> about the past and make choices that will define a future for <a href="https://www.imdb.com/title/tt11389872/">apes</a> and human alike.</p>
                <a class="icon-link icon-link-hover lead fw-semibold mb-5" href="https://www.netflix.com/id/">
                    Streaming Now
                    <i class="bi bi-arrow-right mb-2"></i>
                </a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="images/Apes.png" alt="Bootstrap Icons">
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div id="footer" class="bg-light py-5">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="#" class="logo text-decoration-none">
                        <div class="d-flex">
                            <img class="img-fluid" src="images/Lynxc.png" alt="Lynxc Logo" style="width: 100px;">
                            <div class="fs-5 ms-2 text-black"></div>
                        </div>
                    </a>
                    <div class="mt-2 text-muted">
                        <small>Designed and built with all the love in the world by the <a href="#" class="text-black">Bootstrap team</a> with the help of <a href="#" class="text-black">our contributors</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Code licensed <a href="#" class="text-black">MIT</a>, docs <a href="#" class="text-black">CC BY 3.0</a>.</small>
                    </div>
                    <div class="mt-2 text-muted">
                        <small>Currently v5.3.0-alpha2.</small>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-5">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Home</a></li>
                        <li class="mb-2"><a href="movies.html">Movies</a></li>
                        <li class="mb-2"><a href="#">TV Shows</a></li>
                        <li class="mb-2"><a href="#">Anime</a></li>
                        <li class="mb-2"><a href="#">Top</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Getting started</a></li>
                        <li class="mb-2"><a href="#">Starter template</a></li>
                        <li class="mb-2"><a href="#">Webpack</a></li>
                        <li class="mb-2"><a href="#">Parcel</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="#">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="#">Icons</a></li>
                        <li class="mb-2"><a href="#">RFS</a></li>
                        <li class="mb-2"><a href="#">npm starter</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-5">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Issues</a></li>
                        <li class="mb-2"><a href="#">Discussions</a></li>
                        <li class="mb-2"><a href="#">Corporate sponsors</a></li>
                        <li class="mb-2"><a href="#">Open Collective</a></li>
                        <li class="mb-2"><a href="#">Slack</a></li>
                        <li class="mb-2"><a href="#">Stack overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>