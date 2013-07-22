<div class="caption">
	<div class="row">
    <div class="span9">
        <div class="row">
        	<div class="span5">
            	<h4 id="contact">Contact Form</h4>
            	<?php if(isset($_SESSION['send_msg'])){echo $_SESSION['send_msg'];unset($_SESSION['send_msg']);} ?>
            	<form action="action/send_mail.php" method="post">
                            <label>Name<span class="text-error">*</span> <span id="error_contactName" class="error_alert"></span></label>
                            <input type="text" id="contactName" name="contactName">
                            
                            <label>Email<span class="text-error">*</span><span id="error_contactEmail" class="error_alert"></span></label>
                            <input type="text" id="contactEmail" name="contactEmail">                       
                            <label>Message<span class="text-error">*</span><span id="error_msg" class="error_alert"></span></label>
                            <textarea name="msg" id="msg" cols="10" style="width:350px;" rows="3"></textarea>
                            <label>Security Code<span class="text-error">*</span><span id="error_security" class="error_alert"></span></label>
                            <img class="img-polaroid" style="max-height:30px;max-width:130px;" src="captcha/CaptchaSecurityImages.php?width=130&amp;height=30&amp;characters=5" alt="webbest security code" />
                            <input style="height:30px;margin-bottom:0;" type="text" id="captchaStr" name="captchaStr" class="captchaStr"><br />
                            <?php //echo $_SESSION['security_code']; ?>
                            
                            <br />
                            <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
            </div>
            <div class="span4" style="margin-left:3px;">
            			<h4 id="contact">Contact Information</h4>
                       <table class="table" border="0">
                       			<tbody>
                       			<tr>
                                	<td width="38"><img src="images/location.png" alt="phone"></td>
                                    <td valign="middle">Phnom Penh, Cambodia</td>
                                </tr>
                           		<tr>
                                	<td style="border-top:1px solid #CCC;">&nbsp;</td>
                                    <td style="border-top:1px solid #CCC;">(+855)  98 449 207</td>
                                </tr>
                                <tr>
                                	<td><img src="images/telephone.png" alt="phone"></td>
                                    <td valign="middle">(+855) 77 377 067</td>
                                </tr>
                                <tr>
                                	<td>&nbsp;</td>
                                    <td>(+855) 97 913 9303</td>
                                </tr>
                                <tr>
                                	<td style="border-top:1px solid #CCC;">&nbsp;</td>
                                    <td style="border-top:1px solid #CCC;">info@webbestgroup.com</td>
                                </tr>
                                <tr>
                                	<td><img src="images/email.png" alt="phone"></td>
                                    <td valign="middle">sangha.eak@webbestgroup.com</td>
                                </tr>
                                <tr>
                                	<td>&nbsp;</td>
                                    <td>sokly.phal@webbestgroup.com</td>
                                </tr>
                                
                    	</tbody></table>
            </div>
        </div>
    </div>
                    <div class="inner">
                 	<div class="wrap_right_content">
                    
                    </div>
                    <div class="wrap_left_content">
                    	
                      	
                        
                        
                    </div>
                </div>
                </div>
       