  <!-- Argon Scripts -->
  
  <!-- Core -->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js
"></script> --}}
  <script src="{{ asset('argon-template') }}/vendor/jquery/dist/dist-new/jquery.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{ asset('argon-template') }}/vendor/list.js/dist/list.min.js"></script>
  {{-- <script src="{{ asset('argon-template') }}/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script> --}}

  <!-- Optional JS -->
  <script src="{{ asset('argon-template') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="{{ asset('argon-template') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

  <!-- Argon JS -->
  <script src="{{ asset('argon-template') }}/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  {{-- <script src="{{ asset('argon-template') }}/js/demo.min.js"></script> --}}

  <script src="{{ asset('argon-template') }}/vendor/select2/dist/js-new/select2.full.min.js"></script>


  
<script>
$(document).ready(function() {
    $('.dt').DataTable(
      { keys: !0, select: { style: "multi" }, language: { paginate: { previous: "<i class='fas fa-angle-left'>", next: "<i class='fas fa-angle-right'>" } } }
    );
} );
</script>