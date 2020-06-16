var emailDuplicado = false;
var emailNotMatchbol = false;
var dataRegist;
var URLactual = window.location;

$("#pills-tabContent-2").hide()

$('#btnProfile').on('click', function(){
    var dataform = $('#formProfile').serialize();
    document.getElementById("btnProfile").disabled = true;

    var brithdate = $('#birthDate').val();
    var birthYear = brithdate.split('-');
    var today = new Date();
    var currentYear = today.getFullYear();

    var associated = $('#superSearch').val()
    $('#sponsorLabel').text(associated);
    $('#sponsorCode').text(associated);
    associated = associated.split('-');

    $('#cargando').css("display", "inline");
    var sponsor = $('#sponsorId').val();

    var pais = $("#slctPais").val();
    var itemKit = $("#slctItemKit").val();
    var gender = $("#slctGender").val();
    var slctCiudad = $("#slctCiudad").val();
    var inpProv = $("#inpProv").val();
    var slctDepto = $("#slctDepto").val();
    var slctProv = $("#slctProv").val();
    var inpCiudad = $("#inpCiudad").val();
    var slctDist = $("#slctDist").val();
    var slctTipDoc = $("#slctTipDoc").val();
    var slctTipDocCoTitular = $("#slctTipDocCoTitular").val();
    
    (typeof pais === 'undefined' || pais === null) ? pais = "" : null;
    (typeof itemKit === 'undefined' || itemKit === null) ? itemKit = "" : null;
    (typeof gender === 'undefined' || gender === null) ? gender = "" : null;
    (typeof slctCiudad === 'undefined' || slctCiudad === null) ? slctCiudad = "" : null;
    (typeof inpProv === 'undefined' || inpProv === null) ? inpProv = "" : null;
    (typeof slctDepto === 'undefined' || slctDepto === null) ? slctDepto = "" : null;
    (typeof slctProv === 'undefined' || slctProv === null) ? slctProv = "" : null;
    (typeof inpCiudad === 'undefined' || inpCiudad === null) ? inpCiudad = "" : null;
    (typeof slctDist === 'undefined' || slctDist === null) ? slctDist = "" : null;
    (typeof slctTipDoc === 'undefined' || slctTipDoc === null) ? slctTipDoc = "" : null;
    (typeof slctTipDocCoTitular === 'undefined' || slctTipDocCoTitular === null) ? slctTipDocCoTitular = "" : null;

    if($('#name').val() == '' || $('#birthDate').val() == '' || $('#firstName').val() == '' || $('#secondName').val() == '' || $('#celPhone').val().trim() == '' ||  $('#email').val() == '' || $('#confEmail').val() == '' || $('#sponsorId').val() == '' || pais == '' || itemKit == '' || gender == '' || $("#dirRecidencia").val().trim() == '' || slctTipDoc == ''){
        swal({
            title: 'Error',
            text: rquired,
            type: 'error',
            padding: '2em'
        });
        document.getElementById("btnProfile").disabled = false;
        $('#cargando').css("display", "none");
    }
    else {
        if(pais == 'ECU' && slctProv != '' && inpCiudad != '' || pais == 'PAN' && slctCiudad != '' && inpProv != '' || pais == 'PER' && slctDepto != '' && slctProv != '' && slctDist != ''){
            /*if($("#coTitular").is(':checked') && $("#nameCoTitular").val().trim() != '' && $("#firstNameCoTitular").val().trim() != '' && $("#secondNameCoTitular").val().trim() != '' && slctTipDocCoTitular != '' && $("#numDoctoCoTitular").val().trim() != ''){
                
            }
            else{
                alertErroSponsorId();
                document.getElementById("btnProfile").disabled = false;
                $('#cargando').css("display", "none");
            }*/
            if(sponsor == "sin_sponsor" || associated.length >= 2){
                var email = $('#email').val();
                if(email != ''){
                    var confEmail = $('#confEmail').val();
                    if(confEmail != email){
                        emailNotMatch();
                        document.getElementById("btnProfile").disabled = false;
                        $('#cargando').css("display", "none");
                    }
                    else{
                        if((parseInt(currentYear) - parseInt(birthYear)) < 18){
                            swal({
                                title: 'Error',
                                text: alertHeigtAge,
                                type: 'error',
                                padding: '2em'
                            })
                            document.getElementById("btnProfile").disabled = false;
                            $('#cargando').css("display", "none");
                        }
                        else if(parseInt(birthYear) < 1930){
                            swal({
                                title: 'Error',
                                text: alertAgeInvalid,
                                type: 'error',
                                padding: '2em'
                            })
                            document.getElementById("btnProfile").disabled = false;
                            $('#cargando').css("display", "none");
                        }
                        else{
                            var mail = $('#email').val();
                            var dataMail = {email: mail}
                            $.ajax({
                                type: 'GET',
                                url: '/preInscInfvalidateEmail',
                                data: dataMail,
                                success: function(Response) {
                                    if(Response != ''){
                                        alertMailDup();
                                        document.getElementById("btnProfile").disabled = false;
                                        $('#cargando').css("display", "none");
                                    }
                                    else{
                                        if(sponsor != "sin_sponsor"){
                                            var data = {sponsorId: sponsor };
                                            $.ajax({
                                                type: 'GET',
                                                url: '/preInscInfValidaSponsor',
                                                data: data,
                                                success: function(Response){
                                                    if(Response == ''){
                                                        alertErroSponsorId();
                                                        document.getElementById("btnProfile").disabled = false;
                                                        $('#cargando').css("display", "none");
                                                    }
                                                    else{
                                                        // Realiza el guardado a la base de datos
                                                        submitRegistro(dataform);
                                                    }
                                                }
                                            });
                                        }
                                        else{
                                            submitRegistro(dataform);
                                        }
                                    }
                                }
                            });
                        }
                    }
                }
            }
            else{
                alertErroSponsorId();
                document.getElementById("btnProfile").disabled = false;
                $('#cargando').css("display", "none");
            }
        }
        else{
            swal({
                title: 'Error',
                text: rquired,
                type: 'error',
                padding: '2em'
            });
            document.getElementById("btnProfile").disabled = false;
            $('#cargando').css("display", "none");
        }
    }
})

function submitRegistro(dataform){
    document.getElementById("btnProfile").disabled = true;
    $.ajax({
        type: 'GET',
        url: '/preInscInfSave',
        data: dataform,
        success: function(Response) {
            if(Response != ''){
                console.log(Response);
                dataRegist = Response;
                SwAlert(alertRegistrationOk);
                $('#formConfirmation').css('display', 'block');
                $("#pills-tabContent-2").show(1000)
                $('#confirmationAltert').css('display', 'block');
                $("#pills-tabContent-1").hide()
                $('#formProfile').css('display', 'none');
                $('#profileAltert').css('display', 'none');
                $('#permissions').css('display', 'none');
                var advisorcode = Response[0].AssociateId;
                var advisonName = Response[0].ApFirstName;
                $('#newadvisorCode').text(advisorcode);
                $('#newadvisorName').text(advisonName);
                $("#formProfile").trigger("reset");
                document.getElementById("btnProfile").disabled = false;
                $('#cargando').css("display", "none");
                var step = $("#step_1");
                step.removeClass('active');

                var step = $("#step_2");
                step.addClass('active');

                sendWhatsapp(dataRegist);
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
    eliminarCookies();
}

function SwAlert(message){
    swal({
        title: message,
        text: '',
        type: 'success',
        padding: '2em'
    })
    $('#cargando').css("display", "none");
}

function showProfile(){
    $('#formProfile').show();
    $('#profileAltert').show();
    $('#formConfirmation').hide();
    $('#confirmationAltert').hide();
}

$('#celPhone').on('change', function(){
    var phone = $('#celPhone').val()
    $('#newadvisorPhone').text(phone);
});

$('#phone').on('change', function(){
    var phone2 = $('#phone').val()
    $('#newadvisorPhone2').text(phone2);
});

$('#email').on('change', function(){
    var email = $('#email').val()
    $('#newadvisorEmail').text(email);
});

function validateMailEqual(){
    var email = $('#email').val();
    if(email != ''){
        var confEmail = $('#confEmail').val();
        if(confEmail != email){
            emailNotMatch();
            $('#cargando').css("display", "none");
        }
    }
}

$("#chk2").on( 'click', function() {
    if($("#chk2").is(':checked')){
        document.getElementById("btnProfile").disabled = false;
    }
    else{
        $('#btnProfile').disabled;
        document.getElementById("btnProfile").disabled = true;
    }
});

$("#withoutSponsor").on( 'click', function() {
    if($("#withoutSponsor").is(':checked')){
        $('#superSearch').attr("disabled", "true");
        $('#sponsorId').val("sin_sponsor");
        $('#superSearch').val("");
    }
    else{
        $('#superSearch').removeAttr("disabled");
        $('#sponsorId').val("");
        $('#superSearch').val("");
    }
});

$(function(){
    $("#formProfile").trigger("reset");
    $("#chk2").prop("checked", false);
    $("#withoutSponsor").prop("checked", false);
    document.getElementById("btnProfile").disabled = true;
    $('#sponsorLabel').text('');

    $('#celPhone').keypress(function(e) {
        if(isNaN(this.value + String.fromCharCode(e.charCode))) 
        return false;
    })
    .on("cut copy paste",function(e){
        e.preventDefault();
    });
    $('#phone').keypress(function(e) {
        if(isNaN(this.value + String.fromCharCode(e.charCode))) 
        return false;
    })
    .on("cut copy paste",function(e){
        e.preventDefault();
    });

    var associated = $('#superSearch').val()
    $('#sponsorLabel').text(associated);
    associated = associated.split('-');
    $('#sponsorId').val(associated[0]);

    var phone = $('#celPhone').val()
    $('#newadvisorPhone').text(phone);

    var phone2 = $('#phone').val()
    $('#newadvisorPhone2').text(phone2);
    
    var email = $('#email').val()
    $('#newadvisorEmail').text(email);

    //loadSponsors();
});

function validateMail(){
    var mail = $('#email').val().trim();
    $('#email').val(mail);
    var data = {email: mail}

    if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(mail)){
        $.ajax({
            type: 'GET',
            url: '/preInscInfvalidateEmail',
            data: data,
            success: function(Response) {
                if(Response != ''){
                    alertMailDup();
                    emailDuplicado = true;
                }
                else{
                    emailDuplicado = false;
                }
            }
        });
    } else {
        alertErroMailFormat();
        $('#cargando').css("display", "none");
    }
}

function login(){
    var userName = $('#userName').val();
    var userPass = $('#userPass').val();
    var _token = $('#_token').val();
    var language = $('#language').val();
    var data = {userName: userName, userPass: userPass, _token: _token}
    $.ajax({
        type: 'POST',
        url: '/preInscInfLoginprocess',
        data: data,
        success: function(Response) {
            if(Response != ''){
                document.write('<form id="genealogyForm" method="post" action="/preInscInfGenealogy">' + 
                                    '<input name="associateid" type="hidden" value="' + Response[0].Associateid + '" />' +
                                    '<input name="_token" type="hidden" value="' + _token + '" />' +
                                    '<input name="language" type="hidden" value="' + language + '" />' +
                                '</form>');
                f=document.getElementById('genealogyForm');
                if(f){
                    f.submit();
                }
            }
            else{
                loginErrorAlert();
                $('#cargando').css("display", "none");
            }
        }
    });
}

var down = 0;
var up = 0;

function seeDown(){
    if(down == 0){
        $('.down').css('display', 'none');
        down = 1;
    }
    else{
        $('.down').css('display', 'block');
        down = 0;
    }
}

function seeUp(){
    switch(up){
        case 0:
            $('.up').css('display', 'none');
            up = 1;
            break;
        case 1:
            $('.up').css('display', 'block');
            up = 0;
            break;
    }
}

function getPdf(){
    var language = $('#language').val();
    window.open("/preInscInfpdf?associateid=" + dataRegist[0].AssociateId + "&sponsorid=" + dataRegist[0].SponsorId + "&language=" + language , "ventana1" , "width=500,height=300,scrollbars=NO")
}

function loadSponsors(){
    var valor = $('#superSearch').val();
    if(valor.length >= 4){
        var data = {datoabuscar: valor}
        $.ajax({
            type: 'GET',
            url: '/preInscInfGetSponsors',
            data: data,
            success: function(Response) {
                $("#respuesta").html(Response);
            }
        });
    }
}

function clearDiv(id){
    $("#sponsorRandoom").hide();
    $("#sponsorRandoomLabel").hide();
    $("#respuesta").empty();
    $('#superSearch').val(id);
    var code = id.split("-");
    $('#sponsorId').val(code[0]);
}

function eliminarCookies() {
    document.cookie.split(";").forEach(function(c) {
        document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
    });
}

function validaVacio(){
    var dato = $("#superSearch").val();
    if(dato.trim() == ''){
        $("#sponsorRandoom").show();
        $("#sponsorRandoomLabel").show();
        $("#respuesta").empty();
    }
}

function hidealeatorio(){
    $("#sponsorRandoom").hide();
    $("#sponsorRandoomLabel").hide();
}

function submitRecoverPass(){
    $("#msgvalidating").show();
    var email = $("#forgotAcountMail").val();
    document.getElementById("recoverPassBTN").disabled = true;
    var data = { email: email };
    $.ajax({
        type: 'get',
        url: '/preInscInfRecoveracount',
        data: data,
        success: function(Response) {
            if(Response == 'success'){
                $("#forgotAcountMail").val('');
                $("#forgotAcountForm").hide();
                document.getElementById("recoverPassBTN").disabled = false;
                alertMailSend();
            }
            else{
                alerEmailNotFound();
                document.getElementById("recoverPassBTN").disabled = false;
            }
        }
    }).fail( function() {
        alerEmailNotFound();
        document.getElementById("recoverPassBTN").disabled = false;
    });
    $("#msgvalidating").hide();
    document.getElementById("recoverPassBTN").disabled = false;
}

//------------------------------------------------------------

var alertDuplicateMail = $('#alertDuplicateMail').val();
var alertMailsMatchError = $('#alertMailsMatchError').val();
var alertRegistrationOk = $('#alertRegistrationOk').val();
var alertHeigtAge = $('#alertHeigtAge').val();
var alertAgeInvalid = $('#alertAgeInvalid').val();
var rquired = $('#rquired').val();
var texteEnd = $('#texteEnd').val();
var loginErrortext = $('#loginError').val();
var alertSponsorIdtext = $('#alertSponsorId').val();
var alertMailInvalid = $('#alertMailInvalid').val();
var alertAcountError = $("#alertAcountError").val();
var alertAcountRecovered = $("#alertAcountRecovered").val();

function alertErroMailFormat(){
    swal({
        title: 'Error',
        text: alertMailInvalid,
        type: 'error',
        padding: '2em'
    })
    $('#email').val('');
}

function alertMailDup(){
    swal({
        title: 'Error',
        text: alertDuplicateMail,
        type: 'error',
        padding: '2em'
    })
    $('#email').focus();
}

function alertErroSponsorId(){
    swal({
        title: 'Error',
        text: alertSponsorIdtext,
        type: 'error',
        padding: '2em'
    })
    $('#sponsorId').val('');
    $('#superSearch').val('');
}

function emailNotMatch(){
    swal({
        title: 'Error',
        text: alertMailsMatchError,
        type: 'error',
        padding: '2em'
    })
}

function loginErrorAlert(){
    console.log(loginErrortext);
    swal({
        title: 'Error',
        text: loginErrortext,
        type: 'error',
        padding: '2em'
    })
}

$("#forgotAcountForm").hide();
$("#msgvalidating").hide();
$("#cotitularData").hide();

function rescuePass(){
    $("#forgotAcountForm").show(1000);
}

function alerEmailNotFound(){
    swal({
        title: 'Error',
        text: alertAcountError,
        type: 'error',
        padding: '2em'
    })
}

function alertMailSend(){
    swal({
        title: 'OK',
        text: alertAcountRecovered,
        type: 'success',
        padding: '2em'
    })
}

//------------------------------------------------------
function returnIncorporation(){
    swal.mixin({
        input: 'text',
        confirmButtonText: 'Continuar',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        padding: '2em',
    }).queue([
        {
            title: 'Retomar Pre-Inscripción',
            text: 'Ingrese el correo con el que se pre-registro'
        },
    ]).then(function(result) {
        var mail = result.value[0];
        if(mail != ''){
            if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(mail)){
                if (result.value) {
                    var data = {mail: mail}
                    $.ajax({
                        type: 'GET',
                        url: '/preInscInfReturnInc',
                        data: data,
                        cache: false,
                        success: function(Response) {
                            if(Response != 0){
                                $("#associateidAssigned").val(Response[0]['AssociateId'].trim());
                                $("#slctPaisReturn").val(Response[0]['Pais'].trim());
                                var nombre = Response[0]['ApFirstName'].split(",");
                                var apellidos = nombre[0].split(' ');
                                $("#nameReturn").val(nombre[1].trim());
                                $("#firstNameReturn").val(apellidos[0].trim());
                                $("#secondNameReturn").val(apellidos[1].trim());
                                $("#celPhoneReturn").val(Response[0]['Phone1'].trim());
                                //$("#slctItemKitReturn").val(Response[0]['Itemkit'].trim());
                                $("#sponsorReturn").val(Response[0]['Sponsor'].trim());
                                $("#emailReturn").val(Response[0]['E_Mail'].trim());
                                $("#confEmailReturn").val(Response[0]['E_Mail'].trim());
                                $("#phoneReturn").val(Response[0]['Phone2'].trim());
                                $("#returnIncForm").modal({
                                    backdrop: 'static',
                                    keyboard: false
                                });
                                getPaisElemntsReurn(Response[0]['Pais'].trim())
                            }
                            else{
                                swal({
                                    title: 'Error',
                                    text: 'No se encontro informacion con el correo ingresado',
                                    type: 'error',
                                    padding: '2em'
                                }).then(function (){
                                    $("#returnIncorporation").trigger('click');
                                });
                            }
                        }
                    });
                }
            } else {
                swal({
                    title: 'Error',
                    text: 'Intente Ingresando un correo válido',
                    type: 'error',
                    padding: '2em'
                }).then(function (){
                    $("#returnIncorporation").trigger('click');
                });
            }
        }
        else{
            swal({
                title: 'Error',
                text: 'Intente Ingresando un correo',
                type: 'error',
                padding: '2em'
            }).then(function (){
                $("#returnIncorporation").trigger('click');
            });
        }
    }) 
}

function cancelupdatePreReg(){
    $("#retIncForm").trigger('reset');
    $("#returnIncForm").modal('toggle');
}

function updatePreInsc(){
    document.getElementById("updatePreReg").disabled = true;

    var pais = $("#slctPaisReturn").val();
    var n1 = $("#firstNameReturn").val();
    var n2 = $("#secondNameReturn").val();
    var n3 = $("#nameReturn").val();
    var nombre = n1 + " " + n2 + ", " + n3;
    var celPhone = $("#celPhoneReturn").val();
    var itemKit = $("#slctItemKitReturn").val();
    var sponsor = $("#sponsorReturn").val();
    var email = $("#emailReturn").val();
    var phone2 = $("#phoneReturn").val();
    var associateid = $("#associateidAssigned").val();
    var language = $("#language").val();
    
    if(n1.trim() == '' || n2.trim() == '' || n3.trim() == '' || celPhone.trim() == '' || sponsor.trim() == '' || email.trim() == '' || associateid.trim() == ''){
        document.getElementById("updatePreReg").disabled = false;
        swal({
            title: 'Error',
            text: rquired,
            type: 'error',
            padding: '2em'
        });
    }
    else{
        var data = {pais: pais, nombre: nombre, celPhone: celPhone, itemKit: itemKit, sponsor: sponsor, email: email, phone2: phone2, associateid: associateid, language: language};

        $.ajax({
            type: 'get',
            url: '/updatePreInsc',
            data: data,
            success: function(Response){
                document.getElementById("updatePreReg").disabled = false;
                cancelupdatePreReg();
                Swal.fire({
                    type: 'success',
                    title: 'Se ha actualizado la información del pre-registro!',
                    text: '',
                });

                $('#pills-tabContent-1').hide(1000);
                $("#pills-tabContent-2").show(1000);
                $("#formConfirmation").css('display', 'block');

                $('#sponsorCode').text(Response[0]['Sponsor']);
                $('#newadvisorCode').text(Response[0]['AssociateId']);
                $('#newadvisorName').text(Response[0]['ApFirstName']);
                $('#newadvisorPhone').text(Response[0]['Phone1']);
                $('#newadvisorPhone2').text(Response[0]['Phone2']);
                $('#newadvisorEmail').text(Response[0]['E_Mail']);

                var step = $("#step_1");
                step.removeClass('active');

                var step = $("#step_2");
                step.addClass('active');

                dataRegist = Response;
                sendWhatsapp(Response);
            }
        }).fail( function() {
            cancelupdatePreReg();
            document.getElementById("updatePreReg").disabled = false;
            Swal.fire({
                type: 'error',
                title: 'Error al intentar actualizar la información!',
                text: 'Contactar con soporte.',
            })
        });
    }
}

function sendWhatsapp(Response){
    var pais = Response[0]['Pais'];
    var phone1 = Response[0]['Phone1'].trim();
    var user = Response[0]['AssociateId'];
    var pswd = Response[0]['password_Infl'];
    var countryCode = ["57", "51", "506", "507", "503", "502", "56", "52", "593"];
    var whatsappLink = "";
    var whatsappText = "Gracias por pre-registrarte a NIKKEN Latinoamérica, estas son tus credenciales de acceso: Usuario => " + user + " | Contraseña => " + pswd;
    phone1 = phone1.trim();
    switch(pais){
        case('LAT'):
            if(phone1.length == 10){
                whatsappLink = "https://api.whatsapp.com/send?phone=" + countryCode[7] + phone1 + "&text=" + whatsappText;
            }
            break;
        case('PER'):
            if(phone1.length == 9){
                whatsappLink = "https://api.whatsapp.com/send?phone=" + countryCode[1] + phone1 + "&text=" + whatsappText;
            }
            break;
        case('PAN'):
            if(phone1.length == 7){
                whatsappLink = "https://api.whatsapp.com/send?phone=" + countryCode[3] + phone1 + "&text=" + whatsappText;
            }
            break;
        case('ECU'):
            if(phone1.length == 8){
                whatsappLink = "https://api.whatsapp.com/send?phone=" + countryCode[8] + phone1 + "&text=" + whatsappText;
            }
            break;
    }
    if(whatsappLink != ''){
        window.open(whatsappLink, "PRE-INSCRIPCION INFLUENCERS", "width=800, height=700");
    }
}

$(document).ready(function(){
    $('#celPhoneReturn').keypress(onliNumbers);
    $('#phoneReturn').keypress(onliNumbers);
    $('#celPhone').keypress(onliNumbers);
    $('#phone').keypress(onliNumbers);
    $(".basic").select2({tags: true});
    $("#divDeptoPer").hide();
    $("#divProvPer").hide();
    $("#divDistPer").hide();
    $("#divCiudad").hide();
    $("#divInpProvincia").hide();
    $("#divInpCiudad").hide();
})

function onliNumbers(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } 
    else if (key < 48 || key > 57) {
        return false;
    }
    else {
        return true;
    }
}

function onlyLetters(event){
    key = event.keyCode || event.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
}

function getPaisElemnts(pais){
    var paisNum = 0;
    var url = "";

    var value = "";
    var text = "";
    var id = "";
    switch(pais){
        case 'ECU':
            $("#divInpCiudad").show(1000);
            $("#divProvPer").show(1000);
            $("#divDeptoPer").hide();
            $("#divDeptoPer").removeAttr('onchange');
            $("#slctProv").removeAttr('onchange');
            $("#divDistPer").hide();
            $("#divCiudad").hide();
            $("#divInpProvincia").hide();
            url = "/preInscInfGetProvincias";
            paisNum = 4;
            value = "code";
            text = "name";
            id = 'slctProv';
            $("#slctProv").empty();
            $('#slctProv').append('<option value="" selected disabled>Seleccione...</option>');
            break;
        case 'PAN':
            $("#divDeptoPer").hide();
            $("#divProvPer").hide();
            $("#divDistPer").hide();
            $("#divInpCiudad").hide();
            $("#divCiudad").show(1000);
            $("#divInpProvincia").show(1000);
            url = "/preInscInfGetProvincias";
            paisNum = 5;
            value = "code";
            text = "name";
            id = 'slctCiudad';
            $("#slctCiudad").empty();
            $('#slctCiudad').append('<option value="" selected disabled>Seleccione...</option>');
            break;
        case 'PER':
            $("#divDeptoPer").show(1000);
            $("#divDeptoPer").attr('onchange', 'preInscInfGetResindeceOne(3, $("#slctDepto").val())');
            $("#slctProv").attr('onchange', 'preInscInfGetResindeceTwo(3, $("#slctDepto").val(), $("#slctProv").val())');
            $("#divProvPer").show(1000);
            $("#divDistPer").show(1000);
            $("#divCiudad").hide();
            $("#divInpCiudad").hide();
            $("#divInpProvincia").hide();
            url = "/preInscInfGetDepartamento";
            paisNum = 3;
            value = "state_code";
            text = "state_code";
            id = 'slctDepto';
            $("#slctProv").empty();
            $('#slctProv').append('<option value="" selected disabled>Seleccione...</option>');
            break;
    }
    var data = {paisNum: paisNum};
    $.ajax({
        type: 'get',
        url: url,
        data: data,
        success: function(response){
            for(var x = 0; x < response.length; x++){
                if(pais == 'PER'){
                    $('#' + id).append('<option value="' + (parseInt(x) + parseInt(1) ) + '">' + response[x][text] + '</option>');
                }
                else{
                    $('#' + id).append('<option value="' + response[x][value] + '">' + response[x][text] + '</option>');
                }
            }
        }
    });

    setDocuments(pais);
}

function preInscInfGetResindeceOne(NumPais, depto){
    var combo = document.getElementById("slctDepto");
    var selected = combo.options[combo.selectedIndex].text;
    var data = {NumPais: NumPais, depto: selected};
    $.ajax({
        type: 'get',
        url: '/preInscInfGetResindeceOne',
        data: data,
        success: function(response){
            for(var x = 0; x < response.length; x++){
                $('#slctProv').append('<option value="' + response[x]['province_code'] + '">' + response[x]['province_name'] + '</option>'); 
            }
        }
    });
}

function preInscInfGetResindeceTwo(NumPais, depto, provincia){
    var combo = document.getElementById("slctDepto");
    var selected = combo.options[combo.selectedIndex].text;
    var data = {NumPais: NumPais, depto: selected, provincia: provincia};
    $.ajax({
        type: 'get',
        url: '/preInscInfGetResindeceTwo',
        data: data,
        success: function(response){
            for(var x = 0; x < response.length; x++){
                $('#slctDist').append('<option value="' + response[x]['colony_code'] + '">' + response[x]['colony_name'] + '</option>'); 
            }
        }
    });
}

function setDocuments(pais){
    var slctTipDoc = $("#slctTipDoc");
    var numDocto = $("#numDocto");
    var slctTipDocCoTitular = $("#slctTipDocCoTitular");
    var numDoctoCoTitular = $("#numDoctoCoTitular");
    switch(pais){
        case 'ECU':
            numDocto.removeAttr('maxlength');
            numDocto.attr('maxlength', '20');
            slctTipDoc.empty();
            slctTipDoc.append('<option value="" selected disabled>Seleccione...</option>');
            slctTipDoc.append('<option value="CEDULA_DE_IDENTIDAD">CEDULA DE IDENTIDAD</option>');
            slctTipDoc.append('<option value="PASAPORTE">PASAPORTE</option>');
            slctTipDoc.append('<option value="RUC">RUC</option>');
            numDoctoCoTitular.removeAttr('maxlength');
            numDoctoCoTitular.attr('maxlength', '20');
            slctTipDocCoTitular.empty();
            slctTipDocCoTitular.append('<option value="" selected disabled>Seleccione...</option>');
            slctTipDocCoTitular.append('<option value="CEDULA_DE_IDENTIDAD">CEDULA DE IDENTIDAD</option>');
            slctTipDocCoTitular.append('<option value="PASAPORTE">PASAPORTE</option>');
            slctTipDocCoTitular.append('<option value="RUC">RUC</option>');
            break;
        case 'PAN':
            numDocto.removeAttr('maxlength');
            numDocto.attr('maxlength', '20');
            slctTipDoc.empty();
            slctTipDoc.append('<option value="" selected disabled>Seleccione...</option>');
            slctTipDoc.append('<option value="CARNET_DE_MIGRACIÓN">CARNET DE MIGRACIÓN</option>');
            slctTipDoc.append('<option value="CEDULA_DE_IDENTIDAD">CEDULA DE IDENTIDAD</option>');
            numDoctoCoTitular.removeAttr('maxlength');
            numDoctoCoTitular.attr('maxlength', '20');
            slctTipDocCoTitular.empty();
            slctTipDocCoTitular.append('<option value="" selected disabled>Seleccione...</option>');
            slctTipDocCoTitular.append('<option value="CARNET_DE_MIGRACIÓN">CARNET DE MIGRACIÓN</option>');
            slctTipDocCoTitular.append('<option value="CEDULA_DE_IDENTIDAD">CEDULA DE IDENTIDAD</option>');
            break;
        case 'PER':
            numDocto.attr('maxlength', '8');
            slctTipDoc.empty();
            slctTipDoc.append('<option value="DNI">DNI</option>');
            numDoctoCoTitular.attr('maxlength', '8');
            slctTipDocCoTitular.empty();
            slctTipDocCoTitular.append('<option value="DNI">DNI</option>');
            break;
    }
}

function addCoTitlar(){
    if($("#coTitular").is(':checked')){
        $("#cotitularData").show(1000);
    }
    else{
        $("#cotitularData").hide(1000);
    }
}