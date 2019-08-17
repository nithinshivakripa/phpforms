<!DOCTYPE html>
<html>

<head>
  <title>welcome</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="get" id="signin">
          <div class="title">
                        <h1>signup</h1>
                      </div>
                      <form id="register"method="POST" action="signup.inc.php">
                          <div class="login">
                            <table>
                              <tbody>
                                <tr>
                                  <td><label>Name :</label></td>
                                  <td><input id="name" class="txt" type="text" name="name"><br>
                                  <span class="error"></span></td>
                                </tr>
                                <tr>
                                  <td><label>E-mail :</label></td>
                                  <td><input id="email"class="txt" type="text" name="email"><br>
                                  <span class="error"></span></td>
                                </tr>
                                <tr>
                                  <td><label>Gender : </label></td>
                                  <td>
                                    <label><input type="radio" name="gender" value="Male"> Male</label>
                                    <label><input type="radio" name="gender" value="Female"> Female</label>
                                    <label><input type="radio" name="gender" value="Others"> Others</label><br>
                                    <span class="error"></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td><label>Password</label></td>
                                  <td><input class="txt" id="pass" type="text" name="password"><br>
                                  <span class="error"></span></td>
                                </tr>
                                <tr>
                                  <td><label>Conform Password</label></td>
                                  <td><input class="txt" id="cpass" type="text" name="cpassword"><br>
                                  <span class="error"></span></td>
                                </tr>
                              </tbody>
                            </table>
                              </div>
                            <div class="save-cancel">
                                  <input class="bt_log"name="submit" type="submit" value="Register">
                                  <input class="bt_log" type="submit" value="cancel">
                              </div>
                </form>
                <p>If you have an account? <a href="index.php">Login here.</a></p>

      </div>

    </body>
    <script>


    $(document).ready(function(){
      $("#register").validate({

        rules: {
          name: "required",
          email: "required",
          pass:"required",
          cpass:"required"
          },
        messages: {
          name: {
          required: "Please enter a name",
         },
         email: {
          required: "Please enter a email",
         },
         pass: {
          required: "Please enter a password",
         },
         cpass: {
          required: "conform password",
         },
        },

      });
    });

    </script>

</html>
