<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url()?>public/frontend/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url()?>public/frontend/css/left_menu.css" rel="stylesheet" type="text/css" media="screen" />
<script src="<?php echo base_url()?>public/frontend/scripts/jquery.1.7.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>public/frontend/scripts/AJAX.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('dd').hide();
                $('dt a').click(function() {
                    $('dd:visible').slideUp('slow');
                    $('.active').removeClass('active');
                    $(this).parent().addClass('active').next().slideDown('slow');
                    return false;
                
                });
            });
        </script>
        <script type="text/javascript">
            $('<a href="#top">back to top</a>'); 
                    $('<a id="header"></a>');
        </script>
</head>
<body>
<div id="wrapper">
	<div id="logo">
		<!--<h1>Wellcome to My 'website</h1>-->
	</div>
	<hr />
	<!-- end #logo -->
	<div id="headerall">
		<div id="header">
			<div id="menu">
				<ul>
					<li id="menu_home"><a href="<?php echo base_url();?>index.php/home" class="first">Trang chủ</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/about">Giới thiệu</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/services">Nét đẹp Văn Hóa</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/support">Địa danh Hà Nam</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/contact">Liên hệ mua hàng</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/muahang">Địa chỉ</a></li>
				</ul>
			</div>
			<!-- end #menu -->
			<div id="search">
				<form method="get" action="">
                    <fieldset>
                <!--    <input type="text" name="s" id="search-text" size="15" /> -->

                   <div id="prod-subcontent">
                        <div class="faqsearch">
                            <div  id="faqsearchinputbox">
                                <!-- Khung Search  -->
                               <input  name="query" type="text" id="faq_search_input"/>
                                <!-- END Khung Search   -->
                            </div>
                        </div>
                        <div id="searchresultdata" class="faq-articles"> </div>
                    </div> 
                    <input type="submit" id="search-submit" value="SEARCH" />
                    </fieldset>
                </form>
			</div>
			<!-- end #search -->
		</div>
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="pagecontent">
		<div id="pageleft">
			
		</div>
	<div id="page">
	<div id="page-bgtop">
		<div id="leftcontent">
			<div class="title_box">Đặc Sản</div>
                <dl>
                    <dt><a href="#">Cá kho Nhân Hậu</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Bánh cuốn chả Phủ Lý</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Chuối ngự Đại Hoàng</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Bánh đa nem làng Chêu</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Rượu làng Bèo</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Quất Lý Nhân</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Rượu làng Vọc Bình Lục</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Bánh đa vừng Bình Lục</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Bánh đa Phúc Hạ</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Hồng không hạt Nhân Hậu</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>

                    <dt><a href="#">Mắm cáy Bình Lục</a></dt>
                    <dd>
                        <ul class="left_menu">
                            <li class="odd"><a href="../Controller/cate_dell.php">Giới thiệu</a></li>
                            <li class="even"><a href="../Controller/cate_sony.php">Sự nổi tiếng</a></li>
                            <li class="odd"><a href="../Controller/cate_lenovo.php">Cách sử dụng</a></li>
                            <li class="even"><a href="../Controller/cate_hp.php">Giá cả</a></li>
                        </ul>
                    </dd>



                </dl>

                <!--------------------------------Special product------------------------------------------>
                <div class="title_box">Sản phẩm đặc biệt</div>
                <div class="product">
                	<div class="product_title"><a href="#">Cá kho Nhân Hậu</a></div>
                	<div class="product_image"></div>
                </div>
                
             </div>
		</div>

      
        <!-- end #sidebar -->


        <div id="content">
            <div id="contenttop">
                <div id="centercontent">
                    <div id="container">
            <h1>Điền đầy đủ các thông tin sau<span class="arrow"></span></h1>
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
                        <textarea id="contents" name="contents" placeholder="Please insert your Message" required=""></textarea>
                        <div class="warning" id="contentError"> Vui lòng nhập nội dung</div>
                  </p>

                  <p>
                        <input type="text" id="captcha" name="captcha" placeholder="Please insert your Captcha" required="">
                        <img src="captcha.php" id="img_captcha">
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
                </div>
                <div id="rightcontent">
                    <div class="title_box">Liên hệ mua hàng</div>
                            <div class="product_mh">
                                <div class="product_title"><a href="#">Mr Chu Văn Định</a></div>
                                <div>ĐT: <b>0975 397 012</b><br>Email: chudinhbka@gmail.com</div>
                                <div class="product_title"><a href="#">Mr Trần Trọng Đại</a></div>
                                <div>ĐT: <b>0975 397 012</b><br>Email: trongdai306@gmail.com</div>
                            </div>
                    <div class="title_box">Phí giao hàng</div>
                            <div class="product_gh">
                                <div><br> <b>* Tại Hà Nội</b>: 50.000 đ, nếu mua từ 2 niêu cá trở lên miễn phí giao hàng<br><br><b>* Tại Sài Gòn</b>: 200.000 đ/niêu cá (bao gồm tiền phí gửi cá bằng máy bay và công giao hàng đến tận nhà)<br><br><b>* Các tỉnh thành khác</b>: từ 50.000 đ trở lên tùy phương tiện vận chuyển (máy bay hoặc ô tô) và khoảng cách địa lý</div>
                            </div>

                </div>
            </div>
        	
        	
        </div>
        <!-- end #content -->

        <div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	
	<div id="footer">
        	<div id=" link_footer" align="center">
            	<a href="#">Trang chủ</a>
                <a href="#">Bản đồ</a>
                <a href="#">Góp ý</a>
                <a href="#">Hà Nam</a>
                <a href="#">Liên hệ quảng cáo</a><br />
                Địa chỉ: Số 228 - Hoàng Mai - Hoàng Mai - Hà Nội<br />
                Email: dacsanhanamvn@gmail.com - Website: dacsanhanam.com.vn<br>
                © Copyright 2013 dacsanhanam.com.vn, All rights reserved
                
                
            </div> 
        </div>
	<!-- end #footer -->

</body>
</html>
