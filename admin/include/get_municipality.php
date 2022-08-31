<?php require_once('./../include/dbcon.php'); 
$provID =($_POST['provID']);
if($provID!='')
{
    $sql_mc = "SELECT DISTINCT mc_id, mc_n FROM lib_mc where prov_id = $provID";
        $result_mc = mysqli_query($conn, $sql_mc);
        $mc_data = "<option value=''>Select Municipality</option>";
        while($col_mc = mysqli_fetch_assoc($result_mc)){
            $mc_id =$col_mc['mc_id'];
            $mc_n =$col_mc['mc_n'];
            $mc_data .= "<option value='$mc_id'>$mc_n</option>";
        }
        echo $mc_data;
}
?>