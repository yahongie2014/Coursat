<?php $__env->startSection('title'); ?>
Contact Us
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="clearfix"></div>
  <div class="page-header four">
    <div class="container">
      <div class="col-md-6 pull-left">
        <h3>Contact</h3>
        <h4>Get in Touch with Us</h4>
      </div>
      <div class="col-md-6 pull-right">
        <div class="breadcrumbs"><a href="<?php echo e(URL('/')); ?>">Home</a> <i>/</i> Contact</div>
      </div>
    </div>
  </div>
  <!-- end page header -->
  <div class="clearfix"></div>
  <div class="section-lg counters">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="address-info">
            <h2 class="m-bottom2">Address Info</h2>
            <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
            <br>
            <p>Please be patient while waiting for response.<br>
              <strong>Phone General Inquiries: +2 (010)91950488</strong></p>
            <br>
          </div>
          <!-- end section -->
          
          <div class="address-info">
            <h2 class="m-bottom2">Address Info Two</h2>
            <ul class="address-info map">
              <li><i class="fa fa-map-marker"></i> 15 Maadi,Teba Academy - Cairo Egypt</li>
              <li><i class="fa fa-phone"></i> 19568</li>
              <li><i class="fa fa-envelope"></i> <a href="mailto:info@Coursat.com">info@Coursat.com</a></li>
            </ul>
          </div>
          <!-- end section --> 
        </div>
        <div class="col-md-8">
          <form action="" method="post" id="sky-form" class="sky-form">
            <fieldset>
              <div class="row">
                <section class="col col-6">
                  <label class="label">Name</label>
                  <label class="input"> <i class="icon-append fa fa-user"></i>
                    <input type="text" name="name" id="name">
                  </label>
                </section>
                <section class="col col-6">
                  <label class="label">E-mail</label>
                  <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                    <input type="email" name="email" id="email">
                  </label>
                </section>
              </div>
              <section>
                <label class="label">Subject</label>
                <label class="input"> <i class="icon-append fa fa-tag"></i>
                  <input type="text" name="subject" id="subject">
                </label>
              </section>
              <section>
                <label class="label">Message</label>
                <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                  <textarea rows="4" name="message" id="message"></textarea>
                </label>
              </section>
            </fieldset>
            <footer>
              <button type="submit" class="button">Send message</button>
            </footer>
            <div class="message"> <i class="fa fa-check"></i>
              <p>Your message was successfully sent!</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end counters-->
  <div class="clearfix"></div>
  <div class="section-lg">
    <div class="container">
      <div class="row"> <img class="img-responsive m-auto" src="images/studet-group.jpg" alt=""> </div>
    </div>
  </div>
  <!--end image-->
  <div class="clearfix"></div>
  <div class="bg-parallax">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="m-bottom3 font-white">Lets Get Started</h2>
          <p  class="m-bottom6 font-white">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
      <div class="row animate-in" data-anim-type="fade-in-up" data-anim-delay="100">
        <div class="col-md-8 col-md-offset-2 text-center">
          <p><a href="#" class="btn btn-primary btn-lg">Create A Free Course</a></p>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
(function($) {
  "use strict";
	$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						}
            					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
			})(jQuery);		
		</script> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>