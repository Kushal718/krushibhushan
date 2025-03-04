<?php
include 'header.php';
$db_header=new Database();
$cats=$db_header->select('categories','*');
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
                        <h4 class="mb-sm-0">Add New Product</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="product-save.php" method="POST" id="productadd-form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">


                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Name <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" id="placeholderInput"  name="product_name" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Type<span class="text-danger fs-15 "> *</span></label>
                                                <select class="form-select" name="product_type" id="placeholderInput">
                                                    
                                                     <?php
                                                    foreach($cats as $c)
                                                    {
                                                        echo "<option value='{$c['name']}'>{$c['name']}</option>";
                                                    }
                                                    ?>
                                                        
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Packaging<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" class="form-control" id="placeholderInput" name="product_packaging" placeholder="ex. 1kg,2kg,3kg" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo1<span class="text-danger fs-15 "> *</span></label>
                                                <input type="file" class="form-control" id="placeholderInput" name="product_photo1" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo2<span class="text-danger fs-15 "> *</span></label>
                                                <input type="file" class="form-control" id="placeholderInput" name="product_photo2" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo3<span class="text-danger fs-15 "> *</span></label>
                                                <input type="file" class="form-control" id="placeholderInput" name="product_photo3" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo4<span class="text-danger fs-15 "> *</span></label>
                                                <input type="file" class="form-control" id="placeholderInput" name="product_photo4" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo5<span class="text-danger fs-15 "> *</span></label>
                                                <input type="file" class="form-control" id="placeholderInput" name="product_photo5" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Contents<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" class="form-control" id="placeholderInput" name="product_contents" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Uses<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" class="form-control" id="placeholderInput" name="product_uses" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Doses<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" class="form-control" id="placeholderInput" name="product_doses" required>
                                            </div>
                                        </div>
                                       


                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Description</label>
                                                <textarea class="form-control" id="placeholderInput" placeholder="Enter Other Details" name="product_description"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
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
