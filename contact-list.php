<?php
include 'header.php';

$contacts = $db->select('contact_us', "*");
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact List</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                Sr.No.
                                            </th>
                                            <th class="sort" data-sort="student_name">Name</th>
                                            <th class="sort" data-sort="mobile_no">Mobile Number</th>
                                            <th class="sort" data-sort="email">Email</th>
                                            <th class="sort" data-sort="email">City</th>
                                             <th class="sort" data-sort="email">Message</th>
                                               <th class="sort" data-sort="email">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <?php 
                                            $c = 1;
                                            foreach ($contacts as $contacts) {
                                                echo '<th>' . $c++ . '</th>';
                                            ?>


                                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <td class="customer_name"><?php echo $contacts['name'] ?></td>

                                                <td class="mobile"><?php echo $contacts['mobile']; ?></td>

                                                <td class="email"><?php echo $contacts['email']; ?></td>
                                                <td class="city"><?php echo $contacts['city']; ?></td>

                                                <td class="message"><?php echo $contacts['message']; ?></td>

                                                <td>
                                                    <div class="d-flex gap-2">
                                                        
                                                    

                                                        <div>
                                                       <a class="btn btn-sm btn-danger edit-item-btn" onClick="return confirm('Confirm to delete record')" href = 'contact-delete.php?id=<?php echo $contacts['id']; ?>';">Delete</a>

                                                        </div>
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

                            <!-- <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
</div>
</div>



<?php
include 'footer.php';
?>