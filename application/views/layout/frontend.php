<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url()?>public/frontend/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url()?>public/frontend/css/left_menu.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/csss/tieudiem.css" type="text/css" media="screen"/>

<script src="<?php echo base_url()?>public/frontend/scripts/jquery.watermark.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>public/frontend/scripts/jquery.1.7.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>public/frontend/scripts/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>public/frontend/scripts/jquery.spritely-0.6.1.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>public/frontend/scripts/jquery.global.js" type="text/javascript"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
    // Stuff to do as soon as the DOM is ready. Use $() w/o colliding with other libs;
    $('#cloud').pan({
        fps: 30, // Frame trên giây, fps càng nhỏ thì chuyển động sẽ càng giật.
        speed: 2, // tốc độ di chuyển của vậy thể
        dir: 'left' // hướng chuyển động, left: phải>trái, right: trái>phải
    });
    $('#ocean').pan({
        fps: 30, // Frame trên giây, fps càng nhỏ thì chuyển động sẽ càng giật.
        speed: 2, // tốc độ di chuyển của vậy thể
        dir: 'left' // hướng chuyển động, left: phải>trái, right: trái>phải
    });
    
    $('#birds-1')
        .sprite({
            fps: 12, // Khung hình / giây
            no_of_frames: 3 // số lượng khung hình trong bức ảnh
        })
        .spRandom({ // Bay tự do trong khoãng cách như dưới
            top: 260,
            left: 380,
            right: 200,
            bottom: 60,
            speed: 4000,
            pause: 2000
        })
        .isDraggable({ // Nếu drag hoạt động, phải thêm Jquery Ui vào
            start: function() { // Khi click chuột vào đối tượng và kéo
                // Các sự kiện sẽ diễn ra
                $('#birds-1').fadeTo('fast', 0.7);
            },
            stop: function() { // Khi bỏ buôn chuột ra
                // Các sự kiện sẽ diễn ra
                $('#birds-1').fadeTo('fast', 1);
                $('#birds-1').find("p").html("Đưa em đi....");
            },
            drag: function() { // Trong quá trình kéo
                // các sự kiện sẽ diễn ra.
                $('#birds-1').find("p").html("Hãy đưa em đi thật xa....");
            }
        });
    $('#birds-3')
        .sprite({
            fps: 12, // Khung hình / giây
            no_of_frames: 3 // số lượng khung hình trong bức ảnh
        })
        .spRandom({ // Bay tự do trong khoãng cách như dưới
            top: 300,
            left: 30,
            right: 200,
            bottom: 170,
            speed: 4000,
            pause: 2000
        })
        .isDraggable({ // Nếu drag hoạt động, phải thêm Jquery Ui vào
            start: function() { // Khi click chuột vào đối tượng và kéo
                // Các sự kiện sẽ diễn ra
               $('#birds-3').fadeTo('fast', 0.7);
            },
            stop: function() { // Khi bỏ buôn chuột ra
                // Các sự kiện sẽ diễn ra
                $('#birds-3').fadeTo('fast', 1);
                $('#birds-3').find("p").html("Về quê hương Hà Nam nào !!!");
            },
            drag: function() { // Trong quá trình kéo
                // các sự kiện sẽ diễn ra.
                $('#birds-3').find("p").html("Về Hà Nam ta thôi....");
            }
        }); 
    $('#birds-2')
        .sprite({
            fps: 12, 
            no_of_frames: 3
        })
        .spRandom({
            top: 280,
            left: 100,
            right: 350,
            bottom: 90,
            speed: 3000,
            pause: 2000
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
                    <li><a href="<?php echo base_url();?>index.php/home/support">Nét đẹp Văn Hóa</a></li>
                    <li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/support">Địa danh Hà Nam</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/contact">Liên hệ mua hàng</a></li>
					<li class="divice"></li>
					<li><a href="<?php echo base_url();?>index.php/home/support">Địa chỉ</a></li>
				</ul>
			</div>
			<!-- end #menu -->
			<div id="search">
				<form method="get" action="">
					<fieldset>
				<!-- 	<input type="text" name="s" id="search-text" size="15" /> -->

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
  <!--  <div id="tieudiem">
        <article id="cloud">
            <section id="birds-1">
                <p>Kéo em đi....</p>
            </section><
            <section id="birds-2"></section>
            <section id="birds-3">
                <p>Đưa thư cho izwebz nào !!!</p>
            </section>
        </article>
    </div> -->
	<div id="pagecontent">
		<div id="pageleft">
			
		</div>
	<div id="page">
	<div id="page-bgtop">
		<div id="leftcontent">
			<div class="title_box">Đặc Sản</div>
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

      

        <div id="content">
        	<div id="contenttop">
                  <div id="tieudiem">
                    <article id="cloud">
                        <section id="birds-1">
                            <p>Đưa em đi....</p>
                        </section>
                        <section id="birds-2"></section>
                        <section id="birds-3">
                            <p>Về quê hương Hà Nam nào !!!</p>
                        </section>
                    </article>
                </div>

<!--
        		<div id="centercontent">
        			<?php echo $content_for_layout ?>
        		</div>
        		<div id="rightcontent">
               		

        		</div> -->
        	</div>
        	<div id="contentbottom">
                <div id="cakhonhanhau">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Cá kho nhân hậu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>
                
                <div id="banhcuonphuly">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Bánh cuốn chả Phủ lý</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="chuoingudaihoang">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Chuối ngự Đại Hoàng</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="banhdalangcheu">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Bánh đa làng Chều</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="ruoulangbeo">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Rượu làng Bèo</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="quatlynhan">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Quất Lý Nhân</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="ruoulangvoc">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Rượu làng Vọc Bình Lục</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="banhdavung">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Bánh đa vừng Bình Lục</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="banhdaphucha">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Bánh đa Phúc Hạ</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="hongkhonghat">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Hồng không hạt Nhân Hậu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>

                <div id="mamcaybinhluc">
                    <div class="item_header">
                        <div class="menu_nav">
                            <ul class="item_nav_ho">
                                <li><a href="#">Mắm cáy Bình Lục</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/services">Giới thiệu</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/support">Cách bảo quản</a></li>
                                <li class="divice"></li>
                                <li><a href="<?php echo base_url();?>index.php/home/contact">Giá thị trường</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="item_left">
                        <div class="img_inf">

                        </div>
                        <div class="link_inf">
                            <p>Hình 1: Ảnh cá kho by: Chu Định</p>
                        </div>
                    </div>
                    <div class="item_right">
                        <div class="mucbaitop">
                            <div class="mucbaitop_link"><a href="#">Đến với Nhân hậu, một địa điểm mà du khách không thế nào quên về văn hóa ẩm thực</a></div>
                            <div class="mucbaitop_content">
                                <p>(Dân trí) - Những nhịp cầu sắt kia duyên dáng khiến bao người thầm phục, có sáng tạo kỹ thuật nào hoà nhập với nhịp điệu không gian nhuần nhuyễn hơn thế? Có biểu đồ chịu lực nào được biểu diễn bằng chất liệu sắt thép uyển chuyển hơn thế?</p>
                            </div>
                        </div> 
                        
                        <ul class="danhmucbai">
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Ukraine gọi dự bị quân khi "15.000 lính Nga đã chiếm Crimea trong vòng 2 ngày</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> U19 Việt Nam hứng khởi với buổi tập đầu tiên tại CLB Arsenal</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Kỷ luật cảnh cáo nam sinh hung bạo đánh bạn nữ trong lớp</a></li>
                            <li class="mucbai"><a href="../Controller/cate_dell.php">>> Cầu Long Biên - Có biểu đồ chịu lực nào uyển chuyển hơn thế?</a></li>

                        </ul>
                    </div>
                </div>


                
                <div id="backtop"> <a href="#top">Quay lại đầu trang</a></div>
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
