	function vValidator()
	{
		jQuery(function($){
		$("#vname_err").hide();
		$("#vemail_err").hide();
		$("#scussecc_div").hide();
		$("#vmessage_err").hide();
		var vname		=	 $("#vname").val();		
		var vemail		=	 $("#vemail").val();		
		var vmessage	=	 $("#vmessage").val();
		var ajax_url	=	 $("#ajax_url").val();
		var invalid_message	=	 $("#invalid_message").val();
		var vsubject	=	 $("#vsubject").val();
		
		var error	=	false;
		if(vname=='')
		{
			error	=	true;
			$("#vname_err").show();
		}
		if(vemail=='')
		{
			error	=	true;
			$("#vemail_err").show();
		}
		else
		{
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			if (reg.test(vemail) == false) 
			{
				error	=	true;
				$("#vemail_err").show().html(invalid_message);
			}
		}
		if(vsubject=='')
		{
			error	=	true;
			$("#vsubject_err").show();
		}
		if(vmessage=='')
		{
			error	=	true;
			$("#vmessage_err").show();
		}
		if(error)
		{
			//alert("Correct all error before proceed");
		}
		else
		{
			$("#vname_err").hide();
			$("#vemail_err").hide();
			$("#vmessage_err").hide();
			$("#vbutton").val('Sending...');
			$("#vbutton").attr('disabled','disabled');
			$.post( ajax_url , {action : 'kic_message_processing' ,name: vname , email: vemail , subject : vsubject , message : vmessage })
			  .done(function( data ) {
				  if(data!="")
				  {
					$("#scussecc_div").show();
					vform.reset();
					$("html, body").animate({scrollTop: $('#scussecc_div').offset().top }, 1500);
					$("#vbutton").val('Send it!');
					$("#vbutton").removeAttr('disabled');
				  }
			  });
			  
		}
	});
}
function hideError(id)
{
	jQuery(function($){
	$("#" + id  + "_err").hide();
	});
}
jQuery(function($){
	$(".bgmyshowcolor").click(function()
	{
		$("#keep_in_contact_bg").val(this.id);
		$("#keep_in_contact_bg").css('background' , this.id);
	});
	$(".fbgmyshowcolor").click(function()
	{
		$("#keep_in_contact_fbg").val(this.id);
		$("#keep_in_contact_fbg").css('background' , this.id);
	});
	$(".tbgmyshowcolor").click(function()
	{
		$("#keep_in_contact_tbg").val(this.id);
		$("#keep_in_contact_tbg").css('background' , this.id);
	});
	$(".ebgmyshowcolor").click(function()
	{
		$("#keep_in_contact_ebg").val(this.id);
		$("#keep_in_contact_ebg").css('background' , this.id);
	});
	$(".sbgmyshowcolor").click(function()
	{
		$("#keep_in_contact_sbg").val(this.id);
		$("#keep_in_contact_sbg").css('background' , this.id);
	});
	$(".stbgmyshowcolor").click(function()
	{
		$("#keep_in_contact_stbg").val(this.id);
		$("#keep_in_contact_stbg").css('background' , this.id);
	});
	$(".bbgmyshowcolor").click(function()
	{
		$("#keep_in_contact_bbg").val(this.id);
		$("#keep_in_contact_bbg").css('background' , this.id);
	});
	$(".btbgmyshowcolor").click(function()
	{
		$("#keep_in_contact_btbg").val(this.id);
		$("#keep_in_contact_btbg").css('background' , this.id);
	});
});

