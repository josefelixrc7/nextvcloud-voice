
<span id="Header">
	<input type="hidden" name="extension" id="extension" />
	<input type="hidden" name="custom_field_values" id="custom_field_values" value="" />
	<input type="hidden" name="FORM_LOADED" id="FORM_LOADED" value="0" />

	<ul class="nav justify-content-center">
		<li class="nav-item">
			<font class="queue_text">
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
				<?php	echo "<a class=\"btn btn-secondary btn-sm\" href=\"#\" onclick=\"NormalLogout();return false;needToConfirmExit = false;\">"._QXZ("LOGOUT")."</a>\n"; ?>
			</font>
		</li>
		<li class="nav-item">
			<!--SecondSspan-->
			<span id="SecondSspan">
				<font class="body_text"> <?php echo _QXZ("seconds:"); ?> 
					<span id="SecondSDISP"> &nbsp; &nbsp; </span>
				</font>
			</span>
		</li>
		<li class="nav-item">
			<!--DiaLlOgButtonspan-->
			<span id="DiaLlOgButtonspan">
				<span id="ManuaLDiaLButtons"><font class="body_text"><span id="MDstatusSpan"><a href="#" onclick="NeWManuaLDiaLCalL('NO','','','','','YES','YES');return false;"><?php echo _QXZ("MANUAL DIAL"); ?></a></span>&nbsp; &nbsp; 
				<?php if ($agentcall_manual == '1') { ?>
				<a href="#" onclick="NeWManuaLDiaLCalL('FAST','','','','','YES','YES');return false;"><?php echo _QXZ("FAST DIAL"); ?></a>
				<?php } ?>
				</span>&nbsp; &nbsp; </font>
				<span id="CallLogButtons"><font class="body_text"><span id="CallLogLinkSpan"><a href="#" onclick="VieWCalLLoG();return false;"><?php echo _QXZ("VIEW CALL LOG"); ?></a></span><br /></font></span>
			</span>
		</li>
		<li class="nav-item">
			<!--DiaLlOgButtonspan-->
			<span id="AgentViewLinkSpan">
				<span id="AgentViewLink">
					<a href="#" onclick="AgentsViewOpen('AgentViewSpan','open');return false;">
						Vista de agentes
					</a>
				</span>
			</span>
		</li>
		<li class="nav-item">
			<!--MainCommit-->
			<span id="MainCommit">
				<a href="#" onclick="CustomerData_update('YES')"><font class="body_small">commmit</font></a>
			</span>
		</li>
	</ul>
</span>
