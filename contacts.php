<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<style>

@font-face {
      font-family: 'Poppins-Bold';
      src: url(Poppins-Bold.ttf);
      font-weight: 700;
    }

    body {
        background: url(uploads/blur-background.png);
        background-repeat: no-repeat;
        
        overflow-x: hidden;
       
    }

    
    .box {
        position: absolute;

        left: 886px;
        top: 270px;

        
    }

    .contact-box {
        background-color: blue;
    }

    #hide-book-button {
        display: none;
    }

    .contact-info {
        position: absolute;
        
        left: 200px;
        top: 350px; 
    }

    #hide-label, .label-series1 {
        display: none;
    }

    #div-visitor {
      display: none;
    }
</style>


<body>
<div class="contact-container">

<img src="uploads/info-contacts.png"class="contact-info" data-aos="fade-in" data-aos-duration="1000"></img>

</div>

<div class="box col-7" data-aos="fade-in" data-aos-duration="2000">
    <div class="row my-5 ">
       
        <div class="col-md-7 ">
            <div class="card rounded-0">
                <div class="card-body rounded-0">
                    <h2 class="text-center">Message Us</h2>
                    <center><hr class="bg-navy border-navy w-25 border-2"></center>
                    <?php if($_settings->chk_flashdata('pop_msg')): ?>
                        <div class="alert alert-success">
                            <i class="fa fa-check mr-2"></i> <?= $_settings->flashdata('pop_msg') ?>
                        </div>
                        <script>
                            $(function(){
                                $('html, body').animate({scrollTop:0})
                            })
                        </script>
                    <?php endif; ?>
                    <form action="" id="message-form">
                        <input type="hidden" name="id">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-sm form-control-border" id="fullname" name="fullname" required placeholder="Juan Dela Cruz">
                                <small class="px-3 text-muted">Full Name</small>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control form-control-sm form-control-border" id="contact" name="contact" required placeholder="xxxxxxxxxxxxx">
                                <small class="px-3 text-muted">Contact #</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" class="form-control form-control-sm form-control-border" id="email" name="email" required placeholder="xxxxxxxxxxxxx">
                                <small class="px-3 text-muted">Email</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <small class="text-muted">Message</small>
                                <textarea name="message" id="message" rows="4" class="form-control form-control-sm rounded-0" required placeholder="Write your message here"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 text-center">
                                <button class="btn btn-primary rounded-pill col-5">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#message-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_message",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        location.reload();
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html, body').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>


