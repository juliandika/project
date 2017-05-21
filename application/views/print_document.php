    <div id="wrapper">
    <div id="header">
    </div>
        <div id="formbody">
          <h1>PRINT DOKUMENT</h1>
          <?php echo form_open_multipart('pages/upload'); ?>
            Nama File</br><input type="text" name="nama" /></br>
            Ukuran<br>
            <select id="bahan" name="nama">
              <option value="default">Kertas</option>
              <option value="CinaTipis">Latter</option>
              <option value="CinaTebal">A3</option>
              <option value="KoreaTipis">A4</option>
              <option value="KoreaTebal">Korea Tebal</option>
              <option value="JermanBeklid">Jerman Beklid</option>
              <option value="JermanJeruk">Jerman Jeruk</option>
            </select>
            </br><br>
		        Select file to upload:
		        <input type="file" name="fileToUpload" id="fileToUpload">
		        <br><br>
            Jumlah</br><input type="" name="" /></br>
            Total Harga<br><label id="harga"></label><br>
            <input type="hidden" name="harga" id="inpHrg" />
            <br/>
            Telepon<br><input type="text" name="keterangan" /><br>
            <br/>
            Keterangan<br><input type="text" name="keterangan" /><br>
            <br/>
            <input type="submit" value="Submit"/>
          </form>
        </div>
      </div>
      <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#panjang').keyup(function(){
            if ($('#panjang').val() != "" && $('#lebar').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#lebar').keyup(function(){
            if ($('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#bahan').change(function(){
            if ($('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });

          function harga() {
            if ($('#bahan').val()=="CinaTipis") var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 10000;
            else if($('#bahan').val()=="CinaTebal") var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 20000;
            else if($('#bahan').val()=="KoreaTipis") var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 30000;
            else var hrg = $('#panjang').val() * $('#lebar').val() * 5000 + 40000;
            
            $('#harga').html(hrg);
            $('#inpHrg').val(hrg);
        }
        });
      </script>
  </body>
</html>