<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clocker</title>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="index.js" defer></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <nav class="navbar navbar-expand-lg navbar-light fs-4 box-shadow-bottom">
    <div class="container-fluid">
        <a class="navbar-brand text-white text-bold text-shadow fw-900 fs-1" href="index.php">Clocker</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link mx-4 text-white active-link" aria-current="page" href="index.php">Home</a>
            <a class="nav-link mx-4 text-white" href="login.php">Log in</a>
            <a class="nav-link mx-4 text-white" href="register.php">Register</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="container-fluid text-white">
        <div class="row">
            <div class="col-8 offset-2 p-3">
                <h1 class="text-center my-5 fw-900 text-shadow">What is clocker?</h1>
                <p class="fs-4 fw-600 p-5 rounded-3" style="background-color: #FFF3">Clocker is an application that ensures that there is your working time for developers and entire development teams. At the beginning of the total working hours, you can check the commitment of employees, as well as the task performance for their work has been calculated. On our website it is also possible to obtain help from project or customer statistics.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-2 p-3 offset-3">
                <div class="card border-0 bg-transparent">
                    <img src="./user-svg.svg" class="card-img p-lg-5 pb-2 svg-opacity filter" alt="...">
                    <div class="card-body">
                        <p class="card-text fs-1 fw-bold text-center text-shadow"><span class="count-up">99</span> users</p>
                    </div>
                </div>
            </div>

            <div class="col-2 p-3">
                <div class="card border-0 bg-transparent">
                    <img src="./day-svg.svg" class="card-img p-lg-5 pb-2 svg-opacity filter" alt="...">
                    <div class="card-body">
                        <p class="card-text fs-1 fw-bold text-center text-shadow"><span class="count-up">2137</span> hours</p>
                    </div>
                </div>
            </div>

            <div class="col-2 p-3">
                <div class="card border-0 bg-transparent">
                <img src="./month-svg.svg" class="card-img p-lg-5 pb-2 svg-opacity filter" alt="...">
                    <div class="card-body">
                        <p class="card-text fs-1 fw-bold text-center text-shadow"><span class="count-up">2115</span> hours</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>