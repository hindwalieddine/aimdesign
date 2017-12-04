<?php  include("../public/layouts/theme_1/header.php");?>
    <style>
        /**
     * Footer Styles
     */
        @media(min-width:767px) {
            .footer {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1rem;
                background-color: #f8f9fa!important;
                text-align: center;
            }
        }
        .btn-primary {
            color: #fff;
            background-color: black;
            border-color: black;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: black;
            background-color: darkslategrey;
            border-color: darkslategrey;
        }
    </style>
<div style="height: 100px;"></div>

    <div class="container">
<!--        <div class="row">Get in touch</div>-->
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form action="contact.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="phone">
                                        Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" name="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span>&nbsp;Get in touch</legend>
                    <address>
                        <strong>Aim Design Label</strong><br>
                        Beirut, Lebanon <br>
                        <abbr title="Phone">
                            P:</abbr>
                        (+961) 71 700 448
                    </address>
<!--                    <address>-->
<!--                        <strong>Email</strong><br>-->
<!--                        <a href="mailto:#">info@aimdesignlabel.com</a>-->
<!--                    </address>-->
                </form>
            </div>
        </div>
    </div>

<?php  include("../public/layouts/theme_1/footer.php");?>