<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
 <body>
  <div class="container">
   <div class="jumbotron text-center">
    <h2 id="header" class="loginform">Sign up</h2>
     </div>
      <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-4">
         <form name="loginform">
          <div class="form-group">
           <label for="username">Username:</label>
            <input type="text" class="form-control" id="username"/>
             </div>
              <div class="form-group">
               <label for="Email Address">Email address:</label>
                <input type="email" class="form-control" id="Email Address"/> 
                 </div>
                 <p>we will never share your id with anyone else</p>
                 <div class="form-group">
                <label for="Password">Password:</label>
               <input type="password" class="form-control" id="Password">
              </div>
             <div class="form-group">
            <label for="Password">Re-enter Password:</label>
           <input type="password" class="form-control" id="Password">
          </div>
         <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
       <button type="reset" class="btn btn-primary">Reset</button>
      <a href="login.php"><button type="button" class="btn btn-success">Go Back</button></a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>