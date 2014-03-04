<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Carbon Admin</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/backend/css/reset.css" type="text/css" media="screen" title="default" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/backend/css/typography.css" type="text/css" media="screen" title="default" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/backend/css/custom.css" type="text/css" media="screen" title="default" charset="utf-8" />


	<link rel="stylesheet" href="<?php echo base_url();?>public/backend/css/jquery.lightbox-0.5.css" type="text/css" media="screen" title="default" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/backend/css/uniform.default.css" type="text/css" media="screen" title="default" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/backend/css/jquery.visualize.css" type="text/css" media="screen" title="default" charset="utf-8" />

	<!--[if IE 8]>
	<link rel="stylesheet" href="./css/ie8.css" type="text/css" media="screen" title="ie8" charset="utf-8" />
	<![endif]-->

	<!--[if IE 7]>
	<link rel="stylesheet" href="./css/ie7.css" type="text/css" media="screen" title="ie8" charset="utf-8" />
	<![endif]-->

</head>

<body class="">

<div id="page">


	<div id="header">

		<h1 id="title"><a href="#"><img src="<?php echo base_url();?>public/backend/images/logo.png" alt="Carbon Admin" /></a></h1>
		<a href="javascript:;" id="newMessages">Messages<span>5</span></a> &nbsp;| &nbsp;
		<a href="javascript:;">Settings</a>&nbsp; | &nbsp;
		<a href="javascript:;">Logout</a>

	</div> <!-- #header -->

	<div id="megadropdown">

	<ul>
		<li  class="current">
			<a href="#">Dashboard</a>
		</li>

		<li class="">
			<a href="javascript:;">Content</a>

			<div class="subNav">
				<div class="col">

					<h3>Search Engines</h3>

					<ul>
						<li><a href="http://google.com/" target="_blank">Google</a></li>
						<li><a href="http://yahoo.com/" target="_blank">Yahoo</a></li>
						<li><a href="http://bing.com/" target="_blank">Bing</a></li>
						<li><a href="http://ask.com/" target="_blank">Ask</a></li>
					</ul>
				</div><!-- .col -->

			</div><!-- .subNav -->
		</li>

		<li>
			<a href="javascript:;">Comments</a>

			<div class="subNav">
				<div class="col">

					<ul>
						<li><a href="javascript:;">CSS Tutorials</a></li>
						<li><a href="javascript:;">HTML Tutorials</a></li>
						<li><a href="javascript:;">Javascript Tutorials</a></li>
						<li><a href="javascript:;">PHP Tutorials</a></li>
					</ul>
				</div><!-- .col -->


			</div><!-- .subNav -->
		</li>

		<li>
			<a href="javascript:;">Settings</a>

			<div class="subNav">
				<div class="col">

					<h3>Help Links</h3>

					<ul>
						<li><a href="javascript:;">Section #1</a></li>
						<li><a href="javascript:;">Section #2</a></li>
						<li><a href="javascript:;">Section #3</a></li>
						<li><a href="javascript:;">Section #4</a></li>
					</ul>
				</div><!-- .col -->
			</div><!-- .subNav -->
		</li>

	</ul>
</div> <!-- #megadropdown -->


	<!-- Start #body -->
	<div id="body">

		<!-- Start #main -->
		<div id="main">

			<div class="portlet">
				<div class="portlet-header">
					<h4>Chart</h4>
				</div> <!-- .portlet-header -->

				<div class="portlet-content">

					<table class="bargraph data hide">
								<caption>Statistics</caption>
								<thead>
									<tr>
										<td></td>
										<th scope="col">Jan</th>
										<th scope="col">Feb</th>

										<th scope="col">Mar</th>
										<th scope="col">Apr</th>
										<th scope="col">May</th>
										<th scope="col">Jun</th>
										<th scope="col">Jul</th>
										<th scope="col">Aug</th>

										<th scope="col">Sep</th>
										<th scope="col">Oct</th>
										<th scope="col">Nov</th>
										<th scope="col">Dec</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<th scope="row">Pageviews</th>
										<td>57</td>
										<td>69</td>
										<td>73</td>
										<td>108</td>

										<td>93</td>
										<td>50</td>
										<td>62</td>
										<td>134</td>
										<td>81</td>
										<td>96</td>

										<td>86</td>
										<td>54</td>
									</tr>

									<!-- <tr>
										<th scope="row">Unique visitors</th>
										<td>20</td>
										<td>40</td>

										<td>68</td>
										<td>70</td>
										<td>102</td>
										<td>35</td>
										<td>14</td>
										<td>17</td>

										<td>74</td>
										<td>95</td>
										<td>45</td>
										<td>23</td>
									</tr> -->
								</tbody>
							</table>

				</div> <!-- .portlet-content -->
			</div> <!-- .portlet -->


			<div class="portlet portlet-closable">
				<div class="portlet-header">
					<h4>Tabs</h4>

					<ul class="portlet-tab-nav">
						<li class="portlet-tab-nav-active"><a href="#tab1">Tab 1</a></li>
						<li class=""><a href="#tab2">Tab 2</a></li>
						<li><a href="#tab3">Tab 3</a></li>
					</ul>


				</div> <!-- .portlet-header -->

				<div class="portlet-content">

					<div id="tab1" class="portlet-tab-content">
						<h2>Tab #1</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<h3>Unordered List</h3>
						<ul>
							<li>Duis ornare elit at nisl rutrum vel bibendum tellus volutpat.</li>
							<li>Cras eget leo neque, sed tempor nulla.</li>
							<li>Ut vitae sapien vel mi porta cursus et ut lorem.</li>
							<li>Quisque accumsan orci euismod leo fermentum vulputate.</li>
							<li>Praesent consectetur consectetur nisi, vel lacinia tellus sollicitudin sed.</li>
							<li>Nullam porta luctus odio, id ornare lorem ultricies vitae.</li>
						</ul>


						<h3>Ordered List</h3>
						<ol>
							<li>Duis ornare elit at nisl rutrum vel bibendum tellus volutpat.</li>
							<li>Cras eget leo neque, sed tempor nulla.</li>
							<li>Ut vitae sapien vel mi porta cursus et ut lorem.</li>
							<li>Quisque accumsan orci euismod leo fermentum vulputate.</li>
							<li>Praesent consectetur consectetur nisi, vel lacinia tellus sollicitudin sed.</li>
							<li>Nullam porta luctus odio, id ornare lorem ultricies vitae.</li>
						</ol>
					</div> <!-- .portlet-tab-content -->

					<div id="tab2" class="portlet-tab-content">
						<h2>Tab #2</h2>

						<p>Vivamus ac tortor dolor. Donec commodo, dui id ultrices blandit, neque nulla malesuada nulla, eget luctus purus lorem feugiat eros. Aenean in felis non lectus pellentesque venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum at velit nisl, at congue ipsum. Phasellus venenatis vestibulum est in pellentesque. Nunc a magna quis arcu luctus euismod. Nullam luctus fringilla nunc sit amet placerat. Cras vitae magna eget nisi porta mattis. Donec ac pharetra odio. In nec lacus ligula. Aliquam erat volutpat. Donec eu lorem eu risus adipiscing semper. Sed in est sapien. Cras faucibus neque vel augue interdum eget ullamcorper purus scelerisque. Maecenas sapien lacus, elementum ac porttitor in, sagittis ut lectus. </p>
					</div> <!-- .portlet-tab-content -->

					<div id="tab3" class="portlet-tab-content">
						<h2>Tab #3</h2>

						<p>Sed non nulla elit, eu congue dolor. Phasellus euismod tincidunt enim, vitae iaculis magna commodo sit amet. Fusce ut rutrum turpis. Etiam tristique arcu turpis. Nulla dolor nulla, pretium vitae tempus quis, ultricies non tortor. Donec ullamcorper, massa id dapibus aliquet, odio neque egestas tellus, sed lobortis nulla sapien in magna. Morbi elementum eros a diam malesuada id adipiscing nisl fringilla. Vestibulum commodo tellus id felis mattis tempor. In ultricies rhoncus tristique. In ut ante eget ligula vehicula vulputate. </p>
					</div> <!-- .portlet-tab-content -->

				</div> <!-- .portlet-content -->
			</div> <!-- .portlet -->


			<div class="portlet portlet-closable">

				<div class="portlet-header">
					<h4>Table</h4>

				</div> <!-- .portlet-header -->

				<div class="portlet-content">

					<!-- Start Table -->
					<table id="dataTable" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th width="20%">Column 1</th>

								<th width="40%">Column 2</th>
								<th width="20%">Column 3</th>
								<th width="20%">Column 4</th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td class="alt">John Doe</td>
								<td class="alt"><a href="javascript:;">Sed non nulla elit</a></td>
								<td class="alt">Billing</td>
								<td class="alt">2001</td>
							</tr>

							<tr>
								<td>Mike Jones</td>
								<td><a href="javascript:;">Phasellus euismod tincidunt enim</a></td>
								<td>Enginerring</td>
								<td>1998</td>
							</tr>

							<tr>
								<td>Carl Adams</td>
								<td><a href="javascript:;">Ultrices posuere cubilia Curae</a></td>
								<td>Management</td>
								<td>2001</td>
							</tr>

							<tr>
								<td>Brian Jones</td>
								<td><a href="javascript:;">In ut ante eget ligula vehicula</a></td>
								<td>Management</td>

								<td>1997</td>
							</tr>

							<tr>
								<td>Mary Jones</td>
								<td><a href="javascript:;">Morbi elementum eros a diam malesuada</a></td>
								<td>Sales</td>

								<td>2003</td>
							</tr>

							<tr>
								<td>Sarah Howard</td>
								<td><a href="javascript:;">Lorem ipsum donec interdum</a></td>
								<td>Accounting</td>

								<td>2005</td>
							</tr>
						</tbody>

					</table>
					<!-- End Table -->

					<div class="pg">
						<span class="disabled">&laquo; Previous</span>
						&nbsp;&nbsp;<a  class="current"  href="javascript:;">1</a>
						&nbsp;&nbsp;<a  href="javascript:;">2</a>
						&nbsp;&nbsp;<a  href="javascript:;">3</a>
						&nbsp;&nbsp;<a  href="javascript:;">4</a>
						&nbsp;&nbsp;<a  href="javascript:;">5</a>
						&nbsp;&nbsp;<a  href="javascript:;">6</a>
						&nbsp;&nbsp;<a  href="javascript:;">7</a>
						&nbsp;&nbsp;<a  href="javascript:;">8</a>
						&nbsp;&nbsp;<a  href="javascript:;">9</a>
						&nbsp;&nbsp;<a  href="javascript:;">10</a>
						&nbsp;&nbsp;<a href="javascript:;">Next &raquo;</a>
					</div> <!-- .pg -->

				</div> <!-- .portlet-content -->

			</div> <!-- .portlet -->



<div class="portlet portlet-closable x8">

				<div class="portlet-header">
					<h4>Form</h4>

					<ul class="portlet-tab-nav">
						<li class="portlet-tab-nav-active"><a href="#inline-form">Inline Labels</a></li>
						<li><a href="#ontop-form">Top Labels</a></li>
					</ul>

				</div> <!-- .portlet-header -->

				<div class="portlet-content">

					<div id="inline-form" class="portlet-tab-content">

						<form action="#" method="post" class="form label-inline">

							<div class="field"><label for="fname">First Name </label> <input id="fname" name="fname" size="50" type="text" class="medium" /></div>

							<div class="field"><label for="lname">Last Name </label> <input id="lname" name="lname" size="50" type="text" class="medium" /></div>

							<div class="field"><label for="address1">Address 1 </label> <input id="address1" size="50" type="text" class="large" /></div>
							<div class="field"><label for="address2">Address 2</label> <input id="address2" size="50" type="text" class="large" /></div>
							<div class="field"><label for="country" class="">Country </label> <input id="country" name="country" size="12" type="text" class="medium" />

								<p class="field_help">Field help text.</p>
							</div>
							<div class="field"><label for="telephone">Telephone</label> <input id="telephone" size="3" type="text" class="xsmall" /> - <input size="3" type="text" class="xsmall" /> - <input size="4" type="text" class="xsmall" />
								<p class="field_help">(###) - ### - ####</p>

							</div>

							<div class="field clearfix">
								<label for="lname">File Upload </label>
								<input style="opacity: 0;" size="19" class="file" type="file" />
							</div>



							<div class="field">
								<label for="type">Type </label>
								<select id="type" class="medium">
									<optgroup label="Type of Whatever">
										<option selected="selected">Corporate</option>
										<option>Individual</option>

									</optgroup>
								</select>
							</div>


							<div class="controlset field">
								<span class="label">Preferred Location</span>

								<div class="controlset-pad">
								<input name="radio1" id="radio1" value="1" type="radio" /> <label for="radio1">Option 1</label><br />
								<input name="radio1" id="radio2" value="1" type="radio" /> <label for="radio2">Option 2</label><br />

								<input name="radio1" id="radio3" value="1" type="radio" /> <label for="radio3">Option 3</label><br />
								</div>
							</div>

							<div class="controlset field">
								<span class="label">Something Else </span>
								<div class="controlset-pad">
									<input name="approved" id="check1" value="1" type="checkbox" />  <label for="check1">Some Option 1</label><br />

									<input name="pending" id="check2" value="1" type="checkbox" />  <label for="check2">Some Option 2</label><br />
									<input name="actives" id="check3" value="1" type="checkbox" /> <label for="check3">Some Option 3</label><br />
								</div>
							</div>

							<div class="buttonrow">
								<button><span>Primary Action</span></button>
								<button class="btn-sec"><span>Secondary Action</span></button>
							</div>

						</form>

					</div> <!-- #horizontal-form -->

					<div id="ontop-form" class="portlet-tab-content hide">

						<form action="#" method="post" class="form label-top">

							<div class="field"><label for="fname2">First Name </label> <input id="fname2" name="fname2" size="50" type="text" class="medium"  /></div>

							<div class="field"><label for="lname2">Last Name </label> <input id="lname2" name="lname2" size="50" type="text" class="medium"  /></div>

							<div class="field"><label for="address12">Address 1 </label> <input id="address12" size="50" type="text" class="large"  /></div>
							<div class="field"><label for="telephone2">Telephone</label> <input id="telephone2" size="3" type="text" class="xsmall" /> - <input size="3" type="text" class="xsmall" /> - <input size="4" type="text" class="xsmall" />
								<p class="field_help">(###) - ### - ####</p>

							</div>

							<div class="field upload clearfix">
								<label for="lname">File Upload </label>
								<input style="opacity: 0;" size="19" class="file" type="file" />
							</div>

							<div class="field">
								<label for="type2">Type </label>
								<select id="type2" class="medium">
									<optgroup label="Type of Whatever">
										<option selected="selected">Corporate</option>
										<option>Individual</option>

									</optgroup>
								</select>
							</div>
							<div class="controlset field">
								<span class="label">Preferred Location</span>

								<div>
								<input name="radio2" id="radio12" value="1" type="radio" /> <label for="radio12">Option 1</label><br />
								<input name="radio2" id="radio22" value="1" type="radio" /> <label for="radio22">Option 2</label><br />

								<input name="radio2" id="radio23" value="1" type="radio" /> <label for="radio23">Option 3</label><br />
								</div>
							</div>

							<div class="controlset field">
								<span class="label">Something Else </span>
								<div>
									<input name="approved" id="check12" value="1" type="checkbox" />  <label for="check12">Some Option 1</label><br />

									<input name="pending" id="check22" value="1" type="checkbox" />  <label for="check22">Some Option 2</label><br />
									<input name="actives" id="check32" value="1" type="checkbox" /> <label for="check32">Some Option 3</label><br />
								</div>
							</div>

							<div class="buttonrow">

								<button><span>Primary Action</span></button>
								<button class="btn-sec"><span>Secondary Action</span></button>
							</div>

						</form>

					</div> <!-- #inline-form -->

				</div> <!-- .portlet-content -->

			</div> <!-- .portlet -->


		</div> <!-- #main -->

		<!-- Start #sidebar -->
		<div id="sidebar">

	<div class="menu">

		<h3>Content</h3>

		<ul>
			<li><a class="icn_manage_pages" href="#">Manage Pages</a></li>
			<li><a class="icn_add_pages" href="#">Add Pages</a></li>
			<li><a class="icn_edit_pages" href="#">Edit Pages</a></li>
			<li><a class="icn_delete_pages" href="#">Delete Pages</a></li>
		</ul>

	</div> <!-- .menu -->

	<div class="menu">

		<h3>Comments</h3>

		<ul>
			<li><a class="icn_manage_comments" href="#">Manage Comments</a></li>
			<li><a class="icn_add_comments" href="#">Add Comments</a></li>
			<li><a class="icn_edit_comments" href="#">Edit Comments</a></li>
			<li><a class="icn_delete_comments" href="#">Delete Comments</a></li>
		</ul>

	</div> <!-- .menu -->

      <!-- End Comments Nav  -->

	<h3>Gallery</h3>

<div id="gallery">
						<a href="<?php echo base_url();?>public/backend/images/lightbox/image1.jpg"><img src="<?php echo base_url();?>public/backend/images/lightbox/thumb_image1.jpg" alt="Lightbox Image" /></a>
						<a href="<?php echo base_url();?>public/backend/images/lightbox/image2.jpg"><img src="<?php echo base_url();?>public/backend/images/lightbox/thumb_image2.jpg" alt="Lightbox Image"  /></a>
						<a href="<?php echo base_url();?>public/backend/images/lightbox/image3.jpg"><img src="<?php echo base_url();?>public/backend/images/lightbox/thumb_image3.jpg" alt="Lightbox Image"  /></a>
						<a href="<?php echo base_url();?>public/backend/images/lightbox/image4.jpg"><img src="<?php echo base_url();?>public/backend/images/lightbox/thumb_image4.jpg" alt="Lightbox Image"  /></a>
						<a href="<?php echo base_url();?>public/backend/images/lightbox/image1.jpg"><img src="<?php echo base_url();?>public/backend/images/lightbox/thumb_image1.jpg" alt="Lightbox Image"  /></a>
						<a href="<?php echo base_url();?>public/backend/images/lightbox/image5.jpg"><img src="<?php echo base_url();?>public/backend/images/lightbox/thumb_image5.jpg" alt="Lightbox Image"  /></a>
					</div> <!-- #gallery -->



		</div> <!-- #sidebar -->


	</div> <!-- #body -->

	<!-- Start #footer -->
	<div id="footer">

		<p>Copyright &copy; 2010 <a href="http://rodcreative.com/">Rod Creative</a>, all rights reserved.</p>

	</div>






</div> <!-- #page -->

<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/jquery/jquery.1.4.2.min.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/jquery/jquery.hoverIntent.min.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/jquery/jquery.tablesorter.min.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/jquery/jquery.lightbox-0.5.min.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/jquery/jquery.uniform.min.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/jquery/jquery.visualize.js"></script>

<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/carbon/carbon.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/carbon/carbon.nav.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/carbon/carbon.message.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>public/backend/scripts/carbon/carbon.portlet.js"></script>

<!--[if IE]><script  type="text/javascript" src="js/misc/excanvas.min.js"></script><![endif]-->

<script type="text/javascript" charset="utf-8">
$(function ()
{
	megadrop.init ();
	carbon.portlet.init ();
	carbon.message.init ();

	carbon.init ();
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16112616-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>

</html>