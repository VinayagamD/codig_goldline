<!--contact Us start-->
<div class="container ">

    <div class="card row"><h4 class="s12 center purple-text card-content ">
            <b class="#9c27b0 purple-text">Contact Us</b>
            <?php if (isset($error)) { ?>
                <br>
                <p class="red-text"><?= $error ?></p>
            <?php } ?>
            <?php if (isset($success)) { ?>
                <br>
                <p class="teal-text darken-4"><?= $success ?></p>
            <?php } ?>

        </h4>
    </div>
    <div class="row card">


        <form class="col s12 card-content" method="post" action="<?= base_url() ?>contact-us">
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="first_name" type="text" name="first_name" class="validate">
                    <label for="first_name">First Name</label>
                    <span class="red-text"><?php echo form_error('first_name') ?></span>
                </div>
                <div class="input-field col s12 m6">
                    <input id="last_name" name="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                    <span class="red-text"><?php echo form_error('email') ?></span>
                </div>
                <div class="input-field col s12 m6">
                    <input id="phone" name="phone" type="tel" class="validate">
                    <label for="phone">Phone</label>
                    <span class="red-text"><?php echo form_error('phone') ?></span>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <input id="sub" name="subject" type="text" class="validate">
                    <label for="sub">Subject</label>
                    <span class="red-text"><?php echo form_error('subject') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                    <label for="textarea1">Enquiry</label>
                    <span class="red-text"><?php echo form_error('message') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 right-align">
                    <input type="submit" class="btn-large btn waves-effect waves-light #6a1b9a purple darken-3 "
                           value="Submit"/>
                </div>
            </div>
        </form>

    </div>
    <!--About Us End-->
    <div class="row white z-depth-2">
        <div class="divider"></div>
        <div class="col s12 m4 purple-text">
            <?php $this->load->view("layout/layout_address"); ?>
        </div>
        <div class="col s12 m8">
            <?php $this->load->view("layout/layout_map"); ?>

        </div>
    </div>
</div>
<!--contact us  ends-->