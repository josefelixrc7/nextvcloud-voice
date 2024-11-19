
<span class="text_input" id="MainPanelCustInfo">

<!-- Informacion principal -->
<table class="table">
    <tbody>
        <tr>
            <td>Tiempo del cliente</td>
            <td><span name="custdatetime" id="custdatetime" class="log_title"></span></td>
            <td><span name="callchannel" id="callchannel" class="cust_form"></span></td>
        </tr>
        <tr>
            <td>Informaci&oacute;n del cliente</td>
            <td>
                <span id="CusTInfOSpaN"></span>
                <?php
                    if ( ($agent_lead_search == 'ENABLED') or ($agent_lead_search == 'LIVE_CALL_INBOUND') or ($agent_lead_search == 'LIVE_CALL_INBOUND_AND_MANUAL') )
                    {
                        echo "<a href=\"#\" onclick=\"OpeNSearcHForMDisplaYBox();return false;\">B&uacute;squeda de LEAD</a>";
                    }
                ?>
            </td>
        </tr>
    </tbody>
</table>

<!-- Campos -->
<table class="table">
    <tbody>
        <?php
            $required_fields = '|';

            if ($label_title == '---HIDE---')
            {
                echo "<input type=\"hidden\" name=\"title\" id=\"title\" value=\"\" />";
            }
            else
            {
                $title_readonly='';
                if (preg_match("/---READONLY---/",$label_title))
                {
                    $title_readonly='readonly="readonly"';
                    $label_title = preg_replace("/---READONLY---/","",$label_title);
                }
                else
                {
                    if (preg_match("/---REQUIRED---/",$label_title))
                    {
                        $required_fields .= "title|";
                        $label_title = preg_replace("/---REQUIRED---/","",$label_title);}
                }
                echo "
                    <tr>
                        <td>$label_title</td>
                        <td><input class=\"form-control\" type=\"text\" size=\"4\" name=\"title\" id=\"title\" maxlength=\"$MAXtitle\" class=\"cust_form\" value=\"\" $title_readonly /></td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>

