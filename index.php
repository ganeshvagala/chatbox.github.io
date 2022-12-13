<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <mete name="viewport" content="width=device-width, initial-scale=1.0"></mete>
        <title>Simple Chatbot in PHP | THe Dynamic</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="title">Smiple Online Chatbot</div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        Ali</div>
                <div class="msg-header">
                  <p>Hii Mowa yakkada</p>  
                </div>
                </div>
            </div>
            <div class="typing-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder="Type somthing here.." required>
                    <button id="send-btn">Send</button>
                </div>
            </div>
        </div>
       <script>
        $(document).ready(function(){
          $("#send-btn").on("click",function(){
            $value=$("#data").val();
            $msg='<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value + '</p></div></div>';
            $(".form").append($msg);
            $("#data").val('');
            // start ajax code
            $.ajax({
              url:'message.php',
              type:'POST',
              data:'text'+$value.$,
              success:function(result){
                $replay='<div class="bot-inbox inbox"><div class="icon"> Ali</div><div class="msg-header"><p>'+ result +'</p> </div></div>';
                $(".form").append($replay); 
              }
            });
          });
        });
       </script>

    </body>
</html>