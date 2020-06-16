<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <title>NIKKEN Latam</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            font-size: 0.875rem;
            letter-spacing: 0.0312rem;
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            
        }
    </style>
</head>
<body>
<table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse;">

	<tr>
        <td style="padding: 0">
            <center>
                <img style="padding: 0; display: block" src="http://services.nikken.com.mx/fpro/img/logo-black.png" width="50%">
            </center>
		</td>
    </tr>
    
    @php
        $lang = 'esp';
        $title = '';
        $text = '';
        if($lang == 'en'){
            $title = 'Congratulations on your successful recruitment of a new Nikken Team Member Latin America!';
            $text = 'We received an Enrollment Application for';
        }
        else{
            $title = '¡Felicitaciones por tu exitosa pre-incorporación como influencer de un nuevo miembro del equipo Nikken Latinoamérica!';
            $text = 'Acabas de pre-inscribir a';
        }
    @endphp
	
	<tr>
		<td style="background-color: #ecf0f1; border-radius: 30px;">
            <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                <center>
                    <h2 style="color: #00bcd4!important; margin: 0 0 7px">NIKKEN Pre-registro a Influencers</h2>
                    <p style="margin: 2px; font-size: 15px">
                        {{ $title }}
                    </p>
                    <div style="width: 100%;margin:20px 0; display: inline-block;text-align: center">
                        <img style="padding: 0; width: 200px; margin: 5px" src="{{ asset('fproh/img/preInscInfluencer/planInfC.png') }}">
                    </div>
                </center>
                <p>
                    {{ $text }}: {!! $name ?? "27004503 - MELCHOR RODRIGUEZ, FRANCISCO" !!}<br>
                </p>
			</div>
		</td>
	</tr>
</table>

</body>
</html>