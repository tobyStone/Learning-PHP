<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://w3.org/1999/xhmtl" xml:lang="en" lang="en">
    <head>
        <title>Membership Form</title>
        <link rel="stylesheet" type = "text/css" href = "common.css"/>
    </head>
    <body>
        <h1>Membership Form</h1>
        <p>Thank you for choosing to join The Widget Club. To register, please fill
             in your details below and click Send Details.</p>

        <form action="process_registration.php" method ="post">
            <div style="width: 30em;">
            
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" value="" />

            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" value="" />

            <label for="password1">Choose a password</label>
            <input type="password" name="password1" id="password1" value="" />

            <label for="password2">Retype password</label>
            <input type="password" name="password2" id="password2" value="" />

            <label for="genderMale">Are you Male...</label>
            <input type="radio" name="gender" id="genderMale" value="M" />

            <label for="genderFemale">... or female?</label>
            <input type="radio" name="gender" id="genderFemale" value="F" />

            <select name="favouriteWidget" id="favouriteWidget" size="1">
                <option value="superWidget">The SuperWidget</option>
                <option value="megaWidget">The MegaWidget</option>
                <option value="wonderWidget">The WonderWidget</option>
            </select>

                     

            <label for="newsletter">Do you want to receive our newsletter?</label>
            <input type="checkbox" name="newsletter" id="newsletter" value="yes" />

            <label for="comments">Any comments?</label>
            <textarea name="comments" id="comments" rows="4" cols="50"></textarea>
            <div style="clear: both;">
                <input type="submit" name="submitButton" id="submitButton" 
                value="Send Details"/>

                <input type="reset" name="resetButton" id="resetButton" 
                value="Reset Form" style="margin-right: 20px;"/>
                </div>
            </div>
        </form>




    </body>
</html>