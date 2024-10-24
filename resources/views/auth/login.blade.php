<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login Admin</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="mt-2">
                    @if (Session::has('error'))
                    <div class="col-12">
                            <div class="alert alert-danger">{{session('error')}}</div>
                    </div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Admin Login</h3>
                        <form action="{{route('loginpostadmin')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                           
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="loginbtn">Login</button>
                            </div>
                            <div class="d-grid mt-2">
                                <a href="{{url('auth/signup')}}">Don't have an account, Signup here</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>