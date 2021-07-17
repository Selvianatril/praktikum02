<?php
include_once 'header.php';
include_once 'libfungsi.php';
    $proses= $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    if(!empty($proses)) {
?>
    <div class="row">
            <div class="col-12" style=" padding-top: 15px;"><h2>Nilai Siswa</h2><hr/></div>           
    </div>
    <div class="row">
        <div class="col-12">
            <?php
                echo 'Proses : '.$proses;
                echo '<br/>Nama : '.$nama_siswa;
                echo '<br/>Mata Kuliah : '.$mata_kuliah;
                echo '<br/>Nilai UTS : '.$nilai_uts.' | '.grade($nilai_uts).' | '.predikat(grade($nilai_uts));
                echo '<br/>Nilai UAS : '.$nilai_uas.' | '.grade($nilai_uas).' | '.predikat(grade($nilai_uas));
                echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas.' | '.grade($nilai_tugas).' | '.predikat(grade($nilai_tugas));
                $_nilai = ($nilai_uts+$nilai_uas+$nilai_tugas)/3;
                echo '<br/>Nilai Total : '.number_format((float)$_nilai, 2, '.', '').' | '.grade($_nilai).' | '.predikat(grade($_nilai));
                echo '<br/>DINYATAKAN '.kelulusan($_nilai);
            ?>
        </div>
    </div>

<?php      
    }
    include_once 'footer.php';
?>

