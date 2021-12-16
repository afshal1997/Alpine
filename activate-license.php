<!doctype html>
<html lang="en">

<head>
    <?php include 'commonFiles/allCssLinks.php'; ?>
</head>

<body>
    <main>
        <section class="dashboardTopHeader bg-transparent">
            <div class="container">
                <h3 class="mb-0 mt-2">Alpine Dashboard</h3>
            </div>
            <hr>
        </section>
        <section class="activatedPage">
            <div class="vertical-center">
                <div class="col-lg-10 text-center m-auto position-relative mb-5 pb-5">
                    <div class="col-1 m-auto mb-4">
                        <a href="javascript:void(0)"><img class="w-100" src="assets/images/icons/Back.png" alt=""></a>
                    </div>
                    <h1>Activate a license key</h1>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><img src="assets/images/icons/lock.png" alt=""></span>
                                <input type="text" class="form-control" placeholder="Enter license key" aria-label="license" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a type="submit" class="purchaseAlpine text-center" href="javascript:void(0)"><img class="w-25" src="assets/images/icons/Icon05.png" alt=""> Activate License</a>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'commonFiles/dashboard-footer.php'; ?>
    <?php include 'commonFiles/allScriptsLinks.php'; ?>
</body>

</html>