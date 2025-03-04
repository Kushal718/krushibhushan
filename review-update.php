<?php
include 'header.php';
$id = $_REQUEST['id'];
$review = $db->select("farmer_review", "*", ['review_id' => $id])[0];
//print_r($user);
?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>
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
                        <h4 class="mb-sm-0">Update Review</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="review-update-save.php" method="POST" id="user-update-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <input type="hidden" class="form-control" id="placeholderInput" name="id" value="<?php echo $review['review_id']; ?>">

                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Farmer Name<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="farmer_name" placeholder="Enter Your Name" name="fname" value="<?php echo $review['farmer_name']; ?>">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Title<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="title" value="<?php echo $review['title']; ?>" name="title">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Description<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="description" value="<?php echo $review['description']; ?>" name="description">
                                            </div>
                                        </div>
                                        
                                            <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Link<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="link" value="<?php echo $review['link']; ?>" name="link">
                                            </div>
                                        </div>
                                        
                                            <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">State<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="state" value="<?php echo $review['state']; ?>" name="state">
                                            </div>
                                        </div>
                                        
                                            <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">District<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="district" value="<?php echo $review['district']; ?>" name="district">
                                            </div>
                                        </div>

                                               <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Taluka<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="taluka" value="<?php echo $review['taluka']; ?>" name="taluka">
                                            </div>
                                                  
                                        </div>
                                        
                                            <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Village<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="village" value="<?php echo $review['village']; ?>" name="village">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4 mb-2">
                                            <div>
                                                <button type="submit" class="btn btn-primary">Update</button>
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
        </div>
        <!--end row-->

    </div> <!-- container-fluid -->
</div><!-- End Page-content -->
<?php
include 'footer.php';
?>
 
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <script src="./assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- password-addon init -->
        <script src="./assets/js/pages/password-addon.init.js"></script>
        <style>
            .error{

                color:Red;
            }
        </style>
       
<script>
    $(document).ready(function() {

        $("#user-update-form").validate({
            rules: {
                name:{
                    required:true

            },        
                    mobile_number: {
                        required: true,
                        maxlength: 10,
                        minlength: 10,
                        

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
            messages: {
                mobile_number: {
                    remote: "Phone number already exists."
                },
                type:{
                    remote: "You must define type of employee"
                },
                can_login:{
                    remote: "you must specify rights of an emplyee toi maintain security"

                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {

                form.submit();
            }
        });
    });
</script>