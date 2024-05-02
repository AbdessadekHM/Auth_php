<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Auth</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link <?php if($activated_btn == "Home") echo "active" ?>"
                                    aria-current="page" href="index.php">Home</a>
                                <a class="nav-link <?php if($activated_btn == "Register") echo "active" ?>"
                                    href="register.php">Register</a>
                                <a class="nav-link <?php if($activated_btn == "Log In") echo "active" ?>"
                                    href="logIn.php">Log
                                    In</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>