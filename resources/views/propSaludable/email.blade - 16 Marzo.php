<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>NIKKEN Latam</title>
    </head>
    <body>
        <div style="width: 100%; margin: auto; border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 2rem;">
            <img src="http://services.nikken.com.mx/fproh/img/finszsaludables/{!! $imgHeader ?? "latamhead.jpg" !!}" width="100%" style="border-top-right-radius: 2rem; border-top-left-radius: 2rem">
            <center>
                <h1 style="margin: 25px; font-family: sans-serif; font-size: 26px; color: #017834">Estimado Influencer: {!! $nombre ?? 'Nikken Latam' !!}</h1>
            </center>
            <p style="margin: 0 15% 25px 15%; font-family: sans-serif; font-size: 25px; text-align: justify; color: #017835"><b>Te faltan 
            @if ($Vp < 100) 
                {{ (100 - $Vp) }} VP y 
            @endif
            @if ($Incorp_Influencers < 2)
                {{ (2 - $Incorp_Influencers) }}
            @endif  
            Influencer  para cumplir con los requisitos de la campaña Invita, Inscribe y Redime.<br>No dejes pasar el 30 % de descuento en {!! $product !!}</b></p>
            <a href="http://services.nikken.com.mx/finzssaludable/{!! $userB64 !!}" target="_new">
                <img src="http://services.nikken.com.mx/fproh/img/finszsaludables/{!! $imgFooter ?? "chlfooter.jpg" !!}" width="100%" style="border-bottom-right-radius: 2rem; border-bottom-left-radius: 2rem">
            </a>
        </div>
    </body>
</html>