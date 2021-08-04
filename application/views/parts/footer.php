
    <!--   Core JS Files   -->
    <script src="<?php echo base_url()  . 'assets\js\core\jquery.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url()  . 'assets/js/core/popper.min.js' ?> " type="text/javascript"></script>
    <script src="<?php echo base_url() . 'assets/js/core/bootstrap.min.js' ?>" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-switch.js' ?>"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url() . 'assets/js/plugins/nouislider.min.js' ?>" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="<?php echo base_url() . 'assets/js/plugins/moment.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/plugins/bootstrap-datepicker.js" type="text/javascript' ?>"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url() . 'assets/js/paper-kit.js?v=2.2.0' ?>" type="text/javascript"></script>

    <script src="<?php echo base_url() . 'assets/js/teste.js' ?>" type="text/javascript"></script>
    <script src="<?php echo 'https://code.jquery.com/jquery-3.3.1.js' ?>" type="text/javascript"></script>
    <script src="<?php echo 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js' ?>" type="text/javascript"></script>
    <script src="<?php echo 'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js' ?>" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--  Google Maps Plugin   
    <script type="text/javascript" src="<?php echo base_url() . 'https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE' ?>"></script>
     -->
    <script>
      $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
          $('#datetimepicker').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });
      $("#cpf").mask('000.000.000-00', {reverse: true});
      $("#data-nascimento").mask('00-00-0000', {reverse: true});
      $("#cep, #termo").mask('00000-000', {reverse: true});
    </script>
</body>

</html>