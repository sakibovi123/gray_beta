<!-- jquery js -->
<script data-cfasync="false" src="assets/vendor/jquery/jquery.min.js"></script>

<!-- bootstrap js -->
<script data-cfasync="false" src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>   
<!-- adminlte js -->
<script data-cfasync="false" src="assets/scripts/adminlte.min.js"></script>
<!-- owl.carousel js -->
<script data-cfasync="false" src='assets/vendor/owl-carousel/owl.carousel.min.js'></script>

<!-- use passive listeners to improve scrolling performance -->
<script data-cfasync="false">
jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ) {
      this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  } 
};
</script>
<!-- custom js-->
<script data-cfasync="false" src="assets/scripts/custom.min.js?v=3"></script>

<script data-cfasync="false" src="assets/scripts/gdrp.js"></script>
<script data-cfasync="false" src="assets/scripts/gdrp-message.js"></script>
<script data-cfasync="false" src="assets/scripts/app.js"></script>

<!-- <script src="https://www.google.com/recaptcha/api.js?render=6LfpSI0fAAAAAPc2FZMfty_cTDY2Zshx4SzQ6vIP"></script> -->
<!-- <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LfpSI0fAAAAAPc2FZMfty_cTDY2Zshx4SzQ6vIP', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
              var response = getElementById('token_gnerate');
              response.value = token;
          });
        });
      }

     

    function onload() {
      var element = document.getElementById('submit');
      element.onclick = validate;
    }
  </script> -->


<script async src="https://www.google.com/recaptcha/api.js?render=6LfpSI0fAAAAAPc2FZMfty_cTDY2Zshx4SzQ6vIP"></script>

<script>
        $('#GGLinkContactus').submit(function(event) {
            event.preventDefault(); // Prevent direct form submission
            $('#alert').text('Processing...').fadeIn(0); // Display "Processing" to let the user know that the form is being submitted
            grecaptcha.ready(function () {
                grecaptcha.execute('6LfpSI0fAAAAAPc2FZMfty_cTDY2Zshx4SzQ6vIP', { action: 'thank-you' }).then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                    // Make the Ajax call here
                    $.ajax({
                        url: 'thank-you.php',
                        type: 'post',
                        data: $('#GGLinkContactus').serialize(),
                        dataType: 'json',
                        success: function( _response ){
                            // The Ajax request is a success. _response is a JSON object
                            var error = _response.error;
                            var success = _response.success;
                            if(error != "") {
                                // In case of error, display it to user
                                $('#alert').html(error);
                            }
                            else {
                                // In case of success, display it to user and remove the submit button
                                $('#alert').html(success);
                                $('#submit-button').remove();
                            }
                        },
                        error: function(jqXhr, json, errorThrown){
                            // In case of Ajax error too, display the result
                            var error = jqXhr.responseText;
                            $('#alert').html(error);
                        }
                    });
                });
            });
        });
    </script>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>