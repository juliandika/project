    <div id="wrapper">
    <div id="header">
    </div>
        <div id="formbody">
          <h1>PRINT FILE</h1>
          <?php echo form_open_multipart('pages/upload'); ?>
            Nama</br><input type="text" name="nama" /></br>
            <span id="errnama" class="error" />Nama wajib diisi</span>
        	Kertas<br>
            <select name="nama">
              <option value="default">Pilih Bahan</option>
              <option value="CinaTipis">Cina Tipis</option>
              <option value="CinaTebal">Cina Tebal</option>
              <option value="KoreaTipis">Korea Tipis</option>
              <option value="KoreaTebal">Korea Tebal</option>
              <option value="JermanBeklid">Jerman Beklid</option>
              <option value="JermanJeruk">Jerman Jeruk</option>
            </select>
            <span id="erragama" class="error"/><br>Agama kelamin wajib diisi</span>
            </br><br>
            Ukuran<br><input type="text" name="ukuran" />
           	<input type="text" name="ukuran" /><br>
            <span id="erralamat" class="error" />Ukuran wajib diisi</span>
            </br>
		    Select image to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload">
		    <br><br>
	        Total Harga<br><label></label><br>
            <br/>
            <input type="submit" value="Submit"/>
          </form>
        </div>
      </div>