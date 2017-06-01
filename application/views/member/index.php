
    <!-- Main content -->
    <section class="content">
      <p><?php echo $saldo['saldo']; ?></p>
      <table id="myTable" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>ID Transaksi</th>
            <th>ID User</th>
            <th>Nama Transaksi</th>
            <th>Bahan</th>
            <th>Panjang</th>
            <th>Lebar</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>No Telepon</th>
            <th>Keterangan</th>
            <th>Status</th>

            <th>
              <?=anchor('admin/products/create','Aksi', ['class'=>'btn btn-primary btn-sm'])?>
            </th>
          </tr>
        </thead>
        <tbody>

          <?php foreach($transaksi as $trans) : ?>
          <tr>
            <td><?=$trans->id_transaksi?></td>
            <td><?=$trans->id_user?></td>
            <td><?=$trans->nama_product?></td>
            <td><?=$trans->Bahan?></td>
            <td><?=$trans->Panjang?></td>
            <td><?=$trans->Lebar?></td>
            <td><?=$trans->Jumlah?></td>
            <td><?=$trans->Harga?></td>
            <td><?=$trans->No_Telepon?></td>
            <td><?=$trans->Keterangan?></td>
            <td><?php

            if($trans->status_pembayaran == 1){
              echo 'Sudah dibayar';
            }else{
              echo 'Belum dibayar';
            }

            ?></td>

            <td>
              <?=anchor('member/payment/confirm/' . $trans->id_transaksi, 'Bayar', ['class'=>'btn btn-default btn-sm'])?>
              <?=anchor('admin/products/delete/' . $trans->id_user, 'Delete', ['class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm(\'Apakah anda yakin?\')'])?>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>

      <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
      </script>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
