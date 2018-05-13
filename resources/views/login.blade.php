<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>UQ&A - Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#" style="padding-left: 12vw;">UQ&A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<div style="padding-top: 10vh; padding-left: 13vw; padding-right: 13vw;">

    <h1>UQ&A</h1>

    <div class="card">
        <div class="row">

            <div class="col-sm-6">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="loginEmail">Email Address</label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="s1234567@student.uq.edu.au">
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg float-right" style="margin-bottom: 20px;">Login</button>
                    </form>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card-body">
                    <p class="card-text" align="center">Don't have an account?</p>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Register Now</button>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="footer">
    <div style="background-color:#1a1a1a;padding-top:20px;padding-bottom:50px;">
        <img src="images/FOOTER.png" width="1140" height="152" alt="Footer" usemap="#footer" class="logo">

        <map name="footer">
            <area shape="rect" coords="523,133,618,152" href="disclaimer.html" alt="Disclaimer">
        </map>
    </div>

    <div style="height:10px;background-color:#FCCF2F;"></div>
</div>

</body>
</html>