<?php  include("../public/layouts/theme_1/header.php");

$homeslidimages=$index->getAllGeneralItemsWithJoins('','homepage_slideshow');
//$index->show($homeslidimages);

//outfits
//zoomin
?>
    <div style="height: 100px;"></div>
<div class="contact-us">
    <div class="container">
        <div class="contact-form">
            <div class="row">
                <div class="col-sm-7">
                    <form id="ajax-contact" method="post" action="contact-form-mail.php" role="form">
                        <div class="messages" id="form-messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone*</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone*" required="" oninvalid="setCustomValidity('Plz enter your correct phone number ')" onchange="try{setCustomValidity('')}catch(e){}">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-black" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <small class="text-muted"><strong>*</strong> These fields are required.</small>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="col-sm-5">
                    <div class="row col1">
                        <div class="col-xs-3">
                            <i class="fa fa-map-marker" style="font-size:16px;"></i> &nbsp; Address
                        </div>
                        <div class="col-xs-9">
                            One Gateway Center, Suite 25500+,<br> Newark 23, NJ 10235
                        </div>
                    </div>

                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-phone"></i> &nbsp; Phone
                        </div>
                        <div class="col-sm-9">
                            +(91) 123 277 4239
                        </div>
                    </div>
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-fax"></i> &nbsp;  Fax
                        </div>
                        <div class="col-sm-9">
                            123 123 4567
                        </div>
                    </div>
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-envelope"></i> &nbsp; Email
                        </div>
                        <div class="col-sm-9">
                            <a href="mailto:info@yourdomain.com">info@yourdomain.com</a> <br> <a href="mailto:support@yourdomain.com">support@yourdomain.com</a>
                        </div>
                    </div><br>
                    <iframe width="100%" height="230" frameborder="0" style="border-radius:0px;" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?client=firefox-a&amp;ie=UTF8&amp;q=ethane+web+technologies&amp;fb=1&amp;gl=in&amp;hq=ethane+web+technologies&amp;cid=8183905562449910042&amp;t=m&amp;ll=28.639225,77.390442&amp;spn=0.052731,0.154495&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">

</script>


<?php  include("../public/layouts/theme_1/footer.php");

$homeslidimages=$index->getAllGeneralItemsWithJoins('','homepage_slideshow');
//$index->show($homeslidimages);

//outfits
//zoomin
?>