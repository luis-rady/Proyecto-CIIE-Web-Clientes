<html>
<title>Password Recovery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="ForgotPass.css">

<body>
  <!--Header -->
  <div class="w3-container w3-padding-16 w3-indigo">
    <h1 class="w3-margin w3-center w3-jumbo">Password Recovery</h1>
  </div>

  <!--Content -->
  <div class="w3-row w3-padding-64">
    <div class="w3-container w3-padding-16 w3-light-grey w3-content w3-card-8" style="width:45%">
      <div class="w3-container w3-padding-16 w3-center">
        <input placeholder="Enter Email" class="w3-input w3-border" type="email">
        <br>
         <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-hover-deep-purple w3-medium w3-padding-8">Send</button>
         <br><br>
         <a href="Login.php" class="w3-btn w3-hover-deep-purple w3-medium w3-padding-8">Back to Login</a>

        <!--Modal with message-->
         <div id="id01" class="w3-modal">
           <div class="w3-modal-content w3-card-4">
             <header class="w3-container w3-teal">
               <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
             </header>
             <div class="w3-container">
               <h3 class="w3-text-black">An Email has been sent with your password</h3>
             </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</body>
</html>
