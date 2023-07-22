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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

</head>

<body>
    <div class='fixed-top'>
        <header class="navbar navbar-expand-md navbar-light bg-header shadow-sm">
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
                        <a class="nav-item nav-link" href="#">Profile</a>
                        <a class="nav-item nav-link" href="#">Manage Post</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <u>Hello, Dummy</u>
                    </div>
                </div>
            </div>
        </header>
    </div>

        <div class='container mt-5'>
            <div class='row justify-content-center'>
                <div class='col-md-3 m-4 mt-5'>
                    <h1>Your dashboard</h1>
                    <p>Let's see how far you made it</p>

                    <input type='image' src="{{asset('/assets/archived-button.png')}}" class='btn-primary mb-1 ms-auto' style='width:80%;' />
                    <input type='image' src="{{asset('/assets/create-button.png')}}" class='btn-primary mb-1 ms-auto' style='width:80%;' />

                </div>

                <div class='col-md-3 m-4 mt-5'>
                    <div class='card dashboard-card p-2'>
                        <h2 class="">Total posts you've created</h2>
                        <h1 class="card-text-big align-bottom mt-auto">1.234.456</h1>
                    </div>
                </div>

                <div class='col-md-3 m-4 mt-5'>
                    <div class='card dashboard-card p-2'>
                        <h2 class="">Total posts you've archived</h2>
                        <h1 class="card-text-big align-bottom mt-auto">1.234.456</h1>
                    </div>
                </div>

            </div>
        </div>

    <div class='container'>
        <div class='row justify-content-center mb-3 mt-3'>
            <div class='col-md-4 ms-2'>
                <div class="input-box">
                    <input type="text" class="form-control" placeholder="Search your post">
                    <i class="fa fa-search"></i>                    
                </div>
            </div>

            <div class='col-md-4'>
                <hr class="mt-3 mb-4 hr-dashboard-simplified" />
            </div>

            <div class='col-md-2 mt-2'>
                <h5><b>All of your posts</b></h5>
            </div>
        </div>
    </div>

        <div class='container col-md-9'>

            <table class="table thead-border table-rounded table-bordered ">
                <thead>
                    <tr>
                        <th width="86%" scope="col">Title</th>
                        <th width="14%" scope="col">Total Comment</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 15; $i++)
                        <tr>
                            <td>Title's post belongs here</th>
                            <td>234</td>
                        </tr>
                    @endfor
                </tbody>
            </table>

        </div>

</body>
<footer class='bg-light mt-4'>
</footer>

</html>