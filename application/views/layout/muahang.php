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
					<li><a href="<?php echo base_url();?>index.php/home/services">Cá kho nhân hậu</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/support">Bánh tráng</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/support">Chuối ngự</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/contact">Góp ý</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/muahang">Liên hệ mua hàng</a></li>
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
                    <div class="post">
                        <h2 class="title"><a href="#">Hướng dẫn mua hàng</a></h2>
                        <div class="entry">
                        <p>&nbsp &nbsp &nbsp &nbspĐể đặt hàng quý khách vui lòng đến văn phòng giao dịch tại P1110, Tòa Nhà 34T, phố Hoàng Đạo Thúy, Cầu Giấy, Hà Nội. Ngoài ra chúng tôi chấp nhận đặt hàng qua điện thoại. Quý khách vui lòng cung cấp thông tin Họ và Tên, địa chỉ giao hàng. Chúng tôi sẽ giao hàng theo đúng địa chỉ của quý khách cung cấp. Khi nhận hàng thì quý khách vui lòng thanh toán tiền cho người giao hàng </p>
                            <p><a href="http://dacsanhanam.com.vn">http://dacsanhanam.com.vn</a>.</p>
                        <p>&nbsp &nbsp&nbsp &nbspCó một số tỉnh thành chúng tôi không giao được tận nơi cho quý khách thì quý khách vui lòng chuyển khoản thanh toán tiền hàng trước. Chúng tôi sẽ gửi cá cho quý khách theo đường ô tô và quý khách vui lòng ra bến xe để nhận hàng</p>
                        <p>&nbsp &nbsp&nbsp &nbspMột số tài khoản như sau:</p>
                        </div>
                    </div>
                    
                </div>
                <div id="rightcontent">
                    <div class="title_box">Liên hệ mua hàng</div>
                            <div class="product_mh">
                                <div class="product_title"><a href="#">Mr Chu Văn Định</a></div>
                                <div>ĐT: <b>0975 397 012</b></br>Email: chudinhbka@gmail.com</div>
                                <div class="product_title"><a href="#">Mr Trần Trọng Đại</a></div>
                                <div>ĐT: <b>0975 397 012</b></br>Email: trongdai306@gmail.com</div>
                            </div>
                    <div class="title_box">Phí giao hàng</div>
                            <div class="product_gh">
                                <div><br> <b>* Tại Hà Nội</b>: 50.000 đ, nếu mua từ 2 niêu cá trở lên miễn phí giao hàng</br><br><b>* Tại Sài Gòn</b>: 200.000 đ/niêu cá (bao gồm tiền phí gửi cá bằng máy bay và công giao hàng đến tận nhà)</br><br><b>* Các tỉnh thành khác</b>: từ 50.000 đ trở lên tùy phương tiện vận chuyển (máy bay hoặc ô tô) và khoảng cách địa lý</div>
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
                Email: dacsanhanamvn@gmail.com - Website: dacsanhanam.com.vn</br>
                © Copyright 2013 dacsanhanam.com.vn, All rights reserved
                
                
            </div> 
        </div>
	<!-- end #footer -->
</div>
</body>
</html>
