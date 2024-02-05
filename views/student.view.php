<?php require('../partials/head.php'); ?>

<!-- Navigation required from nav.php file -->
<?php require('../partials/nav.php'); ?>

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
                            <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus-circle text-dark"></i> Enrol Student</i< /a>
                                <a onclick="document.getElementById('addUserModal').style.display='block'"></a>
                        </div>
                        <!-- End of Modal -->
                        <div class="responsive check">
                            <div id="alert_message" class="mt-2"></div>
                            <table id="user_data" class="table datatable" style="width: 100%;">
                                <thead style="font-size: 12px;overflow-y:hidden">
                                    <tr>
                                        <th>Student Id</th>
                                        <th> Full Name</th>
                                        <th> Date of Birth</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Contact</th>
                                        <th>Program</th>
                                        <th>Batch Year</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </section>

</main><!-- End #main -->
<!-- footer required from footer.php file -->
<?php require('../partials/footer.php'); ?>

<!--=============add user modal===================-->

<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg bg-warning">
                <h5 class="modal-title" id="exampleModalLabel">Enrol Student</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="w3-container" id="add-student-form" method="post" action="javascript:(void)">
                    <div class="w3-section">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname" id='fname'>
                        </div>
                        <div class="form-group">
                            <label>D.O.B</label>
                            <input type="date" class="form-control" name="DOB" id='Studdob'>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                            <label for="Transaction">Gender</label>
                            <select id='Studgender'class="form-control" name="gender"required>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>   
                            </div>
                           
                            <div class=" col-md-6 form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id='Studaddress' placeholder="Student Address" autofocus required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="mail">Email</label>
                                <input type="text" class="form-control" name="email" id='Studemail' placeholder="example@mail.com" autofocus required="required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone Number</label>
                                <input class="form-control" type="text" name="mobile" id='Studmobile' placeholder="07..." autofocus required="required"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="program">Program</label>
                                <input type="text" class="form-control" name="program" id='Studprogram' placeholder="Program" autofocus required="required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Batch Number</label>
                                <input class="form-control" type="text" name="batchno" id='StudBath' placeholder="Batch Number" autofocus required="required">
                            </div>
                        </div>
                    </div>
                    <input name="insert" id="insert" class="btn btn-primary insert btn-lg" type="submit" name="submit" value="Submit" />

                    <div style="font-size:14px; color:#dc3545; margin-top:10px">

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark" type="button" id="clearEnrol">Clear</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!--=============add user modal Edit===================-->

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
                <form class="w3-container" id="insert_form_StudentEdit" method="post" action="javascript:(void)">
                    <div class="w3-section">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname">
                        </div>
                        <div class="form-group">
                            <label>D.O.B</label>
                            <input type="date" class="form-control" name="DOB" id="dob">
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="password">Gender</label>
                                <input id="gender" type="text" class="form-control" name="gender" placeholder="Gender" autofocus required="required">
                            </div>
                            <div class=" col-md-6 form-group">
                                <label for="address">Address</label>
                                <input id="address" type="text" class="form-control" name="address" placeholder="Student Address" autofocus required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="mail">Email</label>
                                <input id="mail" type="text" class="form-control" name="email" placeholder="example@mail.com" autofocus required="required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone Number</label>
                                <input class="form-control" id="mobile" type="text" name="mobile" placeholder="07..." autofocus required="required"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="program">Program</label>
                                <input id="program" type="text" class="form-control" name="program" placeholder="Program" autofocus required="required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Batch Year</label>
                                <input class="form-control" id="Batchno" type="text" name="batchno" placeholder="Batch Number" autofocus required="required">
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary updateStudent btn-lg" type="submit" name="submit" value="Submit" />
                    <input name="Student_ID" id="Student_ID" type="hidden" />
                    <div style="font-size:14px; color:#dc3545; margin-top:10px">
                        <?php
                        // echo $error;
                        ?>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark" type="button" id="clearEdit">Clear</button>
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
                    url: "../server/viewStudent.php",
                    type: "POST",
                    async: true
                }

            });
        }

        //=====modal should show current user info
        $(document).on('click', '.edit', function() {
            $('#addUserModalEdit').modal('show');

            var Student_ID = $(this).attr("id");
            alert(Student_ID)
            $.ajax({
                url: "../server/fetchStudentData.php",
                method: "POST",
                data: {
                    Student_ID: Student_ID
                },
                dataType: "json",
                success: function(data) {
                    $('#fullname').val(data.Full_Name);
                    $('#dob').val(data.Date_of_Birth);
                    $('#gender').val(data.Gender);
                    $('#address').val(data.Address);
                    $('#mail').val(data.Email);
                    $('#mobile').val(data.Phone_Number);
                    $('#program').val(data.Program);
                    $('#Batchno').val(data.Batch_Year);
                    $('#Student_ID').val(data.Student_ID);

                    var studentCount = $('#Student_ID').val(data.length);

                    $('.card-body').append('<div>Total Students: ' + studentCount + '</div>');
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click', '#clearEnrol', function() {
            $('#fname').val('');
            $('#Studdob').val('');
            $('#Studgender').val('');
            $('#Studaddress').val('');
            $('#Studemail').val('');
            $('#Studmobile').val('');
            $('#Studprogram').val('');
            $('#StudBatchno').val('');

        });
        $(document).on('click', '#clearEdit', function() {
            $('#fullname').val('');
            $('#dob').val('');
            $('#gender').val('');
            $('#address').val('');
            $('#mail').val('');
            $('#mobile').val('');
            $('#program').val('');
            $('#Batchno').val('');
            $('#Student_ID').val('');
        });
        //========update transformer info info on clicking update
        $(document).on('click', '.updateStudent', function() {

            if (confirm("Are you sure you want to update supplier details?")) {
                $.ajax({
                    url: "../server/updateStudent.php",
                    method: "POST",
                    data: $('#insert_form_StudentEdit').serialize(),
                    beforeSend: function() {
                        $('#insertStudent').val("update....");
                    },
                    success: function(data) {
                        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                        $('#insert_form_StudentEdit')[0].reset();
                        $('#addUserModalEdit').modal('hide');
                        $('#user_data').DataTable().destroy();
                        $('#insert_form_StudentEdit').clear();

                        fetch_data();
                    }
                });
                setInterval(function() {
                    $('#alert_message').html('');
                }, 5000);
            }
        });

        //=====delete suppliers
        $(document).on('click', '.del', function() {
            var supplier_id = $(this).attr("id");
            if (confirm("Are you sure you want  delete the supplier?")) {
                $.ajax({
                    url: "server/del_supplier.php",
                    method: "POST",
                    data: {
                        supplier_id: supplier_id
                    },
                    success: function(data) {
                        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                setInterval(function() {
                    $('#alert_message').html('');
                }, 5000);
            }
        });
    });
</script>