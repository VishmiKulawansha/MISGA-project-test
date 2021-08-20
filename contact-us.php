<?php
include 'includes/head.php';
include 'navbar.php';
include 'includes/r_l-header.php';
include 'includes/JS.php';
?>
<div class="w3-container w3-center w3-animate-zoom">
    <div class="pb-0">
        <div class="contact1 mb-5">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-lg-7">
                        <div class="contact-wrapper">
                            <h3 class="title font-weight-normal mt-0 text-left text-title"><br>Send Us a Message</h3>
                            <form data-aos="fade-left" data-aos-duration="1200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary mb-5">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="detail-wrapper p-5 bg-primary">
                            <h3 class="font-weight-normal mb-3 text-light">
                                KRISH VILLA
                            </h3>

                            <p class="text-light">
                                Krish Villa No. 468, Hokandara,<br>
                                Sri Jayawardhanepura Kotte,<br>
                                Colombo,<br>
                                Sri Lanka.<br>
                            </p>

                            <p class="text-light">
                                Krish Villa No. 54, Nuwara Eliya Road,<br>
                                Lindula,<br>
                                Hatton,<br>
                                Sri Lanka.
                            </p>

                            <p class="text-light">
                                <i class="fas fa-phone"></i> +94114988407<br>
                                <i class="fas fa-phone"></i> +52114988408<br>
                                <i class="fas fa-envelope"></i> krishvilla.colombo@gmail.com<br>
                                <i class="fas fa-envelope"></i> krishvilla.lindula@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="text-1">COLOMBO FARM<br></p>
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=colombo&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
    <p><br></p>
    <div>
        <p class="text-1">LINDULA FARM<br></p>
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=lindula&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>
</div>
<?php
include 'includes/footer.php';
?>