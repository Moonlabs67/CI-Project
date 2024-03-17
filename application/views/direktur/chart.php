        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <!-- Content Row -->
          <div class="row">

          <!-- Progress -->
            <div class="col-xl-12 col-md-12 mb-12">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <canvas id="chart_pie" style="height:480px;"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        	</div>
        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- load css untuk Chart.js -->
      <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.js"></script>
      <script type="text/javascript">
       $.ajax({
          type:     'ajax',
          method:   'get',
          url:      '<?=base_url()?>pengawas/dashboard_data_proyek',
          async:    true,
          dataType: 'json',
          success:  function(response){
            var labels    = [];
            var data      = [];
            for (var i = 0; i < response.length; i++) {
              labels.push(response[i].nama_proyek);
              // remove %, lalu convert ke numeric
              data.push(parseInt((response[i].progress).replace('%', '')));
            }
            var ctx = document.getElementById('chart_pie').getContext('2d');
            // backgroundColor 
            var myPieChart = new Chart(ctx,{
              type: 'bar',
              data: {
                labels: labels,
                datasets: [{
                  label: "Progress Proyek",
                      data: data,                    
                      backgroundColor: [
                        '#29B0D0',
                        '#2A516E',
                        '#F07124',
                        '#8A2BE2',
                        '#008B8B',
                        '#FF8C00',
                        '#7FFF00'
                      ],
                  }],    
                },
                showDatapoints: true,
                options:    {
                    responsive: true
                }
              });
          },
          error: function(){
            swal("Error", "", "error");
            $('#overlay').hide();
          }
        });
      </script>