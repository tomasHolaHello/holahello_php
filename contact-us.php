<?php $title = "Contact Us | GetGloby | Translate Your Media Ads Campaigns"; ?>
<?php $description = "Reach new audiences! GetGloby uses machine learning to automatically translate your Media Ads Campaigns into more than 100 languages."; ?>
<?php $keywords = "Language Technology, Instant Translation, Plug & Play, Translate your campaigns into more than 100 languages. Reach 6.3 billion people."; ?>
<?php $selected = "contact"; ?>
<?php $selected = "bgnav"; ?>
<?php include('header.php');?>



        <section id="contact" class="bg-white brand-geo-left mt-5">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-5 px-4 px-lg-3">
                    <div class="mb-5 mb-lg-0">
                      <div class="fs-5 fw-normal mb-4 text-primary">Start Now!</div>
                        <h1 class="display-4 mb-4 special-font">Are You Ready To Grow?</h1>
                        <p class="lead text-muted mb-4">GetGloby will help you to reduce your work time and expand your possibilities in 3 simple steps. Take charge of the future of your global campaigns.</p>
                        <ul class="lead list-unstyled px-0 mb-4">
                          <li class="my-2"><i class="bi bi-check-circle-fill text-primary"></i> Start with a free trial of 10k words.</li>
                          <li class="my-2"><i class="bi bi-check-circle-fill text-primary"></i> Trial includes translations in up to 100 languages.</li>
                          <li class="my-2"><i class="bi bi-check-circle-fill text-primary"></i> No credit card required.</li>
                        </ul>
                        <p class="lead text-muted mb-4">For general queries, including partnership opportunities and sales, please email <a title="GetGloby | Email" href="mailto:info@getgloby.com">info@getgloby.com</a> or fill out our form.</p>
                    </div>
                  </div>

                  <div class="col-lg-7">

                    <div id="form-1-res">

                    <form method="POST" action="form-getgloby" id="form-1">

                      <div class="card px-3 py-5 rounded-special border-0 shadow">
                        <div class="card-body">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <label for="name" class="form-label">Name *</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Name" required="required">
                            </div>
                            <div class="col-lg-6">
                                <label for="company" class="form-label">Company *</label>
                                <input class="form-control" id="company" name="company" type="text" placeholder="Company Name" required="required">
                            </div>
                            <div class="col-lg-6">
                                <label for="email" class="form-label">Work Email *</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="email@company.com" required="required">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-12">
                                <label for="message" class="form-label">Comments </label>
                                <textarea class="form-control" id="message" name="message" placeholder="How can we help you?"></textarea>
                            </div>

                            <div class="col-lg-12 mb-4">
                              <label for="inputMessage" class="form-label">Check Captcha </label>
                              <div class="alert alert-danger" style="display: none;" id="alert-captcha-1"> Check captcha to continue!</div>
                              <div id="RecaptchaField1"></div>
                            </div>

          		              <div class="error" style="display: none; color: #e56061;"></div>

                            <div class="col-lg-12 text-right">
      					               <input type="hidden" id="btn-form-contact" />
                               <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                            </div>
                          </div><!-- ./row -->
                        </div>
                      </div>
                    </form>
                  </div><!-- #form-1-res -->
                  </div>
                </div>
            </div>
        </section>

<?php include('footer.php'); ?>

<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>

<script type="text/javascript">
  var CaptchaCallback = function() {
      grecaptcha.render('RecaptchaField1', {'sitekey' : '6LcxExMhAAAAAMcku4Z0p8QXT9_Db-v7-SK7Uwq3','callback' : correctCaptcha1});
  };

  var correctCaptcha1 = function(response) {
      if(response != "") {
        cap1 = true;
      }
  };

  $(function () {
    var frm = $('#form-1');
    frm.submit(function (ev) {
      ev.preventDefault();
      var send = true;
      if(!cap1) {
          send = false;
          $('#alert-captcha-1').show();
      }

      if(send) {
          $.ajax({
              type: frm.attr('method'),
              url: frm.attr('action'),
              data: frm.serialize(),
              success: function (data) {
                  $('#form-1-res').html(data);
              }
          });
      }
    });
  });
</script>
