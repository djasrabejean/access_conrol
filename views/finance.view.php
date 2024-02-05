<?php require('../partials/head.php'); ?>

<!-- Navigation required from nav.php file -->
<?php require('../partials/nav.php'); ?>

<!-- </header> -->
<!-- End Header -->

<!-- aside bar required from sidebar.php -->
<?php require('../partials/sidebar.php'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Students Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index.view.php">Home</a></li>
        <li class="breadcrumb-item">students</li>
        <li class="breadcrumb-item active">Tables Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- Modal -->
                        <div class="float-right mb-3">
                            <!-- <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus-circle text-dark"></i> Enrol Student</i< /a>
                                <a onclick="document.getElementById('addUserModal').style.display='block'"></a> -->
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
                                        <th>Edit</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card recent-payement overflow-auto">


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
            <h5 class="card-title">Recent Payments <span>| Today</span></h5>

            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">Reg Num</th>
                  <th scope="col">Students Name</th>
                  <th scope="col">Current Program</th>
                  <th scope="col">Amounts</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a href="#">22-5560</a></th>
                  <td>Ben-Amine Ndoradoumngue</td>
                  <td><a href="#" class="text-primary">Bachelor BUSINESS & MANAGEMENT SCIENCE</a></td>
                  <td>ksh164000</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">21-4779</a></th>
                  <td>Kemrangue Bansoula</td>
                  <td><a href="#" class="text-primary">Diploma Information and Communication TECHNOLOGY</a></td>
                  <td>ksh77000</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">20-4988</a></th>
                  <td>Asrom Edith</td>
                  <td><a href="#" class="text-primary">Bachelor in SOCIAL SCIENCES </a></td>
                  <td>ksh14700</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">23-1644</a></th>
                  <td>Ratamadji Ferdinand</td>
                  <td><a href="#" class="text-primar">Bachelor BUSINESS & MANAGEMENT SCIENCE</a></td>
                  <td>ksh67000</td>
                  <td><span class="badge bg-danger">Rejected</span></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#">22-1944</a></th>
                  <td>Rayand Celest</td>
                  <td><a href="#" class="text-primary">Diploma in BUILT ENVIRONMENT & DESIGN</a></td>
                  <td>ksh16500</td>
                  <td><span class="badge bg-success">Approved</span></td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Finance Details</h5>

          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20% of none payment</div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">30% of half payment</div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">50% of completed payment</div>
          </div>
        </div>

      </div>
    </div>

    </div>
    </div>
  </section> -->

</main>
<!-- End #main -->

<!-- footer required from footer.php file -->
<?php require('../partials/footer.php'); ?>
<!--=============add user modal===================-->

<div class="modal fade" id="addUserModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg bg-warning">
                <h5 class="modal-title" id="exampleModalLabel">Enrol Student</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="w3-container" id="StudentFinance" method="post" action="javascript:(void)">
                    <div class="w3-section">
                        <div class="form-group">
                            <label>Transaction Date</label>
                            <input type="date" class="form-control" name="Transaction_Date" id='Transaction_Date'>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                            <label for="Transaction">Mode of Transaction</label>
                            <select id="transaction" class="form-control" name="Transaction_Type" required>
                                <option>Cash</option>
                                <option>Bank Receipt</option>
                            </select>
                            </div>
                            <div class=" col-md-6 form-group">
                                <label for="address">Amount</label>
                                <input type="text" class="form-control" name="Amount" id='amount' placeholder="Ksh." autofocus required="required">
                            </div>
                        </div>
                        
                    </div>
                    <input name="updateStudentFinance" id="updateStudentFinance" class="btn btn-primary insert btn-lg updateStudentFinance" type="submit" name="submit" value="Submit" />
                    <input name="Student_ID" id="Student_ID" type="hidden" />
                    <div style="font-size:14px; color:#dc3545; margin-top:10px">

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark" type="button" id="clearFinanceData">Clear</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

  fetch_data();
  setInterval(function() {
      fetch_data()
  }, 20000);

  function fetch_data() {
      var dataTable = $('#user_data').DataTable({
          dom: 'Bfrtip',
          buttons: [{
                  extend: 'pageLength',
                  className: 'btn btn-outline-success mr-1 text-dark',
                  messageTop: 'List of supplierss',
                  messageBottom: '<?php ?>'
              },
              {
                  extend: 'colvis',
                  className: 'btn btn-dark  text-white',
                  messageTop: 'List of supplierss',
                  messageBottom: '<?php ?>'
              },
              {
                  extend: 'excel',
                  className: 'btn btn-success btn-sm ml-1 mr-1 text-white',
                  text: '<i class="fa fa-file-excel text-white"></i> excel',
                  messageTop: 'List of supplierss',
                  messageBottom: '<?php ?>'
              },
              {
                  extend: 'pdf',
                  className: 'btn btn-danger btn-sm mr-1 text-white',
                  text: '<i class="fa fa-file-pdf text-white"></i> pdf',
                  messageTop: 'List of supplierss',
                  messageBottom: '<?php ?>'
              },
              {
                  extend: 'print',
                  className: 'btn btn-warning btn-sm text-white',
                  text: '<i class="fa fa-print text-white"></i> print',
                  messageTop: '<h2 align="center" class="text-primary">List of supplierss</h2>',
                  messageBottom: '<h4 align="center" class="text-primary"> For more information on the document contact us at <b><i><?php  ?><i/><b></h4>'
              }
          ],
          "processing": true,
          "serverSide": true,
          "destroy": true,
          "searching": true,
          "order": [],
          "ajax": {
              url: "../server/ViewFinances.php",
              type: "POST",
              async: true
          }

      });
  }

 //=====modal should show current user info
 $(document).on('click', '.edit', function() {
    $('#addUserModalEdit').modal('show');

    var Student_ID = $(this).attr("id");
    $.ajax({
        url: "../server/fetchFinance.php",
        method: "POST",
        data: {
            Student_ID: Student_ID
        },
        dataType: "json",
        success: function(data) {
            $('#Student_ID').val(data.Student_ID);

        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});


$(document).on('click', '#clearFinanceData', function() {
    $('#Transaction_Type').val('');
    $('#transaction').val('');
    $('#amount').val('');
  

});
       
//========update transformer info info on clicking update
$(document).on('click', '.updateStudentFinance', function() {
if (confirm("Are you sure you want to Student details?")) {
    $.ajax({
        url: "../server/UpdateFinances.php",
        method: "POST",
        data: $('#StudentFinance').serialize(),
        beforeSend: function() {
            $('#insertStudent').val("update....");
        },
        success: function(data) {
            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
            $('#StudentFinance')[0].reset();
            $('#addUserModal').modal('hide');
            $('#user_data').DataTable().destroy();
            $('#StudentFinance').clear();

            fetch_data();
        }
    });
    setInterval(function() {
        $('#alert_message').html('');
    }, 5000);
}
});


              //===== Inactivate staff
$(document).on('click', '.approve', function(){
  var Student_ID = $(this).attr("id");
    
   if(confirm("Are you sure you approve the finances?"))
    {
        $.ajax({
            url:"../server/approved.php",
            method:"POST",
            data:{Student_ID:Student_ID},
            success:function(data){
                $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                $('#user_data').DataTable().destroy();
                fetch_data();
            }
        });
        setInterval(function(){
            $('#alert_message').html('');
        }, 5000);
    }
});
    //====activate user
$(document).on('click', '.reject', function(){
    var Student_ID = $(this).attr("id");
    if(confirm("Are you sure you want to reject the finances?"))
    {
        $.ajax({
            url:"../server/reject.php",
            method:"POST",
            data:{Student_ID:Student_ID},
            success:function(data){
                $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                $('#user_data').DataTable().destroy();
                fetch_data();
            }
        });
        setInterval(function(){
            $('#alert_message').html('');
        }, 5000);
    }
});


});
</script>