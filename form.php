<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jquery Form Validation</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <section class="container">
            <section class="row">
                <section class="col-md-12">

                    <br><br>

                    <form class="form-horizontal" id="register-form">
                        <center><h2>Registration Form</h2></center>
                        <hr>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-4 control-label">Your First Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputText1" placeholder="First Name" name="first_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-4 control-label">Your Last Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputText2" placeholder="Last Name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-md-4 control-label">Email</label>
                            <div class="col-md-4">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-md-4 control-label">Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                <button type="submit" class="btn btn-default">Register Me</button>
                            </div>
                        </div>
                    </form>
                </section>
            </section>
        </section>



        <script>

            // When the browser is ready...
            $(function() {

                // Setup form validation on the #register-form element
                $("#register-form").validate({

                    // Specify the validation rules
                    rules: {
                        first_name: "required",
                        last_name: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 5
                        }
                    },

                    // Specify the validation error messages
                    messages: {
                        first_name: "Please Enter Your First Name",
                        last_name: "Please Enter Your Last Name",
                        password: {
                            required: "Please Provide a Strong Password",
                            minlength: "Your Password Must be at least 5 Characters Long"
                        },
                        email: "Please Enter a Valid Email Address"
                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                });

            });

        </script>





    </body>
</html>