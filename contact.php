<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "nav.php";?>
    <div style="background-color:white;" class="">
        <section class="inner_page section_wrapper pb-5">
            <div class="map">
                <div class="gmap_canvas">

                </div>
            </div>
            <div class="container inner_content">
                <div class="contact_form">
                    <h1>STAY CONNECTED WITH US</h1>
                    <div role="form" class="wpcf7" id="wpcf7-f8-p57-o1" lang="en-US" dir="ltr">


                        <div class="row">
                            <div class="col col-xs-6">
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap Name"><input type="text" name="Name" value=""
                                            size="40" class="wpcf7-form-control wpcf7-text form-control" id="name"
                                            aria-invalid="false" placeholder="Name" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap email"><input type="email" name="email"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email form-control"
                                            id="email" aria-invalid="false" placeholder="Email" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap Phone"><input type="tel" name="Phone" value=""
                                            size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control"
                                            id="phone" aria-invalid="false" placeholder="Phone No" /></span>
                                </div>
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap Phone"><input type="tel" name="Phone" value=""
                                            size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control"
                                            id="subject" aria-invalid="false" placeholder="Subject" /></span>
                                </div>
                            </div>
                            <div class="col col-xs-6">
                                <div class="form-group">
                                    <span class="wpcf7-form-control-wrap Textarea"><textarea name="Textarea" cols="40"
                                            rows="10" class="wpcf7-form-control wpcf7-textarea form-control"
                                            id="message" aria-invalid="false" placeholder="Message"></textarea></span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xs-12">
                            <input type="submit" value="Submit"
                                class="wpcf7-form-control has-spinner wpcf7-submit btn btn_submit" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div style="height:340px;">

    </div>
    <?php include "footer.php";?>

</body>

</html>