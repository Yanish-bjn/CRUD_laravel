<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V15</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v15/images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/css/util.css">
<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v15/css/main.css">

</head>
<body>
  <div class="limiter">
  <div class="container-login100">
  <div class="wrap-login100">
  <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
  <span class="login100-form-title-1">
  Connexion
  </span>
  </div>
  <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
      <div class="col-md-6 register">
      <div>
      <center><a href="{{ route('password.request') }}" class="txt1">
      Mot de passe oublié ?
    </a></center>
      </div>
      </div>
        <div class="col-md-6 register">
    <center><br><button type="submit" class="login100-form-btn">
      {{ __('Connexion') }}</center></br>
      </button>
      </div>
      </form>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="https://colorlib.com/etc/lf/Login_v15/vendor/jquery/jquery-3.2.1.min.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>

<script src="https://colorlib.com/etc/lf/Login_v15/vendor/animsition/js/animsition.min.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>

<script src="https://colorlib.com/etc/lf/Login_v15/vendor/bootstrap/js/popper.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>
<script src="https://colorlib.com/etc/lf/Login_v15/vendor/bootstrap/js/bootstrap.min.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>

<script src="https://colorlib.com/etc/lf/Login_v15/vendor/select2/select2.min.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>

<script src="https://colorlib.com/etc/lf/Login_v15/vendor/daterangepicker/moment.min.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>
<script src="https://colorlib.com/etc/lf/Login_v15/vendor/daterangepicker/daterangepicker.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>

<script src="https://colorlib.com/etc/lf/Login_v15/vendor/countdowntime/countdowntime.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>

<script src="https://colorlib.com/etc/lf/Login_v15/js/main.js" type="955978025a19ca3b6abd2d05-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="955978025a19ca3b6abd2d05-text/javascript"></script>
<script type="955978025a19ca3b6abd2d05-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="955978025a19ca3b6abd2d05-|49" defer=""></script></body>
</html>
