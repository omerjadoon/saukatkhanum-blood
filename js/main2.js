
      function tchange()
      {
        document.getElementById('showMsg').textContent=" ";
        
      }


     


      function validateData(){
        if(document.getElementById('t').value=="")
        {
          document.getElementById('showMsg').textContent="<p style='color:red'>* Title is required</p><br>";
          return false;
        }
        if(document.getElementById('b').value=="")
        {
          document.getElementById('showMsg').textContent="<p style='color:red'>* Description is required</p><br>";
          return false; 
        }
      }

/***********************************************************************************************************/




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
                               window.setTimeout(count_notifications, 1000);
                           });
             

            }
            var num_msgs;
            var count=0;
            
            count_messages();
            var audio = new Audio('notification.mp3');
            function count_messages()
            {
              $.post("get_num_messages.php",
                          {
                              
                          },
                          function(data, status){
                            if(count!=0 && num_msgs!=data)
                            {

                                
                                audio.play();
                            }
                              if(data=='0')
                              {
                                $('#msg-quantity').hide();
                              }else{
                                $('#msg-quantity').show();
                              }
                              $('#msg-quantity').html(data);
                              $('.msg-quantity-txt').html('you have '+data+' new messages');
                               count++;
                               num_msgs=data;
                               window.setTimeout(count_messages, 1000);
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
                               window.setTimeout(get_notification_content, 4000);
                           });
             

            }
            function fetch_conversation()
            {
              $.post("fetch_conversation.php",
                          {
                              
                          },
                          function(data, status){
                              
                              $('.notf_content').html(data);
                               window.setTimeout(fetch_conversation, 1000);
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

            fetch_name();
        function fetch_name()
            {
               //window.clearTimeout(timer);
              $.post("fetch_name.php",
                          {
                             eid:id
                          },
                          function(data, status){
                              
                              $('.msg-title').append(data);
                              //timer=window.setTimeout(fetch_name, 20000);
                              
                           });
             

            }



      });
    });

    //send new message
function send_new_msg()
{
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
}


//send new msg endss

    $('.send_btn').each(function(){
                      var that = $(this);
                      that.on('click', function(){

                      send_new_msg();
                    });//end of click
                    });//end of send btn

     $('.au-chat').keypress(function (e) {
 var key = e.which;
 if(key == 13 && $('.message_box').val() != "")  // the enter key code
  {
    send_new_msg();  
  }
});  
     $(".message_box").on("change paste keyup", function() {
   alert($(this).val()); 
});

            $('.back').each(function(){
                  var that = $(this);
             
                  that.on('click', function(){

                    id="";
                    $(this).parent().parent().removeClass('show-chat-box');
                    $('.msg-title').html('<span style="padding-right: 10px;color:#222" class="fa fa-arrow-left"></span>');
                   
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

/*******************************************************************************************/