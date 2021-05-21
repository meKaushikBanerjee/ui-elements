<?php include("../includes/header.php"); ?>
  <div class="container-scroller">
    <?php include("../includes/sidebar.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pie chart</h4>
                  <div class="flot-chart-container">
                    <div id="pie-chart" class="flot-chart"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Line Chart</h4>
                  <div class="flot-chart-container">
                    <div id="line-chart" class="flot-chart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar Chart</h4>
                  <div class="flot-chart-container">
                    <div id="column-chart" class="flot-chart"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Stacked Bar Chart</h4>
                  <div class="flot-chart-container">
                    <div id="stacked-bar-chart" class="flot-chart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Real-time Chart</h4>
                  <div class="flot-chart-container">
                    <div id="realtime-chart" class="flot-chart"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Area Chart</h4>
                  <div class="flot-chart-container">
                    <div id="area-chart" class="flot-chart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php include("../includes/footer.php"); ?>