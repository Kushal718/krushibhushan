<?php
include 'header.php';

$branches = $db->select("branches", "*", ['AND' => ['deleted' => 0, "mess_id" => $mess_profile['mess_id']]]);
//print_r($users);
?>



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> Active Customers Report | <a href="customers.php">View All Customers</a></h4>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <form action="" method="POST" class="needs-validation" novalidate>
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="col-xxl-2 col-md-3">
                                            <label for="exampleFormControlTextarea5" class="form-label">Branch</label>
                                            <select class="form-select" autofocus required="" aria-label="Default select example" id="branch_id" name="branch_id">

                                                <option value="0">All</option>
                                                <?php
                                                foreach ($branches as $branch) {
                                                ?>
                                                    <option value="<?php echo $branch['branch_id']; ?>"><?php echo $branch['branch_name']; ?></option>

                                                <?php
                                                }
                                                ?>
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


            <div class="row">
                <?php
                //print_r($mess_profile);
                //Array ( [id] => 1 [name] => Aditya Caterers [mobile_no] => 9730037320 [alt_mobile_no] => 7507480267 [email] => dilipsurvade1985@gmail.com [address] => JALGAON [city] => Jalgaon [logo] => chef3.png [tagline] => शुद्धता आणि विश्वासाचे प्रतिक... [morning_time] => 10:00 To 03:00 [evening_time] => 03:01 To 10:00 )
                ?>
                <div class="col-lg-12">
                    <div class="card p-2">
                        <div class='card-header text-center'>
                            <!--<img src="uploads/<?php echo $mess_profile['logo'] ?>" class='img-thumbnail rounded-circle' style="height:100px;">-->

                            <h1 class="text-primary  "><?php echo $mess_profile['name']; ?></h1>
                            <h6 class="text-primary  "><?php echo $mess_profile['tagline']; ?></h6>
                            <span><?php echo $mess_profile['mobile_number']; ?> | <?php echo $mess_profile['email']; ?></span>

                        </div>
                        <div class='card-header text-center bg-primary text-white'>
                            <h4 class='text-white'>Customers Report</h4>
                        </div>

                        <div class="card-body">



                            <?php
                            if (isset($_REQUEST['submit'])) {

                                $branch_id = $_POST['branch_id'];

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
                                        <tbody>
                                            <?php
                                            $count = 1;


                                            //                                    if (sizeof($customer)) {
                                            //$customers=$db->query("select c.* from `customers` c left join `mess` m on c.customer_mess_id=m.customer_id where c.mess_id=".$mess_profile['mess_id']." and m.end_date>curdate() and c.branch_id = IF(".$branch_id."!=0,".$branch_id.",0)order by customer_id")->fetchAll();
                                            $q = "select distinct c.customer_id ,m.*,c.* from `mess` m left join `customers` c on m.customer_id=c.customer_mess_id where m.mess_profile_id=" . $_SESSION['admin']['mess_id'] . " and m.end_date>=curdate()";
                                            if ($branch_id > 0) {
                                                $q .= " and c.branch_id = " . $branch_id;
                                            }
                                            $q .= " group by c.customer_id order by m.customer_id";
                                            $customers = $db->query($q)->fetchAll();

                                            foreach ($customers as $customer) {
                                            ?>

                                                <tr>
                                                    <td class="user_name"><?php echo $count++; ?></td>
                                                    <td class="user_name"><?php echo $customer['customer_mess_id']; ?></td>
                                                   <td> <a href="customer-profile.php?customer_mess_id=<?php echo $customer['customer_mess_id'] ?>"><?php echo $customer['fname'] . " " . $customer['lname']; ?></a></td>
                                                    <td class="user_name"><?php echo $customer['mobile_number']; ?></td>
                                                    <td class="user_name"><?php

                                                                            echo $db->query("select branch_name from `branches` where branch_id=" . $customer['branch_id'])->fetchAll()[0][0] ?> </td>
                                                    <td class="user_name">

                                                        <?php

                                                        echo get_customer_balance($customer['customer_mess_id']);


                                                        ?> </td>
                                                    <td class="user_name"><?php echo show_date(get_last_date($customer['customer_mess_id']));    ?></td>
                                                   

                                                </tr>
                                            <?php
                                            }
                                            //                                    } else {
                                            //                                        echo "<tr><th colspan='7' class='text-center'>Nothing to display.</th></tr>";
                                            //                                    }
                                            ?>

                                        </tbody>

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