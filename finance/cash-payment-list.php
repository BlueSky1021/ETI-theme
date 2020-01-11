<?php 
/*
Template name:; Cash Payment List
*/
?>

<?php

//require __DIR__.'/../../../../vendor/autoload.php';

?>

<?php include(TEMPLATEPATH. '/includes/header.php'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<style type="text/css">
.btn-disabled{opacity: 0.7; cursor: not-allowed !important; pointer-events:none;}
.datatable-wrapper{padding:30px;border-radius: 10px;    border-top-left-radius: 0;    border-top-right-radius: 0;}

.vertical-alignment-helper {display:table;height: 100%;width: 100%;}
.vertical-align-center {/* To center vertically */display: table-cell;vertical-align: middle;}
.modal-content {/* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */width:inherit;height:inherit;/* To center horizontally */margin: 0 auto;}

.dropdown:hover .dropdown-menu{display: none;}
.dropdown.open:hover .dropdown-menu{display: block !important;}
.dropdown .payment-dropdown:before{display: none;}
.dropdown .payment-dropdown li a{padding: 5px 10px;}

</style>
        <!-- Banner Section --> 
        <section class="banner-section banner-curve-style view vh79 primary-bg-color background-reset position-relative" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/banners/enrol-now-banner.jpg'); ">
          <div class="center-position-top-60 width-100-percent">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 grid-centered">
                  <div class="banner-caption text-center white-font-color">
                    <h1 class="proximanova-bold px-72-font no-margin text-uppercase line-height-1">Payment</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-cta-goto">
            <a href="#scrolltodiv" class="smoothScroll white-font-color center-block line-height-1"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
          </div>
        </section>
        <!-- End Banner Section --> 
        <!-- Page Content Section -->

          <section id="scrolltodiv" class="inner-page-content-wrapper contactus-wrapper">
              <div>
                <div class="container">
                  <div class="row">
                    <div class="">
                      <div class="col-md-12 ">
                        <div class="box-shadow-dark-grey">
                          <div style="background: #024B67; padding: 20px;">
                              <h2 class="proximanova-bold px-20-font white-font-color text-uppercase no-margin line-height-1 display-inlineblock" style="line-height: 35px;">Cash Payments</h2>
                              <a href="https://eti.edu.au/finance/cash-payment/create/" class="btn btn-success create-payment btn-disabled pull-right display-inlineblock"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add payment</a>
                              <div class="clearfix"></div>
                          </div>
                          <div class="datatable-wrapper hide">
                            <table id="cash-payment-list" class="display datalist-template" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Trxn Code</th>
                                        <th>Student ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Amount</th>
                                        <th>Note</th>
                                        <th>Received by</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php

                                        include_once "config.php";

                                        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
                                        //var_dump($db);
                                        if (mysqli_connect_errno()){
                                            exit("Couldn't connect to the database: ".mysqli_connect_error());
                                        } else {
                                            //echo 'Connected';
                                            $sql = "SELECT
                                                      cash_pay.id,
                                                      cash_pay.trxn_code,
                                                      cash_pay.student_id,
                                                      cash_pay.firstname,
                                                      cash_pay.lastname,
                                                      cash_pay.email_ad,
                                                      cash_pay.remarks,
                                                      cash_pay.amount,
                                                      vrx_users.username
                                                    FROM
                                                      vrx_cash_payments cash_pay
                                                      INNER JOIN vrx_users ON (cash_pay.user_id = vrx_users.id)
                                                    WHERE cash_pay.status = 'Open'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                foreach ($result as $rs) {
                                                    echo '<tr>';
                                                    echo '<td>' . $rs['id'] . '</td>';
                                                    echo '<td>' . $rs['trxn_code'] . '</td>';
                                                    echo '<td>' . $rs['student_id'] . '</td>';
                                                    echo '<td>' . $rs['firstname'] . '</td>';
                                                    echo '<td>' . $rs['lastname'] . '</td>';
                                                    echo '<td>' . $rs['amount'] . '</td>';
                                                    echo '<td>' . $rs['remarks'] . '</td>';
                                                    echo '<td>' . $rs['username'] . '</td>';
                                                    echo '<td>';
                                                    echo '<div class="dropdown">';
                                                    echo '<button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button>';
                                                    echo '<ul class="dropdown-menu payment-dropdown dropdown-menu-right" aria-labelledby="dropdownMenu">';
                                                    echo '<li><a href="'.get_home_url().'/cash-payment-receipt/?receipt='.$rs['student_id'].'" target="_blank">View/Download Receipt</a></li>';
                                                    echo '<li><a href="'.get_home_url().'/cash-payment-receipt/?email='.$rs['student_id'].'" target="_blank">Send to E-mail</a></li>';
                                                    echo '</ul>';
                                                    echo '</div>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                            } else {
                                                echo "No results";
                                            }
                                            $conn->close();
                                        }
                                        ?>
                                        
                                    
                                </tbody>
                            </table>
                          </div>
                        </div>
                       </div>
                      <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </section>
        <!-- End Page Content Section -->

        <div class="modal fade" tabindex="-1" role="dialog" id="paymentModal">
          <div class="vertical-alignment-helper">
            <div class="modal-dialog modal-sm vertical-align-center" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title proximanova-bold">Payment Login</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-12">
                      <form action="">
                        <div class="form-group">
                          <label for="username">Username:</label>
                          <input type="text" class="form-control" id="username" value="iamyou">
                        </div>
                        <div class="form-group">
                          <label for="password">Password:</label>
                          <input type="password" class="form-control" id="password" value="Letm3pass">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-success" id="loginBtn">Login</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>
        </div><!-- /.modal -->

<?php include(TEMPLATEPATH. '/includes/footer.php'); ?>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#cash-payment-list').DataTable();
} );
</script>

<script>
$(document).ready(function(){

  /*var modalVar = $('#paymentModal');

  $('body').addClass('overflow-hidden');
  modalVar.modal('show');

$("#loginBtn").click(function(){
  var username = $('#username').val();
  var password = $('#password').val();

  if(username == 'iamyou' && password == 'Letm3pass') {
    modalVar.modal('hide');
    $('body').removeClass('overflow-hidden');
    $('.datatable-wrapper').removeClass('hide');
    $('.create-payment').removeClass('btn-disabled');
  }
});*/
    $('body').removeClass('overflow-hidden');
    $('.datatable-wrapper').removeClass('hide');
    $('.create-payment').removeClass('btn-disabled');
});
</script>