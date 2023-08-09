<?php
if(isset($_POST["action"]))
{
 include('config.php');
 $output = '';
 if($_POST["action"] == "country")
 {
  $query = "SELECT * FROM stafftable WHERE department = '".$_POST["query"]."'";
  $result = mysqli_query($conn, $query);
  $output .= '<option value="">Select User</option>';
  while($row=$result->fetch_assoc())
  {
   $output .= '<option value="'.$row["id"].'">'.$row["name"].'&nbsp;'.$row["id"].'</option>';
  }
 }
 echo $output;
}
?>