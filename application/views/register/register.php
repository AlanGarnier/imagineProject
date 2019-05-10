<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header/header');
?>
    <div class="container">
        <section class="header-section">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Connexion</h2>
                </div>
                <div class="row col-12 justify-content-center">
                    <form method="post" action="<?php echo site_url("Welcome/connexion")?>" class="col-8">
                        <!-- Default form register -->
                        <form class="text-center border border-light p-5">

                            <p class="h4 mb-4">Sign up</p>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Prénom">
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Nom">
                                </div>
                            </div>

                            <!-- E-mail -->
                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                            <!-- Password -->
                            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                At least 8 characters and 1 digit
                            </small>

                            <!-- Phone number -->
                            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                Optional - for two step authentication
                            </small>


                            <!-- Sign up button -->
                            <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

                            <<!-- Register -->
                            <p>Vous avez déjà un compte ?
                                <a href="<?php echo site_url("Welcome/connect")?>">Connectez-vous</a>
                            </p>

                        </form>
                        <!-- Default form register -->
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php $this->load->view('footer/footer'); ?>