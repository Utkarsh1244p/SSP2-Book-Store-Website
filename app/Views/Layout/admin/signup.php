
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?= base_url('assets/admin/img/logo.png') ?>" alt="">
                  <span class="d-none d-lg-block">Bookstore</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="<?= site_url('signup') ?>" method='post' class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label" >First Name</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="text" name="fname" class="form-control" id="fname" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label" >Last Name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="lname" class="form-control" id="lname" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>


                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter your email!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourPhone" class="form-label">Phone</label>
                      <input type="tel" id="yourPhone" class="form-control" name="phone" pattern="[0-9]{10}" maxlength="10" required>
                      <div class="invalid-feedback">Please enter your phone number!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourAddress" class="form-label">Permenant Address</label>
                      <input type="text" name="address" class="form-control" id="yourAddress" required>
                      <div class="invalid-feedback">Please enter your permenant address!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourAadhar" class="form-label">Aadhar Card</label>
                      <input type="text" id="aadharNumber" class="form-control" name="aadharNumber" pattern="\d{4}\s\d{4}\s\d{4}"
                                maxlength="14" placeholder="XXXX XXXX XXXX" required>
                      <div class="invalid-feedback">Please enter your phone number!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourAadhar" class="form-label">Pan Card</label>
                      <input type="text" id="panNumber" class="form-control" name="panNumber" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"
                                maxlength="10" required>
                      <div class="invalid-feedback">Please enter your phone number!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe"  required>
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->