  <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>Products Table</h1>
        <table id="myTable" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($products as $product) : ?>
            <tr>
              <td><?=$product->id?></td>
              <td><?=$product->name?></td>
              <td><?=$product->price?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-1"></div>
    </div>

    <script>
      $(document).ready(function(){
          $('#myTable').DataTable();
      });
    </script>
