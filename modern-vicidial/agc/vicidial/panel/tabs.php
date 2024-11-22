
<script>
$(function()
{
    $(document).on('click', '#Tabs ul li a.nav-link', (e) =>
    {
        const current_tab = $(e.currentTarget).attr('tab');
        const tabs = ['panel', 'script', 'script2', 'form', 'chat_internal', 'chat_customer'];
        for(let tab of tabs)
        {
            if(tab == current_tab)
            {
                $(`#Tabs ul li a[tab=${tab}]`).addClass('active');
            }
            else
            {
                $(`#Tabs ul li a[tab=${tab}]`).removeClass('active');
            }
        }
    });
});
</script>

<span id="Tabs">
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a tab="panel" class="nav-link active" href="#" onclick="MainPanelToFront('NO','YES');">
                Panel
            </a>
        </li>
        <li class="nav-item">
            <a tab="script" class="nav-link" href="#" onclick="ScriptPanelToFront('YES');">
                Script
            </a>
        </li>
        <li class="nav-item">
            <a tab="script2" class="nav-link" href="#" onclick="ScriptPanel2ToFront('YES');">
                Script 2
            </a>
        </li>
        <li class="nav-item">
            <a tab="form" class="nav-link" href="#" onclick="FormPanelToFront('YES');">
                Form
            </a>
        </li>
        <li class="nav-item">
            <a tab="chat_internal" class="nav-link" href="#" onclick="EmailPanelToFront('YES');">
                Email
            </a>
        </li>
        <li class="nav-item">
            <a tab="chat_internal" class="nav-link" href="#" onclick="InternalChatContentsLoad('YES');">
                Chat internal
                <img class="d-none" src="./images/<?=_QXZ("vdc_tab_chat_internal.gif")?>" name='InternalChatImg' alt="CHAT"/>
            </a>
        </li>
        <li class="nav-item">
            <a tab="chat_customer" class="nav-link" href="#" onclick="CustomerChatPanelToFront('1', 'YES');">
                Chat customer
                <img class="d-none" src="./images/<?=_QXZ("vdc_tab_chat_customer.gif")?>" name='CustomerChatImg' alt="CHAT"/>
            </a>
        </li>
    </ul>

    <table class="mb-2" border="0" bgcolor="#FFFFFF" height="30px">
        <tr valign="top" align="left">
            <!--
            <td align="left" width="115px" bgcolor="#<?php echo $SSstd_row5_background ?>">
                <a href="#" onclick="MainPanelToFront('NO','YES');">
                    <img src="/modern-vicidial/images/logo.png" alt="MAIN" height="30px" border="0" />
                </a>
            </td>
            <td align="left" width="67px">
                <a href="#" onclick="ScriptPanelToFront('YES');">
                    <img src="./images/<?php echo _QXZ("vdc_tab_script.gif"); ?>" alt="SCRIPT" width="67px" height="30px" border="0" />
                </a>
            </td>
            <?php
                //if ($SSenable_second_script > 0)
                if (true)
                {
                    echo "
                        <td align=\"left\" width=\"67px\">
                            <a href=\"#\" onclick=\"ScriptPanel2ToFront('YES');\">
                                <img src=\"./images/"._QXZ("vdc_tab_script2.gif")."\" alt=\"SCRIPT 2\" width=\"67px\" height=\"30px\" border=\"0\" />
                            </a>
                        </td>\n";
                }
            ?>
            <?php
                //if ($custom_fields_enabled > 0)
                if (true)
                {
                    echo "
                        <td align=\"left\" width=\"67px\">
                            <a href=\"#\" onclick=\"FormPanelToFront('YES');\">
                                <img src=\"./images/"._QXZ("vdc_tab_form.gif")."\" alt=\"FORM\" width=\"67px\" height=\"30px\" border=\"0\" />
                            </a>
                        </td>\n";
                }
            ?>
            <?php
                //if ($email_enabled > 0)
                if (true)
                {
                    echo "
                        <td align=\"left\" width=\"67px\">
                            <a href=\"#\" onclick=\"EmailPanelToFront('YES');\">
                                <img src=\"./images/"._QXZ("vdc_tab_email.gif")."\" alt=\"EMAIL\" width=\"67px\" height=\"30px\" border=\"0\" />
                            </a>
                        </td>\n";
                }
            ?>
            <?php
                //if ($chat_enabled > 0)
                if (true)
                {
                    # INTERNAL CHAT
                    echo "
                        <td align=\"left\" width=\"67px\">
                            <a href=\"#\" onclick=\"InternalChatContentsLoad('YES');\">
                                <img src=\"./images/"._QXZ("vdc_tab_chat_internal.gif")."\" name='InternalChatImg' alt=\"CHAT\" width=\"67px\" height=\"30px\" border=\"0\"/>
                            </a>
                        </td>\n";

                    # CUSTOMER CHAT
                    echo "
                        <td align=\"left\" width=\"67px\">
                            <a href=\"#\" onclick=\"CustomerChatPanelToFront('1', 'YES');\">
                                <img src=\"./images/"._QXZ("vdc_tab_chat_customer.gif")."\" name='CustomerChatImg' alt=\"CHAT\" width=\"67px\" height=\"30px\" border=\"0\"/>
                            </a>
                        </td>\n";
                }
            ?>
            -->
            <td width="<?php echo $HSwidth ?>px" valign="middle" align="center">
                <font class="body_tiny">&nbsp;
                    <span id="status"><?php echo _QXZ("LIVE"); ?></span>
                    &nbsp; &nbsp; <?php echo _QXZ("session ID:"); ?>
                    <span id="sessionIDspan"></span>
                </font><br>
                <font class="body_text">&nbsp; &nbsp;
                    <span id="AgentStatusCalls"></span>&nbsp; &nbsp;
                    <span id="AgentStatusEmails"></span>
                </font>
            </td>
            <td width="109px">
                <img src="./images/<?php echo _QXZ("agc_live_call_OFF.gif"); ?>" name="livecall" alt="Live Call" width="109px" height="30px" border="0" />
            </td>
        </tr>
    </table>
</span>
