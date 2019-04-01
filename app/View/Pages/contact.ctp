<div id="contact" class="pg-content container">
	<div class="col-md-8">
		<h1>Contact Us</h1>
		<p>We are happy to assist you and answer any questions you may have. Reach out to us and we will respond to you as soon as possible. Please use the contact form on this page if you have any questions or requests concerning our products or services.</p>
		<hr>
		<div class="col-md-12 addresses">
			<div class="row">
				<div class="col-md-12"><h3>Utah Shrink Wrap Location</h3><hr></div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-1"><span class="glyphicon glyphicon-map-marker"></div>
						<div class="col-md-11">
							1745 Milestone Dr<br />Salt Lake City, UT 84104 USA<br /><br />
							<strong>Mailing:</strong><br>PO box 26222<br />Salt Lake City, UT 84126<br /><br />
							<strong>Office:</strong><br>2216 SMR, Fairview Utah 84629
						</div>
						<div class="col-md-12 addressdivide"><hr></div>
						<div class="col-md-1"><span class="glyphicon glyphicon-phone-alt"></span></div>
						<div class="col-md-11">(801) 573-5597</div>
						<div class="col-md-12 addressdivide"><hr></div>
						<div class="col-md-1"><span class="glyphicon glyphicon-envelope"></span></div>
						<div class="col-md-11"><a href="mailto: utahshrinkwrap@gmail.com">utahshrinkwrap@gmail.com</a></div>
						<div class="col-md-12 addressdivide"><hr></div>
						<div class="col-md-1"><span class="glyphicon glyphicon-time"></span></div>
						<div class="col-md-11">
							<p>Hours:</p>
							<ul class="list-unstyled hours">
								<li><strong>Monday</strong> <span class="pull-right">9:30am - 4:00pm</span></li>
								<li><strong>Tuesday</strong> <span class="pull-right">9:30am - 4:00pm</span></li>
								<li><strong>Wednesday</strong> <span class="pull-right">9:30am - 4:00pm</span></li>
								<li><strong>Thursday</strong> <span class="pull-right">9:30am - 4:00pm</span></li>
								<li><strong>Friday</strong> <span class="pull-right">9:30am - 4:00pm</span></li>
								<li><strong>Saturday</strong> <span class="pull-right">On Request</span></li>
								<li><strong>Sunday</strong> <span class="pull-right">Closed</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d755.8271884352812!2d-111.96418810000002!3d40.73323120000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8752f35b52e2c9a7%3A0x7adaa05e570a5e6f!2s1745+Milestone+Dr%2C+Salt+Lake+City%2C+UT+84104!5e0!3m2!1sen!2sus!4v1423453423197" width="350" height="300" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="well">
			<h2 class="hands">Request a Quote</h2>
			<hr>
			<?=$this->Form->create('contact', array('inputDefaults'=>array('div'=>'form-group', 'class'=>'form-control', 'wrapInput'=>false)));?>
				<?=$this->Form->input('name', array('placeholder'=>'Enter Your First and Last Name', 'required' => true, 'allowEmpty' => false)); ?>
				<?=$this->Form->input('email', array('placeholder'=>'you@example.com', 'required' => true, 'allowEmpty' => false)); ?>
				<?=$this->Form->input('phone', array('placeholder'=>'123-456-7890')); ?>
				<?=$this->Form->input('comments', array('type'=>'textarea', 'class'=>'form-control', 'rows'=>'3'));?>
				<div class="g-recaptcha" data-sitekey="6Lf8tgETAAAAAAd6HL_SnIbPdoOxq2ngh1tiHE7Q"></div>
				<?=$this->Form->submit('Submit!', array('class'=>'btn btn-primary btn-lg'))?>
			<?=$this->Form->end()?>
		</div>
	</div>
</div>