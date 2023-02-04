<?= form_open('u/login', ['class' => 'card card-md']) ?>
	<div class="card-body">
<div class="alert alert-info" role="alert">
  <b>IMPORTANT NOTE</b> All Accounts created before 22 August 2022 will have to perform a <a href="https://app.spookhost.eu.org/u/forget">Password Reset</a>. Sorry for the Inconvenience.
</div>

		<h2 class="card-title text-center mb-3"><?= $this->base->text('login_to_account', 'heading') ?></h2>
		<div class="mb-3">
			<label class="form-label"><?= $this->base->text('email_address', 'label') ?></label>
			<input type="email" name="email" class="form-control" placeholder="<?= $this->base->text('email_address', 'label') ?>">
		</div>
		<div class="mb-2">
			<label class="form-label">
				<?= $this->base->text('password', 'label') ?>
				<span class="form-label-description">
					<a href="<?= base_url();?>u/forget"><?= $this->base->text('i_forget_password', 'heading') ?></a>
				</span>
			</label>
			<div class="input-group input-group-flat">
				<input type="password" class="form-control" id="password" placeholder="<?= $this->base->text('password', 'label') ?>" name="password">
				<span class="input-group-text">
					<a href="#" class="link-secondary trigger" data-toggle='password' title="Show password" data-bs-toggle="tooltip">
						<i class="fa fa-eye"></i>
					</a>
				</span>
			</div>
		</div>
		<div class="mb-3">
			<label class="form-check">
				<input type="checkbox" name="checkbox" value="1" class="form-check-input"/>
				<span class="form-check-label"><?= $this->base->text('remember_me_device', 'heading') ?></span>
			</label>
		</div>
		<?php if($this->grc->is_active()):?>
			<div class="mb-2">
				<?php if($this->grc->get_type() == "google"):?>
					<div class="g-recaptcha" data-sitekey="<?= $this->grc->get_site_key();?>"></div>
					<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
				<?php elseif($this->grc->get_type() == "crypto"): ?>
					<script src='https://verifypow.com/lib/captcha.js' async></script>
	            	<div class='CRLT-captcha' data-hashes='256' data-key='<?= $this->grc->get_site_key();?>'>
	                    <em>Loading PoW Captcha...
	                    <br>
	                    If it doesn't load, please disable AdBlocker!</em>
	                </div>
				<?php elseif($this->grc->get_type() == "human"): ?>
					<div id='captcha' class='h-captcha' data-sitekey="<?= $this->grc->get_site_key();?>"></div>
					<script src='https://hcaptcha.com/1/api.js' async defer ></script>
				<?php endif ?>
			</div>
		<?php endif ?>
		<div class="form-footer mt-1">
			<input type="submit" class="btn btn-primary w-100" name="login" value="<?= $this->base->text('signin', 'button') ?>">
		</div>
	</div>
</form>
<div class="text-center text-muted mt-3">
	<?= $this->base->text('dont_have_account', 'heading') ?> <a href="<?= base_url();?>u/register" tabindex="-1"><?= $this->base->text('register', 'button') ?></a>
</div>