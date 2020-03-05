<?php 
    require_once ('bootstrap.php');
    require (ROOT_PATH.'inc/_head.php');
    require (ROOT_PATH.'inc/_header.php');
?>
    <main class="min-100 d-flex justify-content-center align-items-center">
        <div class="card shadow rounded">
            <div class="card-body">
                <h4 class="card-title text-center">Login From</h4>
                <form method="POST">
                    <small><?php msgSuccess('register_success');?></small>
                    
                    <div class="form-group">
                        <label for="log_mail">Email address</label>
                        <input type="email" class="form-control" id="log_mail" name="log_mail" aria-describedby="emailHelp" placeholder="Enter email">
                        <small class="mail_str text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="log_pass">Password</label>
                        <input type="password" class="form-control" id="log_pass" name="log_pass" placeholder="Password">
                        <small class="pass_str text-danger"></small>
                    </div>
                    <div class="form-group">
                        <a href="<?php echo BASE_URL;?>registration.php"><small class="">Create Accaunt!</small></a>
                    </div>
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-primary btn-sm" id="login_submit" name="login_submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Scripts -->
    <?php require (ROOT_PATH.'inc/_scripts.php'); ?>