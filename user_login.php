<?php

if($_POST['REQUEST_METHOD'] == 'post') {
    
    $error = []; 
    if(!empty( $_POST['first_name']) ) {
        $fn = $_POST['first_name']; 
    } else {
        $error = 'you need your first name here'; 
    }
    if(!empty( $_POST['last_name']) ) {
        $ln = $_POST['last_name']; 
    } else {
        $error = 'you need your last name here'; 
    }
    if(!empty( $_POST['email'] ) ) {
        $e = $_POST['email']; 
    } else {
        $error = 'you need an email';
    }
    if(!empty( $_POST['PASS1'] )) {
        if($POST['PASS1'] == $POST['PASS2']) {
        
            echo 'pass matched'; 
        }
        else {
            $error = 'you password did not match';
        }
    }
    
    if(empty($error)) {
        
    } else {
        echo "<div class=\"errors\">" . $errors . "</div>"; 
    }
    
    
}


?> 

<form>
    <input type="text" name="first_name" value="<?php if(isset('first_name') echo $first_name ?>" />
    <input type="text" name="last_name" value="<?php if(isset('last_name') echo $last_name ?>" />
    <input type="text" name="email" value="<?php if(isset('last_name') echo $last_name ?>" />
    <input type="password" name="pass1" value="<?php if(isset('pass1') echo $pass1 ?>" />
    
    
    <input type="submit" value="Submit"/>
</form>