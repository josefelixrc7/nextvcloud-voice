
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="z-index: 6;background: #060e23 !important;">
    <div class="d-inline-block col-md-3 col-lg-2 me-0 px-3 text-white">
        <img class="me-md-2 me-0" src="/modern-vicidial/images/logo.png" width="32px" alt="logo">
        <span class="d-md-inline-block d-none">NextVCloud Voice</span>
    </div>
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
    <div class="navbar-nav p-2">
        <div class="nav-item text-nowrap">
			<a class="btn btn-outline-light" href="#" onclick="NormalLogout();return false;needToConfirmExit = false;"><?=_QXZ("LOGOUT");?></a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">

        <?php
            include 'sidebar.php'
        ?>

        <main class="col-md-10 ms-sm-auto px-md-4">
            <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                <!-- Barra de botones -->
                <div class="btn-toolbar mb-2 mb-md-0">

                    <span id="NexTCalLPausE">
                        <a class="btn btn-sm btn-outline-secondary" href="#" onclick="next_call_pause_click();return false;"><?php echo _QXZ("Next Call Pause"); ?></a>
                    </span>
                    <!--DiaLlOgButtonspan-->
                    <span id="DiaLlOgButtonspan">
                        <span id="ManuaLDiaLButtons">
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
                    
                    <!--AgentTimeSpan-->
                    <span id="AgentTimeSpan">
                        <a class="btn btn-sm btn-outline-secondary me-2" href="#" onclick="AgentTimeReport('open');return false;"><?php echo _QXZ("AGENT TIME"); ?></a>
                    </span>
                    <span id="PauseCodeButtons">
                        <span id="PauseCodeLinkSpan"></span>
                    </span>
                    <span id="VolumeControlSpan">
                        <span id="VolumeUpSpan"><img src="./images/<?php echo _QXZ("vdc_volume_up_off.gif"); ?>" border="0" /></span>
                        <span id="VolumeDownSpan"><img src="./images/<?php echo _QXZ("vdc_volume_down_off.gif"); ?>" border="0" /></span>
                    </span>
                    <?php 
                        if ($is_webphone=='Y')
                        { 
                    ?>
                        <span id="webphoneLinkSpan" class="d-none">
                            <span id="webphoneLink">
                                <a class="btn btn-sm btn-outline-secondary me-2" href="#" onclick="webphoneOpen('webphoneSpan','close');return false;">
                                    <?php echo _QXZ("WebPhone View -"); ?>
                                </a>
                            </span>
                        </span>
                    <?php 
                        }
                    ?>
                    <span id="AgentMuteANDPreseTDiaL">
                        <?php
                        if ($PreseT_DiaL_LinKs)
                        {
                            echo "<a class=\"btn btn-sm btn-outline-secondary me-2\" href=\"#\" onclick=\"DtMf_PreSet_a_DiaL('NO','YES');return false;\">"._QXZ("D1 - DIAL")."</a>\n";
                            echo "<a class=\"btn btn-sm btn-outline-secondary me-2\" href=\"#\" onclick=\"DtMf_PreSet_b_DiaL('NO','YES');return false;\">"._QXZ("D2 - DIAL")."</a>\n";
                        }
                        ?>
                    </span>                    
                </div>
            </div>
            <!-- Barra de botones -->

            <!-- Contents section -->
            <section>

                <main class="row">

                    <section class="col-md-9">
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
                    </section>
                    <section class="col-md-3" style="border-left: 1px solid #dee2e6;">

                        <span id="webphoneSpan">
                            <span id="webphonecontent" style="overflow:hidden;">
                                <?php
                                    include '../agc/webphone/viciphone/viciphone.php';
                                ?>
                            </span>
                        </span>
                        <?php
                        /*$zi++;
                        if ($webphone_location == 'bar')
                        {
                            echo "<span id=\"webphoneSpan\"><span id=\"webphonecontent\" style=\"overflow:hidden;\">$webphone_content</span></span>\n";
                        }
                        else
                        {
                            echo "<span id=\"webphoneSpan\"><table cellpadding=\"$webphone_pad\" cellspacing=\"0\" border=\"0\"><tr><td width=\"5px\" rowspan=\"2\">&nbsp;</td><td align=\"center\"><font class=\"body_text\">
                            "._QXZ("Web Phone").": &nbsp; </font></td></tr><tr><td align=\"center\"><span id=\"webphonecontent\">$webphone_content</span></td></tr></table></span>\n";
                        }*/
                        ?>

                    </section>

                </main>

                <footer class="mt-5 p-2 mb-2">
                    <span id="MaiNfooterspan">
                        <span id="blind_monitor_notice_span">
                            <b>
                                <font color="red"> &nbsp; &nbsp;
                                    <span id="blind_monitor_notice_span_contents"></span>
                                </font>
                            </b>
                        </span>
                        <table id="MaiNfooter">
                            <tr>
                                <td>
                                    <?php echo _QXZ("VERSION:"); ?>
                                    <?php echo $version ?> &nbsp; <?php echo _QXZ("BUILD:"); ?>
                                    <?php echo $build ?> &nbsp; <?php echo _QXZ("Server:"); ?>
                                    <?php echo $server_ip ?><br>
                                    
                                    <span id="busycallsdisplay">
                                        <a class="btn btn-sm btn-outline-secondary" href="#"  onclick="conf_channels_detail('SHOW');">
                                            <?php echo _QXZ("Show conference call channel information"); ?>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <span id="outboundcallsspan"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <font class="body_small">
                                        <span id="AgentAlertSpan">
                                            <?php
                                            if ( (preg_match('/ON/',$VU_alert_enabled)) and ($AgentAlert_allowed > 0) )
                                                {echo "<a class=\"btn btn-sm btn-outline-secondary\" href=\"#\" onclick=\"alert_control('OFF');return false;\">"._QXZ("Alert is ON")."</a>";}
                                            else
                                                {echo "<a class=\"btn btn-sm btn-outline-secondary\" href=\"#\" onclick=\"alert_control('ON');return false;\">"._QXZ("Alert is OFF")."</a>";}
                                            ?>
                                        </span>
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </span>
                </footer>

            </section>
            <!-- Contents section -->
        </main>
    </div>
</div>