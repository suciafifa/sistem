  <script src="{{asset('template1/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template1/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('template1/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template1/lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('template1/lib/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('template1/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('template1/lib/parallax/parallax.js')}}"></script>
  <script src="{{asset('template1/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('template1/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('template1/lib/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('template1/lib/isotope/isotope.pkgd.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('template1/contactform/contactform.js')}}"></script>

  <script src="{{asset('template1/js/main.js')}}"></script>

  <script src="{{asset('template/src/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/dataTables.responsive.js')}}"></script>
  <script src="{{asset('templatesrc/plugins/datatables/media/js/responsive.bootstrap4.js')}}"></script>
  <!-- buttons for Export datatable -->
  <script src="{{asset('template/src/plugins/datatables/media/js/button/dataTables.buttons.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/button/buttons.bootstrap4.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/button/buttons.print.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/button/buttons.html5.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/button/buttons.flash.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/button/pdfmake.min.js')}}"></script>
  <script src="{{asset('template/src/plugins/datatables/media/js/button/vfs_fonts.js')}}"></script>
  <script>
    $('document').ready(function(){
      $('.data-table').DataTable({
        scrollCollapse: true,
        autoWidth: false,
        responsive: true,
        columnDefs: [{
          targets: "datatable-nosort",
          orderable: false,
        }],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
          "info": "_START_-_END_ of _TOTAL_ entries",
          searchPlaceholder: "Search"
        },
      });
      $('.data-table-export').DataTable({
        scrollCollapse: true,
        autoWidth: false,
        responsive: true,
        columnDefs: [{
          targets: "datatable-nosort",
          orderable: false,
        }],
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "language": {
          "info": "_START_-_END_ of _TOTAL_ entries",
          searchPlaceholder: "Search"
        },
        dom: 'Bfrtip',
        buttons: [
        'copy', 'csv', 'pdf', 'print'
        ]
      });
      var table = $('.select-row').DataTable();
      $('.select-row tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
          $(this).removeClass('selected');
        }
        else {
          table.$('tr.selected').removeClass('selected');
          $(this).addClass('selected');
        }
      });
      var multipletable = $('.multiple-select-row').DataTable();
      $('.multiple-select-row tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
      });
    });
  </script>