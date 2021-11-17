<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    @if (session()->has('logineror'))
        <div class="alert alert-danger alert-dimissible fade show" role="alert">
            {{ session('logineror')}}
            <button type="button" class="btn-close" data-bs-dimiss=" alert" aria-label="close"></button>
        </div>        
    @endif
    <div class="login-dark">
        <form  action="/login" method="post">
            @method('post')
            @csrf
            <h2>Login</h2>
            <div class="form-group"><input class="form-control @error('email')
                is_invalid
            @enderror" type="email" name="email" placeholder="Email" id="email" autofocus required value="{{ old ('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
                
            @enderror
            </div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" id="password" autofocus required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>