<?php 
include("koneksi.php"); 
 
// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 


?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Data Barang</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="header">
<header>
<CEnter><h1>Data Barang</h1></CEnter>
</header>
<nav>
<a href="home.php">Home</a>
<a href="about.php">Tentang</a>
<a href="kontak.php">Kontak</a>
</nav>
<a href="tambah.php">+ Tambah Barang</a><br /><br /right> 
          <div class="main">   
		  <table style="width:100%" class="table1">         
			 <tr>     
             <th>Id</th>           
			  <th>Gambar</th>                 
			  <th>Nama Barang</th>                 
			  <th>Katagori</th>                 
			  <th>Harga Jual</th>                 
			  <th>Harga Beli</th>               
			  <th>Stok</th>               
			  <th colspan=2><center>Aksi</center></th>           
			 </tr>          
			<?php if($result): ?>            
		        <?php while($row = mysqli_fetch_array($result)): ?>            
			<tr>
            <td><?= $row['id_barang'];?></td> 
		         <td><img src="gambar/<?= $row['gambar'];?>" alt="<?= $row['nama'];?>"></td>              	
			
                 <td><?= $row['nama'];?></td>                 
			 <td><?= $row['kategori'];?></td>                
			 <td><?= $row['harga_beli'];?></td>                
			 <td><?= $row['harga_jual'];?></td>              
		     <td><?= $row['stok'];?></td>                   
                <td align=right width=50px><a href="ubah.php?id=<?= $row ['id_barang'];?>">EDIT</a></td>
             <td align=right width=50px><a href="hapus.php?id=<?= $row ['id_barang'];?>">Hapus</a></td>        
                       </tr>           
		       <?php endwhile; else: ?>           
               
			<?php endif; ?>            
			 </table>  
<footer>
<p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
</footer>
</div>
</div>
</body>
</html>
