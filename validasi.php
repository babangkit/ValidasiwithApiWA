<!DOCTYPE html>
<html>
<head>
    <title>Form Send WA Via Api by Forum Asisten Universitas Amikom Purwokerto</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <br/>
    <h2>Form Validasi Presensi Forum Asisten Universitas Amikom Purwokerto</h2>
    <br/>

    <form action="proses.php" method="post">
    <div class="row">
    
    <div class="col-lg-4">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" required />
        </div>
        <div class="form-group">
            <label>No.Whatsapp:</label>
            <input type="text" name="no_wa" class="form-control" placeholder="+6289xxxxxxxxx" required/>
        </div>
        <div class="form-group">
            <label>Kategori:</label>
            <select name="ktg" id="cars" class="form-control" required>
            <option value="M">M : 1x - Status: Anggota</option>
            <option value="L">L : 2x - Status: Anggota</option>
            <option value="K">K : 2x - Status: Pengurus</option>
            <option value="J">J : 3x - Status: Anggota</option>
            <option value="I">I : 3x - Status: Pengurus</option>
            <option value="H">H : 4x - Status: Anggota</option>
            <option value="G">G : 4x - Status: Pengurus</option>
            <option value="F">F : 5x - Status: Anggota</option>
            <option value="E">E : 5x - Status: Pengurus</option>
            <option value="D">D : 6x - Status: Anggota dan belum lulus</option>
            <option value="C">C : 6x - Status: Anggota dan sudah lulus</option>
            <option value="B">B : 6x - Status: Pengurus dan belum lulus</option>
            <option value="A">A : 6x - Status: Pengurus dan sudah lulus</option>
            </select>
        </div>

    </div>
    <div class="col-lg-6">
    <?php

        $matkul = $_POST['matkul'];

        if($matkul == 1){
            echo' <div class="form-group">
            <input type="hidden" name="mat" value="'.$matkul.'"/>
            <label>Matkul 1:</label>
            <input type="text" name="m1" class="form-control" required/>
 
            </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t1" id="t1" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total Semua:</label>
                    <input type="text" name="ttl" id="total" class="form-control" placeholder="Total" readonly="">
                </div>
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#t1").keyup(function() {
                        var t1  = $("#t1").val();

                        var total = parseInt(t1);
                        $("#total").val(total);
                    });
                });
            </script>';
        }else if($matkul == 2){
            echo'<div class="form-group">
            <input type="hidden" name="mat" value="'.$matkul.'"/>
            <label>Matkul 1:</label>
            <input type="text" name="m1" class="form-control" required/>

            </div>
            <div class="form-group">
                <label>Matkul 2:</label>
                <input type="text" name="m2" class="form-control" required/>
            </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t1" id="t1" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t2" id="t2" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total Semua:</label>
                    <input type="text" name="ttl" id="total" class="form-control" placeholder="Total" readonly="">
                </div>
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#t1, #t2").keyup(function() {
                        var t1  = $("#t1").val();
                        var t2 = $("#t2").val();

                        var total = parseInt(t1) + parseInt(t2);
                        $("#total").val(total);
                    });
                });
            </script>';
        }
        else if($matkul == 3){
            echo'<div class="form-group">
            <input type="hidden" name="mat" value="'.$matkul.'"/>
            <label>Matkul 1:</label>
            <input type="text" name="m1" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Matkul 2:</label>
                <input type="text" name="m2" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Matkul 3:</label>
                <input type="text" name="m3" class="form-control" required/>
            </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t1" id="t1" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t2" id="t2" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t3" id="t3" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total Semua:</label>
                    <input type="text" name="ttl" id="total" class="form-control" placeholder="Total" readonly="">
                </div>
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#t1, #t2, #t3").keyup(function() {
                        var t1  = $("#t1").val();
                        var t2 = $("#t2").val();
                        var t3 = $("#t3").val();

                        var total = parseInt(t1) + parseInt(t2) + parseInt(t3);
                        $("#total").val(total);
                    });
                });
            </script>';
        }
        else if($matkul == 4){
            echo'<div class="form-group">
            <input type="hidden" name="mat" value="'.$matkul.'"/>
            <label>Matkul 1:</label>
            <input type="text" name="m1" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Matkul 2:</label>
                <input type="text" name="m2" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Matkul 3:</label>
                <input type="text" name="m3" class="form-control" required/>
            </div>
            <div class="form-group">
                <label>Matkul 4:</label>
                <input type="text" name="m4" class="form-control" required/>
            </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t1" id="t1" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t2" id="t2" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t3" id="t3" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total:</label>
                    <input type="text" name="t4" id="t4" class="form-control" required onkeypress="return hanyaAngka(event)"/>
                </div>
                <div class="form-group">
                    <label>Total Semua:</label>
                    <input type="text" name="ttl" id="total" class="form-control" placeholder="Total" readonly="">
                </div>
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#t1, #t2, #t3, #t4").keyup(function() {
                        var t1  = $("#t1").val();
                        var t2 = $("#t2").val();
                        var t3 = $("#t3").val();
                        var t4 = $("#t4").val();

                        var total = parseInt(t1) + parseInt(t2) + parseInt(t3) + parseInt(t4);
                        $("#total").val(total);
                    });
                });
            </script>';
        }
    ?>
        
    </div>                        

    
    <script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>

    
    <br/>
    
    <a href="index.php" class="btn btn-danger">Back</a>
        <button type="submit" name="submit" class="btn btn-primary" formtarget="_blank">Kirim Pesan</button>
    </form>
    </div>
</div>
</body>
</html>