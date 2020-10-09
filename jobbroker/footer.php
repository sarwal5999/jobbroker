<!--footer -->
<br>
<br>
<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top">
            <div class="col-lg-6 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>About Us</h3>
                </div>
                <div class="footer-text">
                    <p>  We have Strong links with both employers in all industries and are often contacted by them when they're
                    looking for staff. We also run carrer evenings and advertise job Vacancies. Come in and find out What's available. Or Let us know if there's type of
                    job you're after-we'll help you out.Keep an eye on the jobs board outside our office in the Hub in Petone and in Porirua for all the latest news on jobs</p>
                </div>
            </div>
            <div class="col-lg-6 footer-grid-wthree-w3ls">
                <div class="footer-title">
                    <h3>Get in touch</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contact-info">
                            <h4>Location :</h4>
                            <p>Work Broker Wellington Institute of Technology
                                21 Kensington Avenue, Petone, Lower Hutt 5012& Whitireia New Zealand
                                3 Wi Neera Drive, Elsdon, Porirua 5022</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact-info">
                            <h4>Contact :</h4>
                            <p>Phone : +64274408676</p>
                            <p>Email :
                                <a href="mailto:tui.bradbrook@weltec.ac.nz">tui.bradbrook@weltec.ac.nz</a>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="copyright mt-4">
            <p class="copy-right text-center ">&copy; 2020 Job Broker. All Rights Reserved | Design by
                <a href=""> Globe Developer </a>
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->
<!--//model-form-->
<!-- js -->
<!--/slider-->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- jequery plugins -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.validate.js"></script>
<script src="js/additional-methods.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.zoomslider.min.js"></script>

<!--//slider-->
<!--search jQuery-->
<script src="js/classie-search.js"></script>
<script src="js/demo1-search.js"></script>
<!--//search jQuery-->


<script>
    $(document).ready(function () {
        $("#form1").validate();
    });



</script>

<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<!-- password-script -->
<script>
    window.onload = function() {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->
<!-- //js -->
<script src="js/bootstrap.js"></script>
<!--/ start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="datatable/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="datatable/jquery.dataTables.css">

<script>
    $('table').dataTable({

    });
</script>



