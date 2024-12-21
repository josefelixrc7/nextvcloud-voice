
<span class="w-100 h-100 overflow-scroll" tabindex="-1" style="background:rgba(0, 0, 0, 0.5);position:fixed;left:0px;top:0px;z-index:<?php $zi++; echo $zi ?>;" id="DispoSelectBox">
    <div class="w-50 mx-auto mt-2">

		<div class="card">
			<div class="card-header">
				<h5>
					<span><?php echo _QXZ("DISPOSITION CALL :"); ?></span>
					<span>
						<span id="DispoSelectPhonE"></span> &nbsp; &nbsp; &nbsp;
						<span id="DispoSelectHAspan">
							<a class="btn btn-danger" href="#" onclick="DispoHanguPAgaiN()"><?php echo _QXZ("Hangup Again"); ?></a>
						</span> &nbsp; &nbsp; &nbsp;
						<span id="DispoSelectMaxMin">
							<a href="#" onclick="DispoMinimize()"> <?php echo _QXZ("minimize"); ?> </a>
						</span>
					</span>
				</h5>
			</div>
			<div class="card-body">
				<span id="Dispo3wayMessage"></span>
				<span id="DispoManualQueueMessage"></span>
				<span id="PerCallNotesContent"><input type="hidden" name="call_notes_dispo" id="call_notes_dispo" value="" /></span>
				<span id="DispoCommentsContent"><input type="hidden" name="dispo_comments" id="dispo_comments" value="" /></span>
				<span id="DispoSelectContent" class="my-2"> <?php echo _QXZ("End-of-call Disposition Selection"); ?> </span>
				<input type="hidden" name="DispoSelection" id="DispoSelection" />
				<div class="text-center">
					<div class="mb-2">
						<input class="form-check-input" type="checkbox" name="DispoSelectStop" id="DispoSelectStop" size="1" value="0" /> <?php echo _QXZ("PAUSE AGENT DIALING"); ?>
					</div>
				</div>
			</div>

			<div class="card-footer">
            <a class="btn btn-secondary me-auto" href="#" onclick="DispoSelectContent_create('','ReSET','YES');return false;"><?php echo _QXZ("CLEAR FORM"); ?></a>
				<a class="btn btn-secondary" href="#" onclick="WeBForMDispoSelect_submit();return false;"><?php echo _QXZ("WEB FORM SUBMIT"); ?></a>
				<a class="btn btn-primary" href="#" onclick="DispoSelect_submit('','','YES');return false;"><?php echo _QXZ("SUBMIT"); ?></a>
			</div>
		</div>

	</div>
</span>
