<body>
    
    <div class="konten">
            <h1>Daftar Antrian</h1>
            <hr>
            <div></div>
            <table class="table table-bordered responsive">
                <thead>
                    <tr>
                        <th>No Antrian</th>
                        <th>Plat nomer</th>
                        <th>Warna Kendaraan</th>
                        <th>Tanggal</th>
                        

                    </tr>
                </thead>
                <tbody>
                <?php $nomor=1; $nomor>2; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM antrian"); ?>
            <?php while($pecah = $ambil->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $pecah['plat_nomer'];?></td>
                <td><?php echo $pecah['warna_kendaraan'];?></td>
                <td><?php echo $pecah['waktu'];?></td>
             
            </tr>
            <?php $nomor++; ?>
            <?php  }?>


            <?php include 'hapus_antrian.php'; ?>
        </tbody>
                </tbody>
            </table>
                
            </div>  
        </div>  
</section>



<?php include "footer.php" ?>