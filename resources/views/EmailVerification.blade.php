<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/VerificationEmail.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@500;700&family=Product+Sans:wght@400">
</head>
<div style="width: 100%; height: 100%; position: relative; background: #ECEFF1">
    <img style="width: 210px; height: 43px; left: 200px; top: 22px; position: absolute" src = "{{ asset('img/commuta-logo-completa.png') }}" />
    <div style="width: 516px; height: 516px; left: 42px; top: 86px; position: absolute; background: white; border-radius: 9px"></div>
    <object style="width: 76px; height: 76px; left: 268px; top: 153px; position: absolute" data="{{ asset('img/envelope-open.svg') }}" type="image/svg+xml"></object>
    <div style="width: 105px; height: 105px; left: 247px; top: 132px; position: absolute; border-radius: 9999px; border: 3px #4B3EFF solid"></div>
    <div id="welcome-text">{{ $user->first_name }}, seja bem vindo ao Commuta!</div>
    <div id="verification-text">Para validar a sua conta e poder começar a usar o aplicativo do Commuta, use o seguinte código de verificação:</div>
    <div id="info-text">Se você não criou conta no Commuta usando esse email, basta ignorá-lo e não informar a ninguém esse código.</div>
    <div id="verify-title">Verifique seu E-mail</div>
    <div id="verification-code">{{ $password }}</div>
    <div style="width: 307px; height: 0px; left: 146px; top: 502px; position: absolute; border: 0.50px rgba(0, 0, 0, 0.50) solid"></div>
    <div style="width: 160px; height: 40px; left: 220px; top: 653px; position: absolute; background: #4B3EFF; border-radius: 5px"></div>
    <object style="width: 18px; height: 21px; left: 237px; top: 663px; position: absolute;" data="{{ asset('img/google-play-logo.svg') }}" type="image/svg+xml"></object></div>
    <div id="download-text">Baixe o nosso aplicativo:</div>
    <div style="left: 261px; top: 662px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Product Sans; font-weight: 400; word-wrap: break-word">Google Play</div>
</div>

