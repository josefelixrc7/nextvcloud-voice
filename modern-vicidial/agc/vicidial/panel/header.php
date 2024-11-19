
<span id="Header">
	<div class="p-2"
		<table border="0" cellpadding="0" cellspacing="0" bgcolor="white" width="<?php echo $MNwidth ?>px" marginwidth="0" marginheight="0" leftmargin="0" topmargin="0" valign="top" align="left">
			<tr valign="top" align="left">
				<td colspan="3" valign="top" align="left">
					<input type="hidden" name="extension" id="extension" />
					<input type="hidden" name="custom_field_values" id="custom_field_values" value="" />
					<input type="hidden" name="FORM_LOADED" id="FORM_LOADED" value="0" />
					<font class="queue_text">
					<?php
					if ($logged_in_refresh_link > 0)
						{echo "<a href=\"#\" onclick=\"start_all_refresh();\"><font class=\"queue_text\">"._QXZ("Logged in as User")."</font></a>";}
					else
						{echo "<font class=\"queue_text\">"._QXZ("Logged in as User")."</font>";}
					echo _QXZ(": %1s on Phone: %2s",0,'',$VD_login,$SIP_user); 
					if ($on_hook_agent == 'Y')
						{echo "(<a href=\"#\" onclick=\"NoneInSessionCalL();return false;\">"._QXZ("ring")."</a>)";}
					echo "&nbsp; "._QXZ("to campaign").": $VD_campaign&nbsp; "; 
					?> &nbsp; &nbsp;
					<span id="agentchannelSPAN"></span></font></td>
					<td colspan="3" valign="top" align="right"><font class="body_text">
					<?php if ($territoryCT > 0) {echo "<a href=\"#\" onclick=\"OpeNTerritorYSelectioN();return false;\">"._QXZ("TERRITORIES")."</a> &nbsp; &nbsp; \n";} ?>
					<?php if ($INgrpCT > 0) {echo "<a href=\"#\" onclick=\"OpeNGrouPSelectioN();return false;\">"._QXZ("GROUPS")."</a> &nbsp; &nbsp; \n";} ?>
					<?php	echo "<a href=\"#\" onclick=\"NormalLogout();return false;needToConfirmExit = false;\">"._QXZ("LOGOUT")."</a>\n"; ?>
					</font>
				</td>
			</tr>
		</table>
	</div>
</span>
