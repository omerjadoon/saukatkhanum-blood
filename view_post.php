<?php include('headfile.php'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        

                        <div class="row">
                            <div class="col-md-6"><div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    
<!--**************************************************************************************************-->
                        <?php 
                        $id = $_POST['e_id'];
                        $email="";
                        

                        $q_get_email='SELECT * from request where id ='.$id;
                        $res = $conn->query($q_get_email);
                        
                            $rw = $res->fetch_assoc();
                            $email= $rw['email'];
                         


                          ?>

 <!--***********************************************************************************************-->
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <h3 style="display: inline-block;"><?php echo $rw['title']; ?></h3>
                                            <span style="float: right;display: inline-block;"><h3 style="color: #dd0000"><?php echo $rw['bldgroup']; ?></h3></span>
                                        </div>

                                        <div class="au-task-list js-scrollbar3">
                                            <p style="padding: 20px"><?php echo $rw['body']; ?></p>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="btn js-load-btn btn-lg btn-danger" id="<?php echo $rw['id']; ?>">Donate Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                    
                                    <div class="au-inbox-wrap">
                                <div class="au-chat">
                                            <div class="au-chat__title back" >
                                                <div class="au-chat-info msg-title">
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="au-chat__content display-msg">

                                                
                                            </div>
                                            <div class="au-chat-textfield ">
                                                
                                                <input class="au-input au-input--full au-input--h65 message_box1" type="text" placeholder="Type a message">
                                                <input type="button" style="float:right; " value="send" class="btn btn-default send_btn">
                                            </div>
                                            
                                        </div>
                                </div><!-- end of chat -->
                            </div>
                                
                            </div>
                        </div>




                       


             </div></div>           
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © Shaukat Khanum Blood Donors Club. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
    
    <script>
        $(document).ready(function()
        {
            



                


            $('.send_btn').click(function ()
                    {

                      var msg = $('.message_box1').val();
                          //sending msg
                          $.post("message_send.php",
                          {
                              message:msg,
                              mid:"<?php echo $email ?>"
                          },
                          function(data,status){
                            
                              $('.message_box1').val("");
                              fetch_messages();
                              
                              
                              
                          });//end of post
                    });//end of click


            

                    fetch_messages();
            // get messages start
                    function fetch_messages()
                        {
                           //window.clearTimeout(timer);
                          $.post("fetch_messages.php",
                                      {
                                         eid:"<?php echo $email ?>"
                                      },
                                      function(data, status){
                                          
                                          $('.display-msg').html(data);
                                          $(".display-msg").scrollTop($(".display-msg")[0].scrollHeight);
                                          var timer=window.setTimeout(fetch_messages, 1000);
                                       });
                         

                        }
                        fetch_name();
                        function fetch_name()
                            {
                               //window.clearTimeout(timer);
                              $.post("fetch_name.php",
                                          {
                                             eid:"<?php echo $email ?>"
                                          },
                                          function(data, status){
                                              
                                              $('.msg-title').html(data);
                                              var timer=window.setTimeout(fetch_messages, 5000);
                                           });
                             

                            }




            //get messages end


            
});

        

    </script>

   

</body>

</html>
<!-- end document-->
