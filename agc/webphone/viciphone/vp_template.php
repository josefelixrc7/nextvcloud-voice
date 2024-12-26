
<?php
include '../../../modern-vicidial/agc/vicidial/main_head.php';
?>
<div class="text-center mx-auto" style="max-width:500px;">
    <!-- Container -->
    <div id="container">

        <!-- Main -->
        <div id="main">
            <!-- Video element to handle audio -->
            <audio autoplay width='0' hieght='0' id="audio"></audio>
            <!--<video width='0' hieght='0' id="audio"></video>-->

            <!-- Controls -->
            <section id="controls">
                <section class="mb-2" id="registration_control">
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control mb-2 w-100" type="text" value="Unregistered" id="reg_status" readonly>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary w-100" id="register"><img id="reg_icon" src="/agc/webphone/viciphone/images/wp_register_inactive.gif" alt="register"></button>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary w-100" id="unregister"><img id="unreg_icon" src="/agc/webphone/viciphone/images/wp_unregister_inactive.gif" alt="register"></button>
                        </div>
                    </div>
                </section>
                <section class="mb-2" id="dial_control">
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control" type="text" name="digits" value="" id="digits"/>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="dial"><img width="20px" height="27px" id="dial_icon" src="/agc/webphone/viciphone/images/wp_dial.gif" alt="register"></button>
                        </div>
                    </div>
                </section>
                <section class="mb-2" id="audio_control">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="mic_mute"><img width="20px" height="27px" id="mute_icon" src="/agc/webphone/viciphone/images/wp_mic_on.gif" alt="mute"></button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="vol_up"><img width="20px" height="27px" id="vol_up_icon" src="/agc/webphone/viciphone/images/wp_speaker_up.gif" alt="register"></button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="vol_down"><img width="20px" height="27px" id="vol_down_icon" src="/agc/webphone/viciphone/images/wp_speaker_down.gif" alt="register"></button>
                        </div>
                    </div>
                </section>
            </section>
            <!-- End Controls -->

            <!-- Dialpad -->
            <section class="mb-2" id="dialpad">
                <section class="mb-1" id="dial_row1">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="one">1</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="two">2</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="three">3</button>
                        </div>
                    </div>
                </section>
                <section class="mb-1" id="dial_row2">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="four">4</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="five">5</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="six">6</button>
                        </div>
                    </div>
                </section>
                <section class="mb-1" id="dial_row3">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="seven">7</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="eight">8</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="nine">9</button>
                        </div>
                    </div>
                </section>
                <section class="mb-1" id="dial_row4">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="star">*</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="zero">0</button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="pound">#</button>
                        </div>
                    </div>
                </section>
                <section class="mt-2" id="dial_dtmf">
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control" type="text" name="dtmf_digits" value="" id="dtmf_digits"/>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary w-100" id="send_dtmf">Send</button>
                        </div>
                </section>
            </section>
            <!-- End Dialpad -->

        </div>
        <!-- End Main -->

    </div>
    <!-- End Container -->

    <!-- Debug Output -->
    <div id="debug"></div>

    <!-- <?php echo "$options $settings"; ?> -->

    <!-- variables to pass vici_phone.js -->
    <script>

    // SIP configuration variables
    var cid_name = '<?php echo $cid_name; ?>';
    var sip_uri = '<?php echo $sip_uri; ?>';
    var auth_user = '<?php echo $auth_user; ?>';
    var password = '<?php echo $password; ?>';
    var ws_server = '<?php echo $ws_server; ?>';

    // whether debug should be enabled
    var debug_enabled = '<?php echo $debug_enabled; ?>';

    // display restriction options
    var hide_dialpad = '<?php echo $hide_dialpad; ?>';
    var hide_dialbox = '<?php echo $hide_dialbox; ?>';
    var hide_mute = '<?php echo $hide_mute; ?>';
    var hide_volume = '<?php echo $hide_volume; ?>';

    // audio settings
    var auto_gain = '<?php echo $auto_gain_control; ?>';
    var echo_can = '<?php echo $echo_cancellation; ?>';
    var noise_sup = '<?php echo $noise_suppression; ?>';

    // behavior options
    var auto_answer = '<?php echo $auto_answer; ?>';
    var dial_reg_exten = '<?php echo $dial_reg_exten; ?>';
    var reg_exten = '<?php echo $session_id; ?>';
    var region = '<?php echo $progress_region; ?>';

    var langAttempting 		= '<?php echo $langAttempting; ?>';
    var langConnected 		= '<?php echo $langConnected; ?>';
    var langDisconnected 		= '<?php echo $langDisconnected; ?>';
    var langExten 			= '<?php echo $langExten; ?>';
    var langIncall 			= '<?php echo $langIncall; ?>';
    var langInit 			= '<?php echo $langInit; ?>';
    var langRedirect 		= '<?php echo $langRedirect; ?>';
    var langRegFailed 		= '<?php echo $langRegFailed; ?>';
    var langRegistering 		= '<?php echo $langRegistering; ?>';
    var langRegistered 		= '<?php echo $langRegistered; ?>';
    var langReject 			= '<?php echo $langReject; ?>';
    var langRinging 		= '<?php echo $langRinging; ?>';
    var langSend 			= '<?php echo $langSend; ?>';
    var langTrying 			= '<?php echo $langTrying; ?>';
    var langUnregFailed 		= '<?php echo $langUnregFailed; ?>';
    var langUnregistered 		= '<?php echo $langUnregistered; ?>';
    var langUnregistering		= '<?php echo $langUnregistering; ?>';
    var langWebrtcError 		= '<?php echo $langWebrtcError; ?>';


    </script>

    <!-- WebRTC adapter -->
    <!--<script src="js/adapter.js"></script>-->
    <!--<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script> -->

    <!-- SIP.js library -->
    <script  type="text/javascript" src="/agc/webphone/viciphone/js/sip.js"></script>

    <!-- Our Java Script Code -->
    <script  type="text/javascript" src="/agc/webphone/viciphone/js/vici_phone.js"></script>
</div>