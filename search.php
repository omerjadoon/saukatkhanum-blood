<?php include('headfile.php'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">Blood Group <select class="form-control" name="" id="bloodgroup">
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                            <span>City : <select class="form-control" name="" id="">
                                <option value="">Haripur</option>
                            </select></span>
                            <span><br><button class="btn btn-primary" id="search_btn"><i class="fa fa-search"></i> Search</button></span></div>
                        </div>
                        <div class="row" id="search_result">
                            

                        </div>
                        <script>
                            $(document).ready(function()
                            {
                                $('#search_btn').click(
                                    function()
                                    {
                                        $.post("search_result.php",{
                                            bloodgroup:$('#bloodgroup').val()
                                        },
                                        function(data,status)
                                        {
                                            $('#search_result').html(data);
                                        });
                                    });//end of click
                            });//end of ready
                        </script>
       
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © Shaukat Khanum Blood Donors Club. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </div>
            </div>
            <!-- END MAIN CONTENT-->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <script src="vendor/jquery-3.2.1.min.js"></script>
 <!-- Bootstrap JS-->
    <script src="js/main2.js"></script>
    
    <!-- Bootstrap JS-->
    
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    
    <script src="vendor/animsition/animsition.min.js"></script>

    <!-- Main JS-->
    
<script src="js/main.js"></script>

   

</body>

</html>
<!-- end document-->
