<html>
<form action="insert.php" method="post">
    
    <label>NAMA</label><br/>
    <input type="text" name="nama"/>
    <br/><br/>

    <label>JABATAN</label><br/>
    <input type="char" name="jabatan"/>
    <br/><br/>

    <label>ALAMAT</label><br/>
    <textarea name="alamat" cols="30" rows="10"/></textarea>
    <br/><br/>

    <label>UMUR</label><br/>
    <input type="text" name="umur"/>
    <br/><br/>
    
    <label>JENIS KELAMIN</label><br/>
    <select name="jenis kelamin">
        <option value="pria">pria</option>
        <option value="wanita">wanita</option>
        <option value="waria">waria</option>    
    </select>
    <br/><br/>
    <button type="submit">TAMBAH DATA</button>
</form>
</html>