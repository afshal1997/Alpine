<!doctype html>
<html lang="en">

<head>
    <?php include 'commonFiles/allCssLinks.php'; ?>
</head>

<body>
    <main>
        <section class="activatedPage">
            <div class="dashboardTopHeader bg-transparent">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h3 class="mb-0 mt-2">Alpine Dashboard</h3>
                        <ul class="d-flex headerBtn me-0 m-auto mt-3">
                            <li>
                                <a class="logIn" href="login.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="card shadow licenseCard">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h5 class="mb-0">Your Alpine License</h5>
                                            <h6 class="text-muted mb-5">Expires August 4, 2021</h6>
                                            <div class="clipBoard mb-3">
                                                <input type="text" value="XXXX XXXX XXXX ZH512" id="myInput" readonly>
                                                <button onclick="myFunction()"><img src="assets/images/icons/clipBoard.png" alt=""></button>
                                            </div>
                                            <div class="input-group mb-3 deactivateLicense">
                                                <input type="text" class="form-control" placeholder="Deactivate License" aria-label="Deactivate License" aria-describedby="basic-addon3">
                                                <span class="input-group-text" id="basic-addon3"><img src="assets/images/icons/powerOff.png" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="card shadow form">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col-10 mb-5">
                                                    <h5 class="mb-0">Profile & Billing</h5>
                                                    <h6 class="text-muted">Manage your profile info</h6>
                                                </div>
                                                <div class="col-2 mt-2">
                                                    <a href="javascript:void(0)"><img class="w-50" src="assets/images/icons/Edit.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <img class="w-100 mb-3" src="assets/images/icons/g13.png" alt="">
                                            </div>
                                            <h5>John Smith</h5>
                                            <h5>**** **** **** 1234</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card shadow discord">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-1">
                                                <img class="w-50" src="assets/images/icons/Icon06.png" alt="">
                                            </div>
                                            <div class="col-10 p-0">
                                                <h6 class="mb-0">Join the AlpineAIO Discord server</h6>
                                            </div>
                                            <div class="col-1">
                                                <img class="w-50" src="assets/images/icons/arrow.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow form">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5 class="mb-0">Payment History</h5>
                                    <h6 class="text-muted">Past and upcoming invoices</h6>
                                    <div class="row mt-3">
                                        <div class="col-8 mb-2">
                                            <p><strong>$60 USD renewal</strong></p>
                                        </div>
                                        <div class="col-4">
                                            <p><strong>11/18/2021</strong></p>
                                        </div>

                                        <div class="col-8 ">
                                            <p class="text-muted"><strong>$60 USD renewal</strong></p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted"><strong>11/18/2021</strong></p>
                                        </div>
                                        <div class="col-8 ">
                                            <p class="text-muted"><strong>$60 USD renewal</strong></p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted"><strong>11/18/2021</strong></p>
                                        </div>
                                        <div class="col-8 ">
                                            <p class="text-muted"><strong>$60 USD renewal</strong></p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted"><strong>11/18/2021</strong></p>
                                        </div>
                                        <div class="col-8 ">
                                            <p class="text-muted"><strong>$60 USD renewal</strong></p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted"><strong>11/18/2021</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'commonFiles/footer.php'; ?>
    <?php include 'commonFiles/allScriptsLinks.php'; ?>
</body>

</html>