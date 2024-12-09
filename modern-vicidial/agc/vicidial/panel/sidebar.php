
        <!-- Barra lateral -->
        <nav id="sidebarMenu" class="col-md-2 d-md-block sidebar collapse overflow-scroll" style="background: #060e23 !important;">
            <div class="position-sticky pt-3 text-white">

                <div class="mx-auto" style="max-width:200px;">

                    <!-- First ul -->
                    <div class="px-4">

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <div class="">
                                    <?php
                                        /*if ($webphone_location == 'bar')
                                        {
                                            echo "<img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";
                                        }*/
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
                                    <font class="text-white">
                                        <?php echo _QXZ("STATUS:"); ?>
                                        <span id="MainStatuSSpan"></span>
                                        <span id=timer_alt_display></span>
                                        <span id=manual_auto_next_display></span>
                                    </font>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="">
                                    <span id="DiaLControl">
                                        <a class="btn btn-secondary" href="#" onclick="ManualDialNext('','','','','','0','','','YES');">
                                            <img class="img-fluid" src="./images/<?php echo _QXZ("vdc_LB_dialnextnumber_OFF.gif"); ?>" border="0" alt="Dial Next Number" />
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="">
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
                                            <a href="#" onclick="next_call_pause_click();return false;"><?php echo _QXZ("Next Call Pause"); ?></a>
                                        </span>
                                    </font>

                                    <!--
                                    <?php
                                    if ( ($manual_dial_preview) and ($auto_dial_level==0) )
                                    {echo "<font class=\"\"> <input class=\"form-check-input\" type=\"checkbox\" name=\"LeadPreview\" size=\"1\" value=\"0\" /> LEAD PREVIEW<br /></font>";}
                                    if ( ($alt_phone_dialing) and ($auto_dial_level==0) )
                                    {echo "<font class=\"\"> <input class=\"form-check-input\" type=\"checkbox\" name=\"DiaLAltPhonE\" size=\"1\" value=\"0\" /> ALT PHONE DIAL<br /></font>";}
                                    ?> -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="">
                                    <small class="text-white"><?php echo _QXZ("RECORDING FILE:"); ?></small>
                                    <small class="text-white"><span id="RecorDingFilename"></span></small><br>
                                    <small class="text-white"><?php echo _QXZ("RECORD ID:"); ?></small>
                                    <small class="text-white"><span id="RecorDID"></span></small>
                                    <span class="mb-2" id="RecorDControl">
                                        <a href="#" onclick="conf_send_recording('MonitorConf',session_id,'','','','YES');return false;">
                                            <img class="img-fluid" src="./images/<?php echo _QXZ("$start_recording_GIF"); ?>" border="0" alt="Start Recording" />
                                        </a>
                                    </span>
                                    <span class="mb-2" id="RecorDMute"></span>
                                </div>
                            </li>
                            <?php
                                if ($SSenable_first_webform > 0)
                                {
                                    echo "
                                        <li class=\"nav-item\">
                                            <div class=\"\">
                                                <span class=\"mb-2\" id=\"WebFormSpan\">
                                                    <img class=\"img-fluid\" src=\"./images/"._QXZ("vdc_LB_webform_OFF.gif")."\" border=\"0\" alt=\"Web Form\" />
                                                </span>
                                            </div>
                                        </li>";
                                }
                                if ($enable_second_webform > 0)
                                {
                                    echo "
                                        <li class=\"nav-item\">
                                            <div class=\"\">
                                                <span class=\"mb-2\" id=\"WebFormSpanTwo\">
                                                    <img class=\"img-fluid\" src=\"./images/"._QXZ("vdc_LB_webform_two_OFF.gif")."\" border=\"0\" alt=\"Web Form 2\" />
                                                </span>
                                            </div>
                                        </li>
                                    ";
                                }
                                if ($enable_third_webform > 0)
                                {
                                    echo "
                                        <li class=\"nav-item\">
                                            <div class=\"\">
                                                <span class=\"mb-2\" id=\"WebFormSpanThree\">
                                                    <img class=\"img-fluid\" src=\"./images/"._QXZ("vdc_LB_webform_three_OFF.gif")."\" border=\"0\" alt=\"Web Form 3\" />
                                                </span>
                                            </div>
                                        </li>";
                                }
                            ?>
                        </ul>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <div class="">
                                    <font class="body_small_bold"><span id="ParkCounterSpan"></span></font>
                                    <span class="mb-2" id="ParkControl">
                                        <img class="img-fluid" src="./images/<?php echo _QXZ("vdc_LB_parkcall_OFF.gif"); ?>" border="0" alt="Park Call" />
                                    </span>
                                    <?php
                                        if ( ($ivr_park_call=='ENABLED') or ($ivr_park_call=='ENABLED_PARK_ONLY') )
                                        {
                                            echo "
                                                <span class=\"mb-2\" id=\"ivrParkControl\">
                                                    <img class=\"img-fluid\" src=\"./images/"._QXZ("vdc_LB_ivrparkcall_OFF.gif")."\" border=\"0\" alt=\"IVR Park Call\" />
                                                </span>";
                                        }
                                        else
                                        {
                                            echo "<span class=\"mb-2\" id=\"ivrParkControl\"></span>";
                                        }
                                    ?>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="">
                                    <span class="mb-2" id="XferControl">
                                        <img class="img-fluid" src="./images/<?php echo _QXZ("vdc_LB_transferconf_OFF.gif"); ?>" border="0" alt="Transfer - Conference" />
                                    </span>
                                </div>
                            </li>
                            <?php
                                if ($quick_transfer_button_enabled > 0)
                                {
                                    echo "
                                        <li class=\"nav-item\">
                                            <div class=\"\">
                                                <span class=\"mb-2\" id=\"QuickXfer\">
                                                    <img class=\"img-fluid\" src=\"./images/"._QXZ("vdc_LB_quickxfer_OFF.gif")."\" border=\"0\" alt=\"Quick Transfer\" />
                                                </span>
                                            </div>
                                        </li>";
                                }
                                if ($custom_3way_button_transfer_enabled > 0)
                                {
                                    echo "
                                        <li class=\"nav-item\">
                                            <div class=\"\">
                                                <span class=\"mb-2\" id=\"CustomXfer\">
                                                    <img class=\"img-fluid\" src=\"./images/"._QXZ("vdc_LB_customxfer_OFF.gif")."\" border=\"0\" alt=\"Custom Transfer\" />
                                                </span>
                                            </div>
                                        </li>";
                                }
                            ?>

                            <li class="nav-item">
                                <div class="">
                                    <span id="ReQueueCall"></span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="">
                                    <span class="mb-2" id="HangupControl">
                                        <img class="img-fluid" src="./images/<?php echo _QXZ("vdc_LB_hangupcustomer_OFF.gif"); ?>" border="0" alt="Hangup Customer" />
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="">
                                    <div class="text_input" id="SendDTMFdiv">
                                        <span id="SendDTMF">
                                            <a href="#" onclick="SendConfDTMF(session_id,'YES');return false;">
                                                <img class="img-fluid" src="./images/<?php echo _QXZ("vdc_LB_senddtmf.gif"); ?>" border="0" alt="Send DTMF" align="bottom" />
                                            </a>
                                            <input class="mt-2 form-control form-control-sm" type="text" size="5" name="conf_dtmf" class="cust_form" value="" maxlength="50" />
                                        </span>
                                    </div>
                                    <span id="busycallsdebug"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Barra lateral -->
