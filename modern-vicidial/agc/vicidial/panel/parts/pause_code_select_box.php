
<span class="w-100 h-100 overflow-scroll" tabindex="-1" style="background:rgba(0, 0, 0, 0.5);position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="PauseCodeSelectBox">
    <div class="w-50 mx-auto mt-5">

        <div class="card">

            <div class="card-header">
                <h5>
                    <?php echo _QXZ("SELECT A PAUSE CODE :"); ?>
                </h5>
            </div>
            <div class="card-body">
                
                <?php
                    if ($webphone_location == 'bar')
                    {echo "<br /><img src=\"./images/"._QXZ("pixel.gif")."\" width=\"1px\" height=\"".$webphone_height."px\" /><br />\n";}
                ?>
                <span id="PauseCodeSelectContent"> <?php echo _QXZ("Pause Code Selection"); ?> </span>
                <input type="hidden" name="PauseCodeSelection" id="PauseCodeSelection" />
                <?php
                    if ($mgrapr_ct > 0)
                    {
                        echo "<br /><br /><b>* "._QXZ("These pause codes require manager approval")."</b>\n";
                    }
                ?>

            </div>
        </div>
    </div>
</span>
