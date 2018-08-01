<?php
if (is_dir("./database")) {
	if (file_exists("./database/user")) {
		unlink("./database/user");
	}
	if (file_exists("./database/catalog")) {
		unlink("./database/catalog");
	}
	if (file_exists("./database/basket")) {
		unlink("./database/basket");
	}
	if (file_exists("./database/order")) {
		unlink("./database/order");
	}	
	rmdir('./database');
}
mkdir("./database");

file_put_contents("./database/user", NULL);
$tmp = unserialize(file_get_contents("./database/user"));
$new['username'] = "admin";
$new['password'] = hash("whirlpool", "123123");
$tmp[] = $new;
file_put_contents("./database/user", serialize($tmp));

 file_put_contents("./database/catalog", NULL);
 $tmp2 = unserialize(file_get_contents("./database/catalog"));
 $new2['id'] = "1";
 $new2['cat'] = "sp";
 $new2['name'] = "IPhone 6";
 $new2['detail'] = "Too old...";
 $new2['price'] = "230";
 $new2['img'] = "https://images.kogan.com/image/fetch/s--PYK8gQDP--/b_white,c_pad,f_auto,h_400,q_auto:good,w_600/https://assets.kogan.com/files/product/KHIP6xxxxx/KHIP6xxGLD-webres.jpg";
 $tmp2[] = $new2;

 $new2['id'] = "2";
 $new2['cat'] = "sp";
 $new2['name'] = "IPhone 5s";
 $new['detail'] = "The best one!";
 $new2['price'] = "200";
 $new2['img'] = "https://static.fnac-static.com/multimedia/Images/PT/NR/af/30/0b/733359/1540-1/tsp20160812173917/Apple-iPhone-5s-16GB-Cinzento-Sideral.jpg";
 $tmp2[] = $new2;

 $new2['id'] = "3";
 $new2['cat'] = "sp";
 $new2['name'] = "IPhone 6s";
 $new2['detail'] = "Duuuude";
 $new2['price'] = "270";
 $new2['img'] = "https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone6s/select/iphone6s-select-2015?wid=332&hei=546&fmt=jpeg&qlt=95&op_usm=0.5,0.5&.v=YHBkZ1";
 $tmp2[] = $new2;
 file_put_contents("./database/catalog", serialize($tmp2));
 file_put_contents("./database/basket", NULL);
 file_put_contents("./database/order", NULL); 
 header("Location: http://127.0.0.1:8100/RUSH/index.php");
 ?>
