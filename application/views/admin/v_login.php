<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KMIK JAKARTA | Log in</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/mylogo.png'?>">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/square/blue.css'?>">

  <!-- ===== CSS TAMBAHAN ===== -->
  <style>
    /* Center login box */
    .login-page {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .login-box {
      margin: 0;
    }

    /* Center logo */
    .login-box-msg {
      text-align: center;
    }

    .login-box-msg img {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: auto;
    }

    /* Remember Me fix */
    .remember-wrap {
      display: flex;
      align-items: center;
      height: 34px;
    }

    .remember-label {
      display: flex;
      align-items: center;
      gap: 6px;
      font-weight: normal;
      cursor: pointer;
      margin: 0;
      color: #555;
      font-size: 13px;
    }

    .remember-label .icheckbox_square-blue {
      margin-right: 6px;
    }
  </style>
  <!-- ===== END CSS ===== -->

</head>

<body class="hold-transition login-page">

<div class="login-box">

  <div>
    <p><?php echo $this->session->flashdata('msg');?></p>
  </div>

  <div class="login-box-body">

    <p class="login-box-msg">
      <img width="320px;" src="<?php echo base_url().'theme/images/mylogo.png'?>">
    </p>
    <hr/>

    <form action="<?php echo site_url().'admin/login/auth'?>" method="post">

      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8 remember-wrap">
          <label class="remember-label">
            <input type="checkbox" name="remember"> Remember Me
          </label>
        </div>

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
            Sign In
          </button>
        </div>
      </div>

    </form>

    <hr/>
    <p class="text-center">
      Copyright <?php echo date('Y');?> by Ahmad Husein Tamada <br>
      All Right Reserved
    </p>

  </div>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>

</body>
</html>
