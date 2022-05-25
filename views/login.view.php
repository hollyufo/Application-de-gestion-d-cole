<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/assets/css/style.css">
    <title>Authenticate</title>
</head>
<body  class="bg-image"
style="
  background-image: url('https://pbs.twimg.com/media/ERoOffkU0AE-sYm.jpg');
background-repeat: no-repeat; background-size: 100%; background-position: center;
">
    <div style="background-color: lightgrey; opacity: 90%; width: 100%; height: 100vh;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">School management</a>
                <a href="#" class="btn btn-dark d-flex">Login</a>
            </div>
        </nav>
        <div class="">
          <div class="login">
              <h2 class="tlogin">Authenticate</h2>
              <form id="loginform" action="" method="POST">
                <div class="sec">
                  <label for="username">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                  <p id="usernameError" class="invalid-feedback small"></p>    
                </div>
                <div class="sec">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                  <p id="passwordError" class="invalid-feedback small"></p>       
                </div>
                <div class="sec">
                  <input class="btn btn-sepcial" type="submit" value="Login" name="login">
                </div>     
              </form>
              <p class="s13">No account? Ask your admin for one.</p>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>