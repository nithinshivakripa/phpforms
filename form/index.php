
<?php
SESSION_START();
?>
<!DOCTYPE html>
<html>

<head>
  <title>welcome</title>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="get" id="signin">
          <div class="login">

                  <div class="title">
                    <h1>LOGIN</h1>
                  </div>
                  <form action="login.inc.php" name="sign" id="register" method="POST">
                        <table>
                          <tbody>
                            <tr>
                              <td><label>User Name</label></td>
                              <td><input id="username" type="text" name="username"></td>
                            </tr>
                            <tr>
                              <td><label>Password</label></td>
                              <td><input id="pass" type="text" name="pass"></td>
                            </tr>
                          </tbody>
                        </table>
            <div class="save-cancel">
              <button class="save" id="submit" name="submit" value="submit" type="submit">login</button>

              <button  type="submit">cancel</button>
            </div>
            </form>

          </div>
  </div>
    </body>
    <script>

      $(document).ready(function() {
        $("#cancel").click(function() {
          $("#entry").hide();
        });
        $("#register").click(function() {
          $("#entry").show();
        });
      });

      $(document).ready(function() {
        $("#del").click(function() {
          $("#signin").hide();
        });
        $("#sub").click(function() {
          $("#signin").show();
        });
      });


    $(document).ready(function(){
      $("#register").validate({

        rules: {
          username: "required",
          pass: "required",
          },
        messages: {
          username: {
          required: "Please enter a username",
         },
         pass: {
          required: "Please enter a password",
         },
        },

      });
    });

    </script>
</html>
