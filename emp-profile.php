<?php
include 'header.php';

$db = new Database();

$profile = $db->select('emp_photos', "*");
//print_r($user);
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Employee profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">

                                <li class="breadcrumb-item active">
                                    <a href='add-profile.php'" class=" btn btn-sm btn-primary text-white">
                                        <i class="ri-add-line align-bottom me-1"></i>Add New Profile
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
                                            <th>Sr</th>
                                             <th class="sort" data-sort="image">Name</th>
                                            <th class="sort" data-sort="image">Photo</th>
                                            <th class="sort" data-sort="post">Post</th>
                                            <th class="sort" data-sort="post">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <?php 
                                            $c = 1;
                                            foreach ($profile as $profile) {
                                                echo '<th>' . $c++ . '</th>';
                                            ?>


                                              <td class="id" style="display:none;"><?php echo $c?></td>
                                                <td class="customer_name"><?php echo $profile['name'];?></td>

                                                <td class="image"><img  class="avatar-md  img-thumbnail" src="../<?php echo $profile['photo']; ?>" ></td>

                                                <td class="gender"><?php echo $profile['post']; ?></td>
                                           
                                                    
                                                   
                                               
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        
                                                       

                                                        <div>
                                                            <a class="btn btn-sm btn-danger edit-item-btn" onClick="return confirm('Confirm to delete record')" href = 'profile-delete.php?id=<?php echo $profile['photo_id']; ?>';">Delete</a>
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