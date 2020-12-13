<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>

<title>Đăng nhập | ThePerfume</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>Thông tin đăng nhập</h1>
	<div class="w3layoutscontaineragileits">
	<h2>Đăng nhập</h2>
		<form  method="post">
			<input type="text" name="username" placeholder="USERNAME" required="">
			<input type="password" name="password" placeholder="PASSWORD" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Nhớ mật khẩu</label>
					<a href="#">Quên mật khẩu?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" name="btn_submit" value="Đăng nhập">
				<div class="clear"></div>
			</div>
			<p> Quay về trang chủ <span>→</span> <a  href="index.php"> Bấm vào đây</a></p>
		</form>
	</div>
	
	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

	<?php  
include 'lib/connect.php';
if (isset($_POST['btn_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM khachhang where taikhoan=:taikhoan AND matkhau=:password ";
	$stm=$o->prepare($sql);
	$stm->execute(array('taikhoan'=>$username,'password'=>$password));	
	$cout = $stm->rowCount();
	if($cout>0)
	{
		echo "Đăng nhập thành công";
		$_SESSION['user']=$username;
		header("Location:index.php");exit;	
		
	}else
	{
		echo"Đăng nhập thất bại";
	}
}
?>

</body>
<!-- //Body -->
</html>




