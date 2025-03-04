<?php
include 'header.php';
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Review</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="profile-save.php" method="POST" enctype="multipart/form-data" id="useradd-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">


                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Name<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" class="form-control" id="farmer_name" placeholder="Enter Employee Name" name="name" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo<span class="text-danger fs-15 "> *</span></label>
                                                <input type="file" class="form-control" id="title" placeholder="upload profile" name="photo"  required>
                                            </div>
                                        </div>

                                       
                                        
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Post<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" class="form-control" id="description" placeholder="Enter Description / post" name="post" required>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                
                                                <button type="submit" class="btn btn-primary pe-4 mt-4">Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end row-->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </form>
            <!--end row-->


            <!--end col-->
        </div>
        <!--end row-->

    </div> <!-- container-fluid -->
</div><!-- End Page-content -->
<?php
include 'footer.php';
?>
<script>
    $(document).ready(function() {

        $("#useradd-form").validate({
            rules: {
                name:{
                    required:true

            },
            mobile_number:{required: true,
                        maxlength: 10,
                        minlength: 10,
                        remote: {
                            url:"user-check-mobile.php",
                            type: "post",
                            data: 
                            {
                                mobile_number: function()
                                {
                                    return $("#mobile_number").val();
                                }
                            }

                        }
                    },
            birth_date:{
                required:true
            },
            can_login:{
                required:true
            },
            type:{
                required:true
            },
            salary:{
                required:true
            }

            },
            // Specify validation error messages
            messages: 
            {
                mobile_number:
                {
                    remote: "Phone number already exists."
                },
                type:
                {
                    remote: "You must define type of employee"
                },
                can_login:
                {
                    remote: "you must specify rights of an emplyee toi maintain security"
                }
            },
            // Make sure the form is submitted to the destination defined
            // In the "action" attribute of the form when valid
            submitHandler: 
            function(form)
            {
                form.submit();
            }
        });
    });
</script>






