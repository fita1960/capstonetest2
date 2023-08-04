<?php
include_once('header.php');
?>

    <section class="signup-form">
       
        <div class="container col-4 border rounded-3 p-4 my-5">
            <form action="includes/login.inc.php" method="post">
                <div class="text-center mb-3">
                    <h2>Login</h2>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="pasword">
                </div>
                <div class="pt-3 text-center">
                    <p>No Account yet? <a href="signup.php">Click Here to Register</a></p>
                </div>
                <div class="py-4 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        
    </section>

<?php
  include_once('footer.php');
?>