$(document).ready(function(){

    $(document).on('click','.tab-single',function(){

        if(!$(this).hasClass('tab-active')){
            $(".tab-active").removeClass("tab-active");
            $(this).addClass("tab-active");
        
            //let target = $(this).data("target");
            //since we have only 2 it will work like this, if we have more than 2, we should pass the target parameter
            $(".tab-content").toggle();
        }

    });

    $(document).on('click','#register',function(){
        let initialTxt = $(this).text();
        $(this).html('Confirming...');
        
        let action ='registerNewUser';
        
       
        let fname = $('#r-fname').val();
        let gname = $('#r-gname').val();
        let email = $('#r-email').val();
        let pwd = $('#r-pwd').val();
        let confirmPwd = $('#r-confirm-pwd').val();
        


        $.ajax({
            type: "POST",
            url: $(this).attr('data-form'),
            data: { 
                action:action,
                fname:fname,
                gname:gname,
                email:email,
                pwd:pwd,
                confirmPwd:confirmPwd,
            },
            success: function(message) {
                alert(message);
                
                if (message == 'SENDING') {
                    //$('#success').fadeIn('slow');
                } else {
                    //$('#error').fadeIn('slow');
                }
            }
    
        });
        $(this).html(initialTxt);

        
    });
    
    












});