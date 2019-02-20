<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Alphanus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <?php $this->load->view('template/style')?>

    </head>

    
    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?php echo base_url().'assets/';?>images/bg-4.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="<?php echo base_url() ?>" class="text-success">
                                    <span><img src="<?php echo base_url().'assets/';?>images/logo.png" alt="" height="80"></span>
                                </a>
                            </h2>

                            <?php if ($this->session->flashdata('error_message') != "") :?>
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">X</span></button>
                                    <strong><?php echo $this->session->flashdata('error_message')?></strong>
                                </div>
                            <?php endif?>

                            <form class="" action="<?php echo base_url('auth/login');?>" method="post">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="username">Username or Email </label>
                                        <input class="form-control" type="text" id="username" name="username" required="" placeholder="Enter your username or your email">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="<?php echo base_url().'forgetPassword' ?>" class="text-muted float-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name = "password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="<?php echo base_url().'register' ?>" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2019 © Alphanus</p>
            </div>

        </div>



        <?php $this->load->view('template/script')?>

    </body>
</html>