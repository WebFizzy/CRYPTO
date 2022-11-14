<!DOCTYPE html>
<html>
  <head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM</title>
    <link rel="stylesheet" type="text/css" href="styles/signup-css.html">
    <script type="text/javascript" src="https://kit.fontawesome.com/88f8f09358.js" 
    crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .hii {
        text-align: center;
        padding-top: 3rem;
        color: #0d6efd;
      }

      .hii span {
        font-size: 20px;
        color: black;
      }

      em {
        color: red;
      }
    </style>
  </head>
  <body>
    <h1 class="hii">Crypto.<span>Com</span></h1>
    <div class="container">
      <div  class="form1">
        <h1>Sign up</h1>
        <h3>Create your account</h3>  
        <hr>
      <form method="post">
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Username</label>
          <input type="text" name="name" placeholder="username" class="form-control" id="name" autocomplete="off">
        </div>
        <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
         <input type="text" name="email" placeholder="your email address" class="form-control" aria-describedby="emailHelp" id="email">
         <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password*</label>
         <input type="password" name="password"  placeholder="password" class="form-control" id="password" autocomplete="off">
         <span class="error"> 
        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password Confirmation*</label>
         <input type="password" name="password-confirmation" placeholder="password confirmation" class="form-control"  id="password-confirmation" autocomplete="off">
         <span class="error">
        </div>
        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Referral(optional)</label>
         <input type="text" placeholder="referral" class="form-control">
        </div>
        <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
         <label class="form-check-label" for="flexCheckDefault">
          I agree with the terms and conditions
         </label>
        </div>
        <div class="d-grid">
         <button class="btn btn-primary" type="submit"><a href="../javascript.form/sign1-in.html" style="text-decoration: none; color:white">Submit</a></button>
        </div>
         <p>Already have an account? <span><a href="sign1-in.html" style="color: #0d6efd;">sign in instead</a></span></p>
      </form>
    </div>
    </div>  
  
  </body>
</html>