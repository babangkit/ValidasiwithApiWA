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

    <form action="validasi.php" method="post">
    <div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label>Jumlah Matakuliah:</label>
            <select name="matkul"class="form-control" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
        </div>
    </div>
    </div>    
    <br/>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
</body>
</html>