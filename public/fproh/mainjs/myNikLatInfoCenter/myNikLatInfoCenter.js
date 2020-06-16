function getPostSave(){
    var content =  tinyMCE.activeEditor.getContent();
    var _token = $("#_token").val();

    if(content.trim() != ''){
        var data = { content: content, _token: _token }
        $.ajax({
            type: "post",
            url: "/cenInfMyNkSavePost",
            data: data,
            success: function(response){
                console.log(response);
                swal({
                    title: 'Actualizado',
                    text: "El post se actualizo, podra visualizarlo en My Nikken Latinoamérica",
                    type: 'success',
                    padding: '2em'
                })
            }
        }).onFail(function(){
            swal({
                title: 'Error',
                text: "Error al intentar guardar la publicación",
                type: 'error',
                padding: '2em'
            })
        });
    }
    else{
        swal({
            title: 'Error',
            text: "La publicación tiene que estar llena!!",
            type: 'error',
            padding: '2em'
        })
    }
}

