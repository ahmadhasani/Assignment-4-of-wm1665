<!-- Footer-Area-Start -->
<footer class="footer-area prl section-padding">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-xs-12 col-sm-3">
                <div class="single-footer">
                    <div class="social-menu"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolo-realiquam quae.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="single-footer">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">International</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="single-footer">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Ask Questions</a></li>
                        <li><a href="#">Check out</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="single-footer">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="#">Prvacy</a></li>
                        <li><a href="#">Patterns</a></li>
                        <li><a href="#">Other</a></li>
                        <li><a href="#">Attribute</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="single-footer">
                    <h3>Other</h3>
                    <ul>
                        <li><a href="#">Other Service</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Payments</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-Area-Start -->
</main>
<!--=======  SCRIPTS =======-->
<script src="js/vendor/jquery-1.12.4.min.js" type="text/javascript"></script>
<!--=======  PLUGINS =======-->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/scrollUp.min.js" type="text/javascript"></script>
<script src="js/mixitup.min.js" type="text/javascript"></script>
<script src="js/rating.js" type="text/javascript"></script>
<script src="js/ajaxchimp.js" type="text/javascript"></script>
<script src="js/countdown.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/jquery.twbsPagination.min.js" type="text/javascript"></script>
<script src="js/nouislider.js" type="text/javascript"></script>
<script src="js/plugin.js" type="text/javascript"></script>
<!--=======  ACTIVE JS =======-->
<script src="js/main.js" type="text/javascript"></script>
<script>
    $('.coundown').countdown('2017/12/31', function (event) {
        var offset = event.offset;
        $('#cday').text(offset.totalDays);
        $('#chours').text(''.concat(offset.hours < 10 ? '0' : '', offset.hours));
        $('#cminutes').text(''.concat(offset.minutes < 10 ? '0' : '', offset.minutes));
        $('#cseconds').text(''.concat(offset.seconds < 10 ? '0' : '', offset.seconds));
    });
</script>
</body>