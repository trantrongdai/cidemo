<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
      <meta charset="UTF-8">
      <title> Jquery contact form with PHP</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/reset1.css" media="all">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/style1.css" media="all">
      <script type="text/javascript" src="<?php echo base_url()?>public/frontend/scripts/AJAX.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>public/frontend/scripts/jquery-1.7.2.min.js"></script>

</head>
<body>
      <div id="container">
            <h1>Jquery AJAX Contaact Form With PHP<span class="arrow"></span></h1>
            <div id="loading"></div>
            <form action="" method="POST">
                  <div id="success">Thanks your contact me!!!</div>
                  <div id="error">Error !!! Cna not sending Email</div>
                  <p>
                        <input type="text" id="name" name="name" placeholder="Please insert your Name" required="">
                        <div class="warning" id="nameError"> Vui lòng nhập tên của bạn</div>
                  </p>

                  <p>
                        <input type="email" id="email" name="email" placeholder="Please insert your Email" required="">
                        <div class="warning" id="emailError"> Email không hợp lệ</div>
                  </p>

                  <p>
                        <input type="url" id="website" name="website" placeholder="Please insert your Website" required="">
                        <div class="warning" id="websiteError">Vui lòng nhập Website của bạn</div>
                  </p>

                  <p>
                        <input type="text" id="subject" name="subject" placeholder="Please insert your Subject" required="">
                        <div class="warning" id="subjectError"> Vui lòng nhập tiêu đề</div>
                  </p>

                  <p>
                        <textarea id="content" name="content" placeholder="Please insert your Message" required=""></textarea>
                        <div class="warning" id="contentError"> Vui lòng nhập nội dung</div>
                  </p>

                  <p>
                        <input type="text" id="captcha" name="captcha" placeholder="Please insert your Captcha" required="">
                        <img src="<?php echo base_url()?>public/frontend/images/load.png">
                        <div class="warning" id="captchaError">Vui lòng nhập Captcha</div>
                  </p>

                  <p>
                        <input type="submit" id="SendMail" value="Send Mail">
                  </p>

            </form>
            <!--Required => Bắt buộc bạn nhập vào hộp thoại input trước khi submit
            Placeholder => Tạo một đoạn text mờ trong input
            Type: Email => Định dạng input nhập vào phải là một Email hợp lệ
            Type:Url => Định dạng input nhập vào phải là một đường dẫn hợp lệ -->
      </div>
</body>

</html>