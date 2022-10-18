
            <!-- back to top btn area start -->
            <section class="back-btn-top">
                <div class="container-fluid p-0">
                    <div class="row gx-0">
                        <div class="col-xl-12">
                            <div id="scroll" class="back-to-top-btn back-to-top-btn-2 text-center">
                                <a href="javascript:void(0);">back to top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- back to top btn area end -->
        <!-- footer area start -->
        <footer>
            <div class="footer__area">
                <div class="footer__top black-bg pt-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Ovenda Info</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="#">About us</a></li>
                                                        <li><a href="contact.php">Contact us</a></li>
                                                        <li><a href="#">Find a Store</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Links</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="#">Special Offers</a></li>
                                                        <li><a href="#"> Gift Cards</a></li>
                                                        <li><a href="#">F21 Red</a></li>
                                                        <li><a href="#">Privacy Policy</a></li>
                                                        <li><a href="#"> Teams of Use</a></li>
                                                        <li><a href="#">Portfolio</a></li>                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Let Us Help You</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="#">Wishlist</a></li>
                                                        <li><a href="#">Addresses</a></li>
                                                        <li><a href="#"> Account details</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title footer__widget-title-2">
                                                <h4>Company Info</h4>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div class="footer__link footer__link-2">
                                                    <ul>
                                                        <li><a href="#">About us</a></li>
                                                        <li><a href="#">Contact us</a></li>
                                                        <li><a href="#">Careers</a></li>
                                                        <li><a href="#">Business With Us</a></li>
                                                        <li><a href="#">Find a Store</a></li>
                                                        <li><a href="#">Press & Talent</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="footer__widget">
                                    <div class="footer__widget-title footer__widget-title-2">
                                        <h4>Social Media</h4>
                                    </div>
                                    <div class="footer__widget-content">
                                        <div class="footer__social mb-20">
                                            <ul>
                                                <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li class="gp"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li class="yt"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                <li class="pt"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li class="em"><a href="#"><i class="fal fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="footer__download">
                                            <h4>Download The App - Get 30% Sale Coupon</h4>
                                            <a href="#" class="m-img"><img src="<?= $url ?>static/siteassets/img/icon/app-store-2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright pb-10 black-bg ">
                    <div class="container">
                        <div class="footer__copyright-inner ">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-lg-12 d-flex justify-content-center">
                                    <div class="footer__copyright-text">
                                        <p>Copyright © <a href="index.php">Ovenda.</a> All Rights Reserved.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

        <!-- JS here -->
        <script>
  var pop = document.querySelectorAll(".delete");

  pop.forEach((element) => {

    element.addEventListener("click", () => {
      var popupModal = document.getElementById(element.dataset.popupTrigger);
      var item = document.getElementsByClassName("cart__inner");

      var popupModalCloseButton = document
        .getElementById(element.dataset.popupTrigger)
        .getElementsByClassName("cancelbtn")[0];

      popupModal.classList.toggle("show-modal");


      popupModalCloseButton.addEventListener("click", () => {
        popupModal.classList.remove("show-modal");
      });

      var popupDeleteBtn = document
        .getElementById(element.dataset.popupTrigger)
        .getElementsByClassName("deletebtn")[0];

      popupDeleteBtn.addEventListener("click", () => {
        // var result = confirm("deleted successully");
        if ("deletebtn") {
           $.ajax({
                type: "GET",
                url: "includes/site/rm-cart-item.inc.php" ,
                data: { prodId: "<?= $prodId ?>", sd: "1" },
                success : function() {
                    location.reload();

                }
            });
        }
        // popupModal.classList.remove("show-modal");
      })

    });
  });
</script>
        <script src="<?= $url ?>static/siteassets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/vendor/waypoints.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/meanmenu.js"></script>
        <script src="<?= $url ?>static/siteassets/js/slick.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/backToTop.js"></script>
        <script src="<?= $url ?>static/siteassets/js/jquery.fancybox.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/countdown.js"></script>
        <script src="<?= $url ?>static/siteassets/js/nice-select.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/isotope.pkgd.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/owl.carousel.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/jquery-ui-slider-range.js"></script>
        <script src="<?= $url ?>static/siteassets/js/ajax-form.js"></script>
        <script src="<?= $url ?>static/siteassets/js/wow.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?= $url ?>static/siteassets/js/main.js"></script>
        <script src="<?= $url ?>static/siteassets/js/cart.js"></script>
    </body>
</html>
