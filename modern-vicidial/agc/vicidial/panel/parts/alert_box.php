
<form name="alert_form" id="alert_form" onsubmit="return false;">

    <span style="position:absolute;left:200px;top:200px;z-index:<?php $zi++; echo $zi ?>;" id="AlertBox">
        
        <div class="card">
            <h5 class="card-header"><?php echo _QXZ("Agent Alert!"); ?></h5>
            <div class="card-body">
                <span id="AlertBoxContent"> <?php echo _QXZ("Alert Box"); ?> </span>
                <button class="btn btn-primary" type="button" name="alert_button" id="alert_button" onclick="hideDiv('AlertBox');return false;"><?php echo _QXZ("OK"); ?></BUTTON>
            </div>
        </div>

        <!--<table>
            <tr>
                <td>
                    <font><b> &nbsp; <?php echo _QXZ("Agent Alert!"); ?></b></font>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="400">
                        <tr>
                            <td align="center" valign="top" width="50"> &nbsp; 
                                <br /><br />
                                <img src="./images/<?php echo _QXZ("alert.gif"); ?>" alt="alert" border="0">
                            </td>
                            <td align="center" valign="top"> &nbsp; 
                                <br /><br />
                                    <font face="arial,helvetica" size="2">
                                        <span id="AlertBoxContent"> <?php echo _QXZ("Alert Box"); ?> </span>
                                    </font>
                                    <br /><br />
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" colspan="2">
                                <button type="button" name="alert_button" id="alert_button" onclick="hideDiv('AlertBox');return false;"><?php echo _QXZ("OK"); ?></BUTTON>
                                <br /> &nbsp;
                                <a href="#" onclick="document.alert_form.alert_button.focus();">focus</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>-->

    </span>

</form>
