<h3><Tambah Data Kategori</h3>
<?php
echo form_open('Kategori/post');
?>
<table border="1">
	<tr><td>Nama Kategori</td>
			<td><input type="text" name="kategori" placeholder="kategori">
			</td></tr>
		  <tr><td colspan="2"><button type="submit" name="submit">simpan</button></td></tr>
</table>
</form>			  