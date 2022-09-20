<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOLO Education</title>
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
</head>

<body>
    <div class="email-header">
        {{-- <img src="{{ asset('assets/img/folo-splash-logo-white.png') }}" alt="Logo FOLO Education"> --}}
        <h2>Réinitialisation du mot de passe</h2>
    </div>
    <div class="email-content">
        <p>
            Bonjour M./Mme. {{ $user->name }},<br>
            Nous avons bien reçu votre demande de réinitialisation du mot de passe.
        </p>
        <p>Ainsi votre nouveau mot de passe est: <strong>{{ $new_pass }}</strong></p>
        <p>Pensez à le changer une fois que vous serez connecté.</p>
    </div>
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
