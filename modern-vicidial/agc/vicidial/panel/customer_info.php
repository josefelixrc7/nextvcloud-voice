
<span id="MainPanel">

    <span class="text_input" id="MainPanelCustInfo">

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

        <!-- Informacion principal -->
        <table id="MainTable" class="table">
            <tbody>
                <tr>
                    <td><?=_QXZ("Customer Time:");?></td>
                    <td><span name="custdatetime" id="custdatetime" class="log_title"></span></td>
                    <td><span name="callchannel" id="callchannel" class="cust_form"></span></td>
                </tr>
                <tr>
                    <td><?=_QXZ("Customer Information:");?></td>
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
                    
        if ($label_first_name == '---HIDE---')
            {echo "&nbsp; <input type=\"hidden\" name=\"first_name\" id=\"first_name\" value=\"\" />";}
        else
            {
            $first_name_readonly='';
            if (preg_match("/---READONLY---/",$label_first_name))
                {$first_name_readonly='readonly="readonly"';   $label_first_name = preg_replace("/---READONLY---/","",$label_first_name);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_first_name))
                    {$required_fields .= "first_name|";   $label_first_name = preg_replace("/---REQUIRED---/","",$label_first_name);}
                }
            echo "&nbsp; $label_first_name: <input class=\"form-control\" type=\"text\" size=\"17\" name=\"first_name\" id=\"first_name\" maxlength=\"$MAXfirst_name\" class=\"cust_form\" value=\"\" $first_name_readonly />";
            }
        if ($label_middle_initial == '---HIDE---')
            {echo "&nbsp; <input type=\"hidden\" name=\"middle_initial\" id=\"middle_initial\" value=\"\" />";}
        else
            {
            $middle_initial_readonly='';
            if (preg_match("/---READONLY---/",$label_middle_initial))
                {$middle_initial_readonly='readonly="readonly"';   $label_middle_initial = preg_replace("/---READONLY---/","",$label_middle_initial);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_middle_initial))
                    {$required_fields .= "middle_initial|";   $label_middle_initial = preg_replace("/---REQUIRED---/","",$label_middle_initial);}
                }
            echo "&nbsp; $label_middle_initial: <input class=\"form-control\" type=\"text\" size=\"1\" name=\"middle_initial\" id=\"middle_initial\" maxlength=\"$MAXmiddle_initial\" class=\"cust_form\" value=\"\" $middle_initial_readonly />";
            }
        if ($label_last_name == '---HIDE---')
            {echo "&nbsp; <input type=\"hidden\" name=\"last_name\" id=\"last_name\" value=\"\" />";}
        else
            {
            $last_name_readonly='';
            if (preg_match("/---READONLY---/",$label_last_name))
                {$last_name_readonly='readonly="readonly"';   $label_last_name = preg_replace("/---READONLY---/","",$label_last_name);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_last_name))
                    {$required_fields .= "last_name|";   $label_last_name = preg_replace("/---REQUIRED---/","",$label_last_name);}
                }
            echo "&nbsp; $label_last_name: <input class=\"form-control\" type=\"text\" size=\"23\" name=\"last_name\" id=\"last_name\" maxlength=\"$MAXlast_name\" class=\"cust_form\" value=\"\" $last_name_readonly />";
            }

        if ($label_address1 == '---HIDE---')
            {echo "<input type=\"hidden\" name=\"address1\" id=\"address1\" value=\"\" />";}
        else
            {
            $address1_readonly='';
            if (preg_match("/---READONLY---/",$label_address1))
                {$address1_readonly='readonly="readonly"';   $label_address1 = preg_replace("/---READONLY---/","",$label_address1);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_address1))
                    {$required_fields .= "address1|";   $label_address1 = preg_replace("/---REQUIRED---/","",$label_address1);}
                }
            echo "$label_address1: </td><td align=\"left\" colspan=5><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"85\" name=\"address1\" id=\"address1\" maxlength=\"$MAXaddress1\" class=\"cust_form\" value=\"\" $address1_readonly />";
            }

        if ($label_address2 == '---HIDE---')
            {echo "<input type=\"hidden\" name=\"address2\" id=\"address2\" value=\"\" />";}
        else
            {
            $address2_readonly='';
            if (preg_match("/---READONLY---/",$label_address2))
                {$address2_readonly='readonly="readonly"';   $label_address2 = preg_replace("/---READONLY---/","",$label_address2);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_address2))
                    {$required_fields .= "address2|";   $label_address2 = preg_replace("/---REQUIRED---/","",$label_address2);}
                }
            echo "$label_address2: <input class=\"form-control\" type=\"text\" size=\"20\" name=\"address2\" id=\"address2\" maxlength=\"$MAXaddress2\" class=\"cust_form\" value=\"\" $address2_readonly />";
            }

        if ($label_address3 == '---HIDE---')
            {echo "<input type=\"hidden\" name=\"address3\" id=\"address3\" value=\"\" />";}
        else
            {
            $address3_readonly='';
            if (preg_match("/---READONLY---/",$label_address3))
                {$address3_readonly='readonly="readonly"';   $label_address3 = preg_replace("/---READONLY---/","",$label_address3);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_address3))
                    {$required_fields .= "address3|";   $label_address3 = preg_replace("/---REQUIRED---/","",$label_address3);}
                }
            echo "$label_address3: <input class=\"form-control\" type=\"text\" size=\"45\" name=\"address3\" id=\"address3\" maxlength=\"$MAXaddress3\" class=\"cust_form\" value=\"\" $address3_readonly />";
            }

        if ($label_city == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"city\" id=\"city\" value=\"\" />";}
        else
            {
            $city_readonly='';
            if (preg_match("/---READONLY---/",$label_city))
                {$city_readonly='readonly="readonly"';   $label_city = preg_replace("/---READONLY---/","",$label_city);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_city))
                    {$required_fields .= "city|";   $label_city = preg_replace("/---REQUIRED---/","",$label_city);}
                }
            echo "$label_city: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"20\" name=\"city\" id=\"city\" maxlength=\"$MAXcity\" class=\"cust_form\" value=\"\" $city_readonly />";
            }

        echo "</td><td align=\"right\"><font class=\"body_text\">";

        if ($label_state == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"state\" id=\"state\" value=\"\" />";}
        else
            {
            $state_readonly='';
            if (preg_match("/---READONLY---/",$label_state))
                {$state_readonly='readonly="readonly"';   $label_state = preg_replace("/---READONLY---/","",$label_state);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_state))
                    {$required_fields .= "state|";   $label_state = preg_replace("/---REQUIRED---/","",$label_state);}
                }
            echo "$label_state: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"4\" name=\"state\" id=\"state\" maxlength=\"$MAXstate\" class=\"cust_form\" value=\"\" $state_readonly />";
            }

        echo "</td><td align=\"right\"><font class=\"body_text\">";

        if ($label_postal_code == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"postal_code\" id=\"postal_code\" value=\"\" />";}
        else
            {
            $postal_code_readonly='';
            if (preg_match("/---READONLY---/",$label_postal_code))
                {$postal_code_readonly='readonly="readonly"';   $label_postal_code = preg_replace("/---READONLY---/","",$label_postal_code);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_postal_code))
                    {$required_fields .= "postal_code|";   $label_postal_code = preg_replace("/---REQUIRED---/","",$label_postal_code);}
                }
            echo "$label_postal_code: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"14\" name=\"postal_code\" id=\"postal_code\" maxlength=\"$MAXpostal_code\" class=\"cust_form\" value=\"\" $postal_code_readonly />";
            }

        echo "</td></tr><tr><td align=\"right\"><font class=\"body_text\">";

        if ($label_province == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"province\" id=\"province\" value=\"\" />";}
        else
            {
            $province_readonly='';
            if (preg_match("/---READONLY---/",$label_province))
                {$province_readonly='readonly="readonly"';   $label_province = preg_replace("/---READONLY---/","",$label_province);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_province))
                    {$required_fields .= "province|";   $label_province = preg_replace("/---REQUIRED---/","",$label_province);}
                }
            echo "$label_province: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"20\" name=\"province\" id=\"province\" maxlength=\"$MAXprovince\" class=\"cust_form\" value=\"\" $province_readonly />";
            }

        echo "</td><td align=\"right\"><font class=\"body_text\">";

        if ($label_vendor_lead_code == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"vendor_lead_code\" id=\"vendor_lead_code\" value=\"\" />";}
        else
            {
            $vendor_lead_code_readonly='';
            if (preg_match("/---READONLY---/",$label_vendor_lead_code))
                {$vendor_lead_code_readonly='readonly="readonly"';   $label_vendor_lead_code = preg_replace("/---READONLY---/","",$label_vendor_lead_code);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_vendor_lead_code))
                    {$required_fields .= "vendor_lead_code|";   $label_vendor_lead_code = preg_replace("/---REQUIRED---/","",$label_vendor_lead_code);}
                }
            echo "$label_vendor_lead_code: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"15\" name=\"vendor_lead_code\" id=\"vendor_lead_code\" maxlength=\"$MAXvendor_lead_code\" class=\"cust_form\" value=\"\" $vendor_lead_code_readonly />";
            }

        echo "</td><td align=\"right\"><font class=\"body_text\">";

        if ($label_gender == '---HIDE---')
            {
            echo "</td><td align=\"left\"><font class=\"body_text\"><span id=\"GENDERhideFORie\"><input type=\"hidden\" name=\"gender_list\" id=\"gender_list\" value=\"\" /></span>";
            }
        else
            {
            echo "$label_gender: </td><td align=\"left\"><font class=\"body_text\"><span id=\"GENDERhideFORie\"><select size=\"1\" name=\"gender_list\" class=\"cust_form\" id=\"gender_list\"><option value=\"U\">"._QXZ("U - Undefined")."</option><option value=\"M\">"._QXZ("M - Male")."</option><option value=\"F\">"._QXZ("F - Female")."</option></select></span>";
            }

        echo "</td></tr><tr><td align=\"right\"><font class=\"body_text\">";

        if ($label_phone_number == '---HIDE---')
            {
            echo " </td><td align=\"left\"><input type=\"hidden\" name=\"phone_number\" id=\"phone_number\" value=\"\" />";
            echo "<font class=\"body_text\"><span id=\"phone_numberDISP\"> &nbsp; </span></font>";
            }
        else
            {
            echo "$label_phone_number: </td><td align=\"left\"><font class=\"body_text\">";

            if ( (preg_match('/Y/',$disable_alter_custphone)) or (preg_match('/HIDE/',$disable_alter_custphone)) )
                {
                echo "<font class=\"body_text\"><span id=\"phone_numberDISP\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></font>";
                echo "<input type=\"hidden\" name=\"phone_number\" id=\"phone_number\" value=\"\" />";
                }
            else
                {
                echo "<input class=\"form-control\" type=\"text\" size=\"20\" name=\"phone_number\" id=\"phone_number\" maxlength=\"$MAXphone_number\" class=\"cust_form\" value=\"\" />";
                }
            }

        echo "</td><td align=\"right\"><font class=\"body_text\">";

        if ($label_phone_code == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"phone_code\" id=\"phone_code\" value=\"\" />";}
        else
            {
            $phone_code_readonly='';
            if (preg_match("/---READONLY---/",$label_phone_code))
                {$phone_code_readonly='readonly="readonly"';   $label_phone_code = preg_replace("/---READONLY---/","",$label_phone_code);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_phone_code))
                    {$required_fields .= "phone_code|";   $label_phone_code = preg_replace("/---REQUIRED---/","",$label_phone_code);}
                }
            echo "$label_phone_code: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"4\" name=\"phone_code\" id=\"phone_code\" maxlength=\"$MAXphone_code\" class=\"cust_form\" value=\"\" $phone_code_readonly />";
            }

        echo "</td><td align=\"right\"><font class=\"body_text\">";

        if ($label_alt_phone == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"alt_phone\" id=\"alt_phone\" value=\"\" />";}
        else
            {
            $alt_phone_readonly='';
            if (preg_match("/---READONLY---/",$label_alt_phone))
                {$alt_phone_readonly='readonly="readonly"';   $label_alt_phone = preg_replace("/---READONLY---/","",$label_alt_phone);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_alt_phone))
                    {$required_fields .= "alt_phone|";   $label_alt_phone = preg_replace("/---REQUIRED---/","",$label_alt_phone);}
                }
            echo "$label_alt_phone: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"14\" name=\"alt_phone\" id=\"alt_phone\" maxlength=\"$MAXalt_phone\" class=\"cust_form\" value=\"\" $alt_phone_readonly />";
            }

        echo "</td></tr><tr><td align=\"right\"><font class=\"body_text\">";

        if ($label_security_phrase == '---HIDE---')
            {echo " </td><td align=\"left\"><input type=\"hidden\" name=\"security_phrase\" id=\"security_phrase\" value=\"\" />";}
        else
            {
            $security_phrase_readonly='';
            if (preg_match("/---READONLY---/",$label_security_phrase))
                {$security_phrase_readonly='readonly="readonly"';   $label_security_phrase = preg_replace("/---READONLY---/","",$label_security_phrase);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_security_phrase))
                    {$required_fields .= "security_phrase|";   $label_security_phrase = preg_replace("/---REQUIRED---/","",$label_security_phrase);}
                }
            echo "$label_security_phrase: </td><td align=\"left\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"20\" name=\"security_phrase\" id=\"security_phrase\" maxlength=\"$MAXsecurity_phrase\" class=\"cust_form\" value=\"\" $security_phrase_readonly />";
            }

        echo "</td><td align=\"right\"><font class=\"body_text\">";

        if ($label_email == '---HIDE---')
            {echo " </td><td align=\"left\" colspan=\"3\"><input type=\"hidden\" name=\"email\" id=\"email\" value=\"\" />";}
        else
            {
            $email_readonly='';
            if (preg_match("/---READONLY---/",$label_email))
                {$email_readonly='readonly="readonly"';   $label_email = preg_replace("/---READONLY---/","",$label_email);}
            else
                {
                if (preg_match("/---REQUIRED---/",$label_email))
                    {$required_fields .= "email|";   $label_email = preg_replace("/---REQUIRED---/","",$label_email);}
                }
            echo "$label_email: </td><td align=\"left\" colspan=\"3\"><font class=\"body_text\"><input class=\"form-control\" type=\"text\" size=\"45\" name=\"email\" id=\"email\" maxlength=\"$MAXemail\" class=\"cust_form\" value=\"\" $email_readonly />";
            }

        if (strlen($agent_display_fields) > 3)
            {
            echo "</td></tr><tr><td align=\"left\" colspan=\"5\"><font class=\"body_text\">";

            if (preg_match("/entry_date/",$agent_display_fields))
                {
                echo _QXZ("Entry Date").": &nbsp; <font class=\"body_text\"><span id=\"entry_dateDISP\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span> &nbsp; </font>";
                }
            if (preg_match("/source_id/",$agent_display_fields))
                {
                echo _QXZ("Source ID").": &nbsp; <font class=\"body_text\"><span id=\"source_idDISP\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span> &nbsp; </font>";
                }
            if (preg_match("/date_of_birth/",$agent_display_fields))
                {
                echo _QXZ("Date of Birth").": &nbsp; <font class=\"body_text\"><span id=\"date_of_birthDISP\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span> &nbsp; </font>";
                }
            if (preg_match("/rank/",$agent_display_fields))
                {
                echo _QXZ("Rank").": &nbsp; <font class=\"body_text\"><span id=\"rankDISP\"> &nbsp; &nbsp; </span> &nbsp; </font>";
                }
            if (preg_match("/owner/",$agent_display_fields))
                {
                echo _QXZ("Owner").": &nbsp; <font class=\"body_text\"><span id=\"ownerDISP\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span> &nbsp; </font>";
                }
            if (preg_match("/last_local_call_time/",$agent_display_fields))
                {
                echo _QXZ("Last Call").": &nbsp; <font class=\"body_text\"><span id=\"last_local_call_timeDISP\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span> &nbsp; </font>";
                }
            }

        echo "</td></tr><tr><td align=\"right\"><font class=\"body_text\">";

        if ($label_comments == '---HIDE---')
            {
            echo " </td><td align=\"left\" colspan=5>";
            echo "<input type=\"hidden\" name=\"comments\" id=\"comments\" value=\"\" />\n";
            echo "<input type=\"hidden\" name=\"other_tab_comments\" id=\"other_tab_comments\" value=\"\" />\n";
            echo "<input type=\"hidden\" name=\"dispo_comments\" id=\"dispo_comments\" value=\"\" />\n";
            echo "<input type=\"hidden\" name=\"callback_comments\" id=\"callback_comments\" value=\"\" />\n";
            echo "<span id='viewcommentsdisplay'><input class=\"btn btn-primary\" type='button' id='ViewCommentButton' onClick=\"ViewComments('ON','','','YES')\" value='-"._QXZ("History")."-'/></span>\n";
            echo "<span id='otherviewcommentsdisplay'><input class=\"btn btn-primary\" type='button' id='OtherViewCommentButton' onClick=\"ViewComments('ON','','','YES')\" value='-"._QXZ("History")."-'/></span>\n";
            }
        else
            {
            echo "$label_comments: <br><span id='viewcommentsdisplay'><input class=\"btn btn-primary\" type='button' id='ViewCommentButton' onClick=\"ViewComments('ON','','','YES')\" value='-"._QXZ("History")."-'/></span>
            </td><td align=\"left\" colspan=\"5\"><font class=\"body_text\">";
            if ( ($multi_line_comments) )
                {echo "<textarea name=\"comments\" id=\"comments\" rows=\"2\" cols=\"85\" class=\"cust_form_text\" value=\"\"></textarea>\n";}
            else
                {echo "<input class=\"form-control\" type=\"text\" size=\"65\" name=\"comments\" id=\"comments\" maxlength=\"255\" class=\"cust_form\" value=\"\" />\n";}
            }
        echo "</font></td>
            </tr><tr><td align=\"right\"><font class=\"body_text\">\n";

        if ($per_call_notes == 'ENABLED')
            {
            echo _QXZ("Call Notes: ");
            if ($agent_call_log_view == '1')
                {echo "<br /><span id=\"CallNotesButtons\"><a href=\"#\" onclick=\"VieWNotesLoG();return false;\">"._QXZ("view notes")."</a></span> ";}
            echo "</td><td align=\"left\" colspan=\"5\"><font class=\"body_text\">";
            echo "<textarea name=\"call_notes\" id=\"call_notes\" rows=\"2\" cols=\"85\" class=\"cust_form_text\" value=\"\"></textarea>\n";
            }
        else
            {
            echo " </td><td align=\"left\" colspan=5><input type=\"hidden\" name=\"call_notes\" id=\"call_notes\" value=\"\" /><span id=\"CallNotesButtons\"></span>\n";
            }

        echo "<input type=\"hidden\" name=\"required_fields\" id=\"required_fields\" value=\"$required_fields\" />\n";

    ?>

    </span>
</span>