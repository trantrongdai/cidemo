<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[Quản lý website]....[]</title>
<link href="<?php echo base_url()."public/frontend/css/admin.css"; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()."public/frontend/css/paging.css"; ?>" />


</head>
<body>
<div id="main">
  <!-- TOP -->
  <div id="top">
    <h2>MANAGER MEMBER with<span> CodeIgniter 2.0</span></h2>
      <h2 class="line"></h2>
      <div id="login"></div>
  </div>
  <!-- EOF TOP -->
  <div id="navigate">
      <ul>
       <li><a href="#">Menu 1</a></li>
       <li><a href="#">Menu 2</a></li>
       <li><a href="#">Menu 3</a></li>
       <li><a href="#">Menu 4</a></li>
      </ul>
  </div>
  <!--EOF Navigate-->
  <div id="containner"> 
    
        <?php echo $content_for_layout; ?> 
        
  </div>
  <!-- EOF Containner-->
</div><!--EOF Main-->
</body>
</html>
