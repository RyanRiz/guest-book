<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}" ></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}" ></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" ></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}" ></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#data').DataTable({});
    });
</script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.4') }}"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
