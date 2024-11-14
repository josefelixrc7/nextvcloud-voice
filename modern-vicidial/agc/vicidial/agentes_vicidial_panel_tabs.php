
<span style="position:absolute;left:0px;top:13px;z-index:<?php $zi++; echo $zi ?>;" id="Tabs">
    <table border="0" bgcolor="#FFFFFF" width="<?php echo $MNwidth ?>px" height="30px">
        <tr valign="top" align="left">
            <td align="left" width="115px" bgcolor="#<?php echo $SSstd_row5_background ?>"><a href="#" onclick="MainPanelToFront('NO','YES');"><img src="/modern-vicidial/images/logo.png" alt="MAIN" width="50px" border="0" /></a></td>
            <td align="left" width="67px"><a href="#" onclick="ScriptPanelToFront('YES');"><img src="./images/<?php echo _QXZ("vdc_tab_script.gif"); ?>" alt="SCRIPT" width="67px" height="30px" border="0" /></a></td>
            <?php if ($SSenable_second_script > 0)
            {echo "<td align=\"left\" width=\"67px\"><a href=\"#\" onclick=\"ScriptPanel2ToFront('YES');\"><img src=\"./images/"._QXZ("vdc_tab_script2.gif")."\" alt=\"SCRIPT 2\" width=\"67px\" height=\"30px\" border=\"0\" /></a></td>\n";}
            ?>
            <?php if ($custom_fields_enabled > 0)
            {echo "<td align=\"left\" width=\"67px\"><a href=\"#\" onclick=\"FormPanelToFront('YES');\"><img src=\"./images/"._QXZ("vdc_tab_form.gif")."\" alt=\"FORM\" width=\"67px\" height=\"30px\" border=\"0\" /></a></td>\n";}
            ?>
            <?php if ($email_enabled > 0)
            {echo "<td align=\"left\" width=\"67px\"><a href=\"#\" onclick=\"EmailPanelToFront('YES');\"><img src=\"./images/"._QXZ("vdc_tab_email.gif")."\" alt=\"EMAIL\" width=\"67px\" height=\"30px\" border=\"0\" /></a></td>\n";}
            ?>
            <?php if ($chat_enabled > 0)
                {
                # INTERNAL CHAT
                echo "<td align=\"left\" width=\"67px\"><a href=\"#\" onclick=\"InternalChatContentsLoad('YES');\"><img src=\"./images/"._QXZ("vdc_tab_chat_internal.gif")."\" name='InternalChatImg' alt=\"CHAT\" width=\"67px\" height=\"30px\" border=\"0\"/></a></td>\n";

                # CUSTOMER CHAT
                echo "<td align=\"left\" width=\"67px\"><a href=\"#\" onclick=\"CustomerChatPanelToFront('1', 'YES');\"><img src=\"./images/"._QXZ("vdc_tab_chat_customer.gif")."\" name='CustomerChatImg' alt=\"CHAT\" width=\"67px\" height=\"30px\" border=\"0\"/></a></td>\n";
                }
            ?>
            <td width="<?php echo $HSwidth ?>px" valign="middle" align="center"><font class="body_tiny">&nbsp; <span id="status"><?php echo _QXZ("LIVE"); ?></span>&nbsp; &nbsp; <?php echo _QXZ("session ID:"); ?> <span id="sessionIDspan"></span></font><br><font class="body_text">&nbsp; &nbsp;<span id="AgentStatusCalls"></span>&nbsp; &nbsp;<span id="AgentStatusEmails"></span></font></td>
            <td width="109px"><img src="./images/<?php echo _QXZ("agc_live_call_OFF.gif"); ?>" name="livecall" alt="Live Call" width="109px" height="30px" border="0" /></td>
        </tr>
    </table>
</span>

<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="WelcomeBoxA">
    <table border="0" bgcolor="#FFFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $HKwidth ?>px"><tr><td align="center"><br /><span id="WelcomeBoxAt"><?php echo _QXZ("Agent Screen"); ?></span></td></tr></table>
</span>
