<!doctype html>
<html lang="en">

<head>
    <?php include 'commonFiles/allCssLinks.php'; ?>
</head>

<body>
    <?php include 'commonFiles/header.php'; ?>
    <main>
        <section class="logInPage">
            <div class="vertical-center">
                <div class="col-lg-6 m-auto position-relative">
                    <form action="">
                        <div class="card form shadow">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>Create an account</h5>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" placeholder="Confirm password" class="form-control" id="exampleInputPassword2">
                                    </div>
                                    <a type="submit" class="purchaseAlpine text-center" href="javascript:void(0)"><img src="assets/images/icons/Icon01.png" alt=""> Enter Dashboard</a>
                                    <div class="mb-3">
                                        <p class="mb-0">Already have an account? <a class="text-dark" href="login.php">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
                <div class="alertBox">
                    <h6 class="mb-0"><i class="fas fa-exclamation-circle"></i> Account already exists</h6>
                </div>
    </main>
    <?php include 'commonFiles/allScriptsLinks.php'; ?>
</body>

</html>