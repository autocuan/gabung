<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬VOUCHER GHOIB▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ \n");
echo color("yellow","[•] Time : ".date('[d-m-Y] [H:i:s]')." \n");
echo color("yellow","[•] BACA DOA DULU YA GAES \n");
echo color("yellow","[•] TULIS NOMERE 62xxxxxxxxxx \n");
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬BISMILLAH▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬  \n");
function change(){
$nama = nama();
$email = str_replace(" ", "", $nama) . mt_rand(100, 999);
ulang:
echo color("nevy","(•) Nomor : ");
$no = trim(fgets(STDIN));
$data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$no.'","signed_up_country":"ID"}';
$register = request("/v5/customers", null, $data);
if(strpos($register, '"otp_token"')){
$otptoken = getStr('"otp_token":"','"',$register);
echo color("green","+] Kodene wes dikirim om")."\n";
otp:
echo color("nevy","?] Otp: ");
$otp = trim(fgets(STDIN));
$data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
$verif = request("/v5/customers/phone/verify", null, $data1);
if(strpos($verif, '"access_token"')){
echo color("green","+] Wes berhasil daftare");
$token = getStr('"access_token":"','"',$verif);
$uuid = getStr('"resource_owner_id":',',',$verif);
echo "\n".color("yellow","+] Your access token : ".$token."\n\n");
save("token.txt",$token);
echo "\n".color("nevy","?] Gelem Vocer?: y/n ");
$pilihan = trim(fgets(STDIN));
if($pilihan == "y" || $pilihan == "Y"){
echo color("red","===========(GOLEK VOUCHER)===========");
reff:
$data = '{"referral_code":"G-DJHBY7Y"}';
$claim = request("/customer_referrals/v1/campaign/enrolment", $token, $data);
$message = fetch_value($claim,'"message":"','"');
if(strpos($claim, 'Promo kamu sudah bisa dipakai')){
echo "\n".color("green","+] Message: ".$message);
reff:
$data = '{"referral_code":"G-Z6WZGKM"}';
$claim = request("/customer_referrals/v1/campaign/enrolment", $token, $data);
$message = fetch_value($claim,'"message":"','"');
if(strpos($claim, 'Promo kamu sudah bisa dipakai')){
echo "\n".color("green","+] Message: ".$message);
goto gofood;
}else{
echo "\n".color("red","-] Message: ".$message);
}
gofood:
sleep(7);
}
$code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2206"}');
$message = fetch_value($code1,'"message":"','"');
if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
echo "\n".color("green","🔓▶️ Message: ".$message);
goto gocar;
}else{
echo "\n".color("red","🔐▶️ Message: ".$message);
gocar:
echo "\n".color("nevy","=> BISMILLAH");
echo "\n".color("yellow","=>BISMILLAH ");
for($a=1;$a<=3;$a++){
echo color("yellow",".");
sleep(8);
}
$code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2206"}');
$message = fetch_value($code1,'"message":"','"');
if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
echo "\n".color("green","🔓▶️ Message: ".$message);
goto gofood;
}else{
echo "\n".color("red","🔐▶️ Message: ".$message);
gofood:
echo "\n".color("nevy","=>BISMILLAH");
echo "\n".color("yellow","BISMILLAH");
for($a=1;$a<=3;$a++){
echo color("yellow",".");
sleep(9);
}
$code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PAKEGOFOOD0906"}');
$message = fetch_value($code1,'"message":"','"');
echo "\n".color("green","🔓▶️ Message: ".$message);
echo "\n".color("nevy","BISMILLAH");
echo "\n".color("yellow","BISMILLAH");
for($a=1;$a<=3;$a++){
echo color("yellow",".");
sleep(10);
}
$code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2206"}');
$message = fetch_value($code1,'"message":"','"');
echo "\n".color("white"," Message: ".$message);
echo "\n".color("white"," BISMILLAH");
echo "\n".color("white"," BISMILLAH");
for($a=1;$a<=3;$a++){
echo color("white",".");
sleep(11);
}
$boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EATLAH"}');
$messageboba09 = fetch_value($boba09,'"message":"','"');
echo "\n".color("green","# Message: ".$messageboba09);
sleep(3);
$cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=11&page=1', $token);
$total = fetch_value($cekvoucher,'"total_vouchers":',',');
$voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
$voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
$voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
$voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
$voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
$voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
$voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
$voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
$voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
$voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
$voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
echo "\n".color("yellow","!] Total voucher ".$total." : ");
echo color("green","1. ".$voucher1);
echo "\n".color("green"," 2. ".$voucher2);
echo "\n".color("green"," 3. ".$voucher3);
echo "\n".color("green"," 4. ".$voucher4);
echo "\n".color("green"," 5. ".$voucher5);
echo "\n".color("green"," 6. ".$voucher6);
echo "\n".color("green"," 7. ".$voucher7);
echo "\n".color("green"," 8. ".$voucher8);
echo "\n".color("green"," 9. ".$voucher9);
echo "\n".color("green"," 10. ".$voucher10);
echo "\n".color("green"," 11. ".$voucher11);
$expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
$expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
$expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
$expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
$expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
$expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
$expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
$expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
$expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
$expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
$expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
setpin:
echo "\n".color("nevy","?] PIN e sisan gak?: y/n ");
$pilih1 = trim(fgets(STDIN));
if($pilih1 == "y" || $pilih1 == "Y"){
//if($pilih1 == "y" && strpos($no, "628")){
echo color("red","========( IKI PIN MU OJO PROTES = 123123)========")."\n";
$data2 = '{"pin":"123123"}';
$getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
echo "Otp set pin: ";
$otpsetpin = trim(fgets(STDIN));
$verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
echo $verifotpsetpin;
}else if($pilih1 == "n" || $pilih1 == "N"){
die();
}else{
echo color("red","-] HEHE..GAGAL MBAH!!!\n");
}
}else{
goto setpin;
}
}else{
echo color("red","-] Otp mu seng mok input keliru");
echo"\n==================================\n\n";
echo color("yellow","!] jal inputo meneh\n");
goto otp;
}
}else{
echo color("red","NOMORMU KELIRU MBAH !!!");
echo "\nMbaleni gak? (y/n): ";
$pilih = trim(fgets(STDIN));
if($pilih == "y" || $pilih == "Y"){
echo "\n==============Register==============\n";
goto ulang;
}else{
echo "\n==============Register==============\n";
goto ulang;
}
}
}
echo change()."\n"; ?>
