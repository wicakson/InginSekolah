<!-- multistep form -->
<form role="form" id="msform" method="POST" action="<?php echo base_url(); ?>donasi/send_donasi">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Account Setup</li>
		<li>Social Profiles</li>
		<li>Personal Details</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Create your account</h2>
		<h3 class="fs-subtitle">This is step 1</h3>
		<div class="form-group <?= $email01; ?> has-feedback">
			<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
			<span class="glyphicon <?= $email02; ?> form-control-feedback"></span>
			<span class="help-inline" style="color: red;"><?php echo form_error('email'); ?></span>
		</div>
		<div class="form-group <?= $pass01; ?> has-feedback">
			<input type="password" class="form-control" name="pass" placeholder="Password" value="<?php echo set_value('pass'); ?>" />
			<span class="glyphicon <?= $pass02; ?> form-control-feedback"></span>
			<span class="help-inline" style="color: red;"><?php echo form_error('pass'); ?></span>
		</div>
		<div class="form-group <?= $cpass01; ?> has-feedback">
			<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" value="<?php echo set_value('cpass'); ?>" />
			<span class="glyphicon <?= $cpass02; ?> form-control-feedback"></span>
			<span class="help-inline" style="color: red;"><?php echo form_error('cpass'); ?></span>
		</div>
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Social Profiles</h2>
		<h3 class="fs-subtitle">Your presence on the social network</h3>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" name="twitter" placeholder="Twitter" value="<?php echo set_value('twitter'); ?>" />
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" name="facebook" placeholder="Facebook" value="<?php echo set_value('facebook'); ?>" />
		</div>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" name="gplus" placeholder="Google Plus" value="<?php echo set_value('gplus'); ?>" />
		</div>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
		<p>* Not Required</p>
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Personal Details</h2>
		<h3 class="fs-subtitle">We will never sell it</h3>
		<div class="form-group <?= $fname01; ?> has-feedback">
			<input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo set_value('fname'); ?>" />
			<span class="glyphicon <?= $fname02; ?> form-control-feedback"></span>
			<span class="help-inline" style="color: red;"><?php echo form_error('fname'); ?></span>
		</div>
		<div class="form-group <?= $lname01; ?> has-feedback">
			<input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo set_value('lname'); ?>" />
			<span class="glyphicon <?= $lname02; ?> form-control-feedback"></span>
			<span class="help-inline" style="color: red;"><?php echo form_error('lname'); ?></span>
		</div>
		<div class="form-group <?= $phone01; ?> has-feedback">
			<input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>" />
			<span class="glyphicon <?= $phone02; ?> form-control-feedback"></span>
			<span class="help-inline" style="color: red;"><?php echo form_error('phone'); ?></span>
		</div>
		<div class="form-group <?= $address01; ?> has-feedback">
			<textarea class="form-control" name="address" placeholder="Address"><?php echo set_value('address'); ?></textarea>
			<span class="glyphicon <?= $address02; ?> form-control-feedback"></span>
			<span class="help-inline" style="color: red;"><?php echo form_error('address'); ?></span>
		</div>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" class="action-button" value="Submit" />
	</fieldset>
</form>

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>