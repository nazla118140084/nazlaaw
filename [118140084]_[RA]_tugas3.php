<!DOCTYPE html>
<html>
    <head>
        <title> Biodata Mahasiswa </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class ="container">
    <h2>Biodata Mahasiswa</h2>

    <form action="" method="post">
            <div class="form-">
                <label for="">Nama : </label>
                <input name="name" type="text" class="form-control" >
            </div>
            <br>

            <div class ="form">
             <label for="">Jenis Kelamin : </label>
                <select class="form-control" name="gender">
                    <option disabled selected> Pilih Jenis Kelamin </option>
                    <option value="laki-laki"> Laki-laki </option>
                    <option value="perempuan"> Perempuan </option>
                </select>
            </div>
            <br>

            <div class="form">
             <label for="">No. HP : </label>
                <input name="phone" type="number" class="form-control" >
            </div>
            <br>

            <div class="form">
                <label for="">Alamat : </label>
                <textarea class="form-control" id="" name="alamat" rows="3"></textarea>
            </div>
            <br>

            <div class="form">
                <label for="">Foto :</label>
                <input name="foto" type="file" class="form-control">
            </div>
            <br>

            <input type="submit" name="submit" value="Simpan" class="btn btn-primary mb-2"/>
        </form>

        <table border="1" cellspacing="0" cellpadding="5" class="table">

	<?php 

	if (isset($_POST['proses'])) {
		$formnama=array($_POST['username']);
		$formjeniskelamin=array($_POST['jeniskelamin']);
		$formnohp=array($_POST['nohp']);
		$formalamat=array($_POST['alamat']);
		$formfile=array($_POST['file']);
		echo "<th>Nama</th>";
		echo "<th>Jenis Kelamin</th>";
		echo "<th>No. HP</th>";
		echo "<th>Alamat</th>";
		echo "<th>file</th>";
		echo "<tr>";
		for ($i=0; $i < count($formnama); $i++) { 
			
			echo "<td>";
			echo $formnama[$i];
			echo "</td>";
		}
		for ($i=0; $i < count($formjeniskelamin); $i++) { 
			
			echo "<td>";
			echo $formjeniskelamin[$i];
			echo "</td>";
		}
		for ($i=0; $i < count($formnohp); $i++) { 
		
			echo "<td>";
			echo $formnohp[$i];
			echo "</td>";
		}
		for ($i=0; $i < count($formalamat); $i++) { 
			echo "<td>";
			echo $formalamat[$i];
			echo "</td>";
		}

		for ($i=0; $i < count($formfile); $i++) { 
			
			echo "<td>";
			echo $formfile[$i];
			echo "</td>";
		}
	}

	?>

</table>

</div>

</body>
</html>