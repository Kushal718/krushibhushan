<?php
include 'header.php';
$product_id = $_REQUEST['product_id'];
$products = $db->select("products", "*", ['product_id' => $product_id])[0];
//print_r($products);
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">
                                    <div class="product-img-slider sticky-side-div">
                                        <div
                                            class="swiper product-thumbnail-slider p-2 rounded bg-light"
                                            >
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img
                                                        src="../<?php echo $products['product_photo1']; ?>"
                                                        alt=""
                                                        class="img-fluid d-block"
                                                        />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                        src="../<?php echo $products['product_photo2']; ?>"
                                                        alt=""
                                                        class="img-fluid d-block"
                                                        />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                        src="../<?php echo $products['product_photo3']; ?>"
                                                        alt=""
                                                        class="img-fluid d-block"
                                                        />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                        src="../<?php echo $products['product_photo4']; ?>"
                                                        alt=""
                                                        class="img-fluid d-block"
                                                        />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img
                                                        src="../<?php echo $products['product_photo5']; ?>"
                                                        alt=""
                                                        class="img-fluid d-block"
                                                        />
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <!-- end swiper thumbnail slide -->
                                        <div class="swiper product-nav-slider mt-2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img
                                                            src="../<?php echo $products['product_photo1']; ?>"
                                                            alt=""
                                                            class="img-fluid d-block"
                                                            />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img
                                                            src="../<?php echo $products['product_photo2']; ?>"
                                                            alt=""
                                                            class="img-fluid d-block"
                                                            />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img
                                                            src="../<?php echo $products['product_photo3']; ?>"
                                                            alt=""
                                                            class="img-fluid d-block"
                                                            />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img
                                                            src="../<?php echo $products['product_photo4']; ?>"
                                                            alt=""
                                                            class="img-fluid d-block"
                                                            />
                                                    </div>
                                                </div>
                                                 <div class="swiper-slide">
                                                    <div class="nav-slide-item">
                                                        <img
                                                            src="../<?php echo $products['product_photo5']; ?>"
                                                            alt=""
                                                            class="img-fluid d-block"
                                                            />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end swiper nav slide -->
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h4><?php echo $products['product_name']; ?></h4>
                                                <div class="hstack gap-3 flex-wrap">
                                                    <div class="text-muted">
                                                        Type :
                                                        <span class="text-body fw-medium"><?php echo $products['product_type']; ?></span>
                                                    </div>

                                                  

                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div>
                                                    <a href="product-update.php?product_id=<?php echo $products['product_id'];  ?>" class="btn btn-primary"><i class="ri-pencil-fill align-bottom"></i> Edit</a>
                                                    <a onclick="return confirm('Are you sure want to delete product?');" href="product-delete.php?product_id=<?php echo $products['product_id'];  ?>" class="btn btn-danger" ><i class="ri-delete-bin-2-fill align-bottom"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                            <div class="text-muted fs-16">
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                                <span class="mdi mdi-star text-warning"></span>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mt-4">
                                                    <h5 class="fs-14">Packaging :</h5>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="">
                                                           <!--<input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio1" disabled=""> -->
                                                            <?php
                                                    $string = $products['product_packaging'];
                                                    $str_arr = explode (",", $string); 
                                                    foreach($str_arr as $p){
                                                  ?>
                                                
                                                    
                                                    <label class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio1"><?php echo $p ?></label>
                                                     
                                                   
                                                    <?php } ?>
                                                            
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-xl-6">
                                                <div class="mt-4">
                                                    <h5 class="fs-14">Doses :</h5>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="" data-bs-original-title="">
                                                            <!--<input type="radio" class="btn-check" name="productsize-radio" id="productsize-radio1" disabled="">-->
                                                            <label class="btn btn-soft-primary avatar-xs rounded-circle p-0 d-flex justify-content-center align-items-center" for="productsize-radio1"><?php echo $products['product_doses'] ?></label>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end col -->

                                            <div class="col-md-6">
                                                <div class="mt-3">
                                                    <h5 class="fs-14">Contents :</h5>
                                                    <ul class="list-unstyled">
                                                        <li class="py-1">
                                                            <i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            <?php echo $products['product_contents']; ?>
                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-3">
                                                    <h5 class="fs-14">Uses :</h5>
                                                    <ul class="list-unstyled product-desc-list">
                                                        <li class="py-1"><?php echo $products['product_uses']; ?></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mt-4 text-muted">
                                                <h5 class="fs-14">Description :</h5>
                                                <p>
                                                    <?php echo $products['product_description']; ?>
                                                </p>
                                            </div>
                                        </div>



                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>



        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->


</div>

<?php
include 'footer.php';
?>
<script src="assets/js/pages/ecommerce-product-details.init.js"></script>
