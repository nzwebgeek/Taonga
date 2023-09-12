        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="row">

<h1 class="page-header">
   Edit Contents

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>
<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Description</th>

      </tr>
    </thead>
    <tbody>
        <?php get_contents_in_admin(); ?>
  </tbody>
</table>











                
                 


             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->






        <?php include(TEMPLATE_BACK . "/footer.php"); ?>
