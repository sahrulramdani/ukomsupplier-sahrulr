<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <title><?= $basetitle; ?></title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card w-50 m-auto mt-5">
                    <div class="card-body ">
                        <h2 class="text-center mb-5">Login</h2>
                        <?php if(session()->getFlashdata('login')) : ?>
                        <div class="alert alert-danger mt-2" role="alert">
                            <?= session()->getFlashdata('login'); ?>
                        </div>
                        <?php endif; ?>
                        <form method="post" action="/login/auth">
                            <p class="fw-bold">
                                Username :
                            </p>
                            <br>
                            <input type="text" name="username" id="username" class="form-control" />
                            <br>
                            <p class="fw-bold">
                                Password :
                            </p>
                            <br>
                            <input type="password" name="password" id="password" class="form-control" />
                            <br>
                            <button type="submit" class="btn bgcolor-1 fw-bold">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>