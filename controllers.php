<?php
require_once 'business.php';


function komunikat(&$model)
{
	$model['komunikat']=isset($_SESSION['komunikat'])?$_SESSION['komunikat']:NULL;
	$_SESSION['komunikat']=NULL;
}

function log_in(&$model)
{
if ((!empty($_POST['login_action'])))
	{
		$user=[
			'login'=>NULL,
			'password'=>NULL,
			'email'=> NULL,
			];	
		$login=$_POST['login'];
		$pass=$_POST['pass'];
		$query=['login'=>$login,];
		$user=get_user($query);
		if(isset($user))
		{
			if($user['password']==(password_verify($pass ,$user['password'] )))
			{	
				$komunikat=$_SESSION['komunikat'];
				session_regenerate_id ();
				$_SESSION['komunikat']=$komunikat;
				$_SESSION['user_id'] = $user['_id'];
				header("Location:". $_SESSION['url']);
				exit ;
						
			}
			else
			{	
			$_SESSION['komunikat']='Błędne hasło';
			header("Location:". $_SESSION['url']);
			exit ;
			}
		}
		else
		{	
			$_SESSION['komunikat']='Błędny login';
			header("Location:". $_SESSION['url']);
			exit ;
			
		}
	}		
							
		 
}
function log_out(&$model){
	
	if((!empty($_POST['logout_action'])))
	{
	session_destroy();
	header("Location:". $_SESSION['url']);
	exit ;
	}
}

function check_login(&$model){
	
	if(isset($_SESSION['user_id'])){		
	$query=[
			'_id'=>$_SESSION['user_id'],
			];
	$user=get_user($query);
	$model['user']=$user;
	}
	else
	{
		$model['user']=NULL;
	}
}

function index(&$model)
{
   check_login($model);
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);
	}
	komunikat($model);	
    return 'index';
}
function geneza(&$model)
{
   	check_login($model);
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);
	}
	komunikat($model);	
    return 'strona2';
}
function rozgrywki_klubowe(&$model)
{
   	check_login($model);
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);
	}
	komunikat($model);	
    return 'strona3';
}
function ankieta(&$model)
{
   	check_login($model);
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);
	}
	komunikat($model);	
    return 'strona4';
}
function kontakt(&$model)
{
   	check_login($model);
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);
	}
	komunikat($model);	
    return 'strona5';
}
function galeria(&$model)
{
 check_login($model);
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);
		
		if ((!empty($_POST['usun_action'])))
		{
			$myGallery=&get_myGallery(); 
			foreach($_POST['usun'] as $id)
			{
				$myGallery[$id]=NULL;
			}
		}
	}
	$myGallery=&get_myGallery(); 
	$model['myGallery']=$myGallery;
	komunikat($model);	
	
	


	
return 'galeria';
}


function formularz_zdjecie(&$model)
{
   		$zdjecie = [
        'title' => null,
        'author' => null,
		'photo' => null,
		'watermark'=>null,
		'name'=>null,	
		'is_public'=>null,
		'user_id'=>null,
		];
	check_login($model);	
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);
		
		if ((!empty($_POST['author'])))
		{	
			$stan=0;
			$file  =  $_FILES [ 'photo' ] ;
			$finfo = finfo_open (FILEINFO_MIME_TYPE);
			$file_name = $file [ 'tmp_name' ]; 
			$mime_type = finfo_file($finfo , $file_name );
			if(!(($mime_type === ( 'image/jpeg')) || ($mime_type === ( 'image/png'))))
			{
				$stan++;
				$_SESSION['komunikat']=$_SESSION['komunikat'].'Nieprawidłowy format!';
			}
			$image_info = getimagesize($file[ 'tmp_name' ]);
			$image_width = $image_info[0];
			$image_height = $image_info[1];			
			$image_size=filesize($file_name);
			if($image_size>1000000)
			{
				$stan++;
				$_SESSION['komunikat']=$_SESSION['komunikat'].'Zbyt duzy rozmiar!';
			}
			else if($image_size>1000000 &&!(($mime_type === ( 'image/jpeg')) || ($mime_type === ( 'image/png'))) )
			{
				$stan++;
				$_SESSION['komunikat']=$_SESSION['komunikat'].'Zbyt duzy rozmiar i błędny format';
			}

			if($stan===0)
			{
				$upload_dir = 'images/'; 
				$file_name = bin2hex(openssl_random_pseudo_bytes(8)).'.jpg';
				$target=$upload_dir.$file_name ;
				$tmp_path =  $file [ 'tmp_name' ];
				if (move_uploaded_file ($tmp_path ,$target ))
					{ 
						$zdjecie = [
							'title'=> $_POST['title'],
							'author' => $_POST['author'],
							'name'=> $file_name,
							'watermark'=>$_POST['watermark'],
							'is_public'=>1,
							'user_id'=>NULL,
							];
						if(isset($_POST['is_public']))
						{
							$zdjecie = [
								'title'=> $_POST['title'],
								'author' => $_POST['author'],
								'name'=> $file_name,
								'watermark'=>$_POST['watermark'],
								'is_public'=>$_POST['is_public'],
								'user_id'=>$_POST['user_id'],
								];	
						}
						$id = null;
						if(save_photo($zdjecie, $id))
						{
							$_SESSION['komunikat']='Zdjecie zapisane';

						}
					}
				else
				{
					$_SESSION['komunikat']='Upload nie powiodl sie';
					header("Location:". $_SESSION['url']);
					exit ;
				}
				
				$watermark = imagecreatetruecolor($image_width,$image_height);
				$black = imagecolorallocate($watermark, 0, 0, 0);
				imagecolortransparent($watermark, $black);
				$textcolor = imagecolorallocate($watermark, 255, 255, 255);
				imagestring($watermark, 5, 0, 0,  $zdjecie['watermark'], $textcolor);
				switch ($mime_type)
				{
					case  'image/jpeg':
					$dest = imagecreatefromjpeg ('images/'. $zdjecie['name']);
					break;
					case 'image/png':
					$dest = imagecreatefrompng('images/'. $zdjecie['name']);
					break;
					default:
					echo 'błędy typ mime';
					break;
				}
				imagecopymerge($dest, $watermark, 10, 10, 0, 0, 100, 47, 50);
				imagepng($dest, './images/WATERMARK' . $zdjecie['name']);
				
				$w = 200;
				$h = 125;
				$w_ratio = $image_width / $w;
				$h_ratio = $image_height / $h;
				$ratio = $w_ratio > $h_ratio ? $w_ratio : $h_ratio;
				$dst_w = $image_width / $ratio;
				$dst_h = $image_height / $ratio;
				$dst_x = ($w - $dst_w) / 2;
				$dst_y = ($h - $dst_h) / 2;
				$thumbnail = imagecreatetruecolor($w, $h);
				imagecopyresampled($thumbnail, $dest, $dst_x, $dst_y,0,0, $dst_w, $dst_h, $image_width, $image_height);
				imagepng($thumbnail, './images/MINI' . $zdjecie['name']);
				imagedestroy($thumbnail);
				imagedestroy($dest);
				imagedestroy($watermark);

				header("Location:". $_SESSION['url']);
				exit ;
			}
			else
			{
				header("Location:". $_SESSION['url']);
				exit ;
			}
		}
	
		if ((!empty($_POST['add_action'])))
		{
		
			if ((!empty($_POST['check_id'])))
			{
				foreach($_POST['check_id'] as $id)
				{
				$photo=get_photo($id);
				$photo['is_public']=($_POST['is_public'][$id]);
				save_photo($photo, $id);
				}
			}
			if(!empty($_POST['check']))
			{	
				$myGallery=&get_myGallery(); 
				foreach($_POST['check'] as $id)
				{	
					$myphoto=get_photo($id);
					$myGallery[$id]=[
					'name' => $myphoto['name'],
					'author' => $myphoto['author'],
					'title' => $myphoto['title'],
					'_id' => $myphoto['_id'],
					];
				}
				
			}	
		}
		if ((!empty($_POST['usun_action'])))
		{
			$db = get_db();
			$db->photos->remove();
			$db = get_db();
			$db->users->remove();
		}
	}	
	$photos=get_photos();
	$model['photos']=$photos;	
	komunikat($model);		
    return 'formularz_zdjecie';
}
function rejestracja(&$model)
{
  	check_login($model);
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{	
		log_in($model);
		log_out($model);

			 if ((!empty($_POST['new_user_action'])))
			{	
				$new_login=$_POST['new_login'];
				$new_pass=$_POST['new_pass'];
				$verify_pass=$_POST['verify_pass'];
				$new_email=$_POST['new_email'];
				$query=['login'=>$new_login,];
				$user=get_user($query);
				if($user['login']==$new_login)
				{
					$_SESSION['komunikat']=$_SESSION['komunikat'].'Login jest już zajęty';
					header("Location:". $_SESSION['url']);
					exit ;
				}
				else
				{
					if($new_pass===$verify_pass)
					{
						$hash = password_hash($new_pass ,PASSWORD_DEFAULT);
						$user=[
						'login'=>$new_login,
						'password'=>$hash,
						'email'=> $new_email,
						];
						if(save_user($user)){
							$_POST['login_action']=1;
							$_POST['login']=$new_login;
							$_POST['pass']=$new_pass;
							$_SESSION['komunikat']='Rejestracja zakończona';
							log_in($model);
						}
					}
					else
					{
					$_SESSION['komunikat']='Hasła nie zgadzają się';
					}
				}
			}
	
	}
	komunikat($model);	
return 'rejestracja';
}

function &get_myGallery()
{
    if (!isset($_SESSION['myGallery'])) {
        $_SESSION['myGallery'] = []; 
    }
    return $_SESSION['myGallery'];
}


