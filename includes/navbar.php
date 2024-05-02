<div class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Auth_PHP </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page_loc=="Home") echo "active" ?>"
                                        href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page_loc=="Register") echo "active" ?>"
                                        href="register.php">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page_loc=="Log In") echo "active" ?>"
                                        href="login.php">Log In</a>
                                </li>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>