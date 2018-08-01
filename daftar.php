<?php	
session_start();
include_once ('bagianatas.php') ; ?>
	<div class="wrapper-content">
		<div class="wrap-content">
			<div class="trans">
			<table border="1" class="table">
			<thead>
			<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jurusan</th>
			<th>Action</th>
			</tr>
			</thead>
			<?php
			include "koneksi.php";
			$dataPerPage = 4;
			  if(isset($_GET['page']))
			  {
				 $noPage = $_GET['page'];
			  }
			  else $noPage = 1;
			$offset = ($noPage - 1) * $dataPerPage;
			$query = mysqli_query($db, "select *
			from mhs
			LIMIT $offset, $dataPerPage ");
			if(mysqli_num_rows($query) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			}else{
				$no = 1;
				while ($row = mysqli_fetch_assoc($query)) {
					echo " <td> ".$row['nama']." </td>";
					echo "<td>".$row['nim']." </td>";
					echo "<td>".$row['jur']." </td>";
					echo "<td><a href='edit.php?id_user=" . $row['id_user']."'
								class='sub'> EDIT</a>   ";
						echo "<a href='ubahpass.php?id_user=" . $row['id_user']."'
								class='subpass'>Ganti Password</a>
								</td>";
					echo "</tr>";
					$no++;
				}
			}
			?>
			</table>
			<?php
			$query = "SELECT COUNT(*) AS jumData FROM mhs";
			$hasil = mysqli_query($db,$query);
			$data = mysqli_fetch_array($hasil);

			$jumData = $data['jumData'];
			$jumPage = ceil($jumData/$dataPerPage);
			if ($noPage > 1) 
			
			echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."' class='page'><< Prev</a>";
			for($page = 1; $page <= $jumPage; $page++)
			{
				if ((($page >= $noPage - 5) && ($page <= $noPage + 5)) || ($page == 1) || ($page == $jumPage))
				{
				  $showPage = $page;
				  if (($showPage == 1) && ($page != 2))
				  if (($showPage != ($jumPage - 1)) && ($page == $jumPage));
				  if ($page == $noPage) echo "<a href='#' class='nopage'>".$page."</a>";
				  else echo " | <a href='".$_SERVER['PHP_SELF']."?page=".$page."' class='nopage'>".$page."</a> | ";
				  
				}
			}
			if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."' class='page'>Next >></a>";
			?>
			</div>
		
			
		</div>
	</div>
<?php include_once ('bagianbawah.php') ; ?>