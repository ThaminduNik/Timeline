<div role="tabpanel" class="tab-pane hide <?php echo $login_class ?>" id="loginController<?php echo $form_id ?>"
     class="login-box-body">
    <div class="box">
        <div class="wpuser_form_header box-header with-border" >
            <!-- <h3 class="box-title"><?php _e('Sign In', 'wpuser') ?></h3> -->

            <img src="/wp-content/uploads/2019/06/syscolabs-logo-01-e1562789171367.png" class="center">        
            <div class="login_new">
            <h3 align="center">Internal Timeline</h3>
            </div>
        </div>
        <div class="box-body">
            <div class="col-xs-12 col-md-12">
                <!-- <div style="display: none;" id="wpuser_errordiv<?php echo $form_id ?>"
                    class="alert alert-dismissible fade in" role="alert"><label
                        id="upuser_error<?php echo $form_id ?>"></label>
                </div> -->
            </div>
        <form method="post" onsubmit="return false" id="wpuser_login_form<?php echo $form_id ?>">
            <?php do_action('wp_user_hook_login_form_header') ?>
            <div class="row">
                <!-- <div class="col-xs-12">
             <?php 
            foreach ($wp_user_options_signin_form as $array) {
               //echo profileController::edit_fields( $array['meta_key'], $array, $wp_user_appearance_skin, $form_id, null, 'login' );
            }
            //do_action('wp_user_hook_login_form', $atts, $form_id );
            ?>
                    </div> -->
                </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <div class="col-xs-12 text-center">
                      <input type="submit" style="width:50%" id="wpuser_login<?php echo $form_id ?>" class="wpuser_button btn <?php echo $wp_user_appearance_button_type ?> btn-primary btn-main"
                           name="wpuser_login" onclick="submitSamlForm()" value="<?php _e('LOGIN', 'wpuser') ?>">
                    </div> 
                </div>
                <div class="col-xs-12">
                    <?php do_action('wp_user_hook_login_form_footer', $atts, $form_id ) ?>
                 <div class="col-xs-12 padding-new">
                     
                 <!-- <span class="new-font-login">Still not registered? </span>
                     <?php if (!$wp_user_register_enable) { ?> -->
                   <!-- <span class="new-font-login color-link"> <a style="" href="#registerController<?php echo $form_id ?>"
                    aria-controls="registerController<?php echo $form_id ?>" role="tab" data-toggle="tab"
                    class="text-center"><?php _e('Sign up here', 'wpuser') ?></a></span> -->
               <?php } ?>

                 <!-- <span class="new-font-login color-link"><a style="float: right !important;" class="pull-right new" href="#forgotController<?php echo $form_id ?>" aria-controls="forgotController<?php echo $form_id ?>"
               role="tab" data-toggle="tab"><?php _e('Reset password', 'wpuser') ?></a></span> -->
                 </div>   
                </div>
                <!-- /.col -->
            </div>
        </form>
            </div>
        <div class="">
        <!-- <?php if (!$wp_user_register_enable) { ?>
            <a style="float: right" href="#registerController<?php echo $form_id ?>"
               aria-controls="registerController<?php echo $form_id ?>" role="tab" data-toggle="tab"
               class="text-center"><?php _e('Sign Up here', 'wpuser') ?></a>
        <?php } ?> -->
        </div>

    </div>
</div>
