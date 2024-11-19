

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <div class="nav-link">
                            <span>Estado:</span>
                            <span style="background-color: #CCFFCC" id="DiaLControl">
                                <a href="#" onclick="ManualDialNext('','','','','','0','','','YES');">
                                    <img src="./images/<?php echo _QXZ("vdc_LB_dialnextnumber_OFF.gif"); ?>" border="0" alt="Dial Next Number" />
                                </a>
                            </span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <h2>Section title</h2>
        
            <!-- Contents section -->
            <section>

                <span id="MainPanel">
                    <table border="0" width="<?php echo $MNwidth ?>px" id="MainTable">
                    <tr><td colspan="3">
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
                    <font class="body_text"> <?php echo _QXZ("STATUS:"); ?> <span id="MainStatuSSpan"></span><span id=timer_alt_display></span><span id=manual_auto_next_display></span></font></td></tr>
                    <tr><td colspan="3"><span id="busycallsdebug"></span></td></tr>
                    <tr><td width="150px" align="left" valign="top">
                    <font class="body_text"><center>
                    <!--<span style="background-color: #CCFFCC" id="DiaLControl"><a href="#" onclick="ManualDialNext('','','','','','0','','','YES');"><img src="./images/<?php echo _QXZ("vdc_LB_dialnextnumber_OFF.gif"); ?>" border="0" alt="Dial Next Number" /></a></span><br />-->
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
                    <?php echo _QXZ("RECORDING FILE:"); ?><br />
                    </center>
                    <font class="body_tiny"><span id="RecorDingFilename"></span></font><br />
                    <?php echo _QXZ("RECORD ID:"); ?> <font class="body_small"><span id="RecorDID"></span></font><br />
                    <center>
                    <!-- <a href=\"#\" onclick=\"conf_send_recording('MonitorConf','" + head_conf + "','','','');return false;\">Record</a> -->
                    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="RecorDControl"><a href="#" onclick="conf_send_recording('MonitorConf',session_id,'','','','YES');return false;"><img src="./images/<?php echo _QXZ("$start_recording_GIF"); ?>" border="0" alt="Start Recording" /></a></span><br />
                    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="RecorDMute"></span>
                    <?php
                    if (!preg_match("/NOGAP/",$SSrecording_buttons))
                        {echo "<span id=\"SpacerSpanA\"><img src=\"./images/"._QXZ("blank.gif")."\" width=\"145px\" height=\"16px\" border=\"0\" /></span><br />\n";}
                    if ($SSenable_first_webform > 0)
                        {echo "<span style=\"background-color: #FFFFFF\" id=\"WebFormSpan\"><img src=\"./images/"._QXZ("vdc_LB_webform_OFF.gif")."\" border=\"0\" alt=\"Web Form\" /></span><br />\n";}
                    if ($enable_second_webform > 0)
                        {echo "<span style=\"background-color: #FFFFFF\" id=\"WebFormSpanTwo\"><img src=\"./images/"._QXZ("vdc_LB_webform_two_OFF.gif")."\" border=\"0\" alt=\"Web Form 2\" /></span><br />\n";}
                    if ($enable_third_webform > 0)
                        {echo "<span style=\"background-color: #FFFFFF\" id=\"WebFormSpanThree\"><img src=\"./images/"._QXZ("vdc_LB_webform_three_OFF.gif")."\" border=\"0\" alt=\"Web Form 3\" /></span><br />\n";}
                    ?>
                    <font class="body_small_bold"><span id="ParkCounterSpan"> &nbsp; </span></font><br />
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

                    <span id="SpacerSpanC"><img src="./images/<?php echo _QXZ("blank.gif"); ?>" width="145px" height="16px" border="0" /></span><br />
                    <span style="background-color: #FFCCFF" id="HangupControl"><img src="./images/<?php echo _QXZ("vdc_LB_hangupcustomer_OFF.gif"); ?>" border="0" alt="Hangup Customer" /></span><br />
                    <span id="SpacerSpanD"><img src="./images/<?php echo _QXZ("blank.gif"); ?>" width="145px" height="16px" border="0" /></span><br />
                    <div class="text_input" id="SendDTMFdiv"><span style="background-color: <?php echo $MAIN_COLOR ?>" id="SendDTMF"><a href="#" onclick="SendConfDTMF(session_id,'YES');return false;"><img src="./images/<?php echo _QXZ("vdc_LB_senddtmf.gif"); ?>" border="0" alt="Send DTMF" align="bottom" /></a>  <input type="text" size="5" name="conf_dtmf" class="cust_form" value="" maxlength="50" /></div></span><br />
                    </center>
                    </font>
                    </td>
                    <td width="<?php echo $SDwidth ?>px" align="left" valign="top">
                    <input type="hidden" name="lead_id" id="lead_id" value="" />
                    <input type="hidden" name="list_id" id="list_id" value="" />
                    <input type="hidden" name="entry_list_id" id="entry_list_id" value="" />
                    <input type="hidden" name="list_name" id="list_name" value="" />
                    <input type="hidden" name="list_description" id="list_description" value="" />
                    <input type="hidden" name="called_count" id="called_count" value="" />
                    <input type="hidden" name="rank" id="rank" value="" />
                    <input type="hidden" name="owner" id="owner" value="" />
                    <input type="hidden" name="gmt_offset_now" id="gmt_offset_now" value="" />
                    <input type="hidden" name="gender" id="gender" value="" />
                    <input type="hidden" name="date_of_birth" id="date_of_birth" value="" />
                    <input type="hidden" name="country_code" id="country_code" value="" />
                    <input type="hidden" name="uniqueid" id="uniqueid" value="" />
                    <input type="hidden" name="callserverip" id="callserverip" value="" />
                    <input type="hidden" name="SecondS" id="SecondS" value="" />
                    <input type="hidden" name="email_row_id" id="email_row_id" value="" />
                    <input type="hidden" name="chat_id" id="chat_id" value="" />
                    <input type="hidden" name="customer_chat_id" id="customer_chat_id" value="" />

                    <!-- ZZZZZZZZZZZZ  customer info -->
                <?php
                    include '../modern-vicidial/agc/vicidial/panel/customer_info.php';
                ?>	

            </section>
            <!-- Contents section -->
        </main>
    </div>
</div>