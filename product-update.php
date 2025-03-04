<?php
include 'header.php';
$db_header = new Database();
$cats = $db_header->select('categories', '*');
$product_id = $_REQUEST['product_id'];
$products = $db->select("products", "*", ['product_id' => $product_id]);
if (sizeof($products) > 0) {
    $products = $products[0];
} else {
    echo "<script>alert('Invalid Product Id'); window.location='products.php';</script>";
}
//print_r($products);
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
                        <h4 class="mb-sm-0">Product Update </h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="product-update-save.php" method="POST" id="user-update-form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <input type="hidden" class="form-control" id="placeholderInput" name="product_id" value="<?php echo $products['product_id']; ?>"> 

                                        <!--end col-->
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Name<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput" placeholder="Enter Your Name" name="product_name" value="<?php echo $products['product_name']; ?> ">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Type<span class="text-danger fs-15 "> *</span></label>

                                                <select class="form-select" id="product_type" name="product_type" id="placeholderInput">

                                                    <?php
                                                    foreach ($cats as $c) {
                                                        echo "<option value='{$c['name']}'>{$c['name']}</option>";
                                                    }
                                                    ?>

                                                </select>
                                                <script>
                                                         $(document).ready(function(){
                                                             $("#product_type").val('<?php echo $products['product_type']; ?>');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Packaging<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput" value="<?php echo $products['product_packaging']; ?>" name="product_packaging">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo1</label><br>
                                                <img src="../<?php echo $products['product_photo1']; ?>"width="120" height="120">
                                                <input type="file"  class="form-control" id="placeholderInput" value="<?php echo $products['product_photo1']; ?>" name="product_photo1">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo2</label><br>
                                                <img src="../<?php echo $products['product_photo2']; ?>"width="120" height="120">
                                                <input type="file"  class="form-control" id="placeholderInput" value="<?php echo $products['product_photo2']; ?>" name="product_photo2">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo3</label><br>
                                                <img src="../<?php echo $products['product_photo3']; ?>"width="120" height="120">
                                                <input type="file"  class="form-control" id="placeholderInput" value="<?php echo $products['product_photo3']; ?>" name="product_photo3">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo4</label><br>
                                                <img src="../<?php echo $products['product_photo4']; ?>"width="120" height="120">
                                                <input type="file"  class="form-control" id="placeholderInput" value="<?php echo $products['product_photo4']; ?>" name="product_photo4">
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo5</label><br>
                                                <img src="../<?php echo $products['product_photo5']; ?>"width="120" height="120">
                                                <input type="file"  class="form-control" id="placeholderInput" value="<?php echo $products['product_photo5']; ?>" name="product_photo5">
                                            </div>
                                        </div>




                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <br><br><br><br><br><br><label for="placeholderInput" class="form-label"> Contents<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput"  value="<?php echo $products['product_contents']; ?>" name="product_contents"required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Uses<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput"  value="<?php echo $products['product_uses']; ?>" name="product_uses"required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Doses<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput"  value="<?php echo $products['product_doses']; ?>" name="product_doses"required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Description</label>
                                                <textarea class="form-control" id="placeholderInput" placeholder="Enter Your details" name="product_description"><?php echo $products['product_description']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xxl- col-md-3 mb-1">
                                            <div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
<script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/simplebar.min.js"></script>
<script src="../assets/libs/node-waves/waves.min.js"></script>
<script src="../assets/libs/feather-icons/feather.min.js"></script>
<script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- password-addon init -->
<script src="../assets/js/pages/password-addon.init.js"></script>
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