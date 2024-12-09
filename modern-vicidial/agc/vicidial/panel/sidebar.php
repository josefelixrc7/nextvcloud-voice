
        <!-- Barra lateral -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse overflow-scroll">
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
                                {
                                    $alt_phone_selected='CHECKED';
                                }
                            ?>	
                            <span id="post_phone_time_diff_span">
                                <b>
                                    <font color="red">
                                        <span id="post_phone_time_diff_span_contents"></span>
                                    </font>
                                </b>
                            </span>
                            <font class="body_text">
                                <?php echo _QXZ("STATUS:"); ?>
                                <span id="MainStatuSSpan"></span>
                                <span id=timer_alt_display></span>
                                <span id=manual_auto_next_display></span>
                            </font>
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
                            <span id="DiaLLeaDPrevieW">
                                <input class="form-check-input" type="checkbox" name="LeadPreview" size="1" value="0" />
                                <?php echo _QXZ("LEAD PREVIEW"); ?><br />
                            </span>
                            <span id="DiaLDiaLAltPhonE">
                                <font class="preview_text">
                                    <input type="checkbox" name="DiaLAltPhonE" size="1" value="0" <?php echo $alt_phone_selected ?>/>
                                    <?php echo _QXZ(" ALT PHONE DIAL"); ?><br />
                                </font>
                            </span>
                            <font class="skb_text">
                                <span id="NexTCalLPausE">
                                    <a href="#" onclick="next_call_pause_click();return false;"><?php echo _QXZ("Next Call Pause"); ?></a> <br />
                                </span>
                            </font>

                            <!--
                            <?php
                            if ( ($manual_dial_preview) and ($auto_dial_level==0) )
                            {echo "<font class=\"\"> <input class=\"form-check-input\" type=\"checkbox\" name=\"LeadPreview\" size=\"1\" value=\"0\" /> LEAD PREVIEW<br /></font>";}
                            if ( ($alt_phone_dialing) and ($auto_dial_level==0) )
                            {echo "<font class=\"\"> <input class=\"form-check-input\" type=\"checkbox\" name=\"DiaLAltPhonE\" size=\"1\" value=\"0\" /> ALT PHONE DIAL<br /></font>";}
                            ?> -->

                            <small class="text-muted"><?php echo _QXZ("RECORDING FILE:"); ?></small><br />
                            <font class="body_tiny">
                                <span id="RecorDingFilename"></span>
                            </font><br />
                            <small class="text-muted"><?php echo _QXZ("RECORD ID:"); ?></small>
                            <font class="body_small">
                                <span id="RecorDID"></span>
                            </font><br />

                            <!-- <a href=\"#\" onclick=\"conf_send_recording('MonitorConf','" + head_conf + "','','','');return false;\">Record</a> -->
                            <span class="mb-2" style="background-color: <?php echo $MAIN_COLOR ?>" id="RecorDControl">
                                <a href="#" onclick="conf_send_recording('MonitorConf',session_id,'','','','YES');return false;">
                                    <img src="./images/<?php echo _QXZ("$start_recording_GIF"); ?>" border="0" alt="Start Recording" />
                                </a>
                            </span><br />
                            <span class="mb-2" style="background-color: <?php echo $MAIN_COLOR ?>" id="RecorDMute"></span>
                            <?php
                                /*if (!preg_match("/NOGAP/",$SSrecording_buttons))
                                    {echo "<span id=\"SpacerSpanA\"><img src=\"./images/"._QXZ("blank.gif")."\" width=\"145px\" height=\"16px\" border=\"0\" /></span><br />\n";}
                                */

                                if ($SSenable_first_webform > 0)
                                {
                                    echo "
                                        <span class=\"mb-2\" style=\"background-color: #FFFFFF\" id=\"WebFormSpan\">
                                            <img src=\"./images/"._QXZ("vdc_LB_webform_OFF.gif")."\" border=\"0\" alt=\"Web Form\" />
                                        </span><br />\n";
                                }
                                if ($enable_second_webform > 0)
                                {
                                    echo "
                                        <span class=\"mb-2\" style=\"background-color: #FFFFFF\" id=\"WebFormSpanTwo\">
                                            <img src=\"./images/"._QXZ("vdc_LB_webform_two_OFF.gif")."\" border=\"0\" alt=\"Web Form 2\" />
                                        </span><br />\n";
                                }
                                if ($enable_third_webform > 0)
                                {
                                    echo "
                                        <span class=\"mb-2\" style=\"background-color: #FFFFFF\" id=\"WebFormSpanThree\">
                                            <img src=\"./images/"._QXZ("vdc_LB_webform_three_OFF.gif")."\" border=\"0\" alt=\"Web Form 3\" />
                                        </span><br />\n";
                                }
                            ?>

                            <font class="body_small_bold"><span id="ParkCounterSpan"> &nbsp; </span></font><br />
                            <span class="mb-2" style="background-color: <?php echo $MAIN_COLOR ?>" id="ParkControl">
                                <img src="./images/<?php echo _QXZ("vdc_LB_parkcall_OFF.gif"); ?>" border="0" alt="Park Call" />
                            </span><br />
                            <?php
                                if ( ($ivr_park_call=='ENABLED') or ($ivr_park_call=='ENABLED_PARK_ONLY') )
                                {
                                    echo "
                                        <span class=\"mb-2\" style=\"background-color: $MAIN_COLOR\" id=\"ivrParkControl\">
                                            <img src=\"./images/"._QXZ("vdc_LB_ivrparkcall_OFF.gif")."\" border=\"0\" alt=\"IVR Park Call\" />
                                        </span><br />\n";}
                                else
                                {
                                    echo "<span class=\"mb-2\" style=\"background-color: $MAIN_COLOR\" id=\"ivrParkControl\"></span>\n";
                                }
                            ?>
                            <span class="mb-2" style="background-color: <?php echo $MAIN_COLOR ?>" id="XferControl">
                                <img src="./images/<?php echo _QXZ("vdc_LB_transferconf_OFF.gif"); ?>" border="0" alt="Transfer - Conference" />
                            </span><br />

                            <?php
                                if ($quick_transfer_button_enabled > 0)
                                {
                                    echo "
                                        <span class=\"mb-2\" style=\"background-color: $MAIN_COLOR\" id=\"QuickXfer\">
                                            <img src=\"./images/"._QXZ("vdc_LB_quickxfer_OFF.gif")."\" border=\"0\" alt=\"Quick Transfer\" />
                                        </span><br />\n";}
                                if ($custom_3way_button_transfer_enabled > 0)
                                {
                                    echo "
                                        <span class=\"mb-2\" style=\"background-color: $MAIN_COLOR\" id=\"CustomXfer\">
                                            <img src=\"./images/"._QXZ("vdc_LB_customxfer_OFF.gif")."\" border=\"0\" alt=\"Custom Transfer\" />
                                        </span><br />\n";}
                            ?>

                            <span id="ReQueueCall"></span>

                            <?php
                                if ($call_requeue_button > 0)
                                    {echo "<br />\n";}
                            ?>

                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <span class="mb-2" style="background-color: #FFCCFF" id="HangupControl">
                                <img src="./images/<?php echo _QXZ("vdc_LB_hangupcustomer_OFF.gif"); ?>" border="0" alt="Hangup Customer" />
                            </span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <div class="text_input" id="SendDTMFdiv">
                                <span style="background-color: <?php echo $MAIN_COLOR ?>" id="SendDTMF">
                                    <a href="#" onclick="SendConfDTMF(session_id,'YES');return false;">
                                        <img src="./images/<?php echo _QXZ("vdc_LB_senddtmf.gif"); ?>" border="0" alt="Send DTMF" align="bottom" />
                                    </a>
                                    <input class="mt-2 form-control form-control-sm" type="text" size="5" name="conf_dtmf" class="cust_form" value="" maxlength="50" />
                                </span>
                            </div>
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
