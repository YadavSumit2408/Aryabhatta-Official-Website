<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-sm-4">
                <h5>ABOUT US</h5>
                <ul class="list-unstyled">
                    <li>IEEE Pranveer Singh Institute of Technology (PSIT) Student Branch was established in Kanpur,
                        INDIA and is registered under the Institute of Electrical and Electronics Engineers (IEEE) in
                        Piscataway, New Jersey, USA.</li>
                    <li><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Kanpur - Agra - Delhi National Highway - 2 ,
                        Bhauti, Kanpur, Uttar Pradesh 209305, INDIA</li>
                    <li><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;+91-7905573494</li>
                    <li><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;ieeepsit@gmail.com</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>RECENT ACTIVITIES</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/IEEEPsit/"><i
                                class="fab fa-facebook-f"></i>&nbsp;&nbsp;Connect @ facebook</a></li>
                </ul>
            </div>
            <div class="col-sm-4" style="margin: auto">
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><img src="IEEE Activities/f.png" class="img_2" width="100%"
                                height="100%"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/IEEEPsit/"><i
                                class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center text-white">
                <p class="h6">All rights Reversed.<a class="text-green ml-2" href="" target="_blank">IEEESTBPSIT</a></p>
            </div>
        </div>
    </div>
</section>

<!--Footer Ends-->

<script>
window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.4.0.min.js"><\/script>');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!--jquery scripts starts-->
<script type="text/javascript">
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
</script>
<!--simple text carousel-->
<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
</script>
<!-- ENd of carousel-->
<!--<script type="text/javascript">
      $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
    -->
</body>
</html>