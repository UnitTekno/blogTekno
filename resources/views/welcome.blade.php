<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="pt-5">

    <div class='fixed-top'>
        <header class="navbar navbar-expand-lg navbar-light bg-header shadow-sm">
            <div class="container-fluid ms-4">
                <a class="navbar-brand" href="#">
                    <img src="/assets/icon.png" width="30" height="30" class="d-inline-block align-top" alt="Logo Tekno">
                    <span class="m-2" style="font-size:20px">Tekno</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Category #1</a>
                        <a class="nav-item nav-link" href="#">Category #2</a>
                        <a class="nav-item nav-link" href="#">Category #3</a>
                        <a class="nav-item nav-link" href="#">Category #4</a>
                        <a class="nav-item nav-link" href="#">Category #5</a>
                        <a class="nav-item nav-link" href="#">Category #6</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('login') }}" class="btn btn-primary me-4" type="button">Sign in</a>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class='container mt-5'>
        <div class='row'>
            <div class='col-md-8 ms-5'>
                <h1>The title belongs here. The title belongs here. The title belongs here. </h1>
                <p class='author'>
                    by Author's name
                    <br><span class='post-date'>January 21, 2023 on <u>Post's category</u></span>
                </p>
                <figure>
                    <img src="{{ asset('/assets/beach.png') }}" class='img-fluid' style="width:100%" alt='Beach'>
                    <figcaption class='text-left p-1' style='background-color:#e2e2e2'>Beach in California by Photographer's name/Source of image</figcaption>
                </figure>

                <div class='fs-4'>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

            <div class='col-md-3'>
                <div class='position-sticky fade-borders-top' style="top: 5rem; width: 19rem">
                    <div class='suggested-post'>
                        <h2>Next Reading ...</h2>

                        <div class="card fade-borders-bottom mb-4" style="width: 18rem">
                            <div class="card-body">
                                <h5 class="card-title">Suggested post's title belongs here.</h5>
                                <p class="card-text">January 21, 2023 by Author's name</p>
                            </div>
                            <img class="m-auto" src="/assets/beach.png" style="width:95%;" alt="Card image cap">
                        </div>

                        <div class="card fade-borders-bottom mb-4" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Suggested post's title belongs here.</h5>
                                <p class="card-text">January 21, 2023 by Author's name</p>
                            </div>
                            <img class="m-auto" src="/assets/beach.png" style="width:95%;" alt="Card image cap">
                        </div>

                        <div class="card fade-borders-bottom mb-4" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Suggested post's title belongs here.</h5>
                                <p class="card-text">January 21, 2023 by Author's name</p>
                            </div>
                            <img class="m-auto" src="/assets/beach.png" style="width:95%;" alt="Card image cap">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class='bg-light mt-4'>
    </footer>
</body>

</html>