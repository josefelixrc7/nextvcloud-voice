
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="z-index: 6">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Modern Vicidial</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="w-100 p-2 text-white">
        <!-- ZZZZZZZZZZZZ  header -->
        <?php
            include 'header.php';
        ?>
    </div>
    <div class="text-white">
        <!--SecondSspan-->
        <span id="SecondSspan">
            <span><?php echo _QXZ("seconds:");?></span>
            <span id="SecondSDISP"></span>
        </span>
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
			<a class="nav-link px-3" href="#" onclick="NormalLogout();return false;needToConfirmExit = false;"><?=_QXZ("LOGOUT");?></a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">

        <!-- Barra lateral -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <div class="nav-link">
                            <?php
                                if ($webphone_location == 'bar')
                                    {
                                    echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";
                                    }
                                $alt_phone_selected='';
                                if ( ($alt_number_dialing=='SELECTED') or ($alt_number_dialing=='SELECTED_TIMER_ALT') or ($alt_number_dialing=='SELECTED_TIMER_ADDR3') )
                                    {$alt_phone_selected='CHECKED';}
                            ?>	
                            <span id="post_phone_time_diff_span"><b><font color="red"><span id="post_phone_time_diff_span_contents"></span></font></b></span>
                            <font class="body_text"> <?php echo _QXZ("STATUS:"); ?> <span id="MainStatuSSpan"></span><span id=timer_alt_display></span><span id=manual_auto_next_display></span></font>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <span style="background-color: #CCFFCC" id="DiaLControl">
                                <a class="btn btn-secondary" href="#" onclick="ManualDialNext('','','','','','0','','','YES');">
                                    <img src="./images/<?php echo _QXZ("vdc_LB_dialnextnumber_OFF.gif"); ?>" border="0" alt="Dial Next Number" />
                                </a>
                            </span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <span id="ManualQueueNotice"></span>
                            <span id="ManualQueueChoice"></span>
                            <span id="DiaLLeaDPrevieW"><font class="preview_text"> <input type="checkbox" name="LeadPreview" size="1" value="0" /> <?php echo _QXZ("LEAD PREVIEW"); ?><br /></font></span>
                            <span id="DiaLDiaLAltPhonE"><font class="preview_text"> <input type="checkbox" name="DiaLAltPhonE" size="1" value="0" <?php echo $alt_phone_selected ?>/><?php echo _QXZ(" ALT PHONE DIAL"); ?><br /></font></span>
                            <font class="skb_text"><span id="NexTCalLPausE"> <a href="#" onclick="next_call_pause_click();return false;"><?php echo _QXZ("Next Call Pause"); ?></a> <br /></span></font>

                            <!--
                            <?php
                            if ( ($manual_dial_preview) and ($auto_dial_level==0) )
                                {echo "<font class=\"preview_text\"> <input type=\"checkbox\" name=\"LeadPreview\" size=\"1\" value=\"0\" /> LEAD PREVIEW<br /></font>";}
                            if ( ($alt_phone_dialing) and ($auto_dial_level==0) )
                                {echo "<font class=\"preview_text\"> <input type=\"checkbox\" name=\"DiaLAltPhonE\" size=\"1\" value=\"0\" /> ALT PHONE DIAL<br /></font>";}
                            ?> -->
                            <small class="text-muted"><?php echo _QXZ("RECORDING FILE:"); ?></small><br />

                            <font class="body_tiny"><span id="RecorDingFilename"></span></font><br />
                            <small class="text-muted"><?php echo _QXZ("RECORD ID:"); ?></small> <font class="body_small"><span id="RecorDID"></span></font><br />

                            <!-- <a href=\"#\" onclick=\"conf_send_recording('MonitorConf','" + head_conf + "','','','');return false;\">Record</a> -->
                            <span style="background-color: <?php echo $MAIN_COLOR ?>" id="RecorDControl"><a href="#" onclick="conf_send_recording('MonitorConf',session_id,'','','','YES');return false;"><img src="./images/<?php echo _QXZ("$start_recording_GIF"); ?>" border="0" alt="Start Recording" /></a></span><br />
                            <span style="background-color: <?php echo $MAIN_COLOR ?>" id="RecorDMute"></span>
                            <?php
                            /*if (!preg_match("/NOGAP/",$SSrecording_buttons))
                                {echo "<span id=\"SpacerSpanA\"><img src=\"./images/"._QXZ("blank.gif")."\" width=\"145px\" height=\"16px\" border=\"0\" /></span><br />\n";}
                            */

                            if ($SSenable_first_webform > 0)
                                {echo "<span style=\"background-color: #FFFFFF\" id=\"WebFormSpan\"><img src=\"./images/"._QXZ("vdc_LB_webform_OFF.gif")."\" border=\"0\" alt=\"Web Form\" /></span><br />\n";}
                            if ($enable_second_webform > 0)
                                {echo "<span style=\"background-color: #FFFFFF\" id=\"WebFormSpanTwo\"><img src=\"./images/"._QXZ("vdc_LB_webform_two_OFF.gif")."\" border=\"0\" alt=\"Web Form 2\" /></span><br />\n";}
                            if ($enable_third_webform > 0)
                                {echo "<span style=\"background-color: #FFFFFF\" id=\"WebFormSpanThree\"><img src=\"./images/"._QXZ("vdc_LB_webform_three_OFF.gif")."\" border=\"0\" alt=\"Web Form 3\" /></span><br />\n";}
                            ?>
                            <!--<font class="body_small_bold"><span id="ParkCounterSpan"> &nbsp; </span></font><br />-->
                            <span style="background-color: <?php echo $MAIN_COLOR ?>" id="ParkControl"><img src="./images/<?php echo _QXZ("vdc_LB_parkcall_OFF.gif"); ?>" border="0" alt="Park Call" /></span><br />
                            <?php
                            if ( ($ivr_park_call=='ENABLED') or ($ivr_park_call=='ENABLED_PARK_ONLY') )
                                {echo "<span style=\"background-color: $MAIN_COLOR\" id=\"ivrParkControl\"><img src=\"./images/"._QXZ("vdc_LB_ivrparkcall_OFF.gif")."\" border=\"0\" alt=\"IVR Park Call\" /></span><br />\n";}
                            else
                                {echo "<span style=\"background-color: $MAIN_COLOR\" id=\"ivrParkControl\"></span>\n";}
                            ?>
                            <span style="background-color: <?php echo $MAIN_COLOR ?>" id="XferControl"><img src="./images/<?php echo _QXZ("vdc_LB_transferconf_OFF.gif"); ?>" border="0" alt="Transfer - Conference" /></span><br />

                            <?php
                            if ($quick_transfer_button_enabled > 0)
                                {echo "<span style=\"background-color: $MAIN_COLOR\" id=\"QuickXfer\"><img src=\"./images/"._QXZ("vdc_LB_quickxfer_OFF.gif")."\" border=\"0\" alt=\"Quick Transfer\" /></span><br />\n";}
                            if ($custom_3way_button_transfer_enabled > 0)
                                {echo "<span style=\"background-color: $MAIN_COLOR\" id=\"CustomXfer\"><img src=\"./images/"._QXZ("vdc_LB_customxfer_OFF.gif")."\" border=\"0\" alt=\"Custom Transfer\" /></span><br />\n";}
                            ?>

                            <span id="ReQueueCall"></span>

                            <?php
                            if ($call_requeue_button > 0)
                                {echo "<br />\n";}
                            ?>

                            <span style="background-color: #FFCCFF" id="HangupControl"><img src="./images/<?php echo _QXZ("vdc_LB_hangupcustomer_OFF.gif"); ?>" border="0" alt="Hangup Customer" /></span><br />
                            <div class="text_input" id="SendDTMFdiv">
                                <span style="background-color: <?php echo $MAIN_COLOR ?>" id="SendDTMF">
                                    <a href="#" onclick="SendConfDTMF(session_id,'YES');return false;">
                                        <img src="./images/<?php echo _QXZ("vdc_LB_senddtmf.gif"); ?>" border="0" alt="Send DTMF" align="bottom" />
                                    </a>
                                    <input class="mt-2 form-control" type="text" size="5" name="conf_dtmf" class="cust_form" value="" maxlength="50" />
                            </div>
                            </span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <span id="busycallsdebug"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Barra lateral -->

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>

                <!-- Barra de botones -->
                <div class="btn-toolbar mb-2 mb-md-0">

                    <!--DiaLlOgButtonspan-->
                    <span id="DiaLlOgButtonspan">
                        <span id="ManuaLDiaLButtons">
                            <font class="body_text">
                                <span id="MDstatusSpan">
                                    <a class="btn btn-sm btn-outline-secondary me-2" href="#" onclick="NeWManuaLDiaLCalL('NO','','','','','YES','YES');return false;">
                                        <?php echo _QXZ("MANUAL DIAL"); ?>
                                    </a>
                                </span>
                                <?php if ($agentcall_manual == '1') { ?>
                                    <a class="btn btn-sm btn-outline-secondary me-2" href="#" onclick="NeWManuaLDiaLCalL('FAST','','','','','YES','YES');return false;">
                                        <?php echo _QXZ("FAST DIAL"); ?>
                                    </a>
                                <?php } ?>
                            </font>
                        </span>
                        <span id="CallLogButtons">
                            <font class="body_text">
                                <span id="CallLogLinkSpan">
                                    <a class="btn btn-sm btn-outline-secondary me-2" href="#" onclick="VieWCalLLoG();return false;">
                                        <?php echo _QXZ("VIEW CALL LOG"); ?>
                                    </a>
                                </span>
                            </font>
                        </span>
                    </span>

                    <!--DiaLlOgButtonspan-->
                    <span id="AgentViewLinkSpan">
                        <span id="AgentViewLink">
                            <a class="btn btn-sm btn-outline-secondary me-2" href="#" onclick="AgentsViewOpen('AgentViewSpan','open');return false;">
                                <?=_QXZ("Agents View +");?>
                            </a>
                        </span>
                    </span>

                    <!--MainCommit-->
                    <span id="MainCommit">
                        <a class="btn btn-sm btn-outline-secondary me-2" href="#" onclick="CustomerData_update('YES')"><?=_QXZ("commit");?></a>
                    </span>
                </div>
            </div>
            <!-- Barra de botones -->

            <!-- Contents section -->
            <section>

                <!-- ZZZZZZZZZZZZ  tabs -->
                <?php
                    include 'tabs.php';
                ?>

                <span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="WelcomeBoxA">
                    <table border="0" bgcolor="#FFFFFF" width="<?php echo $CAwidth ?>px" height="<?php echo $HKwidth ?>px"><tr><td align="center"><br /><span id="WelcomeBoxAt"><?php echo _QXZ("Agent Screen"); ?></span></td></tr></table>
                </span>

                <!-- ZZZZZZZZZZZZ  customer info -->
                <?php
                    include '../modern-vicidial/agc/vicidial/panel/customer_info.php';
                ?>

                <!-- ZZZZZZZZZZZZ  action links -->
                <?php
                    include '../modern-vicidial/agc/vicidial/panel/actions.php';
                ?>
                <footer>
                    <span id="MaiNfooterspan">
                        <span id="blind_monitor_notice_span"><b><font color="red"> &nbsp; &nbsp; <span id="blind_monitor_notice_span_contents"></span></font></b></span>
                        <table bgcolor="<?php echo $MAIN_COLOR ?>" id="MaiNfooter"><tr height="32px"><td height="32px"><font face="Arial,Helvetica" size="1"><?php echo _QXZ("VERSION:"); ?> <?php echo $version ?> &nbsp; <?php echo _QXZ("BUILD:"); ?> <?php echo $build ?> &nbsp; &nbsp; <?php echo _QXZ("Server:"); ?> <?php echo $server_ip ?>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font><br />
                        <font class="body_small">
                        <span id="busycallsdisplay"><a href="#"  onclick="conf_channels_detail('SHOW');"><?php echo _QXZ("Show conference call channel information"); ?></a>
                        <br /><br />&nbsp;</span></font></td><td align="right" height="32px">
                        </td></tr>
                        <tr><td colspan="3"><span id="outboundcallsspan"></span></td></tr>
                        <tr><td colspan="3"><font class="body_small"><span id="AgentAlertSpan">
                        <?php
                        if ( (preg_match('/ON/',$VU_alert_enabled)) and ($AgentAlert_allowed > 0) )
                            {echo "<a href=\"#\" onclick=\"alert_control('OFF');return false;\">"._QXZ("Alert is ON")."</a>";}
                        else
                            {echo "<a href=\"#\" onclick=\"alert_control('ON');return false;\">"._QXZ("Alert is OFF")."</a>";}
                        ?>
                        </span></font></td></tr>
                        <tr><td colspan="3">
                        <font class="body_small">
                        </font>
                        </td></tr></table>
                    </span>
                </footer>

            </section>
            <!-- Contents section -->
        </main>
    </div>
</div>