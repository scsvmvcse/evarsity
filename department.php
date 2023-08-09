                <?php include "header.php"?>



                







                <!-- BEGIN Left Aside -->



              <?php include "side.php";?>



                  <script src='tinymce/tinymce.min.js'></script>





                  <?php







$msg="";

$error="";



if(isset($_POST['DepartmentName'])){





$quer="select MAX(Departmentno)  from department";

$resultmax = mysqli_query($con,$quer);

$rowmax = mysqli_fetch_array($resultmax, MYSQLI_NUM);

$maxcode = 0;

$maxcode = $rowmax["0"] +1;





$dept = $_POST['DepartmentName'];

$deptali = $_POST['Deptaliasname'];

$deptid = $_POST['Disciplinary_Id'];



$res = mysqli_query($con,"INSERT INTO department(DepartmentName,Deptaliasname,DeptOrderNo,Disciplinary_Id)VALUES('$dept','$deptali','$maxcode','$deptid')");

echo "<script> document.location.href='department';</script>";

if($res)

{

$msg="Disciplinary added Successfully";

}

else 

{

$error="Something went wrong. Please try again";

}





}









                   $query ="SELECT * FROM department"; 



 $result = mysqli_query($con, $query);



   

            ?>

<style>

        .errorWrap {

    padding: 10px;

    margin: 0 0 20px 0;

    background: #fff;

    border-left: 4px solid #dd3d36;

    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);

    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);

}

.succWrap{

    padding: 10px;

    margin: 0 0 20px 0;

    background: #fff;

    border-left: 4px solid #5cb85c;

    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);

    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);

}

        </style>

<script>

    tinymce.init({

    selector: '#myTextarea',

    height: 300,

    theme: 'modern',

    plugins: [

      'advlist autolink lists link image charmap print preview hr anchor pagebreak',

      'searchreplace wordcount visualblocks visualchars code fullscreen',

      'insertdatetime media nonbreaking save table contextmenu directionality',

      'emoticons template paste textcolor colorpicker textpattern imagetools'

    ],

    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',

    toolbar2: 'print preview media | forecolor backcolor emoticons',

    image_advtab: true,

        forced_root_block: false ,



        remove_linebreaks : true



});

</script>

<script>

    let i=1;

</script>

<script>

function myFunction() {

 i++;

    var label1=document.createElement("label");

    label1.textContent="Document "+i+":  ";

    var text1 = document.createElement("input");

text1.type="text";

    text1.id="input"+i;

    text1.size=80;

  //text1.value = "text";

  document.getElementById("list1").appendChild(label1);

  document.getElementById("list1").appendChild(text1);

  document.getElementById("list1").innerHTML+="<br>";

}

</script>

              



          

                <!-- END Left Aside -->



                    <!-- BEGIN Page Header -->



                    



                    <!-- END Page Header -->



                    <!-- BEGIN Page Content -->



                    <!-- the #js-page-content id is needed for some plugins to initialize -->



                    <main id="js-page-content" role="main" class="page-content">



                        <ol class="breadcrumb page-breadcrumb">



                            



                            



                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>



                        </ol>



                        



                        



                        <div class="row">



                            <div class="col-xl-12">



                                <div id="panel-1" class="panel">



                                    <div class="panel-hdr">



                                        <h2>



                                            Disciplinary<span class="fw-300"><i></i></span>

                                           

                                        </h2>



                                        <div class="panel-toolbar">



                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>



                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>



                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>



                                        </div>



                                    </div>



                                    <div class="panel-container show">



                                        <div class="panel-content">



                                            





                                            <form action="" method="post">

                                               <?php if($error){?><div class="errorWrap"><strong>ERROR</strong> : <?php echo htmlentities($error); ?> </div><?php } 

                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>

                                                

                                                    <div class="form-group">



                                                    <label class="form-label" for="example-textarea">DepartmentName</label>

                                                    

                                                    <input type="text" class="form-control" name="DepartmentName"  required>



                                                    </div>



                                                    <div class="form-group">



                                                    <label class="form-label" for="example-textarea">Deptaliasname</label>

                                                    

                                                    <input type="text" class="form-control" name="Deptaliasname"  required>



                                                    </div>



                                                    <div class="form-group">

                                                    <label class="form-label" for="example-select">Disciplinary</label>

                                                    <select class="form-control" id="example-select" required name="Disciplinary_Id">

                                                        <option>select</option>

                                                        <?php





                                                    $sql1 = mysqli_query($con, "SELECT * From disciplinary");

                                                    $row1 = mysqli_num_rows($sql1);

                                                    while ($row1 = mysqli_fetch_array($sql1)){

                                                            $str1=$row1['Disciplinary'];

                                                    echo "<option value='". $row1['Disciplinary_Id'] ."'>" .$str1 ."</option>" ;

                                                    }

                                                    ?>



                                                    </select>

                                                

                                                </div>





                                                <br>





                                                <button type="submit" class="btn btn-warning btn-pills">Submit</button>



                                            </form>



                                        </div>



                                          <div class="panel-container show">

                                        <div class="panel-content">

                                            

                                            <!-- datatable start -->

                                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">

                                                <thead>

                                                    <tr>

                                                        <th>Departmentno</th>

                                                        <th>DepartmentName</th>

                                                        <th>Deptaliasname</th>

                                                        <th>DeptOrderNo</th>

                                                        <th>Disciplinary_Id</th>

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                     <?php 
                                      while($row = mysqli_fetch_array($result))
                                      {  ?>

                                                    <tr>
                                                        <td><?php echo "$row[Departmentno]";?></td>

                                                        <td><?php echo "$row[DepartmentName]";?></td>

                                                        <td><?php echo "$row[Deptaliasname]";?></td>

                                                        <td><?php echo "$row[DeptOrderNo]";?></td>

                                                        <td><?php echo "$row[disciplinaryid]";?></td>

                                                        

                                                        

                                                    </tr>

                                                    <?php }?>

                                                </tbody>

                                            </table>

                                            <!-- datatable end -->

                                        </div>

                                    </div>



                                </div>



                            </div>



                        </div>



                    </main>



                    <!-- this overlay is activated only when mobile menu is triggered -->



                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->

                   <?php include "footer.php";?>
                 <?php include "script.php";?>
