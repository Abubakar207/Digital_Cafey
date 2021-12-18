<!-- ======= User Signup ======= -->
<section id="signup" class="book-a-table "  >
  <div class="container mt-5" data-aos="fade-up">

  <div class="section-title mt-5 p-3">
            <h2>User</h2>
            <p> Registeration</p>
        </div>

    <form action="index.php?PageName=Register" method="post" class="php-form"  enctype="multipart/form-data">

      <div class="row">
        <div class="col  form-group">
          <?php
          if (count($errors) > 0) {
          ?>
            <div class="alert alert-danger text-center p-2">
              <?php
                echo "Please Enter valid Information..!";
              
              ?>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 form-group mt-3">
          <input type="text" name="UserName" class="form-control" id="UserName" placeholder="User Name" required>
          <div class=" text-danger"> <small>  <?php 
          if(isset($errors['UserName']))
               echo $errors['UserName']
          ?></small> </div>
        </div>

        <div class="col-lg-6 col-md-6 form-group  mt-3 ">
          <input type="email" class="form-control" name="NsuEmail" id="NsuEmail" placeholder="NSU Email">
          <div class=" text-danger"> <small>  <?php 
          if(isset($errors['NsuEmail']))
               echo $errors['NsuEmail']
          ?></small> </div>
        </div>



        <div class="col-lg-6 col-md-6 form-group mt-3 ">
        <input type="text" class="form-control" name="NsuId" id="NsuId" placeholder="NSU Id">
          <div class=" text-danger"> <small>  <?php 
          if(isset($errors['NsuId']))
               echo $errors['NsuId']
          ?></small> </div>
        </div>


        <div class="col-lg-6 col-md-6 form-group mt-3">
          <input type="text" class="form-control" name="ContactNumber" id="ContactNumber" placeholder="Contact Number" required>
        </div>


        <div class="col-lg-6 col-md-6 form-group mt-3">
          <input type="password" class="form-control" name="UserPassword" id="UserPassword" placeholder="Password"  min='8' required>
          <div class=" text-danger"> <small id='pwdmsg'>  <?php 
          if(isset($errors['UserPassword']))
               echo $errors['UserPassword']
          ?></small> </div>
        </div>

        <div class="col-lg-6 col-md-6 form-group mt-3">
          <input type="password" class="form-control" name="ConfirmUserPassword" id="ConfirmUserPassword" placeholder="Confirm Password" min='8' required>
          <div class="validate"></div>
        </div>
        <div class="col-lg-4"></div>
      <div class="col-lg-4">
      <div class="text-center  mt-4"> <input class="form-control btn "  style="width:100%; background:black; color:white;border:2px solid #cda45e; border-radius:10px;" type="submit" name="UserRegister" value="Create Account" required></div>
      </div>
     
      </div>
     
     
    </form>

  </div>
</section>
 