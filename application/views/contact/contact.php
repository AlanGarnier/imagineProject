<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header/header');
?>
    <div class="container">
        <section class="section-header">
            <div class="row">
                <div class="col-12">
                    <h2>Inscription</h2>
                </div>
                <div class="row">
                    <form method="post" action="<?php echo site_url("Welcome/contact")?>">
                        <!-- Default form contact -->
                        <form class="text-center border border-light p-5">

                            <p class="h4 mb-4">Contactez nous !</p>

                            <!-- Name -->
                            <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

                            <!-- Email -->
                            <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

                            <!-- Subject -->
                            <label>Subject</label>
                            <select class="browser-default custom-select mb-4">
                                <option value="" disabled>Choisir un sujet</option>
                                <option value="1" selected>Devis</option>
                                <option value="2">Retour</option>
                                <option value="3">Facture</option>
                            </select>

                            <!-- Message -->
                            <div class="form-group">
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                            </div>

                            <!-- Send button -->
                            <button class="btn btn-info btn-block" type="submit">Send</button>

                        </form>
                        <!-- Default form contact -->
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php $this->load->view('footer/footer'); ?>