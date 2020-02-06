<?php 
include("../Controller/Dbcontext.php");

$activity = $_REQUEST['activity'];
if($activity){
    if($activity=="editcontact"){
        $updatedId = $_REQUEST['id'];
        $result= "SELECT sname,semail,smessage,files,id FROM appform WHERE id='$updatedId'";
        $returnMessage1 = mysqli_query($con,$result);
        $result1 = mysqli_fetch_assoc($returnMessage1);
        $sql = "UPDATE appform SET sname='edited name'  WHERE id='$updatedId'";
        echo( $result1['smessage']);
        if ($con->query($sql) === true) {
                
            header("Location:../admin/admin_index.php");
        } else {
            echo "Error updating  record: " . $con->error;
        }
        
        $con->close();
    }
    
    if($activity=="deletecontact"){
                $deleteId = $_REQUEST['id'];
                $result ="SELECT id , sname FROM appform Where id = '$deleteId'";
                $returnMessage1 = mysqli_query($con,$result);
                $sql = "DELETE FROM appform WHERE id='$deleteId'";
            if ($con->query($sql) === true) {
                
                header("Location:../admin/admin_index.php");
            } else {
                echo "Error deleting record: " . $con->error;
            }
            
            $con->close();
    }
    
}
?>
 