<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<style>

@font-face {
  font-family: 'Poppins-Bold';
  src: url(Poppins-Bold.ttf);
  font-weight: 400;
}


 #reserve_room {
    

 }



#hide-book-button {
    display: none;
}




/* CHAT BOT STYLE */

#hide-chatbot {
    display: none;
    
}

#exit-button:hover {
    opacity: 50%;
   
   
}


#exit-button {
    float: left;
    position: absolute;
    bottom: 480px;
    left: 350px;
}

.wrapper-a{
    width: 400px;
    background: #fff;
  
   
    z-index: 1000;

    margin-top: 200px;
    position: absolute;
    left: 1080px;
    bottom: 170px;
    
    
    animation: popup-animation 0.5s ease-out;

    border-radius: 50px 50px 50px 50px;
   
    box-shadow: 2px 10px 59px 0px rgba(0,0,0,1);
-webkit-box-shadow: 2px 10px 59px 0px rgba(0,0,0,1);
-moz-box-shadow: 2px 10px 59px 0px rgba(0,0,0,1);
}


@keyframes popup-animation {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

.wrapper-a .title{
  background: white;
    color: black;
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
    border-radius: 50px 50px 0 0;

    


}


.wrapper-a .form{
    padding: 20px 15px;
    min-height: 400px;
    max-height: 400px;
    overflow-y: auto;

   
}
.wrapper-a .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
    
}
.wrapper-a .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
}
.wrapper-a .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: white;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: black;
}
.wrapper-a .form .inbox .msg-header{
    max-width: 70%;
    margin-left: 10px;
}
.form .inbox .msg-header p{
    color: #fff;
    background: black;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    
}
.form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}
.wrapper-a .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 50px 50px;
}
.wrapper-a .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
}
.wrapper-a .typing-field .input-data input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
}
.typing-field .input-data input:focus{
    border-color: rgba(0,123,255,0.8);
}
.input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
}
.input-data input:focus::placeholder{
    color: #bfbfbf;
}
.wrapper-a .typing-field .input-data button{
    position: absolute;
    right: 5px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: #007bff;
    border: 1px solid #007bff;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.wrapper-a .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
}
.typing-field .input-data button:hover{
    background: #006fef;
}

.chat-icon-class {
    position: absolute;
    bottom: 50px;
    right: 200px;
    height: 90px;
    width: 90px;


}

.chat-icon-class:hover {
    height: 100px;
    width: 100px;

}

</style>

<body>
    

<?php
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT * FROM room_list where id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k))
            $$k = $v;
        }
    }
}
?>

<script>


    $(function(){
        $('#reserve_room').click(function(){
            uni_modal("Reservation for <?= $name ?>","reserve.php?rid=<?= isset($id) ? $id : '' ?>",'mid-large')
        })
        
    })
</script>

<div class="wrapper-a" id="hide-chatbot" >

        <div class="title">FAQ CHATBOT <img src="uploads/remove.png" id="exit-button"> </img></div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you? <br> <br>
                    Here are some questions that the FAQ Chatbot of Series 1 Resort can answer. <br>
                1.  How can I make a reservation at the resort? <br>
                2.  Can I modify or cancel my reservation? <br>
                3.  What available Amenities?<br>
                4.  How many people can the resort accomodate? <br>
                5.  Where are you located? <br>
                6.  Are pets allowed at the resort?<br>
                7.  More Questions...</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    
    
<img src="uploads/chatbot-icon.png" class="chat-icon-class" id="chat-icon-id" >
    <script>
       let chatBotIcon = document.querySelector('#chat-icon-id');
       let exitButton = document.querySelector('#exit-button');

       let chatBotIconHide = document.querySelector('.wrapper');
       chatBotIcon.addEventListener('click', () => {
        document.getElementById('hide-chatbot').style.display="block"
    
    
    });

    exitButton.addEventListener('click', () => {
        document.getElementById('hide-chatbot').style.display="none"
    
    
    });

   

    
            $(document).ready(function(){
            $("#send-btn").on("click", function(){
                sendMessage();
            });

            $("#data").on("keydown", function(event){
                if (event.keyCode === 13 && !event.shiftKey) {
                    event.preventDefault();
                    sendMessage();
                }
            });

            function sendMessage() {
                $value = $("#data").val().trim();
                if ($value !== "") {
                    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                    $(".form").append($msg);
                    $("#data").val('');
                    
                    // start ajax code
                    $.ajax({
                        url: 'message.php',
                        type: 'POST',
                        data: 'text='+$value,
                        success: function(result){
                            $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                            $(".form").append($replay);
                            // when chat goes down the scroll bar automatically comes to the bottom
                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }
                    });
                }
            }
        });

    </script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
   
</body>
</html>

