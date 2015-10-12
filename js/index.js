/* =================================
   LOGIN-SIGNUP MODAL                     
=================================== */

function showRegisterForm(){
    "use strict";
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
       $('.modal-title').html('Crea una cuenta');
        $('.modal-subtitle').html('Inicia con nuestro periodo de prueba de 30 dìas ');
    });
    $('.error').removeClass('alert alert-danger').html('');
}


function showLoginForm(){
    "use strict";
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');
        });
        
        $('.modal-title').html('Ingresa en <span>Porciweb</span>');
        $('.modal-subtitle').html('Ingresa tu correo y contraseña');
    });
    $('.error').removeClass('alert alert-danger').html('');
}


function openLoginModal(){
    "use strict";
    showLoginForm();
    $('#loginModal').modal('show');
}


function openRegisterModal(){
    "use strict";
    showRegisterForm();
    $('#loginModal').modal('show');
}

/* =================================
   LOGIN-AJAX MODAL                     
=================================== */

$(document).ready(function(){

$('.ingresar').click(function(){
    
    

 var userEmail = $('#lm-email').val();
 
 var userPass = $('#lm-password').val();
 

 //var dataString = 'userEmail='+userEmail+'&userPass='+userPass;
   $.ajax({
        
        type: 'POST',
        url: 'consultas_porciweb.php',
        data: 'userEmail='+userEmail+'&userPass='+userPass,
        cache: false
       }).done(function(resp){
            console.log(resp)
            window.location="porciweb_ingreso.php";
       })
   })
});














