<?php
session_start();
if(!isset($_SESSION['login'])) {
    header('LOCATION:login/login.php'); die();
} else {
}
if(isset($_POST['but_logout'])){



    session_destroy();
    header('Location: index.html');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
  XCAGE
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script title="ajax do checker">
    function enviar() {
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
        var rp = 0;
		var rCredits;
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
                  Array.prototype.randomElement = function () {
                   return this[Math.floor(Math.random() * this.length)]
                   }
                   var pr = $("#proxy").val();
                   var MyArray = pr.split("\n");
                   var proxy = MyArray.randomElement();
                           $.ajax({
                        url: 'api4.php?lista=' + value + '&proxy=' + proxy,
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("Aprovada")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }

                            $('#carregadas').html(total);

                            var fila = parseInt(ap) + parseInt(rp);
                            $('#cLive').html(ap);
                            $('#cDie').html(rp);
                            $('#total').html(fila);
                            $('#cLive2').html(ap);
                            $('#cDie2').html(rp);
						}
                    });
                }, 5000 * index);
        });
    }

    function aprovadas(str) {
        $(".aprovadas").append(str);
    }
    function reprovadas(str) {
        $(".reprovadas").append(str);
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }

	function iloveyou(){
	alert('PEKPEK')}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){


    $("#bode").hide();
	$("#esconde").show();

	$('#mostra').click(function(){
	$("#bode").slideToggle();
	});

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode2").hide();
	$("#esconde2").show();

	$('#mostra2').click(function(){
	$("#bode2").slideToggle();
	});

});

</script>
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-normal">
            XCAGE's checker
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="./">
              <i class="tim-icons icon-badge"></i>
              <p>Gate 1</p>
            </a>
          </li>
          <li>
            <a href="./index2.html">
              <i class="tim-icons icon-badge"></i>
              <p>Gate 2</p>
            </a>
          </li>
          <li>
            <a href="./index3.html">
              <i class="tim-icons icon-badge"></i>
              <p>Gate 3</p>
            </a>
          </li>
          <li>
            <a href="./index1.html">
              <i class="tim-icons icon-badge"></i>
              <p>CC GENERATOR</p>
            </a>
          </li>
          <li>
            <a href="./index7.html">
              <i class="tim-icons icon-badge"></i>
              <p>SK_KEY CHECKER</p>
            </a>
          </li>
            <a href="./index5.html">
              <i class="tim-icons icon-badge"></i>
              <p>PROXY CHECKER</p>
            </a>
          </li>
          <li>
            <a href="./index6.html">
              <i class="tim-icons icon-badge"></i>
              <p>BINLIST</p>
            </a>
          </li>
          <li class="active ">
            <a href="./index4.php">
              <i class="tim-icons icon-badge"></i>
              <p>RESERVE FOR ADMINS</p>
            </a>
          </li>
          <li>
                <form method='post' action="">
              <i class="tim-icons icon-button-power"></i>
              <input class="btn-primary" type="submit" name="but_logout" value="Logout"/>
            </form>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">XCAGE</a>
          </div>
          </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
	<br>
	      <div class="content">
      <center> <div class="row col-md-12">
<div class="card col-sm-12">
  <span class="badge badge-info"><h4>Gate 4-ADMIN CHECKER</h4></span>
  <div class="card-body">
<div class="md-form">
  <p style="color:red; size:30px; font-weight: bold;">NOTE** PROXIES ARE OPTIONAL!!</p>
	<div class="col-md-12">
<center>  <div class="md-form">
    <span>Approved:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
    <span>Declined:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
    <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0</span>
    <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
</div><br>
<span class="badge badge-white"<label for="lista">Cards should be in here.</label></span>
<br>
<textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="50" placeholder="FORMAT: xxxxxxxxxxxxxxxx|mm|year|cvv" ></textarea>
<br>
<span class="badge badge-danger"><label for="proxy">PROXIES Here[OPTIONAL]</label></span>
<br>
<textarea class="md-textarea form-control" style="text-align: center;" rows="1" id="proxy" placeholder="proxy:port"></textarea>
 </center>
&nbsp;<br>

</div>
<center>
<button class="btn btn-primary" style="width: 200px; outline: none;" id="testar" onclick="enviar()" >Start</button>
</center>
</div>
</div>
</div>
</center>
&nbsp;&nbsp;<br>&nbsp;&nbsp;<br>
<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra" class="btn btn-primary">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Approved - <span  id="cLive2" class="badge badge-success">0</span></h6>
    <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
</div>
  </div>
</div>
</div>
</br>
<div class="col-md-12">
<div class="card">
	<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra2" class="btn btn-primary">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Declined - <span id="cDie2" class="badge badge-danger">0</span></h6>
    <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
    </div>
  </div>
</div>
</div>
  </div>
</div>
</div>
</center>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            © 2020 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">XCAGE</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();




        

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>

</html>
