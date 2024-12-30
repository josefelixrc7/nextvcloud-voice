
<script>
function changeTab(current_tab)
{
    const tabs = ['panel', 'script', 'script2', 'form', 'email', 'chat_internal', 'chat_customer'];
    for(let tab of tabs)
    {
        if(tab == current_tab)
        {
            $(`#Tabs ul li a[tab=${tab}]`).addClass('active');
            $(`.panel_${tab}`).removeClass('d-none');
            $(`.panel_${tab}`).addClass('d-block');
        }
        else
        {
            $(`#Tabs ul li a[tab=${tab}]`).removeClass('active');
            $(`.panel_${tab}`).removeClass('d-block');
            $(`.panel_${tab}`).addClass('d-none');
        }
    }
}

$(function()
{
    $(document).on('click', '#Tabs ul li a.nav-link', (e) =>
    {
        const current_tab = $(e.currentTarget).attr('tab');
        changeTab(current_tab);
    });
});
</script>

<div class="row my-2">

    <div class="col">
        <?php echo _QXZ("STATUS:"); ?>
        <span id="MainStatuSSpan"></span>
    </div>
    <div class="col" style="border-left:1px solid #ddd;">
        <small><?php echo _QXZ("RECORDING FILE:"); ?></small>
        <small><span id="RecorDingFilename"></span></small>
        <small>(<?php echo _QXZ("RECORD ID:"); ?></small>
        <small><span id="RecorDID"></span>)</small>
    </div>
    <div class="col" style="border-left:1px solid #ddd;">
        <span id="status"><?php echo _QXZ("LIVE"); ?></span>
        <?php echo _QXZ("session ID:"); ?>
        <span id="sessionIDspan"></span>
        (<span id="AgentStatusCalls"></span>
        <span id="AgentStatusEmails"></span>)
    </div>
    <div class="col" style="border-left:1px solid #ddd;">
        <div class="text-center">
            <img src="./images/<?php echo _QXZ("agc_live_call_OFF.gif"); ?>" name="livecall" alt="Live Call" width="109px" height="30px" border="0" />
        </div>
    </div>
</div>
<hr>

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
        <?php
            //if ($SSenable_second_script > 0)
            if (true)
            {
        ?>
                <li class="nav-item">
                    <a tab="script2" class="nav-link" href="#" onclick="ScriptPanel2ToFront('YES');">
                        Script 2
                    </a>
                </li>
        <?php
            }
        ?>
        <?php
            //if ($custom_fields_enabled > 0)
            if (true)
            {
        ?>
                <li class="nav-item">
                    <a tab="form" class="nav-link" href="#" onclick="FormPanelToFront('YES');">
                        Form
                    </a>
                </li>
        <?php
            }
        ?>
        <?php
            //if ($email_enabled > 0)
            if (true)
            {
        ?>
                <li class="nav-item">
                    <a tab="email" class="nav-link" href="#" onclick="EmailPanelToFront('YES');">
                        Email
                    </a>
                </li>
        <?php
            }
        ?>
        <?php
            //if ($chat_enabled > 0)
            if (true)
            {
        ?>
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
        <?php
            }
        ?>
    </ul>
</span>
