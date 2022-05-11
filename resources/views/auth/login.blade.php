<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Teto - LogIn</title>
</head>
<body class="bg-light pt-5 container" style="display: block; width:100%; heigth: 100%">
    <h1 style="display: block;
                width: 100%;
                text-align: center">TETO
    </h1>
    
    <form action="/login" method="POST" class="mx-auto px-auto card" style="width: 29rem;">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        @csrf
        <div class="card-body fs-6">
            <div class="mb-3">
                <label for="email" class="form-label mx-auto">Email</label>
                <input type="email" required="required" autofocus="autofocus" class="form-control" id="email" placeholder="nomedousuario@email.com" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" required="required" autocomplete="current-password"  class="form-control" id="formGroupExampleInput2" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" id="remember_me">
                <label class="form-check-label" for="exampleCheck1">Manter-me Logado</label>
            </div>
            <div class="mb-3 justify-content-end">
                <a href="/forgot-password" class="mr-3">Esqueceu-se da Palavra-passe?</a>
                <button type="submit" class="btn btn-dark">Entrar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>