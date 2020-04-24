<!DOCTYPE html>
<html>

<head>
    <title>First Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("body").append("<span id='result'></span><span id='error'></span>") // created a span in order to show the result and the error seperately
            $("form").append("<input type='submit' name='submit' id='submit'>") // also a submit button cause i found it easier to submit the form.
            $("form").submit(function(e) {
                e.preventDefault();
                var fname = $('#first_name').val();
                var lname = $('#last_name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var phone = $('#phone_number').val();
                $.ajax({
                    type: "POST",
                    url: "second_page.php",
                    data: {},
                    success: function(response) {
                        $("#result").html(response)
                    },
                    error: function(response) {
                        $("#error").html(response)
                    }
                })
            })
        })
    </script>
</head>

<body>
    <h1>Add User</h1>
    <form method="POST" action="second_page.php">
        <label>First Name:</label>
        <input type="text" name="first_name" id="first_name">
        <br>

        <label>Last Name:</label>
        <input type="text" name="last_name" id="last_name">
        <br>

        <label>Email Address:</label>
        <input type="email" name="email" id="email">
        <br>

        <label>Password</label>
        <input type="password" name="password" id="password">
        <br>

        <label>Phone Number:</label>
        <input type="number" name="phone_number" id="phone_number">

        <br>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</body>

</html>