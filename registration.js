$(document).ready(function() {
    $('#registration-form').submit(function(event) {
        event.preventDefault();
        
        var name = $('#name').val();
        var mobile = $('#mobile').val();
        var email = $('#email').val();
        var dob = $('#dob').val();

        // Generate a random password
        var password = generateRandomPassword();

        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: {
                name: name,
                mobile: mobile,
                email: email,
                dob: dob,
                password: password
            },
            success: function(response) {
                $('#registration-message').html(response);
            }
        });
    });
});

function generateRandomPassword() {
    
}
