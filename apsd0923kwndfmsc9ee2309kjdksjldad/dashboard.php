<!DOCTYPE html>
<html>
<head>
	<title>Welcom to Admin page</title>
	<meta charset="utf-8">
<!-- 	<link rel="stylesheet" type="text/css" href="domico1.css">
 -->	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index.html">
	<link rel="stylesheet" type="text/css" href="domico2.html">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>
	.the-cao{
	font-size: 20px;
	font-family: tahoma;
	line-height: 30px;
}
.font-chu{
	width: 120px;
	font-size: 17px;
}

.khoi-dat-hang{
	width: 260px;
	text-align: center;
	background-color: #8B864E;
	margin-right: 20px;
} 


body = div {
  height: 300px;
  align-items: left;
  justify-content: right;
   display: flex;

}

/* tạo định dạng cho lớp box */
.box {
  height: 60px;
  width: 700px;
  background-color: #CDB38B;
  border-radius: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;

}

/*  tạo định dạng cho thẻ input */
input {
  background: none;
  outline: none;
  border: none;
  padding: 0;
  margin: 0;
  width: 0.1px;
  transition: 0.8s ease;
  color: black;
  font-size: 18px;
  font-weight: 400;
}

/* tạo định dạng cho thẻ a */
a {
  color: red;
  text-align: center;
  width: 60px;
  font-size: 18px;
}

/* Khi rê con trỏ vào vùng của lớp box thì ngay lập tức khung input sẽ được hiện ra.*/
.box:hover input {
  width: 300px;
  margin: 0 20px;
  border-bottom: 2px solid red;
}

/* giữ trạng thái khung tìm kiếm */
input:focus {
  width: 200px;
  margin: 0 20px;
  border-bottom: 2px solid red;
}

 /*đổi màu chu trong thanh input 
input::placeholder {
  color: white;
}*/

.btn{
	background-color: #489620;
	color: white;
	font-size: 15px;
	margin-right: 10px;
}

.the-cao-1{
	margin-bottom: 30px;
}

.the-cao-2{
	margin-bottom: 15px;
}

.the-cao-3{
	margin-bottom: 15px;
}

.the-cao-4{
	margin-bottom: 30px;
}


</style>
</head>

<body class="container">
	<h1 style="text-align: center;">Welcome To Admin !</h1>
	<marquee width=1000 style="color: brown" direction="center"><h5>Chỉ mua những thẻ có khung để nhấn</h5></marquee>
	<div class="box">
  <div class="container-2">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Bạn cần tìm kiếm thẻ cào mạng ? ..." />
      <a href="file:///C:/GOCLAMWEB/Domico.html#about"><b> HƯỚNG DẪN MUA HÀNG</b></a>
  </div>
</div>
	
	<div class="well well-sm text-right"> 
  <button class="btn-success" data-toggle="portfilter" data-target="all"> <b>Tất cả</b> </button> 
  <button back class="btn-outline-warning" data-toggle="portfilter" data-target="the-cao-1"><a class="text-decoration-none" href="#viettel"> <b style="color: seagreen; ">Viettel 19 / 21</b></a>  </button> 
  <button class="btn-outline-warning btn-small"><a class="text-decoration-none" href="#mobi"> <b style="color: seagreen;">Mobifone 7</b></a></button> 
  <button class="btn-outline-warning btn-small" data-toggle="portfilter" data-target="style3"><a class="text-decoration-none" href="#vnmb"> <b style="color: seagreen;">VietnamMobile 5</b></a></button> 
 </div> <br>
	
	<div class="the-cao">
		<div class="the-cao-1">

<br>
<div id = "viettel">

		01.	Seri: 20000087737276   ------ CODE: <b id="test12" style="color: red;">Click Buy</b> ---- <button id="btn12"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction12()"> <b style="color: orangered;">Copy code</b></button><input type="text" value="824155278792198" id="myInput12">
 <br> 

		02.	Seri: 10006889100406  ------ CODE: <b id="test13" style="color: red;">Click Buy</b> ---- <button id="btn13"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction13()"><b style="color: orangered;">Copy code</b></button><input type="text" value="912504605893764" id="myInput13">
  <br>

		03.	Seri: 10006889045084  ------ CODE: <b id="test14" style="color: red;">Click Buy</b> ---- <button id="btn14"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction14()"><b style="color: orangered;">Copy code</b></button><input type="text" value="117596121596241" id="myInput14"><br>

		04.	Seri: 10006889101558  ------ CODE: <b id="test15" style="color: red;">Click Buy</b> ---- <button id="btn15"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction15()"><b style="color: orangered;">Copy code</b></button><input type="text" value="612668387598006" id="myInput15">
  <br> 

		05.	Seri: 10006889224493 ------ CODE: <b id="test16" style="color: red;">Click Buy</b> ---- <button id="btn16"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction16()"><b style="color: orangered;">Copy code</b></button><input type="text" value="413715352782178" id="myInput16">
  <br> 

		06.	Seri: 10006889045079  ------ CODE: <b id="test17" style="color: red;">Click Buy</b> ---- <button id="btn17"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction17()"><b style="color: orangered;">Copy code</b></button><input type="text" value="717245288872788" id="myInput17">
<br> 

		07.	Seri: 20000100847449  ------ CODE: <b id="test18" style="color: red;">Click Buy</b> ---- <button id="btn18"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction18()"><b style="color: orangered;">Copy code</b></button>
<input type="text" value="523936518785266" id="myInput18">
  <br> 

		08.	Seri: 20000099103246  ------ CODE: <b id="test19" style="color: red;">Click Buy</b> ---- <button id="btn19"><b>Viettel 10</b></button> ---------- Price: 10.000 
<button onclick="myFunction19()"><b style="color: orangered;">Copy code</b></button> 
<input type="text" value="920756255825506" id="myInput19">  <br> 

		09.	Seri: 10006887131452  ------ CODE: <b id="test20" style="color: red;">Click Buy</b> ---- <button id="btn20"><b>Viettel 10</b></button> ---------- Price: 10.000 <button onclick="myFunction20()"><b style="color: orangered;">Copy code</b></button>
<input type="text" value="913088545391001" id="myInput20">
 <br> 

		10.	Seri: 10006887131375  ------ CODE: <b id="test21" style="color: red;">Click Buy</b> ---- <button id="btn21"><b>Viettel 10</b></button> ---------- Price: 10.000  <button onclick="myFunction21()"><b style="color: orangered;">Copy code</b></button>
<input type="text" value="318920568312795" id="myInput21">
<br> 

		11.	Seri: 10006555507380  ------ CODE: <b id="test1" style="color: red;">Click Buy</b> ---- <button id="btn1"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction1()"> <b style="color: orangered;">Copy code</b></button><input type="text" value="212646021956851" id="myInput1"><br> 
		
		12.	Seri: 10004237539032  ------ CODE: <b id="test2" style="color: red;">Click Buy</b> ---- <button id="btn2"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction2()"><b style="color: orangered;">Copy code</b></button> <input type="text" value="910598901340341" id="myInput2"><br>

		13.	Seri: 10006565519186  ------ CODE: <b id="test3" style="color: red;">Click Buy</b> ---- <button id="btn3"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction3()"><b style="color: orangered;">Copy code</b></button><input type="text" value="716617623512714" id="myInput3">
  <br>

		14. Seri: 10006566728473   ------ CODE: <b id="test4" style="color: red;">Click Buy</b> ---- <button id="btn4"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction4()"><b style="color: orangered;">Copy code</b></button> <input type="text" value="516868180128496" id="myInput4">

 <br>

		15.  Seri: 10006555043641    ------ CODE: <b id="test5" style="color: red;">Click Buy</b> ---- <button id="btn5"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction5()"><b style="color: orangered;">Copy code</b></button>
 <input type="text" value="217390204422865" id="myInput5">
  <br>

		16.  Seri: 10007123703804     ------ CODE: <b id="test7" style="color: red;">Click Buy</b> ---- <button id="btn7"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction7()"><b style="color: orangered;">Copy code</b></button>  <input type="text" value="016072136455318" id="myInput7">
 <br>

		17.  Seri: 10007086220898      ------ CODE:  <b id="test9" style="color: red;">Click Buy</b> ---- <button id="btn9"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction9()"><b style="color: orangered;">Copy code</b></button> <input type="text" value="018325107097156" id="myInput9">  <br>

		18.  Seri: 10006567324834  ------ CODE:  <b id="test10" style="color: red;">Click Buy</b> ---- <button id="btn10"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction10()"><b style="color: orangered;">Copy code</b></button> <input type="text" value="418898374841561" id="myInput10">
<br>

		19.  Seri: 10006214449333  ------ CODE:  <b id="test11" style="color: red;">Click Buy</b> ---- <button id="btn11"><b>Viettel 20</b></button> ---------- Price: 20.000 <button onclick="myFunction11()"><b style="color: orangered;">Copy code</b></button>
<input type="text" value="319401114175001" id="myInput11">

  <br>

  	20. Seri: 10007051012591 ------ CODE: <b id="test33" style="color: red;">Click Buy</b> ---- <button id="btn33"><b>Viettel 20</b></button> ---------- Price: 10.000 <button onclick="myFunction33()"><b style="color: orangered;">Copy code</b></button><input type="text" value="011117801039257 " id="myInput33"><br> 

		21.	Seri: 20000022204556 ------ CODE: <b style="color: #808080">sold</b> ----------- Viettel 50 -------------- Price: 45.000  <br>

		22.  Seri: 10006012138256 ------ CODE:  <b style="color: #808080">sold</b>  ----------- Viettel 100  ------------ <strike>Price: 100.000</strike>   <b style="color: red"> Price: 90.000</b>  <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 

	</div><br>


		<div id="mobi" class="the-cao-2">
		1. Seri: 093011000014572 ------ CODE: <b id="test23" style="color: red;">Click Buy</b> ---- <button id="btn23"><b>Mobifone 10</b></button> ------ Price: 10.000 <button onclick="myFunction23()"><b style="color: orangered;">Copy code</b></button><input type="text" value="653712547879" id="myInput23"><br> 

		2. Seri: 093011000010868 ------ CODE: <b id="test24" style="color: red;">Click Buy</b> ---- <button id="btn24"><b>Mobifone 10</b></button> ------ Price: 10.000 <button onclick="myFunction24()"><b style="color: orangered;">Copy code</b></button><input type="text" value="722262878425" id="myInput24"><br> 

		3. Seri: 093011000005899 ------ CODE: <b id="test25" style="color: red;">Click Buy</b> ---- <button id="btn25"><b>Mobifone 10</b></button> ------ Price: 10.000 <button onclick="myFunction25()"><b style="color: orangered;">Copy code</b></button><input type="text" value="287174180042" id="myInput25"><br> 

		4. Seri: 093021000009230  ------ CODE: <b id="test26" style="color: red;">Click Buy</b> ---- <button id="btn26"><b>Mobifone 10</b></button> ------ Price: 10.000 <button onclick="myFunction26()"><b style="color: orangered;">Copy code</b></button><input type="text" value="946597026675" id="myInput26"><br> 

		5. Seri: 093541000004157 ------ CODE: <b id="test32" style="color: red;">Click Buy</b> ---- <button id="btn32"><b>Mobifone 10</b></button> ------ Price: 10.000 <button onclick="myFunction32()"><b style="color: orangered;">Copy code</b></button><input type="text" value="769506417538" id="myInput32"><br> 
			 
		6. Seri: 090084000027275 ------ CODE:  <b style="color: #808080">sold</b> ----------- Mobifone 50 ---------- <strike>Price: 50.000</strike> <b style="color: red"> Price: 45.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 	

		7. Seri: 090084000027426  ------ CODE:  <b style="color: #808080">sold</b> ----------- Mobifone 50 ---------- <strike>Price: 50.000</strike> <b style="color: red"> Price: 45.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 	

		8. Seri: 090164000002795 ------ CODE:  <b style="color: #808080">sold</b> ----------- Mobifone 50 ---------- <strike>Price: 50.000</strike> <b style="color: red"> Price: 45.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 

		9. Seri: 090164000002741 ------ CODE:  <b style="color: #808080">sold</b> ----------- Mobifone 50 ---------- <strike>Price: 50.000</strike> <b style="color: red"> Price: 45.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 
		</div>

 		<div class="the-cao-3">

 		1. Seri: 089742000009515 ------ CODE:  <b style="color: #808080">sold</b> ----------- Mobifone 20 ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 


		2. Seri: 093032000009268 	------ CODE: <b id="test6" style="color: red;">Click Buy</b> --- <button id="btn6"><b>Mobifone 20</b></button> ------- Price: 20.000 <button onclick="myFunction6()"><b style="color: orangered;">Copy code</b></button> <input type="text" value="611137933435" id="myInput6">
 <br>

		3. Seri: 093282000216462  ------ CODE:  <b id="test8" style="color: red;">Click Buy</b> --- <button id="btn8"><b>Mobifone 20</b></button> ------- Price: 20.000 <button onclick="myFunction8()"><b style="color: orangered;">Copy code</b></button><input type="text" value="758340959414" id="myInput8">

 <br>

		4. Seri: 093001000031302  ------  CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ----------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 

		5. Seri: 093522000045707 ------ CODE: <b id="test22" style="color: red;">Click Buy</b> --- <button id="btn22"><b>Mobifone 20</b></button> ------- Price: 20.000 <button onclick="myFunction22()"><b style="color: orangered;">Copy code</b></button>
<input type="text" value="407352279722" id="myInput22">
 <br> 

		6. Seri: 089732000013297 ------ CODE:  <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000 <br> 

		7. Seri: 089892000061614 ------ CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>      
		
		8.   Seri: 089742000009528  ------  CODE:  <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000 <br>

		9. Seri: 090022000015579 ------ CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>

		10.	Seri: 090052000001299  ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br>   

		11. Seri: 089391000000396 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>

		12. Seri: 090022000000168 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>


		13. Seri: 089391000000385  ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>  

    14. Seri: 090052000001297 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br>     

		15.	Seri: 090022000031303 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- Price: 18.000 <br>


		16. Seri: 090052000000811 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br> 

		17.	Seri: 090012000003872 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>      

		18. Seri: 090012000003849 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>      

		19. Seri: 090052000000814 ---- CODE: <b style="color: #808080">sold</b>----------- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br> 

		20. Seri: 089892000060454  ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br> 

		21.	Seri: 090052000007451 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- Price: 18.000 <br>  

		22.	Seri: 079552000039856 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>

		23.	Seri: 090052000001302  ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br>

		24. Seri: 089391000001055 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>   

		25.	Seri: 090012000003392 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>

		26.	Seri: 090022000026194 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <br> 

		27. Seri: 079552000018145 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>    

		28. Seri: 090052000000787 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <br> 


		29. Seri: 090022000000270 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>     

		30. Seri: 089892000061175 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br> 

		31. Seri: 079552000017482 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>
  

		32. Seri: 090012000003393 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>

		33. Seri: 090052000003932 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br>

		34. Seri: 090022000028255 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br>

		35. Seri: 090022000028245 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br>


		36. Seri: 090052000008249 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- Price: 18.000 <br>

   
		37. Seri: 089971000000570  ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 20.000  <br> 

		
		38. Seri: 090052000000193 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br>


		39.	  Seri: 089892000061610  ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 20.000  <br>             
		
		40. Seri: 090022000000155  ---- CODE:  <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br>         

		41.	Seri: 090052000001294 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <br> 

		42.	Seri: 079552000039663 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>

		43. Seri: 090052000007536 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- Price: 18.000 <br>


		44. Seri: 090052000000093 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br>

		45. Seri: 090022000028325  ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 20</b> ---------- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 

		46.	Seri: 079552000018151 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>
		
		47. Seri: 089642000000403  ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 18.000  <br>
             
		48.	Seri: 090022000000157 ---- CODE:  <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br> 


		49.	Seri: 090012000003370 ---- CODE:<b style="color: #808080">sold</b> ----------- Mobifone 20  ------------ <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b><br> 

		50.	Seri: 089892000062653 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 20 ------------ Price: 20.000  <br> 

	</div>


		<div class="the-cao-4">


		14. Seri: 090021000018424 ---- CODE: <b style="color: #808080">sold</b> ---------- Mobifone 10 ------------ <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b><br> 

		15. Seri: 090021000041075   ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 10.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br>

		16. Seri: 052571000092296 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- Price: 10.000 <br> 

		17. Seri: 052571000091556 ---- CODE: <b style="color: blue">ERROR</b> ------ Mobifone 10 ------------ <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br>  

		18. Seri: 090021000057996 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- Price: 10.000 <br> 

		19. Seri: 052571000092150 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- Price: 10.000 <br> 

		20. Seri: 090021000006602 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b><br> 

		21. Seri: 090011000000358 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b><br> 

		22. Seri: 090021000017064 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b><br>  

		23. Seri: 090011000000282 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b><br>  

		24. Seri: 089771000008619 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br>  

		25. Seri: 090021000018932 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br>  

		
		26. Seri: 089891000016717 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b> <br> 

		27. Seri: 089891000016731  ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b> <br> 

		28. Seri: 089891000002201 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> ---- <b>Mobifone 10</b> ---------- <strike>Price: 10.000</strike> <b style="color: red">Price: 9.000</b> <br> 
		</div>



		<div id="vnmb">
		01. Seri: 2026200069042364 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 20</b> ----- <strike>Price: 20.000</strike> <b style="color: red">Price: 18.000</b> <i style="color: #976D00" class="fa fa-bolt" aria-hidden="true"></i><br>

		02. Seri: 2026000002108026 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 10</b> ----- Price: 10.000 <br>

		03.	Seri: 2026200069022458  ---- CODE:  <b style="color: #808080">sold</b> ---------- VietnamMobile 20 ------ Price: 19.000  <br> 

		04. Seri: 2026200069030571 ---- CODE:  <b style="color: #808080">sold</b> ---------- VietnamMobile 20 ------ Price: 19.000  <br> 

		05.	Seri:  2026200069022288 ---- CODE: <b style="color: #808080">sold</b> ---------- VietnamMobile 20 ------ Price: 20.000  <br> 

		06.	Seri: 2026200065388902 ---- CODE: <b style="color: #808080">sold</b> ---------- VietnamMobile 20 ------ Price: 19.000  <br> 

		07. Seri: 2026200069030486 ---- CODE: <b style="color: #808080">sold</b> ---------- VietnamMobile 20 ------ Price: 20.000 <br>   

		08.  Seri: 2026200065388862 ---- CODE: <b style="color: #808080">sold</b> ---------- VietnamMobile 20 ------ Price: 20.000 <br> 

		09. Seri: 2026200069043591 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 20</b> ----- Price: 20.000 <i style="color: red" class="fa fa-bolt" aria-hidden="true"></i><br> 

		10. Seri: 2026000002095197 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 10</b> ----- Price: 10.000 <i style="color: red" class="fa fa-bolt" aria-hidden="true"></i><br>  

		11.	Seri: 2026000002105015 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 10</b> ----- Price: 10.000 <br> 

		12. Seri: 2026200069131089  ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 20</b> ----- Price: 20.000 <i style="color: red" class="fa fa-bolt" aria-hidden="true"></i><br> 

		13. Seri: 2026200069131140  ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 20</b> ----- Price: 20.000 <br>  

		14. Seri: 2026200069130855 ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 20</b> ----- Price: 20.000 <br>

		15. Seri: 2026200069137342  ---- CODE: <a style="color: red" href="https://zalo.me/dominic_ng/" target="_blank"><b> Click Buy</b></a> -- <b>VietnamMobile 20</b> ----- Price: 20.000 <br>

		16. Seri: 2126200082142072 ---- CODE: <b id="test27" style="color: red;">Click Buy</b> - <button id="btn27"><b>Vietnamobile 20</b></button> ----- Price: 20.000 <button onclick="myFunction27()"><b style="color: orangered;">Copy code</b></button><input type="text" value="412000464559 " id="myInput27"><br> 

		17. Seri: 2126200082177031 ---- CODE: <b id="test28" style="color: red;">Click Buy</b> - <button id="btn28"><b>Vietnamobile 10</b></button> ----- Price: 20.000 <button onclick="myFunction28()"><b style="color: orangered;">Copy code</b></button><input type="text" value="287053738614 " id="myInput28"><br> 

		18. Seri: 2126000003116841 ---- CODE: <b id="test29" style="color: red;">Click Buy</b> - <button id="btn29"><b>Vietnamobile 10</b></button> ----- Price: 10.000 <button onclick="myFunction29()"><b style="color: orangered;">Copy code</b></button><input type="text" value="287681635403" id="myInput29"><br> 

		19. Seri: 2126200082140092  ---- CODE: <b id="test30" style="color: red;">Click Buy</b> - <button id="btn30"><b>Vietnamobile 20</b></button> ----- Price: 10.000 <button onclick="myFunction30()"><b style="color: orangered;">Copy code</b></button><input type="text" value="797917110724" id="myInput30"><br> 

		20. Seri: 2126000003091991 ---- CODE: <b id="test31" style="color: red;">Click Buy</b> - <button id="btn31"><b>Vietnamobile 10</b></button> ----- Price: 10.000 <button onclick="myFunction31()"><b style="color: orangered;">Copy code</b></button><input type="text" value="411064226847" id="myInput31"><br> 


		</div>

				<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#test1").text("212646021956851");
  });
  $("#btn2").click(function(){
    $("#test2").text("910598901340341");
  });
  $("#btn3").click(function(){
    $("#test3").text("716617623512714");
  });
  $("#btn4").click(function(){
    $("#test4").text("516868180128496");
  });
  $("#btn5").click(function(){
    $("#test5").text("217390204422865");
  });
  $("#btn6").click(function(){
    $("#test6").text("611137933435 ");
  });
   $("#btn7").click(function(){
    $("#test7").text("016072136455318");
  });
   $("#btn8").click(function(){
    $("#test8").text("758340959414");
  }); 
    $("#btn9").click(function(){
    $("#test9").text("018325107097156");
  }); 
    $("#btn10").click(function(){
    $("#test10").text("418898374841561");
  }); 
      $("#btn11").click(function(){
    $("#test11").text("319401114175001");
  }); 
 $("#btn12").click(function(){
    $("#test12").text("824155278792198");
  }); 
    $("#btn13").click(function(){
    $("#test13").text("912504605893764");
  }); 
    $("#btn14").click(function(){
    $("#test14").text("117596121596241");
  }); 
      $("#btn15").click(function(){
    $("#test15").text("612668387598006");
  }); 
         $("#btn16").click(function(){
    $("#test16").text("413715352782178");
  }); 
    $("#btn17").click(function(){
    $("#test17").text("717245288872788");
  }); 
    $("#btn18").click(function(){
    $("#test18").text("523936518785266");
  }); 
    $("#btn19").click(function(){
    $("#test19").text("920756255825506");
  }); 
      $("#btn20").click(function(){
    $("#test20").text("913088545391001");
  });      
    $("#btn21").click(function(){
    $("#test21").text("318920568312795");
  }); 
     $("#btn22").click(function(){
    $("#test22").text("407352279722");
  }); 
    $("#btn23").click(function(){
    $("#test23").text("653712547879");
  }); 
      $("#btn24").click(function(){
    $("#test24").text("722262878425");
  });      
    $("#btn25").click(function(){
    $("#test25").text("287174180042");
  }); 
    $("#btn26").click(function(){
    $("#test26").text("946597026675");
  }); 
    $("#btn27").click(function(){
    $("#test27").text("412000464559");
  }); 
      $("#btn28").click(function(){
    $("#test28").text("287053738614");
  });      
    $("#btn29").click(function(){
    $("#test29").text("287681635403");
  }); 
    $("#btn30").click(function(){
    $("#test30").text("797917110724");
  }); 
   $("#btn31").click(function(){
    $("#test31").text("411064226847");
  }); 
    $("#btn32").click(function(){
    $("#test32").text("769506417538");
  }); 
   $("#btn33").click(function(){
    $("#test33").text("011117801039257");
  }); 
});
</script>

<script>
function myFunction1() {
  var copyText = document.getElementById("myInput1");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction2() {
  var copyText = document.getElementById("myInput2");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction3() {
  var copyText = document.getElementById("myInput3");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction4() {
  var copyText = document.getElementById("myInput4");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction5() {
  var copyText = document.getElementById("myInput5");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction6() {
  var copyText = document.getElementById("myInput6");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction7() {
  var copyText = document.getElementById("myInput7");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction8() {
  var copyText = document.getElementById("myInput8");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction9() {
  var copyText = document.getElementById("myInput9");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction10() {
  var copyText = document.getElementById("myInput10");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction11() {
  var copyText = document.getElementById("myInput11");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction12() {
  var copyText = document.getElementById("myInput12");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction13() {
  var copyText = document.getElementById("myInput13");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction14() {
  var copyText = document.getElementById("myInput14");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction15() {
  var copyText = document.getElementById("myInput15");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction16() {
  var copyText = document.getElementById("myInput16");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction17() {
  var copyText = document.getElementById("myInput17");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction18() {
  var copyText = document.getElementById("myInput18");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction19() {
  var copyText = document.getElementById("myInput19");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction20() {
  var copyText = document.getElementById("myInput20");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
function myFunction21() {
  var copyText = document.getElementById("myInput21");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction22() {
  var copyText = document.getElementById("myInput22");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction23() {
  var copyText = document.getElementById("myInput23");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction24() {
  var copyText = document.getElementById("myInput24");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction25() {
  var copyText = document.getElementById("myInput25");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction26() {
  var copyText = document.getElementById("myInput26");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction27() {
  var copyText = document.getElementById("myInput27");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction28() {
  var copyText = document.getElementById("myInput28");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction29() {
  var copyText = document.getElementById("myInput29");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction30() {
  var copyText = document.getElementById("myInput30");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction31() {
  var copyText = document.getElementById("myInput31");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction32() {
  var copyText = document.getElementById("myInput32");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

function myFunction33() {
  var copyText = document.getElementById("myInput33");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


	
</div></div></div></div><br>

</body>
</html>
