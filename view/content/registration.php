
    <section class="reg_sec">
      

          
           <form action="./controller/registration.php" method="POST" class="form_regist">
             <h4 id="regist_title">Registration</h4>
             <div class="name">
                 <label for="user" class="regist_label">Name</label>
                <input type="text" id="user" name="name">
             </div>
             <div class="age">
               <label for="age" class="regist_label">Age</label>
               <input type="number" min="3" max="100" id="age" name="age">
             </div>
               <div class="username">
                   <label for="username" class="regist_label">Username</label>
                <input type="text" id="username" name="username">
               </div>
               <div class="email">
                 <label for="email" class="regist_label">Email</label>
                 <input type="text" id="email" name="email">
              </div>
              <div class="password">
                   <label for="password"  class="regist_label">Password</label>
                    <input type="password" id="password" name="password" >
              </div>
               <div class="confirm_password">
                    <label for="confirm_pass" class="regist_label">Confirm Password</label>
                    <input type="password" id="confirm_pass" >
               </div>
              
                <div class="gender">
                    <label  for="male">Male</label>
                    <input type="radio" name="gender" class="radio" value="Male" id="male" checked >
                     <label  for="female">Female</label>
                    <input type="radio" name="gender" class="radio " value="Female"  id="female">
                </div>
              <p id="error_msg">Please fill inputs correctly</p> 
               <p class="checking">Already have an account?<span id="log">log in</span ></p>
                <input type="submit" id="regist_button" value="submit">
            </form>
    
           
    </section>


