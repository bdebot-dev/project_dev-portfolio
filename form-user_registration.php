<?php include 'include_header.php'; ?>

    <form name="form_registration" action="handler-user_registration.php" method="post">
        <div>
            <label for="input_username" class="">Username:</label>
            <input type="text" id="input_username" name="data_username" minlength="3" title="Must contain at least 3 or more characters." spellcheck="false" required>
        </div>
        <div>
            <label for="input_email" class="">Email:</label>
            <input type="email" id="input_email" name="data_email" spellcheck="false" required>
        </div>
        <div>
            <label for="input_password" class="">Password:</label>
            <input type="password" id="input_password" name="data_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters." required>
            <input type="checkbox" id="input_show-password"> <span>Show Password</span> <span id="warning_capsLock">WARNING! Caps lock is ON.</span> 
        </div>
        <div>
            <label for="input_pswd-confirmation" class="">Confirm Password:</label>
            <input type="password"  id="input_pswd-confirmation" name="data_pswd-confirmation" required>
            <input type="checkbox" id="input_show-confirmation"> <span>Show Confirmation</span> 
        </div>
        <div>
            <label for="input_captcha-checker">Captcha:</label>
            <input type="text" id="input_captcha-checker" name="data_captcha-checker" maxlength="5" autocomplete="off" required> &nbsp; <img src="include_captcha-generator.php" alt="captcha">
        </div>
        <div>
        <div>
            <input type="submit" id="form_submit" value="Sign up">
        </div>
    </form>

    <div id="message-validation">
        <strong>Password must contain the following:</strong>
        <p id="verify-empty" class="invalid-fields">Must not <b>be empty</b></p>
        <p id="verify-letter" class="invalid-fields">A <b>lowercase</b> letter</p>
        <p id="verify-capital" class="invalid-fields">A <b>capital (uppercase)</b> letter</p>
        <p id="verify-number" class="invalid-fields">A <b>number</b></p>
        <p id="verify-length" class="invalid-fields">Minimum <b>8 characters</b></p>
        <p id="verify-match" class="invalid-fields">Passwords must <b>match</b></p>
    </div>

    <div>
        
            <button><a href="index.php">Back</a></button>
        
    </div>

    <script src="form-user_password-visibility.js"></script>
    <script src="form-user_password-validation.js"></script>
    <script src="form-user_detect-capslock.js"></script>

<?php include 'include_footer.php'; ?>