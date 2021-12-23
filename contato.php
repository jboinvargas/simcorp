<?php
include ("head.php");
?>

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-24">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Entre em Contato</h3>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">Contato</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/bg-about.jpg);"></div>
        </div>
      </section>
      <!-- Contact information-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:#">(63) 3224-6565</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">208 SUL, AL 03, LT 10, SL 01, Palmas, TO 77020-556</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#"><span class="__cf_email__" ">contato<br>@solveconsultoria.com.br</span></a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form and Gmap-->
      <section class="section section-sm section-last bg-default text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 section-map-small">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.0795581485886!2d-48.31883516655513!3d-10.192306392969959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9324ccaa9e7b17f9%3A0xbfe3e9d6a40f5eea!2sDrogaria+208+Sul!5e0!3m2!1spt-BR!2sbr!4v1549310911868" width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6">
              <h4 class="text-spacing-50">Entre em contato</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">Nome</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-last-name">Sobrenome</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Menssagem</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-secondary button-pipaluk" type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </section>

<?php
include ("footer.php");
?>