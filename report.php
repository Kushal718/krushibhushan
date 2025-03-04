<?php
include 'header.php';

//$branches = $db->select("branches", "*", ['AND' => ['deleted' => 0,]]);
//print_r($users);
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> All Customers Report | <a href="customers.php">View All Customers</a></h4>
                    </div>
                    <div class="card">
                        <div class="col-md">
                            <div class="card-body">

                                <form action="" method="POST" class="needs-validation" novalidate>
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-2 col-md-3">
                                                <label for="exampleFormControlTextarea5" class="form-label">Branch</label>
                                                <select class="form-select" autofocus required="" aria-label="Default select example" id="branch_id" name="branch_id">

                                                    <option value="0">All</option>
                                                   
                                                </select>
                                            </div>
                                            <div class="col-xxl-2 col-md-3">
                                                <div>
                                                    <button type="submit" class="btn btn-secondary  btn-block  mt-4" value="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <?php
                //print_r($mess_profile);
                //Array ( [id] => 1 [name] => Aditya Caterers [mobile_no] => 9730037320 [alt_mobile_no] => 7507480267 [email] => dilipsurvade1985@gmail.com [address] => JALGAON [city] => Jalgaon [logo] => chef3.png [tagline] => शुद्धता आणि विश्वासाचे प्रतिक... [morning_time] => 10:00 To 03:00 [evening_time] => 03:01 To 10:00 )
                ?>
                <div class="col-lg-12">
                    <div class="card p-2">
                        <div class='card-header text-center'>
                            

                        </div>
                        <div class='card-header text-center bg-primary text-white'>
                            <h4 class='text-white'>Customers Report</h4>
                        </div>

                        <div class="card-body">



                            <?php
                            if (isset($_REQUEST['submit'])) {

                                $branch_id = $_POST['branch_id'];
                                // $branch_name=$db->select("branches", "branch_name", ['branch_id' =>$_POST['branch_id'] ])[0];
                                //print_r($_POST);
                                
                            ?>
                                <script>
                                    $("#branch_id").val('<?php echo $branch_id ?>');
                                </script>

                                <div class="table-responsive">
                                    <table class='table table-hover'>
                                        <tr class="">
                                            <th>Sr No</th>
                                            <th>Customer Id</th>
                                            <th>Name </th>
                                            <th>Mobile Number</th>
                                            <th>Branch</th>
                                            <th>Balance </th>
                                            <th>Last Mess Date </th>
                                           
                                        </tr>
                                       

                                    </table>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page-content -->
</div>
<?php
include 'footer.php';
?>