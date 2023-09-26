$(document).ready(function() {
    $('#login-form').submit(function(event) {
        event.preventDefault();
        
        var email = $('#login-email').val();
        var password = $('#login-password').val();

        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                $('#login-message').html(response);
            }
        });
   
