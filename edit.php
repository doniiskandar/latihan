<?php
// include database connection file
include_once("config.php");

$id = $_GET['id'];
include("config.php");

$query = mysqli_query($connect,"SELECT *FROM karyawan WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
	<head>
		<title>edit user data</title>
	</head>
	<body>
		<a href="index.php">Home</a>
		<br/><br/>
	</body>
    <form  action="update.php" method="post">

		<!-- <input type="hidden"name="id" value=<?php echo $result[0]['id']?>> -->

                <label >NAMA</label><br/>
            	<input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/>
				<br/><br/>
				
				<label >JABATAN</label><br/>
            	<input type="text" name="jabatan" value="<?php echo $result[0]['nama']?>"/>
				<br/><br/>

                <label>ALAMAT</label><br/>
                <textarea name="alamat" cols="30" rows="10"><?php echo $result[0]['alamat']?></textarea>
				<br/><br/>
				
                <label>UMUR</label><br/>
                <input type="number" name="umur" value="<?php echo $result[0]['umur']?>"/>
                <br/><br/>

				<label>JENIS KELAMIN</label><br/> 
               <select name="jenis kelamin" >
				   <option value="pria"<?php echo ($result[0]['jenis_kelamin']== 'pria')
				   ? 'selected' :'';?>>pria</option>
				   <option value="perempuan"<?php echo ($result[0]['jenis_kelamin']== 'perempuan')
				   ? 'selected' :'';?>>perempuan</option>
				   <option value="waria"<?php echo ($result[0]['jenis_kelamin']== 'waria')
				   ? 'selected' :'';?>>waria</option>
			   </select>            
				<br/><br/>

				<button type="submit">perbaharui</button>
    </form>
</html>