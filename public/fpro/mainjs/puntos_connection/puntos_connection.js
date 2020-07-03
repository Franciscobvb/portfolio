AOS.init();

function alertaAvance(){
    var end = Date.now() + (15 * 1000);

    var interval = setInterval(function() {
        if (Date.now() > end) {
            return clearInterval(interval);
        }

        confetti({
            startVelocity: 30,
            spread: 360,
            ticks: 60,
            origin: {
                x: Math.random(),
                y: Math.random() - 0.2
            }
        });
    }, 200);

    var duration = 15 * 1000;
    var end = Date.now() + duration;

    function frame() {
        confetti({
        particleCount: 15,
        angle: 60,
        spread: 55,
        origin: { x: 0 }
        });
        
        confetti({
        particleCount: 15,
        angle: 120,
        spread: 55,
        origin: { x: 1 }
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }
    }

    swal({
        title: '¡¡Felicitaciones!!',
        text: 'Haz obtenido descuento en repuestos durante (3 semanas) del 29 de Agosto al 29 de Septiembre',
        imageUrl: '../fpro/img/convMayo/winner.png',
        imageWidth: 400,
        imageHeight: 220,
        imageAlt: 'Ganador',
        animation: false,
        padding: '2em',
        footer: '<span class="flaticon-danger-line" style="font-size: 20px;"></span> Recuerda que puedes obtener mas semanas de descuento.',
    })
}