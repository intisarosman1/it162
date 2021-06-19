<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<div>	
    <fieldset>
        <legend>How many pieces are you requesting? </legend>
        <input type="radio" name="Interested_In[]" value="1" tabindex="40" /> 1 <br />
        <input type="radio" name="Interested_In[]" value="2" /> 2 <br />
        <input type="radio" name="Interested_In[]" value="3" /> 3 <br />
        <input type="radio" name="Interested_In[]" value="4" /> 4 <br />
        <input type="radio" name="Interested_In[]" value="5" /> 5 (maximum) <br />
    </fieldset>
</div>

<div>	
    <label>
    Please list the details of what you'd like me to create for you (reference subject, specific materials, style): <br /><textarea name="Commission details" cols="36" rows="4" placeholder="Commissions details (required)" tabindex="60"></textarea>
    </label>
</div>	

<div>	
    <label>
    Any other comments?<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to me!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="Submit" value="Submit" />
</div>
</form>
<!-- END HTML FORM -->

