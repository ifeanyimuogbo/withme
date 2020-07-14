<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="OwlCarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel/owl.theme.default.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navbar fixed-top navbar-light bg-faded justify-content-between">
        <a class="navbar-brand">
            <img src="assets/logo.svg" />
        </a>

        <button class="btn my-2 my-sm-0" type="submit">
            Pre Register
        </button>
    </nav>
    <div class="container-fluid vh-100 px-0 mx-0 row">
        <div class="col-3" style="background-color: #ffffff;"></div>
        <div class="col jumbo d-flex justify-content-center align-items-center">
            <div class="infodiv">
                <h1>Get notified when your friends are near.</h1>
                <p>Find out where your friends are and stay in touch with them</p>
                <form class="form-inline">
                    <div class="form-group mx-sm-1 mb-2">
                        <input type="email" class="form-control" id="email"
                            placeholder="Enter your email address here" />
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">
                        <?php echo "Pre Register" ?>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="index.js" async defer></script>
    <script src="OwlCarousel/jquery.js"></script>
    <script src="OwlCarousel/owl.carousel.min.js"></script>
    <script src="OwlCarousel/jquery2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>