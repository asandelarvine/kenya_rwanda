<?php
    require_once 'header.php'; 
?>

<div class="container">
<form method="POST" action="insertInto.php">
<h1 class="margin:center">Registration Form</h1>
<div class="form-row">
    <div class="form-group col-md-6">
      <label>FirstName</label>
      <input type="text" class="form-control" name="fname" placeholder="FirstName">
    </div>
    <div class="form-group col-md-6">
      <label>LastName</label>
      <input type="text" class="form-control" name="lname" placeholder="LastName">
    </div>
  </div>
    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" value="M">
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" value="F">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Date of Birth</label>
      <input type="date" class="form-control" name="dob" placeholder="date of birth">
    </div>
    <div class="form-group col-md-6">
      <label>weight</label>
      <input type="float" class="form-control" name="weight" placeholder="weight">
    </div>
  </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <div class="form-group col-md-6">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
    </div>
    <br>
  <input type="checkbox">Terms and Conditions
  <br>
  <br>
  <br>
  <button type="submit" class="btn btn-primary width:100%" name="submit">Submit</button>
</form>
</div>







<?php
    require_once 'footer.php';
?>