<?php 
    include_once "header.php";
    $user_id = 1;
?>

<div class="col-sm-12" style="background: purple;">
<div class="row">
    <div class="col-sm-6"  >
        <div class="text-center">
            <p class="text-light">
                Tap The Message To Send
            </p>
        </div>
        <div style="height: 93vh; overflow:auto; background: #bf5cbfa8;">
            <div class="btn btn-outline-light form-control" onclick="sendMessage(1,'Hi..')"  >Hi..</div>
            <div class="btn btn-outline-light form-control"  onclick="sendMessage(2,'Do you help me.')"  >Do you help me.</div>
            <div class="btn btn-outline-light form-control"  onclick="sendMessage(3,'Appointment confirmed or not.')"  >Appointment confirmed or not.</div>
            <div class="btn btn-outline-light form-control"  onclick="sendMessage(4,'Show me my appointment info.')"   >Show me my appointment info.</div>
            <div class="btn btn-outline-light form-control"  onclick="sendMessage(5, 'Cancel my appointment.')" >Cancel my appointment.</div>
            <div class="btn btn-outline-light form-control" onclick="sendMessage(6,'I want an appointment.')"  >I want an appointment.</div>
            <div class="btn btn-outline-light form-control" onclick="sendMessage(7,'I want to raise a complain.')"  >I want to raise a complain..</div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="text-center">
            <p class="text-light">
                Your Messages
            </p>
        </div>
        <div style="height: 93vh; overflow:auto; background: #a91da9a8;" id="message_area">

        </div>
    </div>
</div>
</div>

<script>
    let sendMessage = (msg_id,msg)=>{
        // alert(msg_id);
        let id = msg_id ;  
        // let msg = $('.msg'+msg_id).html();
        let sendMessage = "<div style='margin:10px; padding:10px;background:#f0f0f0;border:1px solid white; '> <img src='data:image/png;base64,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' width='50px' height='50px' style='border-radius:50%' >&nbsp;&nbsp; "+msg+" </div>"
        $('#message_area').append(sendMessage);
        $.ajax({
            url :"manage.php",
            type:'post',
            data :{
                'id' : id
            },
            success :(data)=>{
                // alert(data);
                $('#message_area').append(data);
                // $('#message_area').scroll();
                $('#message_area').animate({
                    scrollTop: $('#message_area').get(0).scrollHeight
                }, 2000);
            }
        });
    }
</script>

<?php 
    include_once "footer.php";
?>