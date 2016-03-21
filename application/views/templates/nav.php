<section class="danero-nav">
    <div class="container" style="padding: 15px 0">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($user)) { ?>
                    <div class="un-logged">
                        Welcome back, <a href="<?php echo base_url() . 'user/profile'; ?>"><?php echo $user['name']; ?></a> |
                        <a href="<?php echo base_url() . 'user/logout'; ?>">Logout</a>
                    </div>
                <?php } else { ?>
                    <div class="un-logged">
                        <a href="<?php echo base_url() . 'user/login'; ?>">Log in</a> or
                        <a href="<?php echo base_url() . 'user/sign_up'; ?>">Sign Up</a>
                    </div>
                <?php } ?>
                <h2 style="font-weight: bold;"><a href="<?php echo base_url(); ?>"><span style="font-size: 30px">J</span>ELLYFISH</a></h2>
            </div>
        </div>
    </div>
</section>