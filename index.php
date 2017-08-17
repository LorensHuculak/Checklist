<?php require('includes/config.php');

//if logged in redirect to home page
if( $user->is_logged_in() ){ header('Location: home.php'); }

//if form has been submitted process it
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username FROM users WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM users WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}

	}


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);


		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO users (username,password,email) VALUES (:username, :password, :email)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email']
			));
			$id = $db->lastInsertId('usersID');


			//redirect to index page
			header('Location: index.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Checklist - Signup';

//include header template
require('layout/header_login.php');
?>



 <main>
      <!-- Signup -->
      <section class="g-min-height-100vh g-flex-centered" style="background-image: url(assets/img/bg/pattern/bricks-white.png);">
        <div class="container g-py-50 g-pos-rel g-z-index-1">
          <div class="row justify-content-center u-box-shadow-v24">
            <div class="col-sm-10 col-md-9 col-lg-6">
              <div class="g-bg-white rounded g-py-40 g-px-30">
                <header class="text-center mb-4">
                  <img width="125"height="125" class="g-py-15 g-px-15 mb-3" src="assets/img/logo/checklogo.png" alt="">
                  <h2 class="h2 g-color-black g-font-weight-600">Sign Up</h2>
                </header>
                
                <?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){
					echo "<h2 class='text-center bg-success'>Registration Succesful!</h2>";
				}
				?>

                

                <!-- Form -->
                <form role="form" method="post" action="" autocomplete="off" class="g-py-15">
    
                  <div class="mb-4">
            
                      <input type="text" name="username" id="username" placeholder="Username" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15">
                
                    </div>

                  <div class="mb-4">
                    <input type="email" name="email" id="email" placeholder="Email Address" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="2" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15">
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-6 mb-4">
                      <input type="password" name="password" id="password" placeholder="Password" tabindex="3" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15">
                    </div>

                    <div class="col-xs-12 col-sm-6 mb-4">
                      <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Password" tabindex="4" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15">
                    </div>
                  </div>

                  <div class="row justify-content-between mb-5">
                   
                    <div class="col align-self-center">
                      <button type="submit" name="submit" value="Register" tabindex="5" class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="button">Create Account</button>
                    </div>
                  </div>
                </form>
                <!-- End Form -->

                <footer class="text-center">
                  <p class="g-bg-white g-color-gray-dark-v5 g-font-size-13 mb-0">Already have an account? <a class="g-color-primary g-font-weight-600" href="login.php">Login</a></p>
                </footer>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Signup -->
    </main>



<?php
//include header template
require('layout/footer.php');
?>
