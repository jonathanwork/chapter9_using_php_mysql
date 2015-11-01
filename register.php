<?php 
include('includes/header.html');
?> 

<?php

if($_POST['REQUEST_METHOD'] == 'POST') {
    
    $error = array(); 
    
    if(empty( $_POST['first_name'] ) ) {
        $error[] = 'you need your first name here';
        
    } else {
        $fn = trim($_POST['first_name']); 
    }
    if(empty( $_POST['last_name'] ) ) {
        $error[] = 'you need your last name here';
    } else {
        $ln = trim($_POST['last_name']);
    }
    if(empty( $_POST['email'] ) ) {
        $error[] = 'you need an email';
         
    } else {
        $e = trim($_POST['email']);
    }
    if(empty( $_POST['PASS1'] ) ) {
        if($POST['PASS1'] != $POST['PASS2']) {
            $error[] = 'yor password did not match with the first one. ';
        }
        else {
            $p = trim($_POST['PASS1']);
        }
    }
    
    if(empty($error)) {
        
    } else {
        echo "<div class=\"errors\">" . $error . "</div>"; 
    }
    
    
}


?> 

<form>
    <input type="text" name="first_name" maxlength="40" value="<?php if(isset('first_name') )echo $first_name ?>" />
    <input type="text" name="last_name" maxlength="40" value="<?php if(isset('last_name') )echo $last_name ?>" />
    <input type="text" name="email" value="<?php if(isset('last_name') )echo $last_name ?>" />
    <input type="password" name="pass1" value="<?php if(isset('pass1') )echo $pass1 ?>" />
    
    
    <input type="submit" value="Submit"/>
</form>

<?

include('includes/footer.html');
?>
