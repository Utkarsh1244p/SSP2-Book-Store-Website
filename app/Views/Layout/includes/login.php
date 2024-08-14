
    <!-- LOGIN MODAL START -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Login Here</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="wrapper">

                            <form action="login.php" method="POST" autocomplete="off">
                                <div class="row">
                                    <i class="fas fa-user"></i>
                                    <input id='email' name='email' type="email" placeholder="Email" required>
                                </div>
                                <div class="row">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" placeholder="Password" id="Password" name="Password"
                                        required>
                                </div>
                                <!-- <div class="pass"><a href="#">Forgot password?</a></div>-->
                                <div class="row button">
                                    <input type="submit" value="Login">
                                </div>

                                <div class="signup-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Not a
                                    member? <a href="#">Signup now</a></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
     <!-- LOGIN MODAL START -->
