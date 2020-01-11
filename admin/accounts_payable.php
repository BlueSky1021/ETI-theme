<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accounts_Payable</title>
    <link href="/SHERWOOD_forthnightly_time_sheet/css/bootstrap.min.css" rel="stylesheet">
    <style>
      th{
  background-color:#3b5998;
  color:#fff;
}
th,td{
    text-align:center;
  }
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
    </style>
</head>
<body>
  </br>
  <div class="view_accounts_payable">
    <div class="container">
      <center><h3>LIST OF EMPLOYEES</h3></center>
      <?php
            $conn = mysqli_connect("sherwood.edu.au", "sherwood", "d;Q&7}ft;ITA", "sherwood_db");
            //$conn = mysqli_connect("localhost", "root", "", "sia_time_sheet");


            $result = mysqli_query($conn,"SELECT * FROM user_info WHERE e_stat='USER' ORDER BY user_id DESC" );
            echo 
            "<table class='table table-bordered'>
            <thead>
            <tr>
            <th>Row</th>
            <th>Employee Name</th>
            <th>Position</th>
            <th>Email Address</th>
            <th>STATUS</th>
            <th>View Work Hours</th>
            </tr>
            </thead>";

              while($row = mysqli_fetch_assoc($result)) {
              $i = $row['user_id'];
              echo "<tr style='font-weight:900;'>";
              echo "<td>" . $i  . "</td>"; 
              echo "<td>" . $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'] . "</td>";
              echo "<td>" . $row['position'] . "</td>";
              echo "<td>" . $row['email_address'] ."</td>";
              $e_add = $row['email_address'] ;
              $cur_date = date("Y/m/d");

              $sql = mysqli_query($conn,"SELECT status FROM work_date_time WHERE email_address = '$e_add'");

              $row2 = mysqli_fetch_assoc($sql);

              if($row2['status'] == 'UNPAID'){
                echo "<td style='background-color:red;color:white'>UNPAID</td>";
                echo "<td>
                <a href='/SHERWOOD_forthnightly_time_sheet/admin/view_emp_record.php?id=$i'>
                  <button>
                  <font style='font-weight:900;'>VIEW <font class='glyphicon glyphicon-eye-open'>
                  </font> PAY</font>
                  </button></a>
                </form>
                </td>";
              }
              elseif($row2['status'] == NULL){
                echo "<td style='background-color:red;color:#fff'>NO TIME SHEET</td>";
                echo "<td>
                <button disabled>
                <font style='font-weight:900;'>VIEW <font class='glyphicon glyphicon-eye-close'>
                </font> FILE</font></button>
                </td>";
              }
              elseif($row2['status'] == 'PAID'){    
                echo "<td style='background-color:#7FFF00;'>PAID</td>";
                echo "<td>
                <a href='/SHERWOOD_forthnightly_time_sheet/admin/view_paid_details.php?id=$i'>
                <button>                          
                <font style='font-weight:900;'>VIEW <font class='glyphicon glyphicon-eye-open'>
                </font> FILE</font></button></a>
                </form>
                </td>";
              }

              
              echo "</tr>";
              }
            echo "</table>";
            mysqli_close($conn);
          ?>
  </div>
</div>

  <script src="/SHERWOOD_forthnightly_time_sheet/jquery/jquery-2.1.1.min.js"></script>
<script src="/SHERWOOD_forthnightly_time_sheet/js/bootstrap.min.js"></script>
</body>
</html>