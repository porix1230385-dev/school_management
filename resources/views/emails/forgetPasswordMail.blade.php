<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('assets/css/custom-style.css')}}">
        <title>{{$data['title']}}</title>
    </head>
    <body>
        <div class="email-header">
            {{-- <img src="{{ asset('assets/img/folo-splash-logo-white.png') }}" alt="Logo FOLO Education"> --}}
            <h2>Réinitialisation du mot de passe</h2>
        </div>
        <div class="email-content">
            <p>
                Bonjour M./Mme. {{$data['user'][0]['nom']}},<br>
                <!-- Hello M./Mme. {{--$data['email'] --}},<br> -->
                <!-- Nous avons bien reçu votre demande de réinitialisation du mot de passe. -->
                cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe
            </p>
            <!-- <p>{{--$data['body']--}}</p> -->
            <a href="{{$data['url']}}">Click to here to reset password</a>
            <div class="email-footer">
            <p>
                <strong>FOLO Education</strong><br>
                Votre application de gestion de vie scolaire
            </p>
            <p>
                <strong>Contacts :</strong><br>
                <a href="tel:+225 07 48 46 35 49">+225 07 48 46 35 49</a> /
                <a href="tel:+225 25 20 00 22 42">+225 25 20 00 22 42</a> /
                <a href="mailto:contact@foloschool.com">contact@foloschool.com</a>
            </p>
        </div>
    </body>
</html>