
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='<?php echo base_url()?>public/Admin/css/css.css' rel='stylesheet' type='text/css' />
<title><?php echo $title ?></title>

</head>

<body>
    <?php
        $this->load->view("Admin/Layout/banner");//Banner
    ?>
    
    <?php
        $this->load->view("Admin/Layout/top");//Top
    ?>
    
    <?php
        $this->load->view("Admin/Layout/left");//Left
    ?>
    <div id='content'>
       
    

<?php
    //--- Giu gia tri cua form
   $username = array(
                        'name'        => 'username',
                        'id'          => 'username',
                        'size'        => '30',
                        'value'       => $info['username'],
                    );
                             
    $password = array(
                        'name'        => 'password',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('password'),
                    );
                    
    $repassword = array(
                        'name'        => 'repassword',
                        'id'          => 'lname',
                        'size'        => '30',
                        'value'       => set_value('repassword'),
                    );

    $fullname = array(
                        'name'        => 'fullname',
                        'id'          => 'fullname',
                        'size'        => '30',
                        'value'       => $info['fullname'],
                    ); 
    $gender = array(
                        'name'        => 'gender',
                        'id'          => 'gender',
                        'size'        => '30',
                        'value'       => $info['gender'],
                    );  
    $country = array(
                        'name'        => 'country',
                        'id'          => 'country',
                        'size'        => '30',
                        'value'       => $info['country'],
                    );  
    $email = array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'size'        => '30',
                        'value'       => $info['email'],
                    );  
    $tel = array(
                        'name'        => 'tel',
                        'id'          => 'tel',
                        'size'        => '30',
                        'value'       => $info['tel'],
                    );  
    $active = array(
                        'name'        => 'active',
                        'id'          => 'active',
                        'size'        => '30',
                        'value'       => $info['active'],
                    );  
    $level = array(
                        'name'        => 'level',
                        'id'          => 'level',
                        'size'        => '30',
                        'value'       => $info['level'],
                    );  
    $birthday = array(
                        'name'        => 'birthday',
                        'id'          => 'birthday',
                        'size'        => '30',
                        'value'       => $info['birthday']
                    );  
?>

<div id="box_entry">
  	  <h2><span>Edit user</span></h2>
      <div class="error">
        <ul>
            <?php
                echo validation_errors('<li>','</li>');
                if(isset($error) && $error!="" && !empty($error))
                    echo $error;
            ?>
        </ul>
      </div>
     <form name="frmEdit" id="frmEdit" action="" method="post" enctype="multipart-formdata">
      
        <fieldset>
        <legend>CHINH SUA THANH VIEN </legend>
        
        <p><label for="name">Username :</label><?php echo form_input($username);?><br /></p>

        <p><label for="name">Password</label><?php echo form_password($password);?><br /></p>

        <p><label for="name">Re-Password</label><?php echo form_password($repassword);?><br /></p>
        
        <p> <label for="name">FullName</label><?php echo form_input($fullname);?><br /></p>

        <p> <label for="name">Gender</label><?php echo form_input($gender);?><br /></p>

        <p><label for="name">Country</label><?php echo form_input($country);?><br /></p>
                
        <p> <label for="name">Email</label><?php echo form_input($email);?><br /></p>

        <p> <label for="name">Tel</label><?php echo form_input($tel);?><br /></p>

        <p> <label for="name">Active</label><?php echo form_input($active);?><br /></p>

        <p><label for="name">Level</label><?php echo form_input($level);?><br /></p>

        <p><label for="name">Birthday</label><?php echo form_input($birthday);?><br /></p>
        
        
        <label>&nbsp;</label> <input type="submit" name="ok" value="Update" /><br />

        </fieldset>
    </form>
</div>
</div>
    <?php
        $this->load->view("Admin/Layout/bottom");//Bottom
    ?>
</body>
</html>