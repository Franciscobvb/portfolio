<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>NIKKEN Latam</title>
    </head>
    <body>
        <div style="width: 100%; margin: auto; border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 2rem;">
            <img src="{!! $imgHeader !!}" width="100%" style="border-top-right-radius: 2rem; border-top-left-radius: 2rem">
            <h1 style="margin: 25px 10% 25px 10%; font-family: sans-serif; font-size: 55px; color: #569400; text-align: center">
                {{ $name ?? 'Nikken Latam' }}.
            </h1>
            <h1 style="margin: 25px 10% 25px 10%; font-family: sans-serif; font-size: 35px; color: #569400; text-align: justify">
                Cumpliste con uno de los objetivos de Finanzas Saludables.  <br><br>
                Ahora tú y tus clientes podrán disfrutar del {{ $producto }} de descuento que podrás redimir del {{ $del }} al {{ $al }} de Abril del 2020.
            </h1>
            <a href="http://services.nikken.com.mx/finzssalstatuspers/{!! $userB64 ?? base64_encode('123456') !!}" target="_new">
                <img src="{!! $imgFooter  !!}" width="100%" style="border-bottom-right-radius: 2rem; border-bottom-left-radius: 2rem">
            </a>
        </div>
    </body>
</html>