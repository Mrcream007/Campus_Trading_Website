<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome-5.15/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/sign.js"></script>
</head>

<body>
    

  <main >
    <div class="container">
      <br>
      <div style=" margin-left: auto; margin-bottom: auto;">
        <h2 style="text-align: center;">Registration</h2>
        <div class="container" style="margin-left: auto; margin-right: auto;">
        <div class="center-div">
            
            
            <form name="signup-form" method="post" action="signup.php" id="signup" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" id="username">
                </div>
                <div class="form-group">
                    <input class="form-control" name="email" placeholder="Email" id="email">
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" id="phone">
                </div>
                <div class="form-group">
                    <select name="gender" class="form-control" name="gender" id="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="undisclosed">Rather not say</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" id="password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder=" Confirm Password" id="password_confirmation" name="password_confirmation">

                </div>
                <div class="form-group">
                <div class="input-field">
                  <select name="role" id="role" class="form-control">
                   <option value="Seller" selected>Seller</option>
                   <option value='buyer'>Buyer</option>
                  </select>
                  <label class="input-group-text">Role</label>
                </div>
                <div class="pull-right">
                    <button class="btn btn-primary" type="submit" name="signup-form">Signup</button>
                </div>
            </form>
        </div>
    </div>
  </main>

  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
        
</body>
</html>
