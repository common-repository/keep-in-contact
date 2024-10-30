<?php error_reporting(0);
/**
 * Plugin Name: Keep IN Contact
 * Plugin URI: http://scriptsbundle.com
 * Description: Simple contact us form, visitors can contact with site admin.  
 * Version: 1.0
 * Author: Muhammad Jawad Arshad
 * Author URI: http://scriptsbundle.com
 * License: GPL2
 */
 
 // Run on plugin activation
 register_activation_hook( __FILE__, 'keep_in_contact_activation' );
 function keep_in_contact_activation()
 {
	update_option('keep_in_contact_email' , get_option('admin_email'));
	update_option('keep_in_contact_message' , 'Huurhhh ! your message has been sent successfully.');
	update_option('keep_in_contact_empty_message' , 'this field is empty.');
	update_option('keep_in_contact_invalid_message' , 'you have entered invalid email.');
	update_option('keep_in_contact_bg' , '#EFEFEF');
	update_option('keep_in_contact_fbg' , '#FEF2D8');
	update_option('keep_in_contact_tbg' , '#000');
	update_option('keep_in_contact_ebg' , '#900');
	update_option('keep_in_contact_sbg' , '#DFF2BF');
	update_option('keep_in_contact_stbg' , '#59911C');
	update_option('keep_in_contact_bbg' , '#DB5705');
	update_option('keep_in_contact_btbg' , '#FFFFFF');
 }
 
// Register sub-page in setting tab.
add_action('admin_menu', 'keep_in_contact_add_menu');
function keep_in_contact_add_menu()
{
add_submenu_page( 'options-general.php', 'Keep IN Contact', 'Keep IN Contact', 'manage_options' , 'Keep_in_contact_settings' , 'keep_in_contact_setting');
}
// Seeting Page
function keep_in_contact_setting()
{
	?>
<div class="wrap">
	<h2>Keep IN Contact Setting</h2>
    <small>Enter your email where you want to get users/vistors responses.</small>
    <h4>Integartion : Put this code [keepINcontact] as it in any post or page where you want to show contact us functionality.</h4>
    <?php
	if(@$_POST['submit']!="")
	{
		update_option('keep_in_contact_email' , $_POST['keep_in_contact_email']);
		update_option('keep_in_contact_message' , $_POST['keep_in_contact_message']);
		update_option('keep_in_contact_empty_message' , $_POST['keep_in_contact_empty_message']);
		update_option('keep_in_contact_invalid_message' , $_POST['keep_in_contact_invalid_message']);
		update_option('keep_in_contact_bg' , $_POST['keep_in_contact_bg']);
		update_option('keep_in_contact_fbg' , $_POST['keep_in_contact_fbg']);
		update_option('keep_in_contact_tbg' , $_POST['keep_in_contact_tbg']);
		update_option('keep_in_contact_ebg' , $_POST['keep_in_contact_ebg']);
		update_option('keep_in_contact_sbg' , $_POST['keep_in_contact_sbg']);
		update_option('keep_in_contact_stbg' , $_POST['keep_in_contact_stbg']);
		update_option('keep_in_contact_bbg' , $_POST['keep_in_contact_bbg']);
		update_option('keep_in_contact_btbg' , $_POST['keep_in_contact_btbg']);

	?>
    <div class="updated settings-error" id="setting-error-settings_updated"> 
    <p><strong>Settings saved.</strong></p></div>
    <?php
	}
	?>
    <form method="post" name="kform">
    <p>
    Email :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_email'))); ?>"
        id="keep_in_contact_email" name="keep_in_contact_email">
        </p>
    <p>
    Empty Filed Message :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_empty_message'))); ?>"
        id="keep_in_contact_email" name="keep_in_contact_empty_message">
    </p>
    <p>
    Invalid Email Message :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_invalid_message'))); ?>"
        id="keep_in_contact_email" name="keep_in_contact_invalid_message">
    </p>
    
    <p>
    Form Background Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_bg'))); ?>"
        id="keep_in_contact_bg" name="keep_in_contact_bg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_bg'))); ?>">
             <span class="bgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="bgmyshowcolor" style="background:#fff;" id="#fff"></span>
             <span class="bgmyshowcolor" style="background:#000;" id="#000"></span>
             <span class="bgmyshowcolor" style="background:#0000FF;" id="#0000FF"></span>
             <span class="bgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="bgmyshowcolor" style="background:#EFEFEF;" id="#EFEFEF"></span>
             <span class="bgmyshowcolor" style="background:#FF4500;" id="#FF4500"></span>
             &nbsp; or put your color code in field.

    </p>
    
    <p>
    Form Filed Text Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_tbg'))); ?>"
        id="keep_in_contact_tbg" name="keep_in_contact_tbg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_tbg'))); ?>">
             <span class="tbgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="tbgmyshowcolor" style="background:#fff;" id="#fff"></span>
             <span class="tbgmyshowcolor" style="background:#000;" id="#000"></span>
             <span class="tbgmyshowcolor" style="background:#0000FF;" id="#0000FF"></span>
             <span class="tbgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="tbgmyshowcolor" style="background:#800000;" id="#800000"></span>
             <span class="tbgmyshowcolor" style="background:#FF4500;" id="#FF4500"></span>
             &nbsp; or put your color code in field.

    </p>
    
    
    <p>
    Filed Hover Background Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_fbg'))); ?>"
        id="keep_in_contact_fbg" name="keep_in_contact_fbg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_fbg'))); ?>">
             <span class="fbgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="fbgmyshowcolor" style="background:#F4EDB6;" id="#F4EDB6"></span>
             <span class="fbgmyshowcolor" style="background:#FEF2D8;" id="#FEF2D8"></span>
             <span class="fbgmyshowcolor" style="background:#0000FF;" id="#0000FF"></span>
             <span class="fbgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="fbgmyshowcolor" style="background:#800000;" id="#800000"></span>
             <span class="fbgmyshowcolor" style="background:#FF4500;" id="#FF4500"></span>
            &nbsp; or put your color code in field.

    </p>
    Filed Error Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_ebg'))); ?>"
        id="keep_in_contact_ebg" name="keep_in_contact_ebg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_ebg'))); ?>">
             <span class="ebgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="ebgmyshowcolor" style="background:#F00;" id="#F00"></span>
             <span class="ebgmyshowcolor" style="background:#900;" id="#900"></span>
             <span class="ebgmyshowcolor" style="background:#0000FF;" id="#0000FF"></span>
             <span class="ebgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="ebgmyshowcolor" style="background:#000;" id="#000"></span>
             <span class="ebgmyshowcolor" style="background:#FF4500;" id="#FF4500"></span>
            &nbsp; or put your color code in field.

    </p>

    </p>
    Success Message Container Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_sbg'))); ?>"
        id="keep_in_contact_sbg" name="keep_in_contact_sbg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_sbg'))); ?>">
             <span class="sbgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="sbgmyshowcolor" style="background:#6F0;" id="#6F0"></span>
             <span class="sbgmyshowcolor" style="background:#060;" id="#060"></span>
             <span class="sbgmyshowcolor" style="background:#0000FF;" id="#0000FF"></span>
             <span class="sbgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="sbgmyshowcolor" style="background:#DFF2BF;" id="#DFF2BF"></span>
             <span class="sbgmyshowcolor" style="background:#FF4500;" id="#FF4500"></span>
            &nbsp; or put your color code in field.

    </p>

    </p>
    Success Message Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_stbg'))); ?>"
        id="keep_in_contact_stbg" name="keep_in_contact_stbg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_stbg'))); ?>">
             <span class="stbgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="stbgmyshowcolor" style="background:#fff;" id="#fff"></span>
             <span class="stbgmyshowcolor" style="background:#060;" id="#060"></span>
             <span class="stbgmyshowcolor" style="background:#59911C;" id="#59911C"></span>
             <span class="stbgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="stbgmyshowcolor" style="background:#000;" id="#000"></span>
             <span class="stbgmyshowcolor" style="background:#FF4500;" id="#FF4500"></span>
            &nbsp; or put your color code in field.

    </p>

    </p>
    Button Background Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_bbg'))); ?>"
        id="keep_in_contact_bbg" name="keep_in_contact_bbg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_bbg'))); ?>">
             <span class="bbgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="bbgmyshowcolor" style="background:#fff;" id="#fff"></span>
             <span class="bbgmyshowcolor" style="background:#060;" id="#060"></span>
             <span class="bbgmyshowcolor" style="background:#59911C;" id="#59911C"></span>
             <span class="bbgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="bbgmyshowcolor" style="background:#000;" id="#000"></span>
             <span class="bbgmyshowcolor" style="background:#DB5705;" id="#DB5705"></span>
            &nbsp; or put your color code in field.

    </p>


    </p>
    Button Text Color :
    <br />
       <input type="text" class="regular-text" value="<?php echo(esc_attr(get_option('keep_in_contact_btbg'))); ?>"
        id="keep_in_contact_btbg" name="keep_in_contact_btbg" style="background:<?php echo(esc_attr(get_option('keep_in_contact_btbg'))); ?>">
             <span class="btbgmyshowcolor" style="background:#999;" id="#999"></span>
             <span class="btbgmyshowcolor" style="background:#fff;" id="#fff"></span>
             <span class="btbgmyshowcolor" style="background:#060;" id="#060"></span>
             <span class="btbgmyshowcolor" style="background:#59911C;" id="#59911C"></span>
             <span class="btbgmyshowcolor" style="background:#1E90FF;" id="#1E90FF"></span>
             <span class="btbgmyshowcolor" style="background:#000;" id="#000"></span>
             <span class="btbgmyshowcolor" style="background:#DB5705;" id="#DB5705"></span>
            &nbsp; or put your color code in field.

    </p>

    <p>
    Success Message :
    <br/>
       <textarea id="keep_in_contact_message" name="keep_in_contact_message" cols="38" rows="5"><?php echo(esc_attr(get_option('keep_in_contact_message'))); ?></textarea>
      </p>
        <p class="submit">
            <input type="submit" value="Update Changes" class="button button-primary" id="submit" name="submit">
      	</p>
  </form>
</div>
    <?php		
}
 

// short code function for contact us page that will display on front-end/user-side
add_shortcode( 'keepINcontact', 'keep_in_contact_front_side' ); 
function keep_in_contact_front_side(){ 
	?>
<div class="vsuccess" id="scussecc_div"><?php echo(esc_attr(get_option('keep_in_contact_message'))); ?></div>
<form action="" name="vform" method="post" id="contact-form">
  <fieldset>
    <label for="vname"><span class="required">Name *</span>
    	<input type="text" name="vname" id="vname" onfocus="return hideError(this.id);" />
        <br />
        <small class="verror"  id="vname_err"><?php echo(esc_attr(get_option('keep_in_contact_empty_message'))); ?></small>
    </label>
    <label for="vemail"><span class="required">Email *</span>
   		 <input type="text" name="vemail" id="vemail" style="margin-left:52px;" onfocus="return hideError(this.id);" />
         <br />
         <small class="verror"  id="vemail_err"><?php echo(esc_attr(get_option('keep_in_contact_empty_message'))); ?></small>
    </label>    
    <label for="vsubject"><span class="required">Subject *</span>
   		 <input type="text" name="vsubject" id="vsubject" style="margin-left:39px;" onfocus="return hideError(this.id);" />
         <br />
         <small class="verror"  id="vsubject_err"><?php echo(esc_attr(get_option('keep_in_contact_empty_message'))); ?></small>
    </label>    
  </fieldset>
  <fieldset>
    <label for="vmessage"><span class="required">Message *</span>
    	<textarea name="vmessage" id="vmessage" onfocus="return hideError(this.id);"></textarea>
        <br />
        <small class="verror"  id="vmessage_err"><?php echo(esc_attr(get_option('keep_in_contact_empty_message'))); ?></small>
        <input type="hidden" value="<?php echo admin_url('admin-ajax.php'); ?>" id="ajax_url" />
        <input type="hidden" value="<?php echo(esc_attr(get_option('keep_in_contact_invalid_message'))); ?>" id="invalid_message" />
    </label>
  </fieldset>
  <fieldset>
    <input type="button" value="Sent it!" id="vbutton" name="vbutton" onClick="return vValidator();">
  </fieldset>
</form>
    <?php
}

// For Admin scripts
add_action( 'admin_print_scripts', 'keep_in_contact_admin_scripts' );
function keep_in_contact_admin_scripts(){
	if(@$_GET['page']=='Keep_in_contact_settings')
	{
		include('css/style.php');
		wp_register_script( 'vjs', plugins_url('js/v_validation.js' , __FILE__) , array('jquery'));
		wp_enqueue_script( 'vjs' );

	}
}

// Include style and js script for userside/front-end
add_action( 'wp_enqueue_scripts', 'keep_in_contact_users_scripts' );
function keep_in_contact_users_scripts() {
	//wp_enqueue_style( 'v-name', plugins_url('css/style.css' , __FILE__));
	include('css/style.php');
	wp_register_script( 'vjs', plugins_url('js/v_validation.js' , __FILE__) , array('jquery'));
	wp_enqueue_script( 'vjs' );
}

// AJAX Listener 
add_action( 'wp_ajax_kic_message_processing', 'keep_in_contact_ajax_listener' );
add_action( 'wp_ajax_nopriv_kic_message_processing', 'keep_in_contact_ajax_listener' );
function keep_in_contact_ajax_listener()
{
if($_SERVER['HTTP_HOST']=="localhost")
{
	echo "Succes";
	die();
}
else
{
	$EmailFrom = $_POST['email']; 
	$EmailTo = esc_attr(get_option('keep_in_contact_email')); // Your email address here
	$Subject = $_POST['subject'];;
	$Name = Trim(stripslashes($_POST['name'])); 
	$Email = Trim(stripslashes($_POST['email'])); 
	$Message = Trim(stripslashes($_POST['message']));
	$ip		=	$_SERVER['REMOTE_ADDR'];
	$browser = $_SERVER['HTTP_USER_AGENT']; 
	$time	=	date('M d , Y');
	
	// validation
	$validationOK=true;
	if (!$validationOK) {
	  echo "Error";
	  exit;
	}
	
	// prepare email body text
	$Body = "";
	$Body .= "<b>Name: </b>";
	$Body .= $Name;
	$Body .= "<br />";
	$Body .= "<b>Email: </b>";
	$Body .= $Email;
	$Body .= "<br />";
	$Body .= "<b>Subject: </b>";
	$Body .= $Subject;
	$Body .= "<br />";
	$Body .= "<b>Date: </b>";
	$Body .= $time;
	$Body .= "<br />";
	$Body .= "<b>IP Address: </b>";
	$Body .= $ip;
	$Body .= "<br />";
	$Body .= "<b>Browser: </b>";
	$Body .= $browser;
	$Body .= "<br />";
	$Body .= "<br />";
	$Body .= "<b>Message: </b>";
	$Body .= "<br />";
	$Body .= $Message;
	$Body .= "<br />";
	$Body .= "<br />";
	$wp_site_url	=	site_url();
	$Body .= "<small>This Message send through $wp_site_url</small>";
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: <$EmailFrom>" . "\r\n";
	// send email 
	$success = mail($EmailTo, $Subject, $Body, $headers);
	
	// redirect to success page 
	if ($success){
	  echo "Succes";
	  die();
	  
	}
	else{
	  echo "Error";
	  die();
	}
}
}

 
//Run on plugin Deactivation
 register_deactivation_hook( __FILE__, 'keep_in_contact_deactivation' );
 function keep_in_contact_deactivation()
 {
	delete_option('keep_in_contact_email');
	delete_option('keep_in_contact_message');
	delete_option('keep_in_contact_empty_message');
	delete_option('keep_in_contact_invalid_message');
	delete_option('keep_in_contact_bg');
	delete_option('keep_in_contact_fbg');
	delete_option('keep_in_contact_tbg');
	delete_option('keep_in_contact_ebg');
	delete_option('keep_in_contact_sbg');
	delete_option('keep_in_contact_stbg');
	delete_option('keep_in_contact_bbg');
	delete_option('keep_in_contact_btbg');
 }

 
 ?>