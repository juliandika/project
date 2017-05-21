    <div id="wrapper">
    <div id="header">
    </div>
        <div id="formbody">
          <h1>PRINT BANNER</h1>
          <?php echo form_open_multipart('pages/upload'); ?>
            Nama File</br><input type="text" name="nama" /></br>
            Kertas<br>
            <select id="bahan" name="nama">
              <option value="default">Pilih Bahan</option>
              <option value="CinaTipis">Flexi China</option>
              <option value="CinaTebal">Flexi Korea</option>
              <option value="KoreaTipis">Flexi Jerman</option>
              <option value="KoreaTebal">Albatros</option>
              <option value="JermanBeklid">Luster</option>
              <option value="JermanJeruk">Glossy Paper</option>
            </select>
            </br><br>
            Ukuran<br><input id="panjang" type="number" name="ukuran" placeholder="Panjang" />
           	<input id="lebar" type="number" name="ukuran" placeholder="Lebar" /><br> 
            </br>
		        Select image to upload:
		        <input type="file" name="fileToUpload" id="fileToUpload">
		        <br><br>
            Jumlah</br><input type="number" name="jumlah" id="jumlah" /></br>
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
            if ($('#jumlah') != "" && $('#panjang').val() != "" && $('#lebar').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#lebar').keyup(function(){
            if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#bahan').change(function(){
            if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });
          $('#jumlah').keyup(function(){
            if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
            else $('#harga').html("0");
          });

          function harga() {
            if ($('#bahan').val()=="CinaTipis") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 10000)*$('#jumlah').val();
            else if($('#bahan').val()=="CinaTebal") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 20000)*$('#jumlah').val();
            else if($('#bahan').val()=="KoreaTipis") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 30000)*$('#jumlah').val();
            else var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 40000)*$('#jumlah').val();
            
            $('#harga').html(hrg);
            $('#inpHrg').val(hrg);
        }
        });
      </script>
  </body>
</html>