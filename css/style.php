<style type="text/css">
.verror
{
	color:<?php echo(esc_attr(get_option('keep_in_contact_ebg'))); ?>;
	margin-left: 107px;
	display:none;
}
.vsuccess {
    border: 1px solid #CCCCCC;
    color: <?php echo(esc_attr(get_option('keep_in_contact_stbg'))); ?>;
    font-size: 12px;
    padding: 5px 10px;
	width:600px;
	font-weight:bolder;
	margin-bottom:15px;
	background-color:<?php echo(esc_attr(get_option('keep_in_contact_sbg'))); ?>;
	display:none;
}

/*Contact Form CSS*/
#contact-form {
 /* background: #f0f0f0;*/
  background: <?php echo(esc_attr(get_option('keep_in_contact_bg'))); ?>;
  border: 0px solid #ccc;
  padding: 15px;
  width: 600px;
}
#contact-form fieldset {
  border: none;
  position: relative;
  padding:0;margin:0;
}
#contact-form label {
  display: block;
  margin-bottom: 12px;
}
#contact-form input[type="text"] {
  border: 1px solid #ccc;
  font-size: 16px;
  padding: 7px;
  width: 392px;
  margin-left: 50px;
}
#contact-form textarea {
  border: 1px solid #ccc;
  vertical-align: top;
  width: 425px;
  height: 120px;
  margin-left: 31px;
}
#contact-form textarea:focus,
#contact-form input[type="text"]:focus {
  background: <?php echo(esc_attr(get_option('keep_in_contact_fbg'))); ?>;
}
#contact-form .required {
    color: <?php echo(esc_attr(get_option('keep_in_contact_tbg'))); ?>;
}
.bgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.bgmyshowcolor:hover
{
	cursor:pointer;
}
.fbgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.fbgmyshowcolor:hover
{
	cursor:pointer;
}
.tbgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.tbgmyshowcolor:hover
{
	cursor:pointer;
}
.ebgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.ebgmyshowcolor:hover
{
	cursor:pointer;
}
.sbgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.sbgmyshowcolor:hover
{
	cursor:pointer;
}
.stbgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.stbgmyshowcolor:hover
{
	cursor:pointer;
}
.bbgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.bbgmyshowcolor:hover
{
	cursor:pointer;
}
.btbgmyshowcolor{
	width:20px;height:15px;
	border:1px solid black;
	margin: 2px 0 0 5px;
	padding: 0 10px;
	
}
.btbgmyshowcolor:hover
{
	cursor:pointer;
}
#vbutton {
	position: relative;
	color: <?php echo(esc_attr(get_option('keep_in_contact_btbg'))); ?>;
	text-decoration: none;
	background: <?php echo(esc_attr(get_option('keep_in_contact_bbg'))); ?>;
	/*background-color: #09C;*/
	font-family: 'Yanone Kaffeesatz';
	font-weight: 600;
	font-size: 3em;
	padding: 4px;
	width: 160px;
	text-align: center;
	float: right;
	margin-right:55px;
}

#vbutton:active {
    top: 0.5px;
}
@font-face {
  font-family: 'Yanone Kaffeesatz';
  font-style: normal;
  font-weight: 700;
  src: local('Yanone Kaffeesatz Bold'), local('YanoneKaffeesatz-Bold'), url(http://themes.googleusercontent.com/static/fonts/yanonekaffeesatz/v5/We_iSDqttE3etzfdfhuPRWwXwFHHZlCwprwJOQ-Se7k.woff) format('woff');
}
</style>