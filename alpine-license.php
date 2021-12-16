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
                <div class="col-lg-6 m-auto text-center position-relative">
                    <form action="">
                            <div class="backButton">
                                <i onclick="history.back()" class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        <div class="card form shadow">
                            <div class="card-body">
                                <img class="AlpineLicenseLogo" src="assets/images/logo/AlpineLicenseLogo.png" alt="">
                                <div class="card-title pt-5">
                                    <h5>Alpine License</h5>
                                    <h6 class="text-muted mb-3">$200 initial fee + $30 monthly</h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="First name" id="exampleInputtext01" aria-describedby="text01Help">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Last name" id="exampleInputtext02" aria-describedby="text02Help">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                    					<div class='input-group date'>
                                            <input class="form-control font-weight-bold" placeholder="**** **** **** 1234"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            type = "number"
                                            maxlength = "16"
                                            />
                                            <input 
                                                type="name" 
                                                id="start" 
                                                name="trip-start" 
                                                class="input-group-addon input-group-text bg-transparent startDate w-25" 
                                                maxlength='10' 
                                                value=''
                                                placeholder="07/25 534"
                                                >
                            			</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="number" class="form-control" placeholder="Zip code" id="Zip code" aria-describedby="Zip code">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <input type="number" class="form-control" placeholder="Phone" id="Phone" aria-describedby="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <a type="submit" class="purchaseAlpine text-center" href="javascript:void(0)"><img src="assets/images/icons/Icon01.png" alt=""> Purchase Alpine</a>
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