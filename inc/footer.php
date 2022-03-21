</body>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/site/login/assets/js/core/popper.min.js"></script>
<script src="../vendor/site/login/assets/js/core/bootstrap.min.js"></script>
<script src="../vendor/site/login/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
<script src="../vendor/site/login/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../vendor/site/login/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../vendor/site/login/assets/js/black-dashboard.min.js?v=1.0.0"></script>
<!-- script paginas logado -->
<script src="../scripts/perfil.js"></script>


<?php


switch($_SESSION["currentPage"]){
  case "dashboard":
    echo('<script src="../scripts/dashboard.js"></script>');
    break;
  case "loggeral":
    echo('<script src="../scripts/log_geral.js"></script>');
    break;
  case "doacao":
      echo('<script src="../vendor/jquery/jquery.mask.js"></script>');
      echo('<script src="../scripts/doacao.js"></script>');
      echo('<script src="../vendor/scripts/api.js"</script>');
      break;
  case "pagamentos":
      echo('<script src="../scripts/pagamentos.js"></script>');
      break;
  case "loja_virtual":
      echo('<script src="../scripts/loja_virtual.js"></script>');
      break;
  case "veiculos":
  case "gerenciarveiculos":
    echo('<script src="../scripts/gerenciarveiculos.js"></script>');
    break;
  case "garagem":
    echo('<script src="../scripts/garagem.js"></script>');
    break;
  case "perfil":
    echo('<script src="../scripts/perfil.js"></script>');
    break;
}

?>

<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="../vendor/moment/moment.js"></script>
<script src="../vendor/site/login/assets/demo/demo.js"></script>
<script src="../vendor/jquery/jquery-ui.min.js"></script>
<script src="../vendor/jquery/jquery.mask.js"></script>
<script src="../vendor/sweetalert/sweetalert2.all.min.js"></script>





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
      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
      $('.fixed-plugin a').click(function(event) {
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });
      $('.fixed-plugin .background-color span').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

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
</html>