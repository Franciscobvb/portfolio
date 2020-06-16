
$(function() {
    var lastPub = ""
    // Ajax Function
    $.ajax({
        type: 'get',
        url: '/getLastPost',
        success: function(post){
            if(post == ''){
                lastPub = '<p style="text-align: center; font-size: 15px;"><br><img title="TinyMCE" src="http://services.nikken.com.mx/fpro/img/min-logo-nikken-black.png" alt="TinyMCE" width="84" height="84" /></p><br><h1 style="text-align: center;">Welcome to the TinyMCE & Community Plugins demo!</h1><br><h5 style="text-align: center;">Note, this is not an "enterprise/premium" demo.<br>Visit the <a href="#!">pricing page</a> to demo our premium plugins.</h5><br><p>Please try out the features provided in this full featured example.</p><p>Note that any <b>MoxieManager</b> file and image management functionality in this example is part of our commercial offering – the demo is to show the integration.</p><br><h2>Got questions or need help?</h2><ul><li>Our <a href="#!">documentation</a> is a great resource for learning how to configure TinyMCE.</li><li>Have a specific question? Visit the <a href="#!">Community Forum</a>.</li><li>We also offer enterprise grade support as part of <a href="#!">TinyMCE Enterprise</a>.</li></ul><br><h2>A simple table to play with</h2><table style="text-align: center;"><thead><tr><th>Product</th><th>Cost</th><th>Really?</th></tr></thead><tbody><tr><td>TinyMCE</td><td>Free</td><td>YES!</td></tr><tr><td>Plupload</td><td>Free</td><td>YES!</td></tr></tbody></table><br><h2>Found a bug?</h2><p>If you think you have found a bug please create an issue on the <a href="#!">GitHub repo</a> to report it to the developers.</p><br><h2>Finally ...</h2><p>Dont forget to check out our other product <a href="#!" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.</p><p>Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.</p><br>';
            }
            else{
                lastPub = post[0]['Descripcion'];
            }
            
        }
    });

    tinymce.init({
        selector: 'textarea',
        height: 500,
        theme: 'modern',
        paste_data_images: true,
        images_upload_handler: function (blobInfo, success, failure) {
            success("data:" + blobInfo.blob().type + ";base64," + blobInfo.base64());
        },
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'template paste textcolor colorpicker textpattern imagetools codesample toc uploadimage'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | print preview | uploadimage',
        image_advtab: true,
        templates: [
            { title: 'Ultima publicación', content: lastPub },
        ],
        language: 'es',
        resize: false 
    });
});
