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
                                    <h5>Reset Password</h5>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    
                                    <a type="submit" class="purchaseAlpine text-center" href="javascript:void(0)"><img src="assets/images/icons/Icon01.png" alt="" class='mx-2'>Reset Password</a>
                                    <div class="mt-5 mb-3">
                                        <p class="mb-0 text-muted">
                                            Don’t have an account? 
                                            <a class="text-dark my-2" href="create-an-account.php">
                                                <b>Sign Up</b>
                                            </a>
                                        </p>
                                        <p class="mb-0 text-muted">
                                            Already have an account? 
                                            <a class="text-dark my-2" href="login.php">
                                                <b>Sign In</b>
                                            </a>
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include 'commonFiles/allScriptsLinks.php'; ?>
</body>

</html>