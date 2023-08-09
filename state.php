                <?php include "header.php"?>



                







                <!-- BEGIN Left Aside -->



              <?php include "side.php";?>


<script src='js\state.js'></script>
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



                                            State<span class="fw-300"><i></i></span>

                                           

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

                                                    <label class="form-label" for="example-select">State</label>

                                                    

                                                

                                                
                                                <div class="input-inside">
                        <select class="form-control" id="state_from" name="state_from"  onchange='selct_district(this.value)'>                          

                                                        
                           <option value="">Select State</option>
                           <option value="Andra Pradesh">Andra Pradesh</option>
                           <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                           <option value="Assam">Assam</option>
                           <option value="Bihar">Bihar</option>
                           <option value="Chhattisgarh">Chhattisgarh</option>
                           <option value="Goa">Goa</option>
                           <option value="Gujarat">Gujarat</option>
                           <option value="Haryana">Haryana</option>
                           <option value="Himachal Pradesh">Himachal Pradesh</option>
                           <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                           <option value="Jharkhand">Jharkhand</option>
                           <option value="Karnataka">Karnataka</option>
                           <option value="Kerala">Kerala</option>
                           <option value="Madya Pradesh">Madya Pradesh</option>
                           <option value="Maharashtra">Maharashtra</option>
                           <option value="Manipur">Manipur</option>
                           <option value="Meghalaya">Meghalaya</option>
                           <option value="Mizoram">Mizoram</option>
                           <option value="Nagaland">Nagaland</option>
                           <option value="Orissa">Orissa</option>
                           <option value="Punjab">Punjab</option>
                           <option value="Rajasthan">Rajasthan</option>
                           <option value="Sikkim">Sikkim</option>
                           <option value="Tamil Nadu">Tamil Nadu</option>
                           <option value="Telangana">Telangana</option>
                           <option value="Tripura">Tripura</option>
                           <option value="Uttaranchal">Uttaranchal</option>
                           <option value="Uttar Pradesh">Uttar Pradesh</option>
                           <option value="West Bengal">West Bengal</option>
                           <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                           <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                           <option value="Chandigarh">Chandigarh</option>
                           <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                           <option value="Daman and Diu">Daman and Diu</option>
                           <option value="Delhi">Delhi</option>
                           <option value="Lakshadeep">Lakshadeep</option>
                           <option value="Pondicherry">Pondicherry</option>
                        </select>
                     </div>
                     </div>
                     <div class="input-inside">
                      <label class="form-label" for="example-select">City</label>
                        <select class="form-control" name="city_from" id="city_from">
                           <option value="">Select City</option>
                        </select>
                     </div>





                                                <br>





                                                <button type="submit" class="btn btn-warning btn-pills">Submit</button>



                                            </form>



                                        </div>



                                          



                                </div>



                            </div>



                        </div>



                    </main>



                    <!-- this overlay is activated only when mobile menu is triggered -->



                    <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div> <!-- END Page Content -->



                    <!-- BEGIN Page Footer -->



                   <?php include "footer.php";?>



                   <?php include "script.php";?>
