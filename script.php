
                    
                    </div> <!-- END Shortcuts -->
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <!-- BEGIN Quick Menu -->
        <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
        <nav class="shortcut-menu d-none d-sm-block">
            <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
            <label for="menu_open" class="menu-open-button ">
                <span class="app-shortcut-icon d-block"></span>
            </label>
            <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
                <i class="fal fa-arrow-up"></i>
            </a>
            <a href="logout.php" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
                <i class="fal fa-sign-out"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip" data-placement="left" title="Full Screen">
                <i class="fal fa-expand"></i>
            </a>
            <a href="#" class="menu-item btn" data-action="app-print" data-toggle="tooltip" data-placement="left" title="Print page">
                <i class="fal fa-print"></i>
            </a>
            
        </nav>
        <!-- END Quick Menu -->
        <!-- BEGIN Messenger -->
         <!-- END Messenger -->
        <!-- BEGIN Page Settings -->
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        
        <script src="js/datagrid/datatables/datatables.bundle.js"></script>
    <script src="js/datagrid/datatables/datatables.export.js"></script>
        <script>
   $(document).ready(function() {

            var CurrentUrl= document.URL;
            var CurrentUrlEnd = CurrentUrl.split('/').filter(Boolean).pop();
            console.log(CurrentUrlEnd);
            $( "#js-nav-menu li a" ).each(function() {
                  var ThisUrl = $(this).attr('href');
                  var ThisUrlEnd = ThisUrl.split('/').filter(Boolean).pop();

                  if(ThisUrlEnd == CurrentUrlEnd){
                  $(this).closest('li').addClass('active')
                  }
            });
            
            $("#type").change(function () {
        var val = $(this).val();
        if (val == "uge") {
            $("#size").html("<b><option value='9A' selected>B.E. Computer Science & Engineering (Full-Time)</option><option value='9K'>B.E. Civil Engineering (Full-Time)</option><option value='9C'>B.E. Electronics &amp; Communication Engineering (Full-Time)</option><option value='9B'>B.E. Electrical &amp; Electroncis Engineering (Full-Time)</option><option value='9D'>B.E. Mechanical Engineering (Full-Time)</option><option value='9H'>B.E. Mechatronics Engineering (Full-Time)</option> <option value='9M'>B.Tech. Information Technology (Full-Time)</option><option value='PK'>B.E. Civil Engineering (Part-Time)</option><option value='PB'>B.E. Electrical &amp; Electronics Engineering (Part-Time)</option><option value='PD'>B.E. Mechanical Engineering (Part-Time)</option></b>");
        } else if (val == "uga") {
            $("#size").html("<option value='35'>B.A. Sanskrit</option><option value='20'>B.Ed. Bachelor of Education</option><option value='51'>BBA </option><option value='50'>B.Com</option><option value='34'>BCA</option><option value='48'>B.Sc. Computer Science</option><option value='61'>B.Sc.  Chemistry  </option><option value='60'>B.Sc.  Physics</option><option value='62'>B.Sc.  Mathematics</option>");
        } else if (val == "pge") {
            $("#size").html("<option value='80'>M.E. Power Systems (Full-Time)</option><option value='19'>M.E. Power Systems (Part-Time)</option><Option value='92'>M.E. Engineering Design  (Part-Time)</option>");
        } else if (val == "pga") {
            $("#size").html(" <option value='05'>Master of Computer Applications(M.C.A)</option> <option value='06'>Master of Business Administration (General Management)</option> <option value='53'>Master of Commerce (M.Com)</option><option value='29'>M.Sc. Chemistry</option> <option value='43'>M.Sc. Physics</option> <option value='44'>M.Sc. Mathematics</option>  <option value='07'>M.A. Sanskrit</option> ");
        } else if (val == "item0") {
            $("#size").html("<option value=''>Please select the Course Type</option>");
        }
    });
    
     $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +

                        "<'row'<'col-sm-12'tr>>" +

                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend:    'colvis',
                            text:      'Column Visibility',
                            titleAttr: 'Col visibility',
                            className: 'mr-sm-3'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-outline-danger btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-outline-success btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-outline-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-outline-primary btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-outline-primary btn-sm'
                        }
                    ]
                });

   });
   </script>
       
    </body>
</html>