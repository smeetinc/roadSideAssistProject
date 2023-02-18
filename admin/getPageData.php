<?php
require_once ("../includes/dbh.inc.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
    <section class="second">


<?php

if (! (isset($_GET['pageNumber']))) {
    $pageNumber = 1;
} else {
    $pageNumber = $_GET['pageNumber'];
}

$perPageCount = 5;

$sql = "SELECT * FROM customer_records  WHERE 1";

if ($result = mysqli_query($conn, $sql)) {
    $rowCount = mysqli_num_rows($result);
    mysqli_free_result($result);
}

$pagesCount = ceil($rowCount / $perPageCount);

$lowerLimit = ($pageNumber - 1) * $perPageCount;

$sqlQuery = " SELECT * FROM customer_records WHERE 1 ORDER BY id DESC limit " . ($lowerLimit) . " ,  " . ($perPageCount) . " ";
$results = mysqli_query($conn, $sqlQuery);

?>

<h1>CUSTOMERS RECORDS</h1>
        

<table class="table table-hover table-responsive">
    
    <tr>
        <th align="center">S/N</th>
        <th align="center">Make of car</th>
        <th align="center">Year</th>
        <th align="center">Model</th>
        <th align="center">Transmission type</th>
        <th align="center">Body type</th>
        <th align="center">Car use for</th>
        <th align="center">Distance covered</th>
        <th align="center">Car overnight address</th>
        <th align="center">Car registration number</th>
        <th align="center">Name</th>
        <th align="center">Birthdate</th>
        <th align="center">Email</th>
        <th align="center">Phone number</th>
        <th align="center">Occupation</th>
        <th align="center">Package paid for</th>
        <th align="center">Amount</th>
        <th align="center">Reference code</th>
        <th align="center">Duration<br>(in months)</th>
        <th align="center">Payment status</th>
        <th align="center">Date paid</th>
    </tr>


    <?php foreach ($results as $data) { ?>
    <tr>
        <td align="left"><?php echo $data['id'] ?></td>
        <td align="left"><?php echo $data['car_make'] ?></td>
        <td align="left"><?php echo $data['car_year'] ?></td>
        <td align="left"><?php echo $data['car_model'] ?></td>
        <td align="left"><?php echo $data['car_transmission'] ?></td>
        <td align="left"><?php echo $data['car_body'] ?></td>
        <td align="left"><?php echo $data['car_use'] ?></td>
        <td align="left"><?php echo $data['car_distance'] ?></td>
        <td align="left"><?php echo $data['car_address'] ?></td>
        <td align="left"><?php echo $data['car_registration'] ?></td>
        <td align="left"><?php echo $data['customer_name'] ?></td>
        <td align="left"><?php echo $data['customer_birthdate'] ?></td>
        <td align="left"><?php echo $data['customer_email'] ?></td>
        <td align="left"><?php echo $data['customer_phone'] ?></td>
        <td align="left"><?php echo $data['customer_occupation'] ?></td>
        <td align="left"><?php echo $data['package_type'] ?></td>
        <td align="left"><?php echo $data['amount'] ?></td>
        <td align="left"><?php echo $data['reference_code'] ?></td>
        <td align="left"><?php echo $data['invoice_limits'] ?></td>
        <td align="left"><?php echo $data['status'] ?></td>
        <td align="left"><?php echo $data['date_paid'] ?></td>


        
    </tr>
    <?php
    }
    ?>

</table>

<div style="height: 30px;"></div>
<table width="50%" align="center" class="pagination">
    <tr>

        <td valign="top" align="left"></td>


        <td valign="top" align="center">
 
    <?php
    for ($i = 1; $i <= $pagesCount; $i ++) {
    if ($i == $pageNumber) {
        ?>
          <a href="javascript:void(0);" class="current"><?php echo $i ?></a>
<?php
    } else {
        ?>
          <a href="javascript:void(0);" class="pages"
            onclick="showRecords('<?php echo $perPageCount;  ?>', '<?php echo $i; ?>');"><?php echo $i ?></a>
<?php
    } // endIf
} // endFor

?>
</td>
        <td align="right" valign="top">
         Page <?php echo $pageNumber; ?> of <?php echo $pagesCount; ?>
    </td>
    </tr>
</table>



</section>
</body>
</html>
