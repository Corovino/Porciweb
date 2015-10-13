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
   SCROLL NAVBAR
=================================== */
$(window).scroll(function(){
    "use strict";
    var b = $(window).scrollTop();
    if( b > 60 ){
        $(".navbar").addClass("is-scrolling");
    } else {
        $(".navbar").removeClass("is-scrolling");
    }
});
/* =======================================================================
   DOUGHNUT CHART
========================================================================== */
var isdonut = 0;
        
$('.start-charts').waypoint(function(direction){
    if (isdonut == 1){}
        else {
            var doughnutData = [
                {
                    value: 50,
                    color:"#C0392B",
                    highlight: "#EA402F",
                    label: "Beautiful Design"
                },
                {
                    value: 25,
                    color: "#323A45",
                    highlight: "#4C5B70",
                    label: "Responsive Layout"
                },
                {
                    value: 15,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Persuasive Call to Action"
                },
                {
                    value: 5,
                    color: "#27AE60",
                    highlight: "#29C36A",
                    label: "Social Proof"
                }

            ];

            var doughnut2Data = [
                {
                    value: 827,
                    color:"#C0392B",
                    highlight: "#EA402F",
                    label: "Cups of Coffee"
                },
                {
                    value: 1775,
                    color: "#323A45",
                    highlight: "#4C5B70",
                    label: "Code Hours"
                },
                {
                    value: 580,
                    color: "#2980B9",
                    highlight: "#2F97DC",
                    label: "Design Hours"
                },
                {
                    value: 540,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Songs Listened"
                }
            ];

            
            
            var ctx = document.getElementById("chart-area").getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : false});

            var ctx = document.getElementById("chart2-area").getContext("2d");
            window.myDoughnut = new Chart(ctx).Doughnut(doughnut2Data, {responsive : false});

            isdonut = 1;
        }
});

/* =======================================================================
   LINE CHART
========================================================================== */
var isline = 0;
        
$('.start-line').waypoint(function(direction){
    if (isline == 1){}
        else {

            var lineChartData = {
                labels : ["January","February","March","April","May","June","July"],
                datasets : [
                    {
                        label: "My First dataset",
                        fillColor : "rgba(192,57,43,0.2)",
                        strokeColor : "rgba(192,57,43,1)",
                        pointColor : "rgba(192,57,43,1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(192,57,43,1)",
                        data : [10,20,20,15,25,37,32]
                    },
                    {
                        label: "My Second dataset",
                        fillColor : "rgba(50,58,69,0.2)",
                        strokeColor : "rgba(50,58,69,1)",
                        pointColor : "rgba(50,58,69,1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(50,58,69,1)",
                        data : [20,23,33,57,74,81,96]
                    }
                ]

            };

            var ctx = document.getElementById("line-canvas").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {responsive: true});

            isline = 1;
        }
});

/* =======================================================================
   SIGNUP-DIVIDER ANIMATED POLYGON BACKGROUND
========================================================================== */
    var container = document.getElementById('canvas-bg');
    var renderer = new FSS.CanvasRenderer();
    var scene = new FSS.Scene();
    var light = new FSS.Light('323A45', '323A45');
    var geometry = new FSS.Plane(2000, 1000, 15, 8);
    var material = new FSS.Material('FFFFFF', 'FFFFFF');
    var mesh = new FSS.Mesh(geometry, material);
    var now, start = Date.now();

    function initialise() {
      scene.add(mesh);
      scene.add(light);
      container.appendChild(renderer.element);
      window.addEventListener('resize', resize);
    }

    function resize() {
      renderer.setSize(container.offsetWidth, container.offsetHeight);
    }

    function animate() {
      now = Date.now() - start;
      light.setPosition(300*Math.sin(now*0.001), 200*Math.cos(now*0.0005), 60);
      renderer.render(scene);
      requestAnimationFrame(animate);
    }

    initialise();
    resize();
    animate();
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
           
            window.location="porciweb_ingreso.php";
       })
   })
});














