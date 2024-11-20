<?php
if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lamakerja = $_POST['lama'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];


    if ($status == "Tetap") {
        $bonus = 1000000;
    }else {
      $bonus = 0;
    }
    
    if ($jabatan == "Kepala Sekolah") {
        $gaji = 10000000;
    }elseif ($jabatan == "Wakasek") {
        $gaji = 7000000;
    }elseif ($jabatan == "Guru") {
        $gaji = 5000000;
    }elseif ($jabatan == "Karyawan") {
        $gaji = 2500000;
    }

    $gajikot = $gaji + $bonus;
    $totpotong = $bpjs + $pinjaman + $cicilan + $infaq;
    $gajibersih = $gajikot - $totpotong;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Struk Gaji</title>
  </head>
  <body>
    <div class="container text-primary">
     <center>
     <div class="card" style="width: 50rem;">
  <div class="card-header">
    <?php echo $nama; ?>
  </div>
  <ul class="list-group list-group-flush">
    <h3>Struk Gaji</h3>
    <li class="list-group-item text-primary">
        <?php
        class gajih{
            public function diri($nomor,$nama,$unit,$tanggal){?>
         <table>
        <tr>
          <td>No</td>
          <td>:</td>
          <td><?php echo $nomor; ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $nama; ?></td>
        </tr>
        <tr>
          <td>Unit pendidikan</td>
          <td>:</td>
          <td><?php echo $unit; ?></td>
        </tr>
        <tr>
          <td>Tanggal Gaji</td>
          <td>:</td>
          <td><?php echo $tanggal; ?></td>
        </tr>
        

        <?php
            }
            public function gaji($jabatan,$gaji,$lamakerja,$status,$bonus){?>
         
        <tr>
          <td>Jabatan</td>
          <td>:</td>
          <td><?php echo $jabatan; ?></td>
        </tr>
        <tr>
          <td>Gaji</td>
          <td>:</td>
          <td><?php echo number_format($gaji); ?></td>
        </tr>
        <tr>
          <td>Lama Kerja</td>
          <td>:</td>
          <td><?php echo $lamakerja; ?></td>
        </tr>
        <tr>
          <td>Status kerja</td>
          <td>:</td>
          <td><?php echo $status; ?></td>
        </tr>
        <tr>
          <td>Bonus</td>
          <td>:</td>
          <td><?php echo number_format($bonus); ?></td>
        </tr>
        

        <?php
            }
            public function potongan($bpjs,$pinjaman,$cicilan,$infaq,$gajibersih){?>
         
        <tr>
          <td>BPJS</td>
          <td>:</td>
          <td><?php echo number_format($bpjs); ?></td>
        </tr>
        <tr>
          <td>Pinjaman</td>
          <td>:</td>
          <td><?php echo number_format($pinjaman); ?></td>
        </tr>
        <tr>
          <td>Cicilan</td>
          <td>:</td>
          <td><?php echo number_format($cicilan); ?></td>
        </tr>
        <tr>
          <td>Infaq</td>
          <td>:</td>
          <td><?php echo number_format($infaq); ?></td>
        </tr>
        <tr>
          <td>Gaji Bersih</td>
          <td>:</td>
          <td><?php echo number_format($gajibersih); ?></td>
        </tr>
        </table>


<?php
            }
        }
        $cetak = new gajih();
        echo $cetak->diri($no,$nama,$unit,$tgl);
        echo $cetak->gaji($jabatan,$gaji,$lamakerja,$status,$bonus);
        echo $cetak->potongan($bpjs,$pinjaman,$cicilan,$infaq,$gajibersih);

        ?>
     

        


    </li>
  </ul>
</div>
     </center>   
    
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
      <?php
            }
            ?> 

