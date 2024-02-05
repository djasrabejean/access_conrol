<?php require('../partials/head.php'); ?>

<!-- Navigation required from nav.php file -->
<?php require('../partials/nav.php'); ?>

<!-- aside bar required from sidebar.php -->
<?php require('../partials/sidebar.php'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Staff Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index.view.php">Home</a></li>
                <li class="breadcrumb-item">Staff</li>
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
                            <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#addUserModal"><i class="fa fa-plus-circle text-dark"></i> Enrol Staff</i< /a>
                                <a onclick="document.getElementById('addUserModal').style.display='block'"></a>
                        </div>
                        <!-- End of Modal -->
                        <div class="responsive check">
                            <div id="alert_message" class="mt-2"></div>
                            <table id="user_data" class="table datatable" style="width: 100%;">
                                <thead style="font-size: 12px;overflow-y:hidden">
                                    <th>Staff Name</th>
                                    <th> Staff Username</th>
                                    <th> Email</th>
                                    <th> Contact</th>
                                    <th>Role</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Enrol Staff</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="w3-container" method="post" id="register-form" action="javascript:void(0)" novalidate>
                    <div class="col-12">
                        <label for="fullName" class="form-label">Staff Name</label>
                        <input type="text" name="full_name" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="yourUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="mobileNumber" class="form-label">Phone Number</label>
                        <input type="mobile" name="mobile" class="form-control" id="mobileNumber" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                        <label for="role" class="form-label">Staff Role</label>
                        <div class="input-group has-validation">
                            <select id="security" class="form-control" name="security_level" required>
                                <option value="">Security Level</option>
                                <option>Admin</option>
                                <option>Manager</option>
                                <option>Staff</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                    </div>
                    <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Submit" />

                </form>


            </div>
            <div class="modal-footer">
                <button class="btn btn-dark" type="button" id="clear">Clear</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Enrol Staff</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="w3-container" id="form_StaffEdit" action="javascript:void(0)" novalidate>
                    <div class="col-md-12 form-group">
                        <label for="fullName" class="form-label">Staff Name</label>
                        <input type="text" name="full_name" class="form-control" id="FName" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="yourEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="Email" required>
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="yourUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="Username" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="mobileNumber" class="form-label">Phone Number</label>
                        <input type="mobile" name="mobile" class="form-control" id="mobile" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="role" class="form-label">Staff Role</label>
                        <div class="input-group has-validation">
                            <select class="form-control" name="role" id='role' required>
                                <option value="">Security Level</option>
                                <option>Admin</option>
                                <option>Manager</option>
                                <option>Staff</option>
                            </select>
                        </div>
                    </div>


                    <input class="btn btn-primary btn-sm updateStaff" type="submit" name="submit" value="Update" />
                    <input name="User_ID" id="User_ID" type="hidden" />
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
                    url: "../server/viewStaff.php",
                    type: "POST",
                    async: true
                }

            });
        }

        //=====modal should show current user info
        $(document).on('click', '.edit', function() {
            $('#addUserModalEdit').modal('show');

            var User_ID = $(this).attr("id");
            $.ajax({
                url: "../server/fetchStaffData.php",
                method: "POST",
                data: {
                    User_ID: User_ID
                },
                dataType: "json",
                success: function(data) {
                    $('#FName').val(data.Full_Name);
                    $('#Username').val(data.Username);
                    $('#Email').val(data.Email);
                    $('#mobile').val(data.Phone_Number);
                    $('#role').val(data.Role);
                    $('#User_ID').val(data.User_ID);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click', '#clear', function() {
            $('#fullname').val('');
            $('#User_ID').val('');
            $('#Staff_ID').val('');
            $('#role').val('');
        });
        $(document).on('click', '#clearEdit', function() {
            $('#fullname').val('');
            $('#User_ID').val('');
            $('#Staff_ID').val('');
            $('#role').val('');
        });
        //========update transformer info info on clicking update
        $(document).on('click', '.updateStaff', function() {
            alert('hi')
            if (confirm("Are you sure you want to update supplier details?")) {
                $.ajax({
                    url: "../server/updateStaff.php",
                    method: "POST",
                    data: $('#form_StaffEdit').serialize(),
                    beforeSend: function() {
                        // $('#insertStaff').val("update....");
                    },
                    success: function(data) {
                        $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
                        $('#form_StaffEdit')[0].reset();
                        $('#addUserModalEdit').modal('hide');
                        $('#user_data').DataTable().destroy();
                        $('#form_StaffEdit').clear();

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