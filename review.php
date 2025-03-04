<?php
include 'header.php';

$db = new Database();

$review = $db->select('farmer_review', "*");
//print_r($user);
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Farmer's Review</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">
                                    <a href='add-review.php'" class=" btn btn-sm btn-primary text-white">
                                        <i class="ri-add-line align-bottom me-1"></i> Add New Review
                                    </a>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->




            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-middle table-nowrap" id="customerTable">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Sr.No</th>
                                            <th class="sort" data-sort="email">Farmer Name</th>
                                            <th class="sort" data-sort="phone">Title</th>
                                            <th class="sort" data-sort="type">Date</th>
                                            <th class="sort" data-sort="email">Action</th>
                                            


                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <?php 
                                            $c = 1;
                                            foreach ($review as $review) {
                                                echo '<th>' . $c++ . '</th>';
                                            ?>


                                              <td class="id" style="display:none;"><?php echo $c?></td>
                                                <td class="customer_name"><?php echo $review['farmer_name'] ?></td>

                                                <td class="mobile"><?php echo $review['title']; ?></td>

                                                <td class="gender"><?php echo $review['date']; ?></td>
                                           
                                                    
                                                   
                                               
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn" onClick="location.href = 'review-update.php?id=<?php echo $review['review_id']; ?>';" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                        </div>

                                                        <div>
                                                            <a class="btn btn-sm btn-danger edit-item-btn" onClick="return confirm('Confirm to delete record')" href = 'review-delete.php?id=<?php echo $review['review_id']; ?>';">Delete</a>
                                                        </div>
                                                </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
</div>



<?php
include 'footer.php';
?>