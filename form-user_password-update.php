<?php 

    include 'include_header.php';

    if($_GET['user-email']){
        $user_email = strip_tags($_GET['user-email']);
    } else {
        $_SESSION['message'] = 'There is a problem!';
        header('Location: form-user_login.php'); 
    }

?>

<form action="handler-user_password-update.php?user-email=<?=$user_email?>" method="post">
        <div>
            <label for="input_password">Password: </label>
            <input type="password" id="input_password" name="data_password" required>
        </div>
        <div>
            <input type="submit" id="form_submit" value="Change Password">
        </div>
    </form>

<?php include 'include_footer.php'; ?>