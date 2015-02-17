<!DOCTYPE html>
<html>
<head>
<link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
<div class="container">

<ul class="breadcrumb wellwhite">
    <li>CRUD<span class="divider"></span></li>
    <li>Update </li>
</ul>
<?php foreach($query->result() as $key) : ?>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url()?>biodata/update">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 ">First Name</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control"  value="<?php echo $key->id ?>" name="id" >
      <input type="text" class="form-control"  value="<?php echo $key->firstname ?>" name="firstname" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  value="<?php echo $key->lastname ?>" name="lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2">Hobby</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  value="<?php echo $key->hobby ?>" name="hobby">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" value="<?php echo $key->phone ?>" name="phone" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 ">Address</label>
    <div class="col-sm-10">
      <textarea rows="8" class="form-control" name="address"><?php echo $key->address ?></textarea>
    
    </div>
  </div>
  <?php endforeach; ?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <hr>
      <button class="btn btn-success " >
        <span class="glyphicon glyphicon-user"></span> Update
      </button>
    </div>
  </div>
</form>


</html>