<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style/loginview2.css">
</head>

<body>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif

    @if(session()->has('loginErorr'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginErorr')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif


    <div class="center">
        <h1>Login Admin</h1>
        <form action="{{ route('postLogin') }}" method="POST">
            {{ csrf_field() }}
            <div class="txt_field" >
                <input type="text" name="username" id="username"
            required>

                <label for="username">Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password">

                <label for="password">Password</label>
            </div>
            <!-- <a href="admin">
                <div class="pass">Forgot Password?</div>
            </a> -->

            <input type="submit" value="Login">

            <div class="signup_link">
                Kembali Halaman web? <a href="/">kembali</a>
            </div>
        </form>
    </div>

</body>

</html>