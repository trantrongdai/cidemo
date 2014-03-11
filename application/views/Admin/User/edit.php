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
        
        
        <label>&nbsp;</label> <input type="submit" name="ok" value="Update" /><br />

        </fieldset>
    </form>
</div>