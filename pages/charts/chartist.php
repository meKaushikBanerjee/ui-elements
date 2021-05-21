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
                  <h4 class="card-title">Simple Line chart</h4>
                  <div class="ct-chart ct-perfect-fourth" id="ct-chart-line"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Line scatterer</h4>
                  <div id="rickshaw-time-scale"></div>
                  <div class="ct-chart ct-perfect-fourth" id="ct-chart-line-scatterer"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Stacked bar chart</h4>
                  <div class="ct-chart ct-perfect-fourth" id="ct-chart-stacked-bar"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal bar chart</h4>
                  <div class="ct-chart ct-perfect-fourth" id="ct-chart-horizontal-bar"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pie chart</h4>
                  <div class="ct-chart ct-perfect-fourth" id="ct-chart-pie"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Donut</h4>
                  <div class="ct-chart ct-perfect-fourth" id="ct-chart-donut"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php include("../includes/footer.php"); ?>