<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Dashboard</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">SMS Management System <small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
<!-- 
        <div class="col-md-4 col-sm-6">
            <div class="widget widget-stats bg-green">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                <div class="stats-title">ACTIVE RECIPIENTS</div>
                <div class="stats-number"><?php echo $recepients_count; ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 70.1%;"></div>
                </div>
                <div class="stats-desc">There are <?php echo $recepients_count; ?> users recieving sms/emails</div>
            </div>
        </div>
         -->
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <!-- 
        <div class="col-md-4 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
                <div class="stats-title">RECIEVING EMAILS</div>
                <div class="stats-number"><?php echo $emails_count; ?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 40.5%;"></div>
                </div>
                <div class="stats-desc">There are <?php echo $emails_count; ?> people recieving email messages</div>
            </div>
        </div>
 -->
        <!-- end col-3 -->
        <div class="col-md-4 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-mobile fa-fw"></i></div>
                <div class="stats-title">RECIEVING SMS</div>
                <div class="stats-number"><?php echo $sms_count;?></div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 76.3%;"></div>
                </div>
                <div class="stats-desc">There are <?php echo $sms_count;?> people recieving sms messages</div>
            </div>
        </div>
        <!--
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-black">
                <div class="stats-icon stats-icon-lg"><i class="fa fa-comments fa-fw"></i></div>
                <div class="stats-title">NEW COMMENTS</div>
                <div class="stats-number">3,988</div>
                <div class="stats-progress progress">
                    <div class="progress-bar" style="width: 54.9%;"></div>
                </div>
                <div class="stats-desc">Better than last week (54.9%)</div>
            </div>
        </div>
        -->
    </div>
    <!-- end row -->

    <div class="row">
                <!-- begin col-12 -->
                <div class="col-md-12">
                    <!-- begin panel -->
            <div class="panel-new panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Recepients</h4>
                </div>
                <div class="panel-new panel-body">
                    <div class="table-responsive">

                        <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Category</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <!-- <th>Email</br>Recieval</th> -->
                                    <!-- <th>Action Email</th> -->
                                    <th>SMS</br>Recieval</th>
                                    <th>Action</th>
                                    <th>Date added</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <?php 
                                    foreach ($user_data as $key) {
                                        echo "<tr>";
                                         echo "<td>".$key['fname']."</td>";
                                         echo "<td>".$key['lname']."</td>";
                                         echo "<td>".$key['category']."</td>";
                                         echo "<td>".$key['email']."</td>";
                                         echo "<td>".$key['phone_no']."</td>";
                                         /*if ($key['email_status'] == 2) {
                                         echo "<td>No</td>
                                                <td>
                                                <a href=".base_url().'users/change_status/activate/email/'.$key['recepient_id'].">Activate Email Recieval</a>
                                                </td>";
                                         }elseif($key['email_status'] == 1){
                                         echo "<td>Yes</td>
                                                <td>
                                                <a href=".base_url().'users/change_status/deactivate/email/'.$key['recepient_id'].">Deactivate Email Recieval</a>
                                                </td>";
                                         }*/

                                         if ($key['sms_status'] == 2) {
                                         echo "<td>No</td>
                                                <td>
                                                <a href=".base_url().'users/change_status/activate/sms/'.$key['recepient_id'].">Activate SMS Recieval</a>
                                                </td>";
                                         }elseif($key['sms_status'] == 1){
                                         echo "<td>Yes</td>
                                                <td>
                                                <a href=".base_url().'users/change_status/deactivate/sms/'.$key['recepient_id'].">Deactivate SMS Recieval</a>
                                                </td>";
                                         }

                                         echo "<td>".$key['created_at']."</td>";
                                        echo "</tr>";
                                     } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
</div>

<script>
    $(document).ready(function(){
       $('#data-table').DataTable();
    });
</script>