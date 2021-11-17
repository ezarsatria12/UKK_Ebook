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
    <div class="login-dark">
        <form action="/register"method="post">
            @csrf
            <h2>Regiter</h2>
            <div class="form-group"><input class="form-control @error('name')
                is_invalid
            @enderror" name="name" type="text" placeholder="name" autofocus required value="{{ old ('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
            @enderror
        </div>
        <form method="post">
            <div class="form-group"><input class="form-control @error('email')
                is_invalid
            @enderror" type="email" name="email" placeholder="Email" autofocus required value="{{ old ('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
            @enderror
        </div>
            <div class="form-group"><input class="form-control @error('password')
                is_invalid
            @enderror" type="password" name="password" placeholder="Password" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
            @enderror
        </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Next</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>