
<span class="w-100 h-100 overflow-scroll" tabindex="-1" style="background:rgba(0, 0, 0, 0.5);position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="TransferMain">
    <div class="w-50 mx-auto mt-2">

		<div class="card">
			<div class="card-header">
				<h5 class="d-flex">
					<span class="w-auto"><?php echo _QXZ("Transfer - Conference:"); ?></span>
					<!--<a class="btn btn-close ms-auto" href="#" onclick="CalLLoGVieWClose();return false;"></a>-->
				</h5>
			</div>
			<div class="card-body">
                    
                <table class="table">
                    <tr valign="top">
                        <td align="left" height="30px">
                            <span class="text_input" id="TransferMaindiv">
                                <font class="body_text">
                                    <!--<img src="./images/<?php echo _QXZ("vdc_XB_header.gif"); ?>" border="0" alt="Transfer - Conference" style="vertical-align:middle" />-->
                                    <span><?php echo _QXZ("Transfer conference functions"); ?></span>
                                    <span id="XfeRDiaLGrouPSelecteD"></span> &nbsp; &nbsp;
                                    <span id="XfeRCID"></span><br />
                                    
                                    <table class="table table-striped">
                                        <tr>
                                            <td align="left">
                                                <span id="XfeRGrouPLisT">
                                                    <select size="1" name="XfeRGrouP" id="XfeRGrouP" class="form-select" onChange="XferAgentSelectLink();return false;">
                                                        <option>-- <?php echo _QXZ("SELECT A GROUP TO SEND YOUR CALL TO"); ?> --</option>
                                                    </select>
                                                </span>
                                                <span id="LocalCloser">
                                                    <img src="./images/<?php echo _QXZ("vdc_XB_localcloser_OFF.gif"); ?>" border="0" alt="LOCAL CLOSER" style="vertical-align:middle" />
                                                </span>
                                            </td>
                                            <td align="left">
                                                <span id="HangupXferLine">
                                                    <img src="./images/<?php echo _QXZ("vdc_XB_hangupxferline_OFF.gif"); ?>" border="0" alt="Hangup Xfer Line" style="vertical-align:middle" />
                                                </span>
                                                &nbsp; 
                                                <span id="ParkXferLine">
                                                    <a class="btn btn-secondary">
                                                        <img src="./images/<?php echo _QXZ("vdc_XB_parkxferline_OFF.gif"); ?>" border="0" alt="Park Xfer Line" style="vertical-align:middle" />
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2">
                                                <!--<img src="./images/<?php echo _QXZ("vdc_XB_seconds.gif"); ?>" border="0" alt="seconds" style="vertical-align:middle" />-->
                                                <span><?php echo _QXZ("Seconds"); ?></span>
                                                <input type="text" size="2" name="xferlength" id="xferlength" maxlength="4" class="form-control" readonly="readonly" />
                                                &nbsp; 
                                                <!--<img src="./images/<?php echo _QXZ("vdc_XB_channel.gif"); ?>" border="0" alt="channel" style="vertical-align:middle" />-->
                                                <span><?php echo _QXZ("Channel"); ?></span>
                                                <input type="text" size="12" name="xferchannel" id="xferchannel" maxlength="200" class="form-control" readonly="readonly" />
                                            </td>
                                            <td align="left">
                                                <span id="consultative_checkbox">
                                                    <input type="checkbox" name="consultativexfer" id="consultativexfer" size="1" value="0">
                                                    <font class="body_tiny"> <?php echo _QXZ("CONSULTATIVE"); ?> &nbsp;</font>
                                                </span>
                                            </td>
                                            <td align="left">
                                                <span id="HangupBothLines"><a href="#" onclick="bothcall_send_hangup('YES');return false;"><img src="./images/<?php echo _QXZ("vdc_XB_hangupbothlines.gif"); ?>" border="0" alt="Hangup Both Lines" style="vertical-align:middle" /></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2">
                                                <img src="./images/<?php echo _QXZ("vdc_XB_number.gif"); ?>" border="0" alt="Number to call" style="vertical-align:middle" />
                                                &nbsp; 
                                                <?php
                                                if ($hide_xfer_number_to_dial=='ENABLED')
                                                {
                                                    ?>
                                                    <input type="hidden" name="xfernumber" id="xfernumber" value="<?php echo $preset_populate ?>" /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <input type="text" size="20" name="xfernumber" id="xfernumber" maxlength="25" class="form-control" value="<?php echo $preset_populate ?>" /> &nbsp;
                                                    <?php
                                                }
                                                ?>
                                                <span id="agentdirectlink">
                                                    <font class="body_small_bold">
                                                        <a class="btn btn-primary" href="#" onclick="XferAgentSelectLaunch();return false;"><?php echo _QXZ("AGENTS"); ?></a>
                                                    </font>
                                                </span>
                                                <input type="hidden" name="xferuniqueid" id="xferuniqueid" />
                                                <input type="hidden" name="xfername" id="xfername" />
                                                <input type="hidden" name="xfernumhidden" id="xfernumhidden" />
                                            </td>
                                            <td align="left">
                                                <span id="dialoverride_checkbox">
                                                    <input type="checkbox" name="xferoverride" id="xferoverride" size="1" value="0">
                                                    <font class="body_tiny" /> <?php echo _QXZ("DIAL OVERRIDE"); ?>	<?php if ($manual_dial_override_field == 'DISABLED'){echo " "._QXZ("DISABLED");}?></font>
                                                </span>
                                            </td>
                                            <td align="left">
                                                <span style="background-color: <?php echo $MAIN_COLOR ?>" id="Leave3WayCall">
                                                    <a  href="#" onclick="leave_3way_call('FIRST','YES');return false;">
                                                        <img src="./images/<?php echo _QXZ("vdc_XB_leave3waycall.gif"); ?>" border="0" alt="LEAVE 3-WAY CALL" style="vertical-align:middle" />
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td align="left" COLSPAN="4">
                                                <span style="background-color: <?php echo $MAIN_COLOR ?>" id="DialBlindTransfer">
                                                    <img src="./images/<?php echo _QXZ("vdc_XB_blindtransfer_OFF.gif"); ?>" border="0" alt="Dial Blind Transfer" style="vertical-align:middle" />
                                                </span>
                                                &nbsp;
                                                <span style="background-color: <?php echo $MAIN_COLOR ?>" id="DialWithCustomer">
                                                    <a href="#" onclick="SendManualDial('YES','YES');return false;">
                                                        <img src="./images/<?php echo _QXZ("vdc_XB_dialwithcustomer.gif"); ?>" border="0" alt="Dial With Customer" style="vertical-align:middle" />
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span style="background-color: <?php echo $MAIN_COLOR ?>" id="ParkCustomerDial">
                                                    <a href="#" onclick="xfer_park_dial('YES');return false;">
                                                        <img src="./images/<?php echo _QXZ("vdc_XB_parkcustomerdial.gif"); ?>" border="0" alt="Park Customer Dial" style="vertical-align:middle" />
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <?php
                                                if ($enable_xfer_presets=='ENABLED')
                                                {
                                                    ?>
                                                    <span style="background-color: <?php echo $MAIN_COLOR ?>" id="PresetPullDown">
                                                        <a href="#" onclick="generate_presets_pulldown('YES');return false;">
                                                            <img src="./images/<?php echo _QXZ("vdc_XB_presetsbutton.gif"); ?>" border="0" alt="Presets Button" style="vertical-align:middle" />
                                                        </a>
                                                    </span>
                                                    <?php
                                                }
                                                else
                                                {
                                                    if ( ($enable_xfer_presets=='CONTACTS') and ($VU_preset_contact_search != 'DISABLED') )
                                                    {
                                                        ?>
                                                        <span style="background-color: <?php echo $MAIN_COLOR ?>" id="ContactPullDown">
                                                            <a href="#" onclick="generate_contacts_search('YES');return false;">
                                                                <img src="./images/<?php echo _QXZ("vdc_XB_contactsbutton.gif"); ?>" border="0" alt="Contacts Button" style="vertical-align:middle" />
                                                            </a>
                                                        </span>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <div class="mt-2">
                                                                <a class="btn btn-secondary btn-sm" href="#" onclick="DtMf_PreSet_a();return false;">D1</a> 
                                                                <a class="btn btn-secondary btn-sm" href="#" onclick="DtMf_PreSet_b();return false;">D2</a>
                                                                <a class="btn btn-secondary btn-sm" href="#" onclick="DtMf_PreSet_c();return false;">D3</a>
                                                                <a class="btn btn-secondary btn-sm" href="#" onclick="DtMf_PreSet_d();return false;">D4</a>
                                                                <a class="btn btn-secondary btn-sm" href="#" onclick="DtMf_PreSet_e();return false;">D5</a>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                &nbsp;
                                                <span style="background-color: <?php echo $MAIN_COLOR ?>" id="DialBlindVMail">
                                                    <img src="./images/<?php echo _QXZ("vdc_XB_ammessage_OFF.gif"); ?>" border="0" alt="Blind Transfer VMail Message" style="vertical-align:middle" />
                                                </span>
                                            </td>
                                        </tr>

                                    </table>

                                </font>
                            </span>
                        </td>
                    </tr>
                </table>

            </div>
			<div class="card-footer">
				
			</div>
			
		</div>

	</div>
</span>	

