<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='<?php echo base_url()?>public/Admin/css/css.css' rel='stylesheet' type='text/css' />
<title><?php echo $title ?></title>

</head>

<body>

    <?php echo 'eo hieu no sai cho nao nua'; ?>
    <?php
        $this->load->view("Admin/Layout/banner");//Banner
    ?>
    <?php //printf($menu); ?>
    
    <?php
        $this->load->view("Admin/Layout/top");//Top
    ?>
    
    <?php
        $this->load->view("Admin/Layout/left");//Left
    ?>
    <div id='content'>
        <?php
        echo'<br><br><h4>Moi ban hay chon 1 thao tac quan tri </h4>';
          
    //--- gia tri cua form
 
    $username = array(
                        'name'        => 'username',
                        'id'          => 'username',
                        'size'        => '30',
                        'value'       => set_value('username'),
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
                        'value'       => set_value('fullname'),
                    ); 
    $gender = array(
                        'name'        => 'gender',
                        'id'          => 'gender',
                        'size'        => '30',
                        'value'       => set_value('gender'),
                    );  
    $country = array(
                        'name'        => 'country',
                        'id'          => 'country',
                        'size'        => '30',
                        'value'       => set_value('country'),
                    );  
    $email = array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'size'        => '30',
                        'value'       => set_value('email'),
                    );  
    $tel = array(
                        'name'        => 'tel',
                        'id'          => 'tel',
                        'size'        => '30',
                        'value'       => set_value('tel'),
                    );  
    $active = array(
                        'name'        => 'active',
                        'id'          => 'active',
                        'size'        => '30',
                        'value'       => set_value('active'),
                    );  
    $level = array(
                        'name'        => 'level',
                        'id'          => 'level',
                        'size'        => '30',
                        'value'       => set_value('level'),
                    );  
    $birthday = array(
                        'name'        => 'birthday',
                        'id'          => 'birthday',
                        'size'        => '30',
                        'value'       => set_value('birthday')
                    );  
				
?>

<div id="box_entry">
  	  <h2><span>THEM USER</span></h2>
      <div class="error">
        <ul>
            <?php
                echo validation_errors('<li>','</li>');
                if($error!="" && !empty($error))
                    echo $error;
            ?>
        </ul>
      </div>

     <form name="frmadd" action="" method="post" enctype="multipart-formdata">
        <fieldset>
        <legend>THEM THANH VIEN </legend>
        
        <label>Username</label><?php echo form_input($username);?><br />

        <label>Password</label><?php echo form_password($password);?><br />

        <label>Re-Password</label><?php echo form_password($repassword);?><br />
		
        <label>FullName</label><?php echo form_input($fullname);?><br />

        <label>Gender</label><?php echo form_input($gender);?><br />

        <label>Country</label><?php echo form_input($country);?><br />
                
        <label>Email</label><?php echo form_input($email);?><br />

        <label>Tel</label><?php echo form_input($tel);?><br />

        <label>Active</label><?php echo form_input($active);?><br />

        <label>Level</label><?php echo form_input($level);?><br />

        <label>Birthday</label><?php echo form_input($birthday);?><br />
        
        <label>&nbsp;</label> <input type="submit" name="ok" value="Insert" />
         <input type="reset" name="ok" value="Reset" /><br />
        
     </fieldset>
         </form>
</div>
    </div>
    <?php
        $this->load->view("Admin/Layout/bottom");//Bottom
    ?>
</body>
</html>
    