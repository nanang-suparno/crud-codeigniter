<!DOCTYPE html>
<html ang-app="">
<head>
<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
</head>

<body>
<div class="container">

<ul class="breadcrumb wellwhite">
    <li>CRUD<span class="divider"></span></li>
    <li>Insert </li>
</ul>
<form class="form-horizontal" role="form" method="post" action="<?php base_url()?>biodata/insert">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 ">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="FirstName" name="firstname" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="LastName" name="lastname" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2">Hobby</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Hobby" name="hobby" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" placeholder="Phone" name="phone" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 ">Address</label>
    <div class="col-sm-10">
      <textarea rows="8" class="form-control" placeholder="Address" name="address"> </textarea>
    
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <hr>
      <button class="btn btn-success " >
        <span class="glyphicon glyphicon-user"></span> Save
      </button>
    </div>
  </div>
</form>


</html>