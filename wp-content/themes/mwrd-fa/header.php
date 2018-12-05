<?php
if(!is_user_logged_in()) exit;
global  $userRole;
global  $user;
$user = wp_get_current_user();

if(in_array( 'administrator', (array) $user->roles ))
	$userRole = 'administrator';
elseif (in_array( 'emp-public', (array) $user->roles ))
	$userRole = 'emp-public';
elseif (in_array( 'emp-private', (array) $user->roles ))
	$userRole = 'emp-private';


?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); wp_title();?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo get_stylesheet_directory_uri() ?>/content/global.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/style.css">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/java/FWDUVPlayer.js"></script>

    <?php wp_head(); ?>
</head>

<body>

<nav class="l-shadow bg-white mfa-nav">
	<div class="container">
		<div class="row">
			<div class="col-3 text-right">
				<a class="logo" href="<?php echo get_home_url()?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo123.png">
				</a>
			</div>
			<div class="col-6">
                <?php 	get_search_form(); ?>
			</div>
			<div class="col-3">
				<ul class="list-unstyled p-0 te">
					<li class="nav-item dropdown">
						<a class="nav-link user-photo mr-auto" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-image: url('<?php echo get_avatar_url(get_current_user_id()) ?>')">

						</a>
						<div class="dropdown-menu text-right l-shadow user-drop" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="<?php echo get_edit_user_link(get_current_user_id())?>">
                                <span class="icon">
                                    <svg
	                                    xmlns="http://www.w3.org/2000/svg"
	                                    xmlns:xlink="http://www.w3.org/1999/xlink"
	                                    width="18px" height="18px">
<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
      d="M9.000,-0.000 C4.037,-0.000 -0.000,4.037 -0.000,9.000 C-0.000,13.963 4.037,18.000 9.000,18.000 C13.963,18.000 18.000,13.963 18.000,9.000 C18.000,4.037 13.963,-0.000 9.000,-0.000 ZM4.579,16.189 C4.898,16.058 5.293,16.048 5.888,16.048 L6.736,16.048 C6.829,16.048 6.915,16.003 6.967,15.927 L7.941,14.498 C7.980,14.441 7.992,14.374 7.985,14.310 C8.306,14.469 8.645,14.562 8.996,14.562 C9.356,14.562 9.704,14.463 10.031,14.298 C10.020,14.366 10.034,14.439 10.077,14.501 L11.075,15.929 C11.127,16.004 11.212,16.048 11.304,16.048 L12.321,16.048 C12.865,16.048 13.182,16.055 13.442,16.175 C12.150,16.977 10.629,17.442 9.000,17.442 C7.380,17.442 5.866,16.983 4.579,16.189 ZM11.837,6.707 C12.154,7.801 12.425,9.728 11.806,10.241 C11.742,10.294 11.705,10.373 11.705,10.456 C11.705,12.020 10.430,14.004 8.996,14.004 C7.563,14.004 6.288,12.020 6.288,10.456 C6.288,10.417 6.280,10.379 6.265,10.344 C5.446,8.479 6.138,6.753 6.146,6.736 C6.159,6.702 6.167,6.666 6.167,6.629 C6.167,5.703 6.333,4.994 8.431,4.994 C8.483,4.994 8.534,4.979 8.578,4.952 C9.179,4.579 9.749,4.391 10.274,4.391 C10.865,4.391 11.360,4.636 11.667,5.081 C11.961,5.506 12.027,6.048 11.844,6.530 C11.823,6.587 11.820,6.649 11.837,6.707 ZM13.950,15.833 C13.488,15.489 12.989,15.491 12.319,15.491 L11.449,15.491 L10.534,14.181 C10.498,14.130 10.447,14.099 10.392,14.081 C11.449,13.343 12.214,11.878 12.260,10.579 C13.152,9.643 12.551,7.202 12.397,6.639 C12.605,6.008 12.506,5.314 12.126,4.764 C11.718,4.172 11.043,3.833 10.274,3.833 C9.664,3.833 9.018,4.036 8.352,4.436 C5.982,4.458 5.620,5.470 5.609,6.576 C5.486,6.905 4.922,8.616 5.731,10.515 C5.754,11.833 6.531,13.339 7.610,14.087 C7.560,14.106 7.513,14.136 7.480,14.184 L6.589,15.491 L5.888,15.491 C5.161,15.491 4.573,15.494 4.059,15.839 C1.940,14.304 0.558,11.811 0.558,9.000 C0.558,4.345 4.345,0.558 9.000,0.558 C13.655,0.558 17.442,4.345 17.442,9.000 C17.442,11.807 16.064,14.297 13.950,15.833 Z"/>
</svg>
                                </span>
								<?php $user = get_user_by('id', get_current_user_id()); echo $user->nickname;?>
							</a>
							<a class="dropdown-item" href="<?php echo get_home_url().'/wp-admin'?>">
                                <span class="icon">
                                   <svg
	                                   xmlns="http://www.w3.org/2000/svg"
	                                   xmlns:xlink="http://www.w3.org/1999/xlink"
	                                   width="11px" height="18px">
<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
      d="M5.500,18.004 C2.467,18.004 -0.000,15.541 -0.000,12.513 C-0.000,11.394 0.338,10.354 0.916,9.485 L0.907,8.897 C0.885,7.462 0.851,5.310 0.917,3.636 C0.999,1.554 3.568,-0.004 5.194,-0.004 C8.014,-0.004 9.548,1.326 9.754,3.942 C9.770,4.146 9.777,8.368 9.778,9.069 C10.541,10.011 11.000,11.209 11.000,12.513 C11.000,15.541 8.533,18.004 5.500,18.004 ZM9.144,3.992 C8.963,1.688 7.708,0.614 5.194,0.614 C3.794,0.614 1.594,1.986 1.527,3.677 C1.465,5.267 1.493,7.313 1.515,8.739 C2.518,7.684 3.932,7.021 5.500,7.021 C6.909,7.021 8.191,7.557 9.165,8.430 C9.163,7.023 9.155,4.165 9.144,3.992 ZM5.500,7.631 C2.804,7.631 0.611,9.821 0.611,12.513 C0.611,15.204 2.804,17.394 5.500,17.394 C8.196,17.394 10.389,15.204 10.389,12.513 C10.389,9.821 8.196,7.631 5.500,7.631 ZM5.500,14.953 C5.331,14.953 5.194,14.817 5.194,14.648 L5.194,11.292 C5.194,11.124 5.331,10.987 5.500,10.987 C5.669,10.987 5.805,11.124 5.805,11.292 L5.805,14.648 C5.805,14.817 5.669,14.953 5.500,14.953 Z"/>
</svg>
                                </span>
								لوحة التحكم
							</a>
							<a class="dropdown-item" href="<?php echo wp_logout_url( get_home_url() );?>">
                                <span class="icon">
                                    <svg
	                                    xmlns="http://www.w3.org/2000/svg"
	                                    xmlns:xlink="http://www.w3.org/1999/xlink"
	                                    width="14px" height="18px">
<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
      d="M11.910,15.845 C10.590,17.231 8.847,18.000 6.997,18.000 C6.978,18.000 6.959,18.000 6.940,18.000 C3.081,18.000 -0.032,14.585 0.001,10.469 C0.028,7.102 2.179,4.149 5.231,3.299 C5.370,3.261 5.513,3.345 5.551,3.488 C5.588,3.632 5.506,3.779 5.367,3.818 C2.540,4.605 0.549,7.347 0.523,10.474 C0.493,14.293 3.373,17.463 6.944,17.463 C6.962,17.463 6.980,17.463 6.997,17.463 C8.706,17.463 10.316,16.751 11.537,15.469 C12.773,14.171 13.462,12.429 13.477,10.577 C13.502,7.449 11.554,4.682 8.740,3.847 C8.602,3.806 8.522,3.657 8.562,3.515 C8.602,3.373 8.745,3.291 8.885,3.332 C11.923,4.234 14.026,7.217 13.999,10.585 C13.983,12.576 13.241,14.447 11.910,15.845 ZM7.014,9.134 C7.013,9.134 7.012,9.134 7.012,9.134 C6.868,9.134 6.752,8.932 6.753,8.784 L6.820,0.323 C6.822,0.176 6.938,-0.000 7.081,-0.000 L7.084,-0.000 C7.228,-0.000 7.344,0.205 7.343,0.354 L7.275,8.817 C7.274,8.964 7.157,9.134 7.014,9.134 Z"/>
</svg>
                                </span>
								تسجيل الخروج
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
