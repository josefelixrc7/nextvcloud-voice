
<span style="visibility:hidden;display:none;" id="debugbottomspan"></span>

<span id="PauseCodeButtons">
	<font class="body_text">
		<span id="PauseCodeLinkSpan"></span> <br />
	</font>
</span>

<span id="VolumeControlSpan">
	<span id="VolumeUpSpan"><img src="./images/<?php echo _QXZ("vdc_volume_up_off.gif"); ?>" border="0" /></span><br />
	<span id="VolumeDownSpan"><img src="./images/<?php echo _QXZ("vdc_volume_down_off.gif"); ?>" border="0" /></span>
</span>
<br>
<span id="AgentStatusSpan">
	<font class="body_text">
		<?php echo _QXZ("Your Status:"); ?> <span id="AgentStatusStatus"></span> <br />
		<?php echo _QXZ("Calls Dialing:"); ?> <span id="AgentStatusDiaLs"></span>
	</font>
</span>

<span id="AgentMuteANDPreseTDiaL"><font class="body_text">
	<?php
	if ($PreseT_DiaL_LinKs)
		{
		echo "<a href=\"#\" onclick=\"DtMf_PreSet_a_DiaL('NO','YES');return false;\"><font class=\"body_tiny\">"._QXZ("D1 - DIAL")."</font></a>\n";
        echo " &nbsp; \n";
		echo "<a href=\"#\" onclick=\"DtMf_PreSet_b_DiaL('NO','YES');return false;\"><font class=\"body_tiny\">"._QXZ("D2 - DIAL")."</font></a>\n";
		}
    else {echo "<br />\n";}
	?>
    <br /><br /> &nbsp; <br />
</font></span>

<span id="callsinqueuedisplay">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="5px" rowspan="2">&nbsp;</td>
			<td align="center">
				<font class="body_text"><?php echo _QXZ("Calls In Queue:"); ?> &nbsp;</font>
			</td>
		</tr>
		<tr>
			<td align="center">
				<span id="callsinqueuelist">&nbsp;</span>
			</td>
		</tr>
	</table>
</span>

<font id="callsinqueuelink">
<?php 
if ($view_calls_in_queue > 0)
	{ 
	if ($view_calls_in_queue_launch > 0) 
		{echo "<a href=\"#\" onclick=\"show_calls_in_queue('HIDE');\">"._QXZ("Hide Calls In Queue")."</a>\n";}
	else 
		{echo "<a href=\"#\" onclick=\"show_calls_in_queue('SHOW');\">"._QXZ("Show Calls In Queue")."</a>\n";}
	}
?>
</span></font>

<span id="CallbacksButtons">
	<font class="body_text">
		<span id="CBstatusSpan"><?php echo _QXZ("X ACTIVE CALLBACKS"); ?></span> <br />
	</font>
</span>

<span id="OtherTabCommentsSpan">
<?php 
	if ( ($comments_all_tabs == 'ENABLED') and ($label_comments != '---HIDE---') )
		{
		$zi++;
		echo "<table cellspacing=4 cellpadding=0><tr><td align=\"right\"><font class=\"body_text\">\n";
		echo "$label_comments: <br><span id='otherviewcommentsdisplay'><input type='button' id='OtherViewCommentButton' onClick=\"ViewComments('ON','','','YES')\" value='-"._QXZ("History")."-'/></span>
		</font></td><td align=\"left\"><font class=\"body_text\">";
		if ( ($multi_line_comments) )
			{echo "<textarea name=\"other_tab_comments\" id=\"other_tab_comments\" rows=\"2\" cols=\"65\" class=\"cust_form_text\" value=\"\"></textarea>\n";}
		else
			{echo "<input type=\"text\" size=\"65\" name=\"other_tab_comments\" id=\"other_tab_comments\" maxlength=\"255\" class=\"cust_form\" value=\"\" />\n";}
		echo "</td></tr></table>\n";
		}
	else
		{
        echo "<input type=\"hidden\" name=\"other_tab_comments\" id=\"other_tab_comments\" value=\"\" />\n";
		}
?>
</span>

<span id="AgentViewSpan">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="5px" rowspan="2">&nbsp;</td>
			<td align="center">
				<font class="body_text"><?php echo _QXZ("Other Agents Status:"); ?> &nbsp; </font>
			</td>
		</tr>
		<tr>
			<td align="center"><span id="AgentViewStatus">&nbsp;</span></td>
		</tr>
	</table>
</span>

<?php
$zi++;
if ($webphone_location == 'bar')
	{
	echo "<span id=\"webphoneSpan\"><span id=\"webphonecontent\" style=\"overflow:hidden;\">$webphone_content</span></span>\n";
	}
else
	{
    echo "<span id=\"webphoneSpan\"><table cellpadding=\"$webphone_pad\" cellspacing=\"0\" border=\"0\"><tr><td width=\"5px\" rowspan=\"2\">&nbsp;</td><td align=\"center\"><font class=\"body_text\">
    "._QXZ("Web Phone").": &nbsp; </font></td></tr><tr><td align=\"center\"><span id=\"webphonecontent\">$webphone_content</span></td></tr></table></span>\n";
	}
?>


<?php 
if ($is_webphone=='Y')
	{ 
	?>

    <span id="webphoneLinkSpan"><table cellpadding="0" cellspacing="0" border="0" width="120px"><tr><td align="right"><font class="body_small"><span id="webphoneLink"> &nbsp; <a href="#" onclick="webphoneOpen('webphoneSpan','close');return false;"><?php echo _QXZ("WebPhone View -"); ?></a></span></font></td></tr></table></span>

	<?php 
	}
?>

<font class="body_small"><span id="dialableleadsspan">
<?php 
if ($agent_display_dialable_leads > 0)
	{ 
    echo _QXZ("Dialable Leads:")." &nbsp;\n";
	}
?>
</span></font>

<span id="AgentMuteSpan"></span>


<!-- Panels tabs -->

<span id="ScriptPanel" class="panel_script">
	<?php
	if ($webphone_location == 'bar')
        {echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
    <table border="0" bgcolor="<?php echo $SCRIPT_COLOR ?>" width="<?php echo $SSwidth ?>px" height="<?php echo $SSheight ?>px"><tr><td align="left" valign="top"><font class="sb_text"><div class="noscroll_script" id="ScriptContents"><?php echo _QXZ("AGENT SCRIPT"); ?></div></font></td></tr></table>

	<span id="ScriptRefresH">
		<a class="btn btn-sm btn-outline-secondary" href="#" onclick="RefresHScript('','YES')"><font class="body_small"><?php echo _QXZ("refresh"); ?></font></a>
	</span>
</span>

<span id="Script2Panel" class="panel_script2">
	<?php
	if ($webphone_location == 'bar')
        {echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
    <table border="0" bgcolor="<?php echo $SCRIPT_COLOR ?>" width="<?php echo $SSwidth ?>px" height="<?php echo $SSheight ?>px"><tr><td align="left" valign="top"><font class="sb_text"><div class="noscroll_script" id="Script2Contents"><?php echo _QXZ("AGENT SCRIPT 2"); ?></div></font></td></tr></table>

	<span id="Script2RefresH">
		<a class="btn btn-sm btn-outline-secondary" href="#" onclick="RefresHScript2('','YES')"><font class="body_small"><?php echo _QXZ("refresh"); ?></font></a>
	</span>
</span>


<span id="FormPanel" class="panel_form">
	<?php
	if ($webphone_location == 'bar')
        {echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
    <table border="0" bgcolor="<?php echo $SCRIPT_COLOR ?>" width="<?php echo $SSwidth ?>px" height="<?php echo $SSheight ?>px"><tr><td align="left" valign="top"><font class="sb_text"><div class="noscroll_script" id="FormContents"><iframe src="./vdc_form_display.php?lead_id=&list_id=&stage=WELCOME" style="background-color:transparent;" scrolling="auto" frameborder="0" allowtransparency="true" id="vcFormIFrame" name="vcFormIFrame" width="<?php echo $SDwidth ?>px" height="<?php echo $SSheight ?>px" STYLE="z-index:<?php $zi++; echo $zi ?>"> </iframe></div></font></td></tr></table>

	<span id="FormRefresH">
		<a class="btn btn-sm btn-outline-secondary" href="#" onclick="FormContentsLoad('YES')"><font class="body_small"><?php echo _QXZ("reset form"); ?></font></a>
	</span>

</span>

<span id="EmailPanel" class="panel_email">
	<?php
	if ($webphone_location == 'bar')
        {echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
    <table border="0" bgcolor="<?php echo $SCRIPT_COLOR ?>" width="<?php echo $SSwidth ?>px" height="<?php echo $SSheight ?>px"><tr><td align="left" valign="top"><font class="sb_text"><div class="noscroll_script" id="EmailContents"><iframe src="./vdc_email_display.php?lead_id=&list_id=&stage=WELCOME" style="background-color:transparent;" scrolling="auto" frameborder="0" allowtransparency="true" id="vcEmailIFrame" name="vcEmailIFrame" width="<?php echo $SDwidth ?>px" height="<?php echo $SSheight ?>px" STYLE="z-index:<?php $zi++; echo $zi ?>"> </iframe></div></font></td></tr></table>

	<span id="EmailRefresH">
		<a class="btn btn-sm btn-outline-secondary" href="#" onclick="EmailContentsLoad('YES')"><font class="body_small"><?php echo _QXZ("refresh"); ?></font></a>
	</span>

</span>

<span id="CustomerChatPanel" class="panel_chat_customer">
	<?php
	if ($webphone_location == 'bar')
        {echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
    <table border="0" bgcolor="<?php echo $SCRIPT_COLOR ?>" width="<?php echo $SSwidth ?>px" height="<?php echo $SSheight ?>px"><tr><td align="left" valign="top"><font class="sb_text"><div class="noscroll_script" id="ChatContents"><iframe src="./vdc_chat_display.php?lead_id=&list_id=&dial_method=<?php echo $dial_method; ?>&stage=WELCOME&server_ip=<?php echo $server_ip; ?>&user=<?php echo $VD_login.$VARchatgroupsURL ?>" style="background-color:transparent;" scrolling="auto" frameborder="0" allowtransparency="true" id="CustomerChatIFrame" name="CustomerChatIFrame" width="<?php echo $SDwidth ?>px" height="<?php echo $SSheight ?>px" STYLE="z-index:<?php $zi++; echo $zi ?>"> </iframe></div></font></td></tr></table>
</span>

<span id="InternalChatPanel" class="panel_chat_internal">
	<?php
	if ($webphone_location == 'bar')
        {echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
    <table border="0" bgcolor="<?php echo $SCRIPT_COLOR ?>" width="<?php echo $SSwidth ?>px" height="<?php echo $SSheight ?>px"><tr><td align="left" valign="top"><font class="sb_text"><div class="noscroll_script" id="InternalChatContents"><iframe src="./agc_agent_manager_chat_interface.php?user=<?php echo $VD_login; ?>&pass=<?php echo $VD_pass; ?>" style="background-color:transparent;" scrolling="auto" frameborder="0" allowtransparency="true" id="InternalChatIFrame" name="InternalChatIFrame" width="<?php echo $SDwidth ?>px" height="<?php echo $SSheight ?>px" STYLE="z-index:<?php $zi++; echo $zi ?>"> </iframe></div></font></td></tr></table>
</span>

<!-- /Panels tabs -->

<span style="position:absolute;left:5px;top:<?php echo $HTheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="HotKeyActionBox">
    <table border="0" bgcolor="#FFDD99" width="<?php echo $HCwidth ?>px" height="70px">
    <tr bgcolor="#FFEEBB"><td height="70px"><font class="sh_text"> <?php echo _QXZ("Lead Dispositioned As:"); ?> </font><br /><br /><center>
    <font class="sd_text"><span id="HotKeyDispo"> - </span></font>
	<span id="HKWrapupTimer"></span><span id="HKWrapupBypass"></span>
	<span id="HKWrapupMessage"></span>
	</center>
</td>
    </tr></table>
</span>

<span style="position:absolute;left:5px;top:<?php echo $HTheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="HotKeyEntriesBox">
    <table border="0" bgcolor="#FFDD99" width="<?php echo $HCwidth ?>px" height="70px">
    <tr bgcolor="#FFEEBB"><td width="200px"><font class="sh_text"> <?php echo _QXZ("Disposition Hot Keys:"); ?> </font></td><td colspan="2">
	<font class="body_small"><?php echo _QXZ("When active, simply press the keyboard key for the desired disposition for this call. The call will then be hungup and dispositioned automatically:"); ?></font></td></tr><tr>
    <td width="200px"><font class="sk_text">
	<span id="HotKeyBoxA"><?php echo $HKboxA ?></span>
    </font></td>
    <td width="200px"><font class="sk_text">
	<span id="HotKeyBoxB"><?php echo $HKboxB ?></span>
    </font></td>
    <td><font class="sk_text">
	<span id="HotKeyBoxC"><?php echo $HKboxC ?></span>
    </font></td>
    </tr></table>
</span>

<?php if ( ($HK_statuses_camp > 0) && ($user_level>=$HKuser_level) && ($VU_hotkeys_active > 0) ) { ?>
<span style="position:absolute;left:<?php echo $HKwidth ?>px;top:<?php echo $HKheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="hotkeysdisplay"><a href="#" onMouseOver="HotKeys('ON')"><img src="./images/<?php echo _QXZ("vdc_XB_hotkeysactive_OFF.gif"); ?>" border="0" alt="HOT KEYS INACTIVE" /></a></span>
<?php } ?>


<span style="position:absolute;left:157px;top:<?php echo $HTheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="TransferMain">
    <table bgcolor="#CCCCFF" width="<?php echo $SDwidth ?>px">
    <tr valign="top">
    <td align="left" height="30px">
	<span class="text_input" id="TransferMaindiv">
	<font class="body_text">
    <img src="./images/<?php echo _QXZ("vdc_XB_header.gif"); ?>" border="0" alt="Transfer - Conference" style="vertical-align:middle" /> &nbsp; &nbsp; &nbsp; &nbsp; <span id="XfeRDiaLGrouPSelecteD"></span> &nbsp; &nbsp; <span id="XfeRCID"></span><br />

    <table cellpadding="0" cellspacing="1" border="0">
    <tr>
    <td align="left" colspan="3">
    <span id="XfeRGrouPLisT"><select size="1" name="XfeRGrouP" id="XfeRGrouP" class="cust_form" onChange="XferAgentSelectLink();return false;"><option>-- <?php echo _QXZ("SELECT A GROUP TO SEND YOUR CALL TO"); ?> --</option></select></span>
	 
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="LocalCloser"><img src="./images/<?php echo _QXZ("vdc_XB_localcloser_OFF.gif"); ?>" border="0" alt="LOCAL CLOSER" style="vertical-align:middle" /></span> &nbsp; &nbsp;
 </td>
    <td align="left">
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="HangupXferLine"><img src="./images/<?php echo _QXZ("vdc_XB_hangupxferline_OFF.gif"); ?>" border="0" alt="Hangup Xfer Line" style="vertical-align:middle" /></span>
	&nbsp; 
	<span style="background-color: <?php echo $MAIN_COLOR ?>" id="ParkXferLine"><img src="./images/<?php echo _QXZ("vdc_XB_parkxferline_OFF.gif"); ?>" border="0" alt="Park Xfer Line" style="vertical-align:middle" /></span>
 </td>
 </tr>

    <tr>
    <td align="left" colspan="2">
    <img src="./images/<?php echo _QXZ("vdc_XB_seconds.gif"); ?>" border="0" alt="seconds" style="vertical-align:middle" /><input type="text" size="2" name="xferlength" id="xferlength" maxlength="4" class="cust_form" readonly="readonly" />
	&nbsp; 
    <img src="./images/<?php echo _QXZ("vdc_XB_channel.gif"); ?>" border="0" alt="channel" style="vertical-align:middle" /><input type="text" size="12" name="xferchannel" id="xferchannel" maxlength="200" class="cust_form" readonly="readonly" />
 </td>
    <td align="left">
    <span id="consultative_checkbox"><input type="checkbox" name="consultativexfer" id="consultativexfer" size="1" value="0"><font class="body_tiny"> <?php echo _QXZ("CONSULTATIVE"); ?> &nbsp;</font></span>
 </td>
    <td align="left">
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="HangupBothLines"><a href="#" onclick="bothcall_send_hangup('YES');return false;"><img src="./images/<?php echo _QXZ("vdc_XB_hangupbothlines.gif"); ?>" border="0" alt="Hangup Both Lines" style="vertical-align:middle" /></a></span>
 </td>
 </tr>

    <tr>
    <td align="left" colspan="2">
    <img src="./images/<?php echo _QXZ("vdc_XB_number.gif"); ?>" border="0" alt="Number to call" style="vertical-align:middle" />
	&nbsp; 
	<?php
	if ($hide_xfer_number_to_dial=='ENABLED')
		{
		?>
        <input type="hidden" name="xfernumber" id="xfernumber" value="<?php echo $preset_populate ?>" /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
		<?php
		}
	else
		{
		?>
        <input type="text" size="20" name="xfernumber" id="xfernumber" maxlength="25" class="cust_form" value="<?php echo $preset_populate ?>" /> &nbsp;
		<?php
		}
	?>
    <span id="agentdirectlink"><font class="body_small_bold"><a href="#" onclick="XferAgentSelectLaunch();return false;"><?php echo _QXZ("AGENTS"); ?></a></font></span>
    <input type="hidden" name="xferuniqueid" id="xferuniqueid" />
    <input type="hidden" name="xfername" id="xfername" />
    <input type="hidden" name="xfernumhidden" id="xfernumhidden" />
 </td>
    <td align="left">
    <span id="dialoverride_checkbox"><input type="checkbox" name="xferoverride" id="xferoverride" size="1" value="0"><font class="body_tiny" /> <?php echo _QXZ("DIAL OVERRIDE"); ?>	<?php if ($manual_dial_override_field == 'DISABLED'){echo " "._QXZ("DISABLED");}?></font></span>
 </td>
    <td align="left">
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="Leave3WayCall"><a href="#" onclick="leave_3way_call('FIRST','YES');return false;"><img src="./images/<?php echo _QXZ("vdc_XB_leave3waycall.gif"); ?>" border="0" alt="LEAVE 3-WAY CALL" style="vertical-align:middle" /></a></span>
 </td>
 </tr>

    <tr>
    <td align="left" COLSPAN="4">
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="DialBlindTransfer"><img src="./images/<?php echo _QXZ("vdc_XB_blindtransfer_OFF.gif"); ?>" border="0" alt="Dial Blind Transfer" style="vertical-align:middle" /></span>
	&nbsp;
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="DialWithCustomer"><a href="#" onclick="SendManualDial('YES','YES');return false;"><img src="./images/<?php echo _QXZ("vdc_XB_dialwithcustomer.gif"); ?>" border="0" alt="Dial With Customer" style="vertical-align:middle" /></a></span>
	&nbsp;
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="ParkCustomerDial"><a href="#" onclick="xfer_park_dial('YES');return false;"><img src="./images/<?php echo _QXZ("vdc_XB_parkcustomerdial.gif"); ?>" border="0" alt="Park Customer Dial" style="vertical-align:middle" /></a></span>
	&nbsp;
	<?php
	if ($enable_xfer_presets=='ENABLED')
		{
		?>
        <span style="background-color: <?php echo $MAIN_COLOR ?>" id="PresetPullDown"><a href="#" onclick="generate_presets_pulldown('YES');return false;"><img src="./images/<?php echo _QXZ("vdc_XB_presetsbutton.gif"); ?>" border="0" alt="Presets Button" style="vertical-align:middle" /></a></span>
		<?php
		}
	else
		{
		if ( ($enable_xfer_presets=='CONTACTS') and ($VU_preset_contact_search != 'DISABLED') )
			{
			?>
			<span style="background-color: <?php echo $MAIN_COLOR ?>" id="ContactPullDown"><a href="#" onclick="generate_contacts_search('YES');return false;"><img src="./images/<?php echo _QXZ("vdc_XB_contactsbutton.gif"); ?>" border="0" alt="Contacts Button" style="vertical-align:middle" /></a></span>
			<?php
			}
		else
			{
			?>
			<font class="body_tiny">
			<a href="#" onclick="DtMf_PreSet_a();return false;">D1</a> 
			<a href="#" onclick="DtMf_PreSet_b();return false;">D2</a>
			<a href="#" onclick="DtMf_PreSet_c();return false;">D3</a>
			<a href="#" onclick="DtMf_PreSet_d();return false;">D4</a>
			<a href="#" onclick="DtMf_PreSet_e();return false;">D5</a>
			</font>
			<?php
			}
		}
	?>
	&nbsp;
    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="DialBlindVMail"><img src="./images/<?php echo _QXZ("vdc_XB_ammessage_OFF.gif"); ?>" border="0" alt="Blind Transfer VMail Message" style="vertical-align:middle" /></span>
 </td>
 </tr>

 </table>

	</font>
	</span>
	</td>
    </tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;width:<?php echo $JS_browser_width ?>px;height:<?php echo $JS_browser_height ?>px;overflow:scroll;z-index:<?php $zi++; echo $zi ?>;background-color:<?php echo $SIDEBAR_COLOR ?>;" id="AgentXferViewSpan"><center><font class="body_text">
<?php echo _QXZ("Available Agents Transfer:"); ?> <span id="AgentXferViewSelect"></span></font><br><a href="#" onclick="AgentsXferSelect('0','AgentXferViewSelect');return false;"><?php echo _QXZ("close"); ?></a></center></span>

<span style="position:absolute;left:5px;top:<?php echo $HTheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="EAcommentsBox">
    <table border="0" bgcolor="#FFFFCC" width="<?php echo $HCwidth ?>px" height="70px">
    <tr bgcolor="#FFFF66">
    <td align="left"><font class="sh_text"> <?php echo _QXZ("Extended Alt Phone Information:"); ?> </font></td>
    <td align="right"><font class="sk_text"> <a href="#" onclick="EAcommentsBoxhide('YES');return false;"> <?php echo _QXZ("minimize"); ?> </a> </font></td>
	</tr><tr>
    <td valign="top"><font class="sk_text">
    <span id="EAcommentsBoxC"></span><br />
    <span id="EAcommentsBoxB"></span><br />
    </font></td>
    <td width="320px" valign="top"><font class="sk_text">
    <span id="EAcommentsBoxA"></span><br />
	<span id="EAcommentsBoxD"></span>
    </font></td>
    </tr></table>
</span>

<span style="position:absolute;left:695px;top:<?php echo $HTheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="EAcommentsMinBox">
    <table border="0" bgcolor="#FFFFCC" width="40px" height="20px">
    <tr bgcolor="#FFFF66">
    <td align="left"><font class="sk_text"><a href="#" onclick="EAcommentsBoxshow();return false;"> <?php echo _QXZ("maximize"); ?> </a> <br /><?php echo _QXZ("Alt Phone Info"); ?></font></td>
    </tr></table>
</span>

<span class="w-100 h-100 bg-white" style="position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="NoneInSessionBox">
    <div class="w-50 mx-auto mt-5">

		<div class="text-center">
			<?php echo _QXZ("No one is in your session:"); ?>
			<span id="NoneInSessionID"></span><br />
			<div class="mt-3">
				<a class="btn btn-secondary" href="#" onclick="NoneInSessionOK();return false;"><?php echo _QXZ("Go Back"); ?></a>
				<span id="NoneInSessionLink">
					<a class="btn btn-primary" href="#" onclick="NoneInSessionCalL();return false;"><?php echo _QXZ("Call Agent Again"); ?></a>
				</span>
			</div>
		</div>

	</div>
</span>

<span style="position:absolute;left:0px;top:30px;z-index:<?php $zi++; echo $zi ?>;" id="CustomerGoneBox">
    <table border="0" bgcolor="#CCFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center"> <font class="sd_text"><?php echo _QXZ("Customer has hung up:"); ?> <span id="CustomerGoneChanneL"></span><br />
	<a href="#" onclick="CustomerGoneOK();return false;"><?php echo _QXZ("Go Back"); ?></a>
    <br /><br />
	<a href="#" onclick="CustomerGoneHangup();return false;"><?php echo _QXZ("Finish and Disposition Call"); ?></a></font>
    </td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="WrapupBox">
    <table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center"> <font class="sd_text"><?php echo _QXZ("Call Wrapup:"); ?> <span id="WrapupTimer"></span> <?php echo _QXZ("seconds remaining in wrapup"); ?></font><br /><br />
	<span id="WrapupMessage"><?php echo $wrapup_message ?></span>
    <br /><br />
	<span id="WrapupBypass"><font class="sh_text"><a href="#" onclick="WrapupFinish();return false;"><?php echo _QXZ("Finish Wrapup and Move On"); ?></a></font></span>
    </td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="FSCREENWrapupBox"><table border="0" bgcolor="#FFFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px" cellpadding="0" cellspacing="0"><tr><td><span id="FSCREENWrapupMessage"><?php echo $wrapup_message ?></span></td></tr></table></span>

<span style="position:absolute;left:200px;top:150px;z-index:<?php $zi++; echo $zi ?>;" id="TimerSpan">
    <table border="0" bgcolor="#CCFFCC" width="400px" height="200px"><tr><td align="center">
    <br /><font class="sh_text"><span id="TimerContentSpan"></span></font><br /><br />
	<font class="sh_text"><a href="#" onclick="hideDiv('TimerSpan');return false;"><?php echo _QXZ("Close Message"); ?></a></font>
    </td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="AgenTDisablEBoX">
    <table border="0" bgcolor="#FFFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center"><font class="sd_text"><?php echo _QXZ("Your session has been disabled"); ?><br /><a href="#" onclick="LogouT('DISABLED','');return false;"><?php echo _QXZ("CLICK HERE TO RESET YOUR SESSION"); ?></a></font><br /><br /><!--<a href="#" onclick="hideDiv('AgenTDisablEBoX');return false;">Go Back</a>-->
    </td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="SysteMDisablEBoX">
    <table border="0" bgcolor="#FFFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center"><font class="sh_text"><?php echo _QXZ("There is a time synchronization problem with your system, please tell your system administrator"); ?><br /><br /><br /><a href="#" onclick="hideDiv('SysteMDisablEBoX');return false;"><?php echo _QXZ("Go Back"); ?></a></font>
    </td></tr></table>
</span>

<span class="w-100 h-100 bg-white" style="position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="LogouTBox">
    <div class="w-50 mx-auto mt-5">
		<div class="mb-2 text-center">
			<span id="LogouTProcess">
				<br />
				<br />
				<font class="loading_text"><?php echo _QXZ("LOGOUT PROCESSING..."); ?></font>
				<br />
				<br />
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<img src="./images/<?php echo _QXZ("agent_loading_animation.gif"); ?>" height="100px" width="100px" alt="<?php echo _QXZ("LOGOUT PROCESSING..."); ?>" />
			</span>
		</div>
		<div class="text-center">
			<span id="LogouTBoxLink">
				<font class="loading_text"><?php echo _QXZ("LOGOUT"); ?></font>
			</span>
		</div>
	</div>
</span>


<span style="position:absolute;left:0px;top:70px;z-index:<?php $zi++; echo $zi ?>;" id="DispoButtonHideA">
    <table border="0" bgcolor="#CCFFCC" width="165px" height="22px"><tr><td align="center" valign="top"></td></tr></table>
</span>

<span style="position:absolute;left:0px;top:138px;z-index:<?php $zi++; echo $zi ?>;" id="DispoButtonHideB">
    <table border="0" bgcolor="#CCFFCC" width="165px" height="250px"><tr><td align="center" valign="top">&nbsp;</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="DispoButtonHideC">
    <table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="47px"><tr><td align="center" valign="top"><font class="sh_text"><?php echo _QXZ("Any changes made to the customer information below at this time will not be comitted, You must change customer information before you Hangup the call."); ?></font> </td></tr></table>
</span>

<?php
	include 'parts/dispo_select_box.php'
?>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="CallBackSelectBox">
    <table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("Select a CallBack Date :"); ?></font><span id="CallBackDatE"></span><br />
	<?php
	if ($webphone_location == 'bar')
        {echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
    <input type="hidden" name="CallBackDatESelectioN" id="CallBackDatESelectioN" />
    <input type="hidden" name="CallBackTimESelectioN" id="CallBackTimESelectioN" />
	<span id="CallBackDatEPrinT"><font class="sh_text"><?php echo _QXZ("Select a Date Below"); ?></span> &nbsp;
	<span id="CallBackTimEPrinT"></span> &nbsp; &nbsp;
	<?php echo _QXZ("Hour:"); ?> 
    <select size="1" name="CBT_hour" id="CBT_hour">
	<?php
	if ($callback_time_24hour > 0)
	{
	?>
	<option>00</option>
	<?php
	}
	?>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<?php
	if ($callback_time_24hour > 0)
	{
	?>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>23</option>
	<?php
	}
	?>
	</select> &nbsp;
	<?php echo _QXZ("Minutes:"); ?> 
    <select size="1" name="CBT_minute" id="CBT_minute">
	<option>00</option>
	<option>05</option>
	<option>10</option>
	<option>15</option>
	<option>20</option>
	<option>25</option>
	<option>30</option>
	<option>35</option>
	<option>40</option>
	<option>45</option>
	<option>50</option>
	<option>55</option>
	</select> &nbsp;

	<?php
	if ($callback_time_24hour < 1)
	{
	?>
    <select size="1" name="CBT_ampm" id="CBT_ampm">
	<option>AM</option>
	<option selected>PM</option>
    </select>
	<?php
	}
	?>
	&nbsp; &nbsp; 
	<?php
	if ($scheduled_callbacks_timezones_enabled > 0)
		{
		echo "<a href=\"#\" onclick=\"showDiv('SBC_timezone_span');return false;\">"._QXZ("Customer Timezone")."</a>: ";
		echo "<font class=\"sh_text\"><span id=\"CallBackTimezone\">"._QXZ("server time")."</span> &nbsp;</font>\n";
		}
	else
		{
		echo "<span id=\"CallBackTimezone\"><font class=\"sh_text\"></span> &nbsp;\n";
		}
	echo "<br />";

	if ($agentonly_callbacks)
        {echo "<input type=\"checkbox\" name=\"CallBackOnlyMe\" id=\"CallBackOnlyMe\" size=\"1\" value=\"0\" /> "._QXZ("MY CALLBACK ONLY")." <br />";}

	if ($comments_callback_screen != 'REPLACE_CB_NOTES')
		{echo _QXZ("CB Comments:")." <input type=\"text\" name=\"CallBackCommenTsField\" id=\"CallBackCommenTsField\" size=\"50\" maxlength=\"255\" /><br /><br />\n";}
	else
		{echo "<input type=\"hidden\" name=\"CallBackCommenTsField\" id=\"CallBackCommenTsField\" value=\"\" /><br />\n";}

	echo "<span id=\"CBCommentsContent\"><input type=\"hidden\" name=\"cbcomment_comments\" id=\"cbcomment_comments\" value=\"\" /></span><br />\n";
	?>

    <a href="#" onclick="CallBackDatE_submit();return false;"><?php echo _QXZ("SUBMIT"); ?></a><br /><br />
	<span id="CallBackDateContent"><?php echo  "$CCAL_OUT" ?></span>
    <br /><br /> &nbsp;</font>
    </td></tr></table>
</span>

<span style="position:absolute;left:560px;top:20px;z-index:<?php $zi++; echo $zi ?>;" id="SBC_timezone_span"><?php echo _QXZ("Loading"); ?>...</span>

<?php //AUDIT COMMENTS ADDED BY POUNDTEAM // ?>
<span id="ViewCommentsBox">
    <TABLE>
	<TR bgcolor="#FFEEBB">
       <TD valign=top height=20><font class="sh_text"> <?php echo _QXZ("View Comment History:"); ?> </font> &nbsp; <font class="sk_text"><span id="ViewCommentsShowHide"><a href="#" onclick="ViewComments('OFF','','','YES');return false;"><?php echo _QXZ("hide comment history"); ?></a></span></font></td>
    </TR>
    <TR>
       <TD bgcolor=white valign=top height=200><PRE><font size=1><span id="audit_comments"></span></font></PRE>
	   <input type="hidden" class="cust_form_text" id="audit_comments_button" name="audit_comments_button" value="0" />
	   </TD>
	</TR>
    </TABLE>
</span>
<?php //end AUDIT COMMENTS ADDED BY POUNDTEAM // ?>
<span style="position:absolute;left:5px;top:<?php echo $HTheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="CBcommentsBox">
    <table border="0" bgcolor="#FFFFCC" width="<?php echo $HCwidth ?>px" height="70px">
    <tr bgcolor="#FFFF66">
    <td align="left"><font class="sh_text"> <?php echo _QXZ("Previous Callback Information:"); ?> </font></td>
    <td align="right"><font class="sk_text"> <a href="#" onclick="CBcommentsBoxhide();return false;"><?php echo _QXZ("close"); ?></a> </font></td>
	</tr><tr>
    <td><font class="sk_text">
    <span id="CBcommentsBoxA"></span><br />
    <span id="CBcommentsBoxB"></span><br />
    <span id="CBcommentsBoxC"></span><br />
    </font></td>
    <td width="320px"><font class="sk_text">
	<span id="CBcommentsBoxD"></span>
    </font></td>
    </tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="SCForceDialBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> &nbsp; &nbsp; &nbsp; <font class="sd_text"><?php echo _QXZ("Scheduled Callback to Dial:"); ?></font>
	<br />
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="SCForceDialSpan"> <?php echo _QXZ("Lead Info"); ?> </span>
	<br /><br /> &nbsp;
	<!--<a href="#" onclick="hideDiv('SCForceDialBox');return false;"><?php echo _QXZ("Close Box"); ?></a>-->
	</font>
	</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="CallBacKsLisTBox">
    <table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sh_text"><?php echo _QXZ("CALLBACKS FOR AGENT %1s:<br />To see information on one of the callbacks below, click on the INFO link. To call the customer back now, click on the DIAL link. If you click on a record below to dial it, it will be removed from the list.",0,'',$VD_login); ?></font>
 <br />
	<?php
	if ($webphone_location == 'bar')
        {echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<div class="scroll_callback_auto" id="CallBacKsLisT"></div>
    <br /><font class="sh_text"> &nbsp;
	<a href="#" onclick="CalLBacKsLisTCheck();return false;"><?php echo _QXZ("Refresh"); ?></a>
	 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
	<a href="#" onclick="CalLBacKsLisTClose();return false;"><?php echo _QXZ("Go Back"); ?></a>
	</font>
    </td></tr></table>
</span>

<?php
	include 'parts/manual_dial_box.php'
?>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="CloserSelectBox">
    <table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("CLOSER INBOUND GROUP SELECTION"); ?></font> <br />
	<?php
	if ($webphone_location == 'bar')
        {echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<font class="sh_text">
	<span id="CloserSelectContent"> <?php echo _QXZ("Closer Inbound Group Selection"); ?> </span>
    <input type="hidden" name="CloserSelectList" id="CloserSelectList" /><br />
	<?php
	if ( ($outbound_autodial_active > 0) and ($disable_blended_checkbox < 1) and ($dial_method != 'INBOUND_MAN') and ($VU_agent_choose_blended > 0) )
		{
		?>
        <input type="checkbox" name="CloserSelectBlended" id="CloserSelectBlended" size="1" value="0" /> <?php echo _QXZ("BLENDED CALLING(outbound activated)"); ?> <br />
		<?php
		}
	?>
	<a href="#" onclick="CloserSelectContent_create('YES');return false;"> <?php echo _QXZ("RESET"); ?> </a> | 
	<a href="#" onclick="CloserSelect_submit('YES');return false;"><?php echo _QXZ("SUBMIT"); ?></a>
    <br /><br /><br /><br /> &nbsp;</font>
    </td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="TerritorySelectBox">
    <table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("TERRITORY SELECTION"); ?></font> <br />
	<?php
	if ($webphone_location == 'bar')
        {echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<font class='sh_text'>
	<span id="TerritorySelectContent"> <?php echo _QXZ("Territory Selection"); ?> </span>
    <input type="hidden" name="TerritorySelectList" id="TerritorySelectList" /><br />
	<a href="#" onclick="TerritorySelectContent_create('YES');return false;"> <?php echo _QXZ("RESET"); ?> </a> | 
	<a href="#" onclick="TerritorySelect_submit('YES');return false;"><?php echo _QXZ("SUBMIT"); ?></a>
    <br /><br /><br /><br /> &nbsp;</font>
    </td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="NothingBox">
	<span id="DiaLLeaDPrevieWHide"> <?php echo _QXZ("Channel"); ?></span>
	<span id="DiaLDiaLAltPhonEHide"> <?php echo _QXZ("Channel"); ?></span>
	<?php
	if (!$agentonly_callbacks)
        {echo "<input type=\"checkbox\" name=\"CallBackOnlyMe\" id=\"CallBackOnlyMe\" size=\"1\" value=\"0\" /> "._QXZ("MY CALLBACK ONLY")." <br />";}
	if ( ($outbound_autodial_active < 1) or ($disable_blended_checkbox > 0) or ($dial_method == 'INBOUND_MAN') or ($VU_agent_choose_blended < 1) )
        {echo "<input type=\"checkbox\" name=\"CloserSelectBlended\" id=\"CloserSelectBlended\" size=\"1\" value=\"0\" /> "._QXZ("BLENDED CALLING")."<br />";}
	?>
</span>

<span class="w-100 h-100" style="background:#eee;position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="CalLLoGDisplaYBox">
    <div class="text-center mt-5">

		<table class="table" border="0" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px">
			<tr>
				<td align="center" valign="top"> &nbsp; &nbsp; &nbsp;
					<font class="sd_text"><?php echo _QXZ("AGENT CALL LOG:"); ?></font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<font class="sh_text">
						<a href="#" onclick="CalLLoGVieWClose();return false;"><?php echo _QXZ("close"); ?> [X]</a><br />
						<?php
						if ($webphone_location == 'bar')
							{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
						?>
						<div class="scroll_calllog" id="CallLogSpan"> <?php echo _QXZ("Call log List"); ?> </div>
						<br /><br /> &nbsp;
					</font>
				</td>
			</tr>
		</table>

	</div>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="AgentTimeDisplayBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top">
	<?php
	if (preg_match("/RANGE/",$agent_screen_time_display))
		{
		echo " &nbsp; &nbsp; &nbsp; <font class=\"sd_text\">"._QXZ("AGENT TIME REPORT")." : &nbsp; <br />";
		echo " <input type=text name=ATstart_date id=ATstart_date value=\"$NOW_DATE\" size=12 maxlength=10>";
		echo "<script language=\"JavaScript\">\n";
		echo "var o_cal = new tcal ({\n";
		echo "	'formname': 'vicidial_form',\n";
		echo "	'controlname': 'ATstart_date'});\n";
		echo "o_cal.a_tpl.yearscroll = false;\n";
		echo "</script>\n";
		echo " &nbsp; "._QXZ("to");
		echo " &nbsp; <input type=text name=ATend_date id=ATend_date value=\"$NOW_DATE\" size=12 maxlength=10>";
		echo "<script language=\"JavaScript\">\n";
		echo "var o_cal = new tcal ({\n";
		echo "	'formname': 'vicidial_form',\n";
		echo "	'controlname': 'ATend_date'});\n";
		echo "o_cal.a_tpl.yearscroll = false;\n";
		echo "</script>\n";
		echo " &nbsp; <a href=\"#\" onclick=\"LaunchAgentTimeReport('');return false;\">"._QXZ("GO")."</a></font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
		echo "<font class=\"sh_text\"><a href=\"#\" onclick=\"AgentTimeReport('close');return false;\">"._QXZ("close")." [X]</a><br />";
		}
	else
		{
		echo "<input type=hidden name=ATstart_date id=ATstart_date value=\"$NOW_DATE\">\n";
		echo "<input type=hidden name=ATend_date id=ATend_date value=\"$NOW_DATE\">\n";
		}
	?>
	<div class="scroll_calllog" id="AgentTimeDisplaySpan"> <?php echo _QXZ("Agent Time Report"); ?> </div>
	<br /><br /> &nbsp;</font>
	</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="SearcHContactsDisplaYBox">
	<table border="0" bgcolor="#CCFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> &nbsp; &nbsp; &nbsp; <font class="sd_text"><?php echo _QXZ("SEARCH FOR A CONTACT:"); ?></font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font class="sh_text"><a href="#" onclick="ContactSearcHVieWClose();return false;">close [X]</a><br />
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<br /><br />
	<?php echo _QXZ("Notes: when doing a search for a contact, wildcard or partial search terms are not allowed. <br />Contact search requests are all logged in the system."); ?>
	<br /><br />
	<center>
	<table border="0">
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("Office Number:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_phone_number" id="contacts_phone_number"></font></td>
	</tr>
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("First Name:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_first_name" id="contacts_first_name"></font></td>
	</tr>
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("Last Name:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_last_name" id="contacts_last_name"></font></td>
	</tr>
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("BU Name:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_bu_name" id="contacts_bu_name"></font></td>
	</tr>
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("Department:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_department" id="contacts_department"></font></td>
	</tr>
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("Group Name:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_group_name" id="contacts_group_name"></font></td>
	</tr>
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("Job Title:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_job_title" id="contacts_job_title"></font></td>
	</tr>
	<tr>
	<td align="right"><font class="sh_text"> <?php echo _QXZ("Location:"); ?> </td><td align="left"><input type="text" size="18" maxlength="20" name="contacts_location" id="contacts_location"></font></td>
	</tr>
	<tr>
	<td align="center" colspan="2"><font class="sh_text"><br /> <a href="#" onclick="ContactSearchSubmit();return false;"><?php echo _QXZ("SUBMIT SEARCH"); ?></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="#" onclick="ContactSearchReset('YES');return false;"><?php echo _QXZ("reset form"); ?></a></font></td>
	</tr>
	</table>
	<br /><br /> &nbsp;</font>
	</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="SearcHResultSContactsBox">
	<table border="0" bgcolor="#CCFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> &nbsp; &nbsp; &nbsp; <font class="sd_text"><?php echo _QXZ("CONTACTS SEARCH RESULTS:"); ?></font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font class="sh_text"><a href="#" onclick="hideDiv('SearcHResultSContactsBox');return false;"><?php echo _QXZ("close"); ?> [X]</a><br />
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<div class="scroll_calllog" id="SearcHResultSContactsSpan"> <?php echo _QXZ("Search Results"); ?> </div>
	<br /><br /> &nbsp;</font>
	</td></tr></table>
</span>

<span class="w-100 h-100 overflow-scroll" tabindex="-1" style="background:rgba(0, 0, 0, 0.5);position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="SearcHForMDisplaYBox">
    <div class="w-50 mx-auto mt-2">

		<div class="card">
			<div class="card-header">
				<h5 class="d-flex">
					<span class="w-auto"><?php echo _QXZ("SEARCH FOR A LEAD:"); ?></span>
					<a class="btn btn-close ms-auto" href="#" onclick="LeaDSearcHVieWClose();return false;"></a>
				</h5>
			</div>
			<div class="card-body">
				<table>
					<tr>
						<td align="center" valign="top"> 
				<?php
				if ($webphone_location == 'bar')
					{echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" />\n";}
				$TEMPlabel_vendor_lead_code = preg_replace("/---READONLY---|---REQUIRED---|---HIDE---/","",$label_vendor_lead_code);
				?>
				<br /><br />
				<?php echo _QXZ("Notes: when doing a search for a lead, the phone number, lead ID or %1s are the best fields to use.",0,'',$TEMPlabel_vendor_lead_code); ?> <br /><?php echo _QXZ("Using the other fields may be slower. Lead searching does not allow for wildcard or partial search terms."); ?> <br /><?php echo _QXZ("Lead search requests are all logged in the system."); ?>
				<br /><br />
				<center>
				<table border="0">
				<tr>
				<td align="right"> <font class="sh_text"><?php echo _QXZ("Phone Number:"); ?></font> </td><td align="left"><input class="form-control mb-2" type="text" size="18" maxlength="20" name="search_phone_number" id="search_phone_number"></td>
				</tr>
				<tr>
				<td align="right"> <font class="sh_text"><?php echo _QXZ("Phone Number Fields:"); ?></font> </td>
				<td align="left"><font class="sh_text">
				<input class="form-check-control mb-2" type="checkbox" name="search_main_phone" id="search_main_phone" size="1" value="0" checked /> <?php echo _QXZ("Main Phone Number"); ?>
				<input class="form-check-control mb-2" type="checkbox" name="search_alt_phone" id="search_alt_phone" size="1" value="0" /> <?php echo _QXZ("Alternate Phone Number"); ?>
				<input class="form-check-control mb-2" type="checkbox" name="search_addr3_phone" id="search_addr3_phone" size="1" value="0" /> <?php echo _QXZ("Address3 Phone Number"); ?>
				</font>
				</td>
				</tr>
				<tr>
				<td align="right"> <font class="sh_text"><?php echo _QXZ("Lead ID:"); ?></font> </td><td align="left"><input class="form-control mb-2" type="text" size="11" maxlength="10" name="search_lead_id" id="search_lead_id"></td>
				</tr>
				<tr>

				<?php
				if ($label_vendor_lead_code == '---HIDE---')
					{echo " </td><td align=\"left\"><input type=\"hidden\" name=\"search_vendor_lead_code\" id=\"search_vendor_lead_code\" value=\"\" />";}
				else
					{
					$label_vendor_lead_code = preg_replace("/---READONLY---|---REQUIRED---/","",$label_vendor_lead_code);
					echo "<td align=\"right\"> <font class=\"sh_text\">$label_vendor_lead_code:</font> </td><td align=\"left\"><input class=\"form-control mb-2\" type=\"text\" size=\"18\" maxlength=\"$MAXvendor_lead_code\" name=\"search_vendor_lead_code\" id=\"search_vendor_lead_code\"></td>\n";
					}
				echo "</tr><tr>\n";

				if ($label_first_name == '---HIDE---')
					{echo " </td><td align=\"left\"><input type=\"hidden\" name=\"search_first_name\" id=\"search_first_name\" value=\"\" />";}
				else
					{
					$label_first_name = preg_replace("/---READONLY---|---REQUIRED---/","",$label_first_name);
					echo "<td align=\"right\"> <font class=\"sh_text\">$label_first_name:</font> </td><td align=\"left\"><input class=\"form-control mb-2\" type=\"text\" size=\"18\" maxlength=\"$MAXfirst_name\" name=\"search_first_name\" id=\"search_first_name\"></td>\n";
					}
				echo "</tr><tr>\n";

				if ($label_last_name == '---HIDE---')
					{echo " </td><td align=\"left\"><input type=\"hidden\" name=\"search_last_name\" id=\"search_last_name\" value=\"\" />";}
				else
					{
					$label_last_name = preg_replace("/---READONLY---|---REQUIRED---/","",$label_last_name);
					echo "<td align=\"right\"> <font class=\"sh_text\">$label_last_name:</font> </td><td align=\"left\"><input class=\"form-control mb-2\" type=\"text\" size=\"18\" maxlength=\"$MAXlast_name\" name=\"search_last_name\" id=\"search_last_name\"></td>\n";
					}
				echo "</tr><tr>\n";

				if ($label_city == '---HIDE---')
					{echo " </td><td align=\"left\"><input type=\"hidden\" name=\"search_city\" id=\"search_city\" value=\"\" />";}
				else
					{
					$label_city = preg_replace("/---READONLY---|---REQUIRED---/","",$label_city);
					echo "<td align=\"right\"> <font class=\"sh_text\">$label_city:</font> </td><td align=\"left\"><input class=\"form-control mb-2\" type=\"text\" size=\"18\" maxlength=\"$MAXcity\" name=\"search_city\" id=\"search_city\"></td>\n";
					}
				echo "</tr><tr>\n";

				if ($label_state == '---HIDE---')
					{echo " </td><td align=\"left\"><input type=\"hidden\" name=\"search_state\" id=\"search_state\" value=\"\" />";}
				else
					{
					$label_state = preg_replace("/---READONLY---|---REQUIRED---/","",$label_state);
					echo "<td align=\"right\"> <font class=\"sh_text\">$label_state:</font> </td><td align=\"left\"><input class=\"form-control mb-2\" type=\"text\" size=\"18\" maxlength=\"$MAXstate\" name=\"search_state\" id=\"search_state\"></td>\n";
					}
				echo "</tr><tr>\n";

				if ($label_postal_code == '---HIDE---')
					{echo " </td><td align=\"left\"><input type=\"hidden\" name=\"search_postal_code\" id=\"search_postal_code\" value=\"\" />";}
				else
					{
					$label_postal_code = preg_replace("/---READONLY---|---REQUIRED---/","",$label_postal_code);
					echo "<td align=\"right\"> <font class=\"sh_text\">$label_postal_code:</font> </td><td align=\"left\"><input class=\"form-control mb-2\" type=\"text\" size=\"10\" maxlength=\"$MAXpostal_code\" name=\"search_postal_code\" id=\"search_postal_code\"></td>\n";
					}
				echo "</tr><tr>\n";

				?>

				<td align="center" colspan="2"><br /> <font class="sh_text"><a class="btn btn-primary" href="#" onclick="LeadSearchSubmit();return false;"><?php echo _QXZ("SUBMIT SEARCH"); ?></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="btn btn-secondary" href="#" onclick="LeadSearchReset();return false;"><?php echo _QXZ("reset form"); ?></a></font></td>
				</tr>
				</table>
				<br /><br /> &nbsp;
				</td></tr></table>
			</div>
		</div>
	</div>
</span>

<span class="w-100 h-100 overflow-scroll" tabindex="-1" style="background:rgba(0, 0, 0, 0.5);position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="SearcHResultSDisplaYBox">
    <div class="w-50 mx-auto mt-2">

		<div class="card">
			<div class="card-header">
				<h5 class="d-flex">
					<span class="w-auto"><?php echo _QXZ("SEARCH RESULTS:"); ?></span>
					<a class="ms-auto btn btn-close" href="#" onclick="hideDiv('SearcHResultSDisplaYBox');return false;"></a>
				</h5>
			</div>
			<div class="card-body overflow-scroll">

				<table><tr><td align="center" valign="top">
				<?php
				if ($webphone_location == 'bar')
					{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
				?>
				<div id="SearcHResultSSpan"> <?php echo _QXZ("Search Results"); ?> </div>
				<br /><br /> &nbsp;</font>
				</td></tr></table>
			</div>
		</div>
	</div>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="CalLNotesDisplaYBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> &nbsp; &nbsp; &nbsp; <font class="sd_text"><?php echo _QXZ("CALL NOTES LOG:"); ?></font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font class="sh_text"><a href="#" onclick="hideDiv('CalLNotesDisplaYBox');return false;"><?php echo _QXZ("close"); ?> [X]</a><br />
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<div class="scroll_calllog" id="CallNotesSpan"> <?php echo _QXZ("Call Notes List"); ?> </div>
	<br /><br /> &nbsp;
	<a href="#" onclick="hideDiv('CalLNotesDisplaYBox');return false;"><?php echo _QXZ("Close Info Box"); ?></a>
	</font>
	</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="LeaDInfOBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> &nbsp; &nbsp; &nbsp; <font class="sd_text"><?php echo _QXZ("Customer Information:"); ?></font> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font class="sh_text"><a href="#" onclick="hideDiv('LeaDInfOBox');return false;"><?php echo _QXZ("close"); ?> [X]</a>
	<br />
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="LeaDInfOSpan"> <?php echo _QXZ("Lead Info"); ?> </span>
	<br /><br /> &nbsp;
	<a href="#" onclick="hideDiv('LeaDInfOBox');return false;"><?php echo _QXZ("Close Info Box"); ?></a>
	</font>
	</td></tr></table>
</span>

<?php
	include 'parts/pause_code_select_box.php'
?>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="PauseCodeMgrAprBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("Pause Code Manager Approval"); ?>:</font><br /><br /><font class="sh_text">
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="PauseCodeMgrAprContent"> <?php echo _QXZ("Pause Code Selection"); ?> </span>
	<br />
	<input type="hidden" name="PauseCodeMgrAprSelection" id="PauseCodeMgrAprSelection" value="" />

	<br /><br /><br />
	<?php echo _QXZ("Manager Username"); ?>: <input type="text" size="20" name="MgrApr_user" id="MgrApr_user" maxlength="20" class="cust_form" value="" />
	<br />
	<?php echo _QXZ("Manager Password"); ?>: <input type="password" size="20" name="MgrApr_pass" id="MgrApr_pass" maxlength="20" class="cust_form" value="" />
	<br /><br />

	<font size="3" face="Arial, Helvetica, sans-serif" style="BACKGROUND-COLOR: #FFFFCC"><b><a href="#" onclick="PauseCodeSelect_MgrApr();return false;"><?php echo _QXZ("Submit"); ?></a></font> &nbsp; &nbsp; 
	<font size="3" face="Arial, Helvetica, sans-serif" style="BACKGROUND-COLOR: #FFFFCC"><b><a href="#" onclick="PauseCodeCancel_mgrapr();return false;"><?php echo _QXZ("Cancel"); ?></a></font>

	<br /><br /> &nbsp;</font>
	</td></tr></table>
</span>

<span style="position:absolute;left:<?php echo $PBwidth ?>px;top:40px;z-index:<?php $zi++; echo $zi ?>;" id="PresetsSelectBox">
	<table border="0" bgcolor="#9999FF" width="400px" height="<?php echo $HTheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("SELECT A PRESET :"); ?></font><br /><font class="sh_text">
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="PresetsSelectBoxContent"> <?php echo _QXZ("Presets Selection"); ?> </span>
	<input type="hidden" name="PresetSelection" id="PresetSelection" /></font>
	</td></tr></table>
</span>

<span style="position:absolute;left:<?php echo $PBwidth ?>px;top:40px;z-index:<?php $zi++; echo $zi ?>;" id="VMMessageSelectBox">
	<table border="0" bgcolor="#9999FF" width="400px" height="<?php echo $HTheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("SELECT A VM MESSAGE"); ?>:</font> &nbsp; &nbsp; <a href="#" onclick="hideDiv('VMMessageSelectBox');return false;"><?php echo _QXZ("close"); ?></a><br /><font class="sh_text">
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="VMMessageSelectBoxContent"> <?php echo _QXZ("VM Message Selection"); ?> </span>
	<input type="hidden" name="VMMessageSelection" id="VMMessageSelection" /></font>
	</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="GroupAliasSelectBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("SELECT A GROUP ALIAS :"); ?></font><br /><font class="sh_text">
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="GroupAliasSelectContent"> <?php echo _QXZ("Group Alias Selection"); ?> </span>
	<input type="hidden" name="GroupAliasSelection" id="GroupAliasSelection" />
	<br /><br /> &nbsp;</font>
	</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="DiaLInGrouPSelectBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("SELECT A DIAL IN-GROUP :"); ?></font><br /><font class="sh_text">
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="DiaLInGrouPSelectContent"> <?php echo _QXZ("Dial In-Group Selection"); ?> </span>
	<input type="hidden" name="DiaLInGrouPSelection" id="DiaLInGrouPSelection" />
	<br /><br /> &nbsp;</font>
	</td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:99;" id="ScriptTopBGspan">
    <table border="0" bgcolor="#FFFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center"><font class="sd_text"> &nbsp; </font><br />
    </td></tr></table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="ManualValidateBox">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("Manual Dial Validation"); ?>:</font><br /><br /><font class="sh_text">
	<?php
	if ($webphone_location == 'bar')
		{echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
	?>
	<span id="ManualValidateContent"> <?php echo _QXZ("Number to be dialed"); ?> </span>
	<br />
	<input type="hidden" name="ManualValidateNumber" id="ManualValidateNumber" value="" />

	<br /><br />
	<?php echo _QXZ("Enter number to dial to confirm"); ?>: <input type="text" size="20" name="ManualValidateEntry" id="ManualValidateEntry" maxlength="20" class="cust_form" value="" />
	<br /><br />

	<font size="3" face="Arial, Helvetica, sans-serif" style="BACKGROUND-COLOR: #FFFFCC"><b><a href="#" onclick="ManualValidateSubmit();return false;"><?php echo _QXZ("Submit"); ?></a></font> &nbsp; &nbsp; 
	<font size="3" face="Arial, Helvetica, sans-serif" style="BACKGROUND-COLOR: #FFFFCC"><b><a href="#" onclick="ManualValidateCancel();return false;"><?php echo _QXZ("Cancel"); ?></a></font>

	<br /><br /> &nbsp;</font>
	</td></tr></table>
</span>


<? $zi = ($zi + 100); ?>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="blind_monitor_alert_span">
	<table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("ALERT :"); ?></font><br /><font class="sh_text">
	<b><font color="red" size="5"> &nbsp; &nbsp; <span id="blind_monitor_alert_span_contents"></span></b></font>
	<br /><br /> <a href="#" onclick="hideDiv('blind_monitor_alert_span');return false;"><?php echo _QXZ("Go Back"); ?></a>
	</font>
	</td></tr></table>
</span>

<span class="w-100 h-100 bg-white" style="position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="DeactivateDOlDSessioNSpan">
    <div class="w-50 mx-auto mt-5">
		<?php echo _QXZ("Another live agent session was open using your user ID. It has been disabled. Click OK to continue to the agent screen."); ?><br />
		<a class="btn btn-primary mt-2" href="#" onclick="hideDiv('DeactivateDOlDSessioNSpan');return false;"><?php echo _QXZ("OK"); ?></a>
	</div>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="InvalidOpenerSpan">
    <table border="0" bgcolor="#FFFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center"><font class="sd_text"><?php echo _QXZ("This agent screen was not opened properly."); ?></font><br />
    </td></tr></table>
</span>



<span style="position:absolute;left:0px;top:<?php echo $GHheight ?>px;z-index:<?php $zi++; echo $zi ?>;" id="GENDERhideFORieALT"></span>
