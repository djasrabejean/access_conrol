<?php require('../partials/head.php'); ?>

<!-- Navigation required from nav.php file -->
<?php require('../partials/nav.php'); ?>

<!-- aside bar required from sidebar.php -->
<?php require('../partials/sidebar.php'); ?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="views/index.view.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <!-- <div class="row"> -->
        <div class="row">
          <!-- Campus Card -->
          <div class="col-xxl-4 col-xl-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                  <li><a class="dropdown-item" href="#">Nairobi Campus</a></li>
                  <li><a class="dropdown-item" href="#">Ndjamena Campus</a></li>
                  <li><a class="dropdown-item" href="#">Mombassa Campus</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Campus <span>| Nairobi Campus</span></h5>

                <div class="icon">
                  <i class="bi bi-house-fill"></i>
                  <div class="label">Total System Users</div>
                </div>
                <div class="ps-3">
                  <h6 id='totalUser'></h6>
                </div>
              </div>
            </div>

          </div>


          <!-- Students Card -->
          <div class="col-xxl-4 col-xl-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                  <li><a class="dropdown-item" href="#">Nairobi Campus</a></li>
                  <li><a class="dropdown-item" href="#">Ndjamena Campus</a></li>
                  <li><a class="dropdown-item" href="#">Mombassa Campus</a></li>
                </ul>
              </div>




              <div class="card-body">
                <h5 class="card-title">Students <span>| Nairobi Campus</span></h5>

                <div class="icon">
                  <i class="ri-team-fill"></i>
                  <div class="label">Total Students</div>
                </div>
                <div class="ps-3">
                  <h6 id='studentCount'></h6>
                </div>
              </div>


            </div>
          </div>
        </div>

      </div>

    </div>




    <div class="col-xxl-4 col-xl-12">

      <div class="card info-card customers-card">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Total Active Staffs <span>| This Year</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="bi bi-people"></i>
            </div>
            <div class="ps-3">
              <h6 id='staffCount'></h6>
              <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

            </div>
          </div>

        </div>
      </div>

    </div>
    <!-- End Attendance Card -->

    ><!-- End Reports -->

    <!-- Recent payement -->
   <!-- End Recent Payement -->
   <section class="section">
        <div class="row">
        <h5 class="card-title">Finance Reports <span>/This Year</span></h5>
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- Modal -->
                        <div class="float-right mb-3">
                        </div>
                        <!-- End of Modal -->
                        <div class="responsive check">
                            <div id="alert_message" class="mt-2"></div>
                            <table id="user_data" class="table datatable" style="width: 100%;">
                                <thead style="font-size: 12px;overflow-y:hidden">
                                    <tr>
                                        <th>Student Id</th>
                                        <th> Full Name</th>
                                        <th> Program</th>
                                        <th>Batch Year</th>
                                        <th> Transaction Date</th>
                                        <th>Transaction Type</th>
                                        <th>Amount Paid</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Awards -->
    <section class="section">
        <div class="row">
        <h5 class="card-title">Staffs</h5>
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- End of Modal -->
                        <div class="responsive check">
                            <div id="alert_message" class="mt-2"></div>
                            <table id="user_staff" class="table datatable" style="width: 100%;">
                                <thead style="font-size: 12px;overflow-y:hidden">
                                    <th>Staff Name</th>
                                    <th> Staff Username</th>
                                    <th> Email</th>
                                    <th> Contact</th>
                                    <th>Role</th>
                                    
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Student Awards -->
    </div>
    </div>
    <!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">
    </div>
    <!-- End Right side columns -->

    </div>
  </section>

</main>
<!-- End #main -->

<!-- footer required from footer.php file -->
<?php require('../partials/footer.php'); ?>
<script>
$(document).ready(function() {

  fetch_data();
  function fetch_data() {
      var dataTable = $('#user_data').DataTable({
          // dom: 'Bfrtip',
          
          "processing": true,
          "serverSide": true,
          "destroy": true,
          "searching": true,
          "order": [],
          "ajax": {
              url: "../server/ViewFinancesDashboard.php",
              type: "POST",
              async: true
          }

      });
  }



});




$(document).ready(function() {

fetch_data();
function fetch_data() {
    var dataTable = $('#user_staff').DataTable({
        // dom: 'Bfrtip',
        
        "processing": true,
        "serverSide": true,
        "destroy": true,
        "searching": true,
        "order": [],
        "ajax": {
            url: "../server/viewStaffDashboard.php",
            type: "POST",
            async: true
        }

    });
}
});

$(document).ready(function() {
      $.ajax({
        url: "../server/count.php",
        method: "POST",
        dataType: "json",
        success: function(data) {
          $('#studentCount').text(data.totalStudents);
          $('#staffCount').text(data.totalStaff);
          $('#totalUser').text(data.totalCount);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
</script>