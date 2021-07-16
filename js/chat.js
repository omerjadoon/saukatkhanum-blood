$(document).ready(function()
        {
            count_notifications();
            function count_notifications()
            {
              $.post("get_num_notification.php",
                          {
                              
                          },
                          function(data, status){
                              if(data=='0')
                              {
                                $('#notf-quantity').hide();
                              }else{
                                $('#notf-quantity').show();
                              }
                              $('#notf-quantity').html(data);
                              $('.notf-quantity-txt').html('you have '+data+' new notifications');
                               window.setTimeout(count_notifications, 10000);
                           });
             

            }
 $(".message_box").on("paste keydown", function() {
   //sometimg after thinking
   
});


            count_messages();
            function count_messages()
            {
              $.post("get_num_messages.php",
                          {
                              
                          },
                          function(data, status){
                              if(data=='0')
                              {
                                $('#msg-quantity').hide();
                              }else{
                                $('#msg-quantity').show();
                              }
                              $('#msg-quantity').html(data);
                              $('.msg-quantity-txt').html('you have '+data+' new messages');
                               window.setTimeout(count_messages, 10000);
                           });
             

            }
            get_notification_content();
            function get_notification_content()
            {
              $.post("get_content_notification.php",
                          {
                              
                          },
                          function(data, status){
                              
                              $('.notf_content').html(data);
                               window.setTimeout(get_notification_content, 20000);
                           });
             

            }
            function fetch_conversation()
            {
              $.post("fetch_conversation.php",
                          {
                              
                          },
                          function(data, status){
                              
                              $('.notf_content').html(data);
                               window.setTimeout(fetch_conversation, 5000);
                           });
             

            }

            function abc()
            {

            }



            //chatbox
            var inbox_wrap = $('.js-inbox');
    var message = $('.au-message__item');
    var id ="";
    var timer;
    message.each(function(){
      var that = $(this);
 
      that.on('click', function(){
        clearTimeout(timer);
        $(this).parent().parent().parent().toggleClass('show-chat-box');
       id="";
        id=$(this).attr('id');
         fetch_messages();
       
        function fetch_messages()
            {
               //window.clearTimeout(timer);
              $.post("fetch_messages.php",
                          {
                             eid:id
                          },
                          function(data, status){
                              
                              $('.display-msg').html(data);
                              $(".display-msg").scrollTop($(".display-msg")[0].scrollHeight);
                               timer=window.setTimeout(fetch_messages, 1000);
                           });
             

            }



      });
    });

    $('.send_btn').each(function(){
                      var that = $(this);
                      that.on('click', function(){

                      var msg = $('.message_box').val();
                          //sending msg
                          $.post("message_send.php",
                          {
                              message:msg,
                              mid:id
                          },
                          function(data,status){
                            
                              $('.message_box').val("");
                              
                              
                          });//end of post
                    });//end of click
                    });//end of send btn

            $('.back').each(function(){
                  var that = $(this);
             
                  that.on('click', function(){

                    id="";
                    $(this).parent().parent().removeClass('show-chat-box');
                   
                  });
                });//end of back

            $('.notf-top').each(function(){
                      var that = $(this);
                      that.on('click', function(){

                        
                          //sending msg
                          $.post("notf_top.php",
                          {
                              
                          },
                          function(data,status){
                            
                            $('#notf-quantity').hide();
                              count_notifications();
                              
                              
                          });//end of post
                    });//end of click
                    });//end of notf -top
             $('.msg-top').each(function(){
                       var that = $(this);
                      that.on('click', function(){

                        
                          //sending msg
                          $.post("msg_top.php",
                          {
                              
                          },
                          function(data,status){
                            $('#msg-quantity').hide();
                              
                              
                              
                          });//end of post
                    });//end of click
                    });//end of msg -top
});

        

/*************************************************************************************************************************************/
                                    //chat etc ka code end
  /*************************************************************************************************************************************/