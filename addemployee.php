                <?php include "header.php"?>
                

                <!-- BEGIN Left Aside -->
              <?php include "side.php";?>





              <?php 
              $quer="select MAX(EmpID)  from employeedetails";
$resultmax = mysqli_query($con,$quer);
$rowmax = mysqli_fetch_array($resultmax, MYSQLI_NUM);
$maxcode = 0;
$maxcode = $rowmax["0"] +1;


               
?>
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
                                            Profile Details<span class="fw-300"><i>Page</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            


                                            
                                            <div class="panel-content p-0">
                                            <form class="needs-validation" method="post" action="addemployeereg.php" enctype="multipart/form-data">
                                                <div class="panel-content">
                                                    <div class="form-group">
                                                        <div class="col-md-4 mb-3">
                                                    <label class="form-label" for="validationCustom01">Employee Id</label>
                                                    <input type="text" class="form-control" id="simpleinputInvalid" name="EmpID" readonly value="<?php echo "$maxcode";?>">
                                                    </div>
                                                </div>
                                                    <div class="form-row">

                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom01">Name <span class="text-danger">*</span> </label>
                                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Name" name="Name" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom02">Father Name<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Father Name" name="FatherName" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                    <label class="form-label" for="example-date">Date of Birth<span class="text-danger">*</span></label>
                                                    <input class="form-control" id="example-date" type="date" name="dob" required >
                                                        </div>
                                                    
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="example-date">Date of Join<span class="text-danger">*</span></label>
                                                    <input class="form-control" id="example-date" type="date" name="doj" required >
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Marital Status <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="MaritialStatus" required="">
                                                                <option value="">Select</option>
                                                                
                                                                <option value="Married">Married</option>
                                                                <option value="Single">Single</option>
                                                            </select>
                                                            </div>
                                                        
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Gender <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="Gender" required>
                                                                <option value="">Select</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                
                                                            </select>
                                                            
                                                        </div>

                                                        <div class="col-md-4 mb-3">
                                                    <label class="form-label" for="validationCustom03">Community <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="Community" required>
                                                                <option value="">Select</option>
                                                                <option value="BC">BC</option>
                                                                <option value="MBC">MBC</option>
                                                                <option value="OC">OC</option>
                                                                <option value="SC">SC</option>
                                                                <option value="ST">ST</option>
                                                                
                                                            </select>
                                                        </div>
                                                    
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom02">Qualification<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Qualification" name="qualification" required>
                                                            </div>
                                                        
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Designation<span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="DesignationNo" required="">
                                                                <option value="">Select</option>
                                                                <?php


                                                    $sql1 = mysqli_query($con, "SELECT * From designation");
                                                    $row1 = mysqli_num_rows($sql1);
                                                    while ($row1 = mysqli_fetch_array($sql1)){
                                                            $str1=$row1['Designation'];
                                                    echo "<option value='". $row1['DesignationNo'] ."'>" .$str1 ."</option>" ;
                                                    }
                                                    ?>
                                                            </select>
                                                            
                                                        </div>

                                                        <div class="col-md-4 mb-3">
                                                    <label class="form-label" for="validationCustom03">Department<span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="Departmentno" required="">
                                                                <option value="">Select</option>
                                                                <?php


                                                    $sql2 = mysqli_query($con, "SELECT * From department");
                                                    $row2 = mysqli_num_rows($sql2);
                                                    while ($row2 = mysqli_fetch_array($sql2)){
                                                            $str2=$row2['DepartmentName'];
                                                    echo "<option value='". $row2['Departmentno'] ."'>" .$str2 ."</option>" ;
                                                    }
                                                    ?>
                                                                
                                                            </select>
                                                        </div>


                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom02">Mobile<span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="MobileNo" id="validationCustom02" placeholder="Mobile" required maxlength = "10">
                                                            </div>

                                                            <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom02">Phone<span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="PhoneNo" id="validationCustom02" placeholder="Phone" required maxlength = "10">
                                                            </div>
                                                    
                                                        
                                                    </div>
                                                    <div class="form-row form-group">
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Present Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Presentaddress1" id="validationCustom03" placeholder="" required>
                                                        </div>
                                                         <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Present Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Presentaddress2" id="validationCustom03" placeholder="" required>
                                                        </div> <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Present Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Presentaddress3" id="validationCustom03" placeholder="" required>
                                                        </div> <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationCustom03">PIN CODE<span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" name="Presentaddress4" id="validationCustom03" placeholder="" required   minlength= 6 maxlength= 6 number=true/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row form-group">
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Parmanent Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Parmanentaddress1" id="validationCustom03" placeholder="" required>
                                                        </div>
                                                         <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Parmanent Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Parmanentaddress2" id="validationCustom03" placeholder="" required>
                                                        </div> <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Parmanent Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Parmanentaddress3" id="validationCustom03" placeholder="" required>
                                                        </div> <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationCustom03">Parmanent Address<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Parmanentaddress4" id="validationCustom03" placeholder="" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationCustom03">State<span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="State" required="">
                                                                <option value="">Select</option>
                                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
                                                                
                                                            </select>
                                                        </div>
                                                        </div> 
                                                    <div class="form-row form-group">
                                                        <div class="col-md-4 mb-3">
                                                            
                                                            <label class="form-label" for="validationCustomUsername">Email Id <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                                </div>
                                                                <input type="email" name="emailid" class="form-control" id="validationCustomUsername" placeholder="Email Id" aria-describedby="inputGroupPrepend" required>
                                                                
                                                            
                                                        </div>
                                                        </div>
                                                         <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Employee Type<span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="JobTitle" required="">
                                                                <option value="">Select</option>
                                                               <?php


                                                    $sql3 = mysqli_query($con, "SELECT * FROM employeetype");
                                                    $row3 = mysqli_num_rows($sql3);
                                                    while ($row3 = mysqli_fetch_array($sql3)){
                                                            $str3=$row3['Emp_Type'];
                                                    echo "<option value='". $row3['Emp_Type'] ."'>" .$str3 ."</option>" ;
                                                    }
                                                    ?>
                                                                
                                                            </select>
                                                        </div> 
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Bank Account No<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="BankAccountNo" id="validationCustom03" placeholder="" required>
                                                        </div>


                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">PAN Card No<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="PanCardNo" id="validationCustom03" placeholder="" required>
                                                        </div>


                                                         <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Login Name<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="UserID" id="validationCustom03" placeholder="" required>
                                                        </div>


                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Password<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="Password" id="validationCustom03" placeholder="" required>
                                                        </div>
                                                        
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom03">Whether  <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="Emp_type" required="">
                                                                <option value="">Select</option>
                                                                <option value="Regular">Regular</option>
                                                                <option value="Contract">Contract</option>
                                                                <option value="Temporary">Temporary</option>
                                                                
                                                                
                                                            </select>
                                                        </div>


                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label">Upload Photo</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input is-valid" id="customControlValidationSuccess7" name="file" required>
                                                        <label class="custom-file-label" for="customControlValidationSuccess7">Choose file...</label>
                                                        
                                                    </div>
                                                        </div>
                                                        
                                                        
                                                    
                                                </div>
                                                <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                    
                                                    <button class="btn btn-primary ml-auto" type="submit">Submit form</button>
                                                </div>
                                            </form>
                                            <script>
                                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                                (function()
                                                {
                                                    'use strict';
                                                    window.addEventListener('load', function()
                                                    {
                                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                        var forms = document.getElementsByClassName('needs-validation');
                                                        // Loop over them and prevent submission
                                                        var validation = Array.prototype.filter.call(forms, function(form)
                                                        {
                                                            form.addEventListener('submit', function(event)
                                                            {
                                                                if (form.checkValidity() === false)
                                                                {
                                                                    event.preventDefault();
                                                                    event.stopPropagation();
                                                                }
                                                                form.classList.add('was-validated');
                                                            }, false);
                                                        });
                                                    }, false);
                                                })();

                                            </script>
                                        </div>

                                        </div>
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
                    <!-- END Page Footer -->
                    <!-- BEGIN Shortcuts -->
                    <!-- modal shortcut -->
                     <!-- END Page Settings -->
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <!--<script src="js/../script.js"></script>
	<script>
		$(document).ready(function () {
			
		});
	</script>-->
    </body>
</html>
