<?php
if(isset($_GET['id'])){


  $query = query("SELECT * FROM content WHERE id =" . $_GET['id']. " ");
  confirm($query);
  while($row = fetch_array($query)){
      $id    = $row['id'];
      $name         = escape_string($row['name']);
      $description    = escape_string($row['description']);
      $picture          = escape_string($row['picture']);// name

      $picture= display_image($row['picture']);

  }
  update_content();


}

?>


<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Edit Product
</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">

<div class="col-md-8">

<div class="form-group">
    <label for="product_title">Content Title </label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($name) ? $name : ''; ?> ">
       
    </div>


    <div class="form-group">
           <label for="description">Content Description</label>
      <textarea name="description" id="" cols="30" rows="10" class="form-control">
      <?php echo isset($description) ? $description : ''; ?>
      </textarea>
    </div>

    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
    </div>


    <div class="form-group">
        <label for="content_image">Product Image</label>
      
        <input type="file" name="picture">
        <img width='100' src="../../resources/<?php echo $picture; ?>" alt="no picture bro"></a>


    </div>



</aside><!--SIDEBAR-->


    
</form>
