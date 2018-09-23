<script>
$(document).ready(function(){
    $("#login-form").submit(function(e){
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
                url : "<?php echo site_url('login/validate');?>",
                method : "POST",
                data : {username:username, password:password},
                success: function(data){
                    if(data == 'valid') {
                      window.location.href = "http://localhost/iegarments/index.php/finance";
                    } else {
                      alert("Incorrect username or password.");
                    }
                    
                }
            });
    });
});

</script>