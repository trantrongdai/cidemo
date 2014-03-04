<?php
    //--- Giu gia tri cua form
    $full_name = array(
                        "name"  => "full_name",
                        "id"    => "full_name",
                        "size"  => "30",
                        "value" => set_value("full_name")
                    );
    $username = array(
                        'name'        => 'username',
                        'id'          => 'fname',
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
    $address = array(
                        'name'        => 'address',
                        'id'          => 'address',
                        'size'        => '30',
                        'value'       => set_value('address'),
                    );
    $phone = array(
                        'name'        => 'phone',
                        'id'          => 'phone',
                        'size'        => '30',
                        'value'       => set_value('phone'),
                    ); 
    $email = array(
                        'name'        => 'email',
                        'id'          => 'email',
                        'size'        => '30',
                        'value'       => set_value('email'),
                    );                
?>

<div id="box_entry">
  	  <h2><span>Thêm Category</span></h2>
      <div class="error">
        <ul>
            <?php
                echo validation_errors('<li>','</li>');
                if($error!="" && !empty($error))
                    echo $error;
            ?>
        </ul>
      </div>
     <form name="frmEdit" id="frmEdit" action="" method="post" enctype="multipart-formdata">
        <fieldset>
        <legend>Member Register</legend>
	
        <label>Full name</label><?php echo form_input($full_name);?><br />
        
        <label>Username</label><?php echo form_input($username);?><br />

        <label>Password</label><?php echo form_password($password);?><br />

        <label>Re-Password</label><?php echo form_password($repassword);?><br />
        
        <label>Level</label>
        	<select name="level">
                    <option value="1"> Member </option>
                    <option value="2">Administrator</option>
                </select><br />
                
        <label>Email</label><?php echo form_input($email);?><br />

        <label>Address</label><?php echo form_input($address);?><br />

        <label>Phone</label><?php echo form_input($phone);?><br />
        
        <label>Gender</label>
            Male<input name="gender" id="male" value="1" type="radio" />
            Female<input name="gender" id="female" value="2" type="radio" />
        <br/>
        
        <label>&nbsp;</label> <input type="submit" name="ok" value="Register" /><br />
        
        </fieldset>
    </form>
</div>