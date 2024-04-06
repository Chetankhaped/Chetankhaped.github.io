

# Welcome
     <form id="login-form" class="login-form" action="login_process.php" method="POST">
      <input type="text" placeholder="Username" name="username" required="">
      <input type="password" placeholder="Password" name="password" required="">
      <a href="deep.html">Login</a>
    </form>
    <form id="signup-form" class="signup-form" style="display: none;">
      <input type="text" placeholder="Username" required="">
      <input type="password" placeholder="Password" required="">
      <input type="password" placeholder="Confirm Password" required="">
      <input type="submit" value="Sign Up">
      
    </form>
    
    <div class="switch-btn">
      <a href="#" onclick="toggleForm('login')">Login</a> | <a href="#" onclick="toggleForm('signup')">Sign Up</a>
    </div>
  </div>

  

</body></html>
