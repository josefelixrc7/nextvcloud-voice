
<span class="w-100 h-100 overflow-scroll" tabindex="-1" style="background:rgba(0, 0, 0, 0.5);position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="NeWManuaLDiaLBox">
    <div class="w-50 mx-auto mt-5">

        <div class="card">

            <div class="card-header">
                <h5>
                    <?php echo _QXZ("NEW MANUAL DIAL LEAD FOR %1s in campaign %2s:",0,'',$VD_login,$VD_campaign); ?>
                </h5>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <section class="col-12 col-sm-6">
                        <div class="mb-3">
                            <span><?php echo _QXZ("Dial Code:"); ?></span>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" size="7" maxlength="10" name="MDDiaLCodE" id="MDDiaLCodE" value="<?php echo $default_phone_code ?>" />
                            <span class="text-muted"><?php echo _QXZ("(This is usually a 1 in the USA-Canada)"); ?></span>
                        </div>
                    </section>

                    <section class="col-12 col-sm-6">
                        <div class="mb-3">
                            <span><?php echo _QXZ("Phone Number:"); ?></span>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="text" size="14" maxlength="18" name="MDPhonENumbeR" id="MDPhonENumbeR" value="" />
                            <span class="text-muted"><?php echo _QXZ("(digits only)"); ?></span>

                            <input type="hidden" name="MDPhonENumbeRHiddeN" id="MDPhonENumbeRHiddeN" value="" />
                            <input type="hidden" name="MDLeadID" id="MDLeadID" value="" />
                            <input type="hidden" name="MDType" id="MDType" value="" />
                        </div>
                    </section>
                </div>
                <!--<section>
                    <div class="mb-3">
                        <span class="text-muted"><?php echo _QXZ("NEW MANUAL DIAL LEAD FOR %1s in campaign %2s:",0,'',$VD_login,$VD_campaign); ?></span>
                        <span class="text-muted"><?php echo _QXZ("Enter information below for the new lead you wish to call."); ?></span>

                        <?php 
                            if (!preg_match("/X/i",$manual_dial_prefix))
                            {
                        ?>
                                <span class="text-muted"><?=_QXZ("Note: a dial prefix of %1s will be added to the beginning of this number",0,'',$manual_dial_prefix)?></span>
                        <?php
                            }
                        ?>
                        <span class="text-muted"><?php echo _QXZ("Note: all new manual dial leads will go into list %1s",0,'',$manual_dial_list_id); ?></span>
                    </div>
                </section>-->

                <hr>

                <?php 
                    if ($manual_dial_lead_id=='Y')
                    {
                ?>
                        <section class="mt-2">
                            <div class="mb-3">
                                <span class="text-muted"><?=_QXZ("Dial Lead ID:")?></span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" size="10" maxlength="10" name="MDLeadIDEntry" id="MDLeadIDEntry" value="\"/>
                                <span class="text-muted"><?=_QXZ("(digits only)")?></span>
                            </div>
                        </section>
                <?php
                    }
                    else
                    {
                        echo "<input type=\"hidden\" name=\"MDLeadIDEntry\" id=\"MDLeadIDEntry\" value=\"\" />\n";
                    }

                    $LeadLookuPXtra='';
                    if ($manual_dial_search_checkbox == 'SELECTED_LOCK')
                        {$LeadLookuPXtra = 'CHECKED DISABLED ';}
                    if ($manual_dial_search_checkbox == 'UNSELECTED_LOCK')
                        {$LeadLookuPXtra = 'DISABLED ';}
                ?>

                <div class="row">
                    <section class="col-12 col-sm-6">
                        <div class="mb-3">
                            <span><?php echo _QXZ("Search Existing Leads:"); ?></span>
                            <input class="form-check-input" type="checkbox" name="LeadLookuP" id="LeadLookuP" size="1" value="0" <?php echo $LeadLookuPXtra ?>/>
                        </div>
                        <div class="">
                            
                            <!--<?php echo _QXZ("(This option if checked will attempt to find the phone number in the system before inserting it as a new lead)"); ?>-->
                        </div>
                    </section>

                    <section class="col-12 col-sm-6">
                    <?php
                        if ($manual_dial_override_field == 'ENABLED')
                        {
                    ?>
                            <div class="mb-3">
                                <span class=""><?php echo _QXZ("Dial Override:"); ?></span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" size="24" maxlength="20" name="MDDiaLOverridE" id="MDDiaLOverridE" class="cust_form" value="" />
                            </div>
                    <?php
                            echo '<span class="text-muted">'._QXZ("(digits only please)").'</span>';
                        }
                        else
                        {
                    ?>
                            <input type="hidden" name="MDDiaLOverridE" id="MDDiaLOverridE" value="" />&nbsp; 
                    <?php
                            echo _QXZ("DISABLED");
                        }
                    ?>
                    </section>

                    <section class="col-12 col-sm-6">
                        <div class="mb-3">
                            <span class="text-muted">
                                <CENTER>
                                    <span id="ManuaLDiaLGrouPSelecteD"></span> &nbsp; &nbsp; <span id="ManuaLDiaLGrouP"></span>
                                    <span id="ManuaLDiaLInGrouPSelecteD"></span> &nbsp; &nbsp; <span id="ManuaLDiaLInGrouP"></span>
                                    <span id="NoDiaLSelecteD"></span>
                                </CENTER>
                                <!--<?php echo _QXZ("If you want to dial a number and have it NOT be added as a new lead, enter in the exact dialstring that you want to call in the Dial Override field below. To hangup this call you will have to open the CALLS IN THIS SESSION link at the bottom of the screen and hang it up by clicking on its channel link there."); ?>-->
                            </span>
                        </div>
                    </section>
                </div>

            </div>

            <div class="card-footer">
                <a class="btn btn-secondary me-auto" href="#" onclick="ManualDialHide();return false;"><?php echo _QXZ("Go Back"); ?></a>
                <?php
                    if ($manual_dial_preview > 0)
                    {
                        echo "<a class=\"btn btn-primary\" href=\"#\" onclick=\"NeWManuaLDiaLCalLSubmiT('PREVIEW','YES');return false;\">"._QXZ("Preview Call")."</a>";
                    }
                ?>
                <a class="btn btn-primary" href="#" onclick="NeWManuaLDiaLCalLSubmiT('NOW','YES');return false;"><?php echo _QXZ("Dial Now"); ?></a>
            </div>
        </div>
    </div>
</span>


<!--<span style="position:absolute;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="NeWManuaLDiaLBox">
    <table border="0" bgcolor="#CCFFCC" width="<?php echo $CAwidth ?>px" height="<?php echo $WRheight ?>px"><tr><td align="center" valign="top"> <font class="sd_text"><?php echo _QXZ("NEW MANUAL DIAL LEAD FOR %1s in campaign %2s:",0,'',$VD_login,$VD_campaign); ?></font><br /><br /><font class="sh_text"><?php echo _QXZ("Enter information below for the new lead you wish to call."); ?>
<br />
    <?php 
    if (!preg_match("/X/i",$manual_dial_prefix))
        {
        echo _QXZ("Note: a dial prefix of %1s will be added to the beginning of this number",0,'',$manual_dial_prefix)."<br />\n";
        }
    ?>
    <?php echo _QXZ("Note: all new manual dial leads will go into list %1s",0,'',$manual_dial_list_id); ?><br /><br />
    <table><tr>
    <td align="right"><font class="body_text"> <?php echo _QXZ("Dial Code:"); ?> </font></td>
    <td align="left"><font class="body_text"><input type="text" size="7" maxlength="10" name="MDDiaLCodE" id="MDDiaLCodE" class="cust_form" value="<?php echo $default_phone_code ?>" />&nbsp; <?php echo _QXZ("(This is usually a 1 in the USA-Canada)"); ?></font></td>
    </tr><tr>
    <td align="right"><font class="body_text"> <?php echo _QXZ("Phone Number:"); ?> </font></td>
    <td align="left"><font class="body_text">
    <input type="text" size="14" maxlength="18" name="MDPhonENumbeR" id="MDPhonENumbeR" class="cust_form" value="" />&nbsp; <?php echo _QXZ("(digits only)"); ?></font>
    <input type="hidden" name="MDPhonENumbeRHiddeN" id="MDPhonENumbeRHiddeN" value="" />
    <input type="hidden" name="MDLeadID" id="MDLeadID" value="" />
    <input type="hidden" name="MDType" id="MDType" value="" />
    <?php 
    if ($manual_dial_lead_id=='Y')
        {
        echo "	</td>";
        echo "	</tr><tr>\n";
        echo "	<td align=\"right\"><font class=\"body_text\"> "._QXZ("Dial Lead ID:")." </font></td>\n";
        echo "	<td align=\"left\"><font class=\"body_text\">\n";
        echo "	<input type=\"text\" size=\"10\" maxlength=\"10\" name=\"MDLeadIDEntry\" id=\"MDLeadIDEntry\" class=\"cust_form\" value=\"\" />&nbsp; "._QXZ("(digits only)")."</font>\n";
        }
    else
        {
        echo "<input type=\"hidden\" name=\"MDLeadIDEntry\" id=\"MDLeadIDEntry\" value=\"\" />\n";
        }

    $LeadLookuPXtra='';
    if ($manual_dial_search_checkbox == 'SELECTED_LOCK')
        {$LeadLookuPXtra = 'CHECKED DISABLED ';}
    if ($manual_dial_search_checkbox == 'UNSELECTED_LOCK')
        {$LeadLookuPXtra = 'DISABLED ';}
    ?>
    </td>
    </tr><tr>
    <td align="right"><font class="body_text"> <?php echo _QXZ("Search Existing Leads:"); ?> </font></td>
    <td align="left"><font class="body_text"><input type="checkbox" name="LeadLookuP" id="LeadLookuP" size="1" value="0" <?php echo $LeadLookuPXtra ?>/>&nbsp; <?php echo _QXZ("(This option if checked will attempt to find the phone number in the system before inserting it as a new lead)"); ?></font></td>
    </tr><tr>

    <td align="left" colspan="2">
    <font class="sh_text">
    <br /><br /><CENTER>
    <span id="ManuaLDiaLGrouPSelecteD"></span> &nbsp; &nbsp; <span id="ManuaLDiaLGrouP"></span>
    <br><br>
    <span id="ManuaLDiaLInGrouPSelecteD"></span> &nbsp; &nbsp; <span id="ManuaLDiaLInGrouP"></span>
    <br><br>
    <span id="NoDiaLSelecteD"></span>
    </CENTER>
    <br /><br /><?php echo _QXZ("If you want to dial a number and have it NOT be added as a new lead, enter in the exact dialstring that you want to call in the Dial Override field below. To hangup this call you will have to open the CALLS IN THIS SESSION link at the bottom of the screen and hang it up by clicking on its channel link there."); ?><br /> &nbsp; </font></td>
    </tr><tr>
    <td align="right"><font class="body_text"> <?php echo _QXZ("Dial Override:"); ?> </font></td>
    <td align="left"><font class="body_text">
    <?php
    if ($manual_dial_override_field == 'ENABLED')
        {
        ?>
        <input type="text" size="24" maxlength="20" name="MDDiaLOverridE" id="MDDiaLOverridE" class="cust_form" value="" />&nbsp; 
        <?php
        echo _QXZ("(digits only please)");
        }
    else
        {
        ?>
        <input type="hidden" name="MDDiaLOverridE" id="MDDiaLOverridE" value="" />&nbsp; 
        <?php
        echo _QXZ("DISABLED");
        }
    ?>
    </font>
    </td>
    </tr></table>
<br />
    <a href="#" onclick="NeWManuaLDiaLCalLSubmiT('NOW','YES');return false;"><?php echo _QXZ("Dial Now"); ?></a>
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
    <?php if ($manual_dial_preview > 0)
        {
        echo "<a href=\"#\" onclick=\"NeWManuaLDiaLCalLSubmiT('PREVIEW','YES');return false;\">"._QXZ("Preview Call")."</a>
        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; \n";
        }
    ?>
    <a href="#" onclick="ManualDialHide();return false;"><?php echo _QXZ("Go Back"); ?></a></font>
    </td></tr></table>
</span>-->
