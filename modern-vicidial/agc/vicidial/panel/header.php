
<span id="Header">
	<input type="hidden" name="extension" id="extension" />
	<input type="hidden" name="custom_field_values" id="custom_field_values" value="" />
	<input type="hidden" name="FORM_LOADED" id="FORM_LOADED" value="0" />

	<ul class="nav">
		<li class="nav-item">
			<font>
				<?php
					if ($logged_in_refresh_link > 0)
					{
						echo "<a href=\"#\" onclick=\"start_all_refresh();\"><font class=\"queue_text\">"._QXZ("Logged in as User")."</font></a>";
					}
					else
					{
						echo "<font class=\"queue_text\">"._QXZ("Logged in as User")."</font>";
					}
					echo _QXZ(": %1s on Phone: %2s",0,'',$VD_login,$SIP_user); 
					if ($on_hook_agent == 'Y')
					{
						echo "(<a href=\"#\" onclick=\"NoneInSessionCalL();return false;\">"._QXZ("ring")."</a>)";
					}
					echo "&nbsp; "._QXZ("to campaign").": $VD_campaign&nbsp; "; 
				?>
				<span id="agentchannelSPAN"></span>
			</font>
		</li>
		<li class="nav-item">
			<font class="body_text">
				<?php if ($territoryCT > 0) {echo "<a href=\"#\" onclick=\"OpeNTerritorYSelectioN();return false;\">"._QXZ("TERRITORIES")."</a> &nbsp; &nbsp; \n";} ?>
				<?php if ($INgrpCT > 0) {echo "<a href=\"#\" onclick=\"OpeNGrouPSelectioN();return false;\">"._QXZ("GROUPS")."</a> &nbsp; &nbsp; \n";} ?>
				<?php	/*echo "<a class=\"btn btn-secondary btn-sm\" href=\"#\" onclick=\"NormalLogout();return false;needToConfirmExit = false;\">"._QXZ("LOGOUT")."</a>\n"; */?>
			</font>
		</li>
	</ul>
</span>
