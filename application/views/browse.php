<!DOCTYPE html>
<html>
<head>
<link href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php echo $this->load->view('alert');?>
<div class="container">
<ul class="breadcrumb wellwhite">
    <li>CRUD<span class="divider"></span></li>
    <li>Read </li>
</ul>
<h3>Tabel Biodata</h3>
<table class="table table-striped">
  <thead>
  <tr class="info">
    <th>No</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Hobby</th>
    <th>Address</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
 
<?php $no=1; foreach ($query->result() as $key): ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $key->firstname ?></td>
    <td><?php echo $key->lastname ?></td>
    <td><?php echo $key->hobby ?></td>
    <td><?php echo $key->address ?></td>
    <td>
        <a  class="btn btn-warning" href="<?php echo base_url()?>biodata/edit/<?php echo $key->id ?>">
          <span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit
        </a>
        <a class="btn btn-primary" href="<?php echo base_url()?>biodata/delete/<?php echo $key->id ?>"
        onclick="return confirm('Are you sure remove this <?php echo $key->firstname ?> in the table?? ')">
      		<span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Delete
        </a>
    </td>
  </tr>
<?php $no++; endforeach;?>
  </tbody>
</table>
<hr>
<a href="<?php echo base_url()?>biodata" class="btn btn-success" >
  <span class="glyphicon glyphicon-user"></span> Insert New Biodata
</a>
<hr>
</html>