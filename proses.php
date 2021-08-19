<?php
//membuat metode redirect dengan kode 301
$mat = $_POST['mat'];

$nama = $_POST['nama'];
$wa = $_POST['no_wa'];
$ktg = $_POST['ktg'];

if($ktg == M){
    $ktg1 = "1x";
}else if($ktg == L){
    $ktg1 = "2x";
}else if($ktg == K){
    $ktg1 = "2x";
}else if($ktg == J){
    $ktg1 = "3x";
}else if($ktg == I){
    $ktg1 = "3X";
}else if($ktg == H){
    $ktg1 = "4x";
}else if($ktg == G){
    $ktg1 = "4x";
}else if($ktg == F){
    $ktg1 = "5x";
}else if($ktg == E){
    $ktg1 = "5x";
}
else if($ktg == D){
    $ktg1 = "6x";
}
else if($ktg == C){
    $ktg1 = "6x";
}
else if($ktg == B){
    $ktg1 = "6x";
}
else if($ktg == A){
    $ktg1 = "6x";
}


if($mat==1){
    
    $m1 = $_POST['m1'];

    $t1 = $_POST['t1'];

    $ttl = $_POST['ttl'];
    header("location: https://api.whatsapp.com/send/?phone=$wa&text=Assalamu%27alaikum%20warrahmatullah%20wabarakatuh.%20%0ABerikut%20total%20presensi%20pra-uts%20atas%0A%0ANama: *$nama*%0A%0AAsisten :%0A*$m1 :   $t1*%0A%0A*Total%20%3D%20$ttl*%0A%0AKategori%20Asisten%20%3A%20%0A*$ktg%20%3D%20Asisten%20$ktg1*%0A%0A*Harap%20%20membalas%20chat%20ini%20konfirmasi%20benar%20%2F%20salah.*%0AJika%20ada%20kesalahan%20harap%20konfirmasi%2008986104382%20(Masyruri%20Rizka%20Maulana).%20%0ABatas%20konfirmasi%20%20hari%20%20Sabtu%2C%2023%20April%202021%20pukul%20%2014.00%20WIB.%20%0AJika%20tidak%20ada%20konfirmasi%20data%20dianggap%20benar.%20%0A%0A%0ATerimakasih%20%0AWassalamu%27alaikum%20warrahmatullah%20wabbarakatuh.%20%0A%0ASalam%20Sinergi%20%F0%9F%92%AA&app_absent=0");
}else if($mat == 2){
        
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];

    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    $ttl = $_POST['ttl'];
    header("location: https://api.whatsapp.com/send/?phone=$wa&text=Assalamu%27alaikum%20warrahmatullah%20wabarakatuh.%20%0ABerikut%20total%20presensi%20pra-uts%20atas%0A%0ANama: *$nama*%0A%0AAsisten :%0A*$m1 :   $t1*%0A*$m2 :   $t2*%0A%0A*Total%20%3D%20$ttl*%0A%0AKategori%20Asisten%20%3A%20%0A*$ktg%20%3D%20Asisten%20$ktg1*%0A%0A*Harap%20%20membalas%20chat%20ini%20konfirmasi%20benar%20%2F%20salah.*%0AJika%20ada%20kesalahan%20harap%20konfirmasi%2008986104382%20(Masyruri%20Rizka%20Maulana).%20%0ABatas%20konfirmasi%20%20hari%20%20Sabtu%2C%2023%20April%202021%20pukul%20%2014.00%20WIB.%20%0AJika%20tidak%20ada%20konfirmasi%20data%20dianggap%20benar.%20%0A%0A%0ATerimakasih%20%0AWassalamu%27alaikum%20warrahmatullah%20wabbarakatuh.%20%0A%0ASalam%20Sinergi%20%F0%9F%92%AA&app_absent=0");
}else if($mat == 3){
        
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];

    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];

    $ttl = $_POST['ttl'];
    header("location: https://api.whatsapp.com/send/?phone=$wa&text=Assalamu%27alaikum%20warrahmatullah%20wabarakatuh.%20%0ABerikut%20total%20presensi%20pra-uts%20atas%0A%0ANama: *$nama*%0A%0AAsisten :%0A*$m1 :   $t1*%0A*$m2 :   $t2*%0A*$m3 :   $t3*%0A%0A*Total%20%3D%20$ttl*%0A%0AKategori%20Asisten%20%3A%20%0A*$ktg%20%3D%20Asisten%20$ktg1*%0A%0A*Harap%20%20membalas%20chat%20ini%20konfirmasi%20benar%20%2F%20salah.*%0AJika%20ada%20kesalahan%20harap%20konfirmasi%2008986104382%20(Masyruri%20Rizka%20Maulana).%20%0ABatas%20konfirmasi%20%20hari%20%20Sabtu%2C%2023%20April%202021%20pukul%20%2014.00%20WIB.%20%0AJika%20tidak%20ada%20konfirmasi%20data%20dianggap%20benar.%20%0A%0A%0ATerimakasih%20%0AWassalamu%27alaikum%20warrahmatullah%20wabbarakatuh.%20%0A%0ASalam%20Sinergi%20%F0%9F%92%AA&app_absent=0");
}else if($mat == 4){

    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];
    $m4 = $_POST['m4'];
    
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    
    $ttl = $_POST['ttl'];

    header("location: https://api.whatsapp.com/send/?phone=$wa&text=Assalamu%27alaikum%20warrahmatullah%20wabarakatuh.%20%0ABerikut%20total%20presensi%20pra-uts%20atas%0A%0ANama: *$nama*%0A%0AAsisten :%0A*$m1 :   $t1*%0A*$m2 :   $t2*%0A*$m3 :   $t3*%0A*$m4 :   $t4*%0A%0A*Total%20%3D%20$ttl*%0A%0AKategori%20Asisten%20%3A%20%0A*$ktg%20%3D%20Asisten%20$ktg1*%0A%0A*Harap%20%20membalas%20chat%20ini%20konfirmasi%20benar%20%2F%20salah.*%0AJika%20ada%20kesalahan%20harap%20konfirmasi%2008986104382%20(Masyruri%20Rizka%20Maulana).%20%0ABatas%20konfirmasi%20%20hari%20%20Sabtu%2C%2023%20April%202021%20pukul%20%2014.00%20WIB.%20%0AJika%20tidak%20ada%20konfirmasi%20data%20dianggap%20benar.%20%0A%0A%0ATerimakasih%20%0AWassalamu%27alaikum%20warrahmatullah%20wabbarakatuh.%20%0A%0ASalam%20Sinergi%20%F0%9F%92%AA&app_absent=0");
}