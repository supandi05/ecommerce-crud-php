<footer>
                <p>&copy; Vincent Gabriel 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="../assets/bootstrap-admin/vendors/jquery-1.9.1.min.js"></script>
        <script src="../assets/bootstrap-admin/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/bootstrap-admin/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="../assets/bootstrap-admin/assets/scripts.js"></script>
        <script src="../assets/bootstrap-admin/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/bootstrap-admin/assets/DT_bootstrap.js"></script>
        <script src="../assets/bootstrap-admin/vendors/jquery.uniform.min.js"></script>
        <script src="../assets/bootstrap-admin/vendors/chosen.jquery.min.js"></script>
        <script src="../assets/bootstrap-admin/vendors/bootstrap-datepicker.js"></script>
        <script src="../assets/bootstrap-admin/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="../assets/bootstrap-admin/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
        <script src="../assets/bootstrap-admin/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
        <script type="text/javascript" src="../assets/bootstrap-admin/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="../assets/bootstrap-admin/assets/form-validation.js"></script>
        <script src="../assets/bootstrap-admin/assets/scripts.js"></script>
        
 <!------------------------------------------------------------------------------------------------------------------------------>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>

<script>

    jQuery(document).ready(function() {   
       FormValidation.init();
    });
    

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
        
    </body>

</html>