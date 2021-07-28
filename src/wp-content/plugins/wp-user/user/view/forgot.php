<div role="tabpanel" class="tab-pane hide <?php echo $forgot_class ?>" id="forgotController<?php echo $form_id ?>">
    <div class="box">
        <div class="wpuser_form_header box-header with-border">  
                     
            <div class="col-xs-12">
                    <div class=" text-center">
                    <div class="wp-line-back-home"> <a aria-controls="loginController<?php echo $form_id ?>" role="tab" data-toggle="tab"
                    href="#loginController<?php echo $form_id ?>" class=""> <img src='http://syscolabs.cleato.com/wp-content/uploads/2019/06/arrow.svg'/> </a> </div>
                        <img src="/wp-content/uploads/2019/06/syscolabs-logo-01-e1562789171367.png" class="center">        
       
                     
                    </div>

                   
                </div>
              
         </div>
        <div class="box-body">
        <div class="col-xs-12 col-md-12">
            <div style="display: none;" id="wpuser_errordiv_forgot<?php echo $form_id ?>"
                class="alert alert-dismissible fade in" role="alert"><label
                    id="upuser_error_forgot<?php echo $form_id ?>"></label></div>
        </div>
        <form method="post" id="wpuser_forgot_form<?php echo $form_id ?>">
            <div class="row">
                <div class="col-xs-12 col-md-12">
            <?php
            do_action('wp_user_hook_forgot_form_header');
            foreach ($wp_user_options_forgot_form as $array) {
                echo profileController::edit_fields($array['meta_key'], $array, $wp_user_appearance_skin, $form_id, null, 'login');
            }
            do_action('wp_user_hook_forgot_form') ?>
                    </div>
                </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-12">
                    <input type="button" style="width: 100%;" id="wpuser_forgot<?php echo $form_id ?>" class="wpuser_button wpuser_button btn <?php echo $wp_user_appearance_button_type ?> btn-primary"
                           name="forgot_password" value="<?php _e('SEND', 'wpuser') ?>">

                     <p class="new-font-login">You will receive an email with a new password</p>      
                </div>
                </div>
                <?php do_action('wp_user_hook_forgot_form_footer') ?>
                <!-- /.col -->
            </div>
        </form>
            </div>
        <!-- <div class="box-footer">
        <a aria-controls="loginController<?php echo $form_id ?>" role="tab" data-toggle="tab"
           href="#loginController<?php echo $form_id ?>"><?php _e('Sign In', 'wpuser') ?></a><br>
            </div> -->
    </div>
</div>
