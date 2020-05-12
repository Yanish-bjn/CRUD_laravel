
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RegistrationForm_v10 by Colorlib</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-26/fonts/linearicons/style.css">

<link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-26/css/style.css">
</head>
<body>
<div class="wrapper">
<div class="inner">
<img src="https://colorlib.com/etc/regform/colorlib-regform-26/images/image-1.png" alt="" class="image-1">
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse email') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Enregistrer') }}
            </button>
        </div>
    </div>
</form>
<img src="https://colorlib.com/etc/regform/colorlib-regform-26/images/image-2.png" alt="" class="image-2">
</div>
</div>
<script src="https://colorlib.com/etc/regform/colorlib-regform-26/js/jquery-3.3.1.min.js" type="9639c9ffd1edc9707739a28c-text/javascript"></script>
<script src="https://colorlib.com/etc/regform/colorlib-regform-26/js/main.js" type="9639c9ffd1edc9707739a28c-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="9639c9ffd1edc9707739a28c-text/javascript"></script>
<script type="9639c9ffd1edc9707739a28c-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="9639c9ffd1edc9707739a28c-|49" defer=""></script></body>
</html>
