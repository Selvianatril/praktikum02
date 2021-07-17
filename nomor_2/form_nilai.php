<?php
include_once 'header.php';
?>
        <div class="row">
            <div class="col-12" style=" padding-top: 15px;"><h2>Form Nilai Siswa</h2><hr/></div>           
        </div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-6"> 
                                        
                <form method="POST" action="nilai_siswa.php">
                    <div class="form-group row">
                        <div class="col-4" style="text-align: right; font-weight: bold;">
                            <label for="nama">Nama Lengkap</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="text" id="nama" name="nama" value="" size="30"/>
                         </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4" style="text-align: right; font-weight: bold;">
                            <label for="matkul">Mata Kuliah</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control"  id = "matkul" name="matkul">
                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                            <option value="BDI">Basis Data I</option>
                            <option value="WEB1">Pemrograman Web</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4" style="text-align: right; font-weight: bold;">
                            <label for="nilai_uts"> Nilai UTS</label>
                        </div>
                        <div class="col-8">  
                            <input class="form-control" type="text" id = "nilai_uts" name="nilai_uts" value="" maxlength="3"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4" style="text-align: right; font-weight: bold;">
                            <label for="nilai_uas">Nilai UAS</label>
                        </div>
                        <div class="col-8"> 
                            <input class="form-control" type="text" id = "nilai_uas" name="nilai_uas" value="" maxlength="3"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4" style="text-align: right; font-weight: bold;">
                            <label for="nilai_tugas">Nilai Tugas/Praktikum</label>
                        </div>
                        <div class="col-8"> 
                            <input  class="form-control" type="text" id = "nilai_tugas" name="nilai_tugas" value="" maxlength="3"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                        </div>
                        <div class="col-8"> 
                            <input class="btn btn-primary" type="submit" value="Simpan" name="proses"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
            </div>
        </div>
        
<?php
    include_once 'footer.php';
?>
