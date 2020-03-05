<?php 
    require_once ('bootstrap.php');
    require ('inc/_head.php');
    require ('inc/_header.php');
?>
    <main class="min-100 d-flex justify-content-center align-items-center">
        <div class="card shadow rounded">
            <div class="card-body">
                <h4 class="card-title text-center">Registration From</h4>
                <form method="POST" action="<?php BASE_URL;?>php/register.php">
                    <?php msgDanger('register_fail');?>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                        name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email address</label>
                        <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!-- passwoed one -->
                    <div class="form-group">
                        <label for="user_pass" class="user_pass_label">Password</label>
                        <input type="password" class="form-control" id="user_pass"
                        name="user_pass" placeholder="Password">
                        <small class="password_err text-danger"></small>
                        <small class="password_str text-success"></small>
                    </div>
                    <!-- password two -->
                    <div class="form-group">
                        <label for="user_pass_two">Re Enter Password</label>
                        <input type="password" class="form-control" id="user_pass_two"
                        name="user_pass_two" placeholder="Password">
                        <small class="password_two_err text-danger"></small>
                        <small class="password_two_str text-success"></small>

                    </div>
                    <div class="form-group">
                        <a href="<?php echo BASE_URL;?>login.php"><small class="">Have acount? Signin!</small></a>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary btn-sm">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Scripts -->
    <?php require (ROOT_PATH.'inc/_scripts.php'); ?>