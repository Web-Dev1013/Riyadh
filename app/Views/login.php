<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Panda Login</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/style.scss">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="panda">
    <div class="ear"></div>
    <div class="face">
      <div class="eye-shade"></div>
      <div class="eye-white">
        <div class="eye-ball"></div>
      </div>
      <div class="eye-shade rgt"></div>
      <div class="eye-white rgt">
        <div class="eye-ball"></div>
      </div>
      <div class="nose"></div>
      <div class="mouth"></div>
    </div>
    <div class="body"> </div>
    <div class="foot">
      <div class="finger"></div>
    </div>
    <div class="foot rgt">
      <div class="finger"></div>
    </div>
  </div>
  <form class="validate-form" id="login_form">
    <div class="hand"></div>
    <div class="hand rgt"></div>
    <h1>User Login</h1>
    <div class="form-group">
      <input required="required" id="email" type="email" name="email" class="form-control" />
      <label class="form-label">Email</label>
    </div>
    <div class="form-group">
      <input required="required" id="password" type="password" name="password" class="form-control" />
      <label class="form-label">Password</label>
      <p class="alert wrong">Invalid Credentials..!!</p>
      <p class="alert success">Invalid Credentials..!!</p>
      <button class="btn" id="login">Login </button>
    </div>
  </form>
  <!-- partial -->
  <script src='<?php echo base_url() ?>/Riyadh/assets/js/jquery-2.1.3.min.js'></script>
  <script src="<?php echo base_url() ?>/Riyadh/assets/js/script.js"></script>

</body>

</html>
<script>
  $(function() {
    // Panda Eye move
    $(document).on("mousemove", function(event) {
      var dw = $(document).width() / 15;
      var dh = $(document).height() / 15;
      var x = event.pageX / dw;
      var y = event.pageY / dh;
      $('.eye-ball').css({
        width: x,
        height: y
      });
    });

    $('#password').focusin(function() {
      $('#login_form').addClass('up')
    });
    $('#password').focusout(function() {
      $('#login_form').removeClass('up')
    });

    // validation

    $("#login").click(function(e) {
      e.preventDefault();
      var email = $("#email").val();
      var password = $("#password").val();
      $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/login") ?>",
        type: "post",
        data: {
          email: email,
          password: password
        },
        // async: false,
        success: function(res) {
          if (res == "success") {
            $(".alert").html("Successful Login");
            $('#login_form').addClass('wrong-entry');
            setTimeout(function() {
              $('#login_form').removeClass('wrong-entry');
              location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
            }, 1500);
          } else {
            $('#login_form').addClass('wrong-entry');
            setTimeout(function() {
              $('#login_form').removeClass('wrong-entry');
            }, 3000);
          }
        }
      });
    });
  });
</script>