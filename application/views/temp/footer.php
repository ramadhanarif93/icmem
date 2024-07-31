<!-- Footer -->
<footer class="sticky-footer bg-white p-2">
  <!-- <div class="copyright my-auto text-right">
      <span>Copyright &copy; 2020 SBM ITB</span>
    </div> -->
  <div class="row ">
    <div class="col-12 text-center mt-1">
      <p class="p-0 m-0">Partner & Media Partner</p>
     <img src="<?= base_url('assets/img/partner/1.jpg') ?>" class="ml-2" width="100px" alt="">
      <img src="<?= base_url('assets/img/partner/2.jpg') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/3.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/4.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/5.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/6.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/7.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/8.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/9.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/10.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/11.png') ?>" class="ml-2" width="75px" alt="">
      <img src="<?= base_url('assets/img/partner/12.png') ?>" class="ml-2" width="75px" alt="">
    </div>
    <div class="col-12 text-right pr-4 pb-1">
      <span>Copyright &copy; 2020 SBM ITB</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('Auth/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets'); ?>/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets'); ?>/js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets'); ?>/js/demo/datatables-demo.js"></script>


<!-- <div id="show-test-tool">
  <button type="submit" class="btn btn-primary" id="show-test-tool-btn" title="show or hide top test tool">Show</button>
</div>
<script>
  document.getElementById('show-test-tool-btn').addEventListener("click", function(e) {
    var textContent = e.target.textContent;
    if (textContent === 'Show') {
      document.getElementById('nav-tool').style.display = 'block';
      document.getElementById('show-test-tool-btn').textContent = 'Hide';
    } else {
      document.getElementById('nav-tool').style.display = 'none';
      document.getElementById('show-test-tool-btn').textContent = 'Show';
    }
  })
</script> -->

<!-- <script src="https://source.zoom.us/1.7.8/lib/vendor/react.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/react-dom.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/redux.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/redux-thunk.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/jquery.min.js"></script>
<script src="https://source.zoom.us/1.7.8/lib/vendor/lodash.min.js"></script>

<script src="https://source.zoom.us/zoom-meeting-1.7.8.min.js"></script>
<script src="<?= base_url('assets/') ?>js/tool.js"></script>
<script src="<?= base_url('assets/') ?>js/index.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
  $(document).ready(function() {
    $('#dataTable2').DataTable();
  });
  $(document).ready(function() {
    $('#dataTable3').DataTable();
  });
  $(document).ready(function() {
    $('#dataTableExhibition').DataTable();
  });
</script>

<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

</body>

</html>