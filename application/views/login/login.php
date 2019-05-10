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
                        <!-- Default form login -->
                        <form class="text-center border border-light p-5">
                            <!-- Email -->
                            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Login">

                            <!-- Password -->
                            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Forgot password -->
                                    <a href="">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="<?php echo site_url("Welcome/inscription")?>">Inscrivez-vous</a>
                            </p>
                        </form>
                        <!-- Default form login -->
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php $this->load->view('footer/footer'); ?>