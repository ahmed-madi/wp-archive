<?php get_header();

global  $userRole;
global  $user;?>

    <div class="container">
		<div class="row statics-raw">
			<div class="col-sm-6 col-md-3">
				<a class="l-shadow bg-white statics-block" href="<?php echo get_home_url().'/folders?file_type=video'?>">
					<div class="icon">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							width="81px" height="64px">
							<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
							      d="M50.143,36.084 C50.143,33.814 48.296,31.973 46.018,31.973 L4.124,31.973 C1.847,31.973 -0.000,33.814 -0.000,36.084 L-0.000,59.902 C-0.000,62.172 1.847,64.013 4.124,64.013 L46.018,64.013 C48.296,64.013 50.143,62.172 50.143,59.902 L50.143,36.084 ZM47.571,59.902 C47.571,60.757 46.876,61.450 46.018,61.450 L4.124,61.450 C3.267,61.450 2.571,60.757 2.571,59.902 L2.571,36.084 C2.571,35.229 3.267,34.536 4.124,34.536 L46.018,34.536 C46.876,34.536 47.571,35.229 47.571,36.084 L47.571,59.902 ZM75.882,38.209 L60.775,41.998 C58.931,42.454 57.857,44.094 57.857,45.988 L57.857,51.583 C57.857,53.491 58.943,55.136 60.805,55.582 L76.020,59.244 C76.338,59.320 76.611,59.357 76.935,59.357 C79.205,59.357 81.000,57.513 81.000,55.245 L81.000,42.200 C81.000,39.932 79.153,38.087 76.882,38.087 C76.548,38.087 76.211,38.128 75.882,38.209 ZM78.428,42.200 L78.428,55.245 C78.428,56.222 77.484,56.994 76.514,56.750 L61.405,53.088 C60.705,52.920 60.429,52.301 60.429,51.583 L60.429,45.988 C60.429,45.275 60.700,44.658 61.394,44.486 L76.609,40.698 C76.735,40.666 76.809,40.650 76.935,40.650 C77.788,40.650 78.428,41.346 78.428,42.200 ZM10.190,24.459 C14.960,24.459 18.840,20.725 18.840,16.136 C18.840,11.546 14.960,7.813 10.190,7.813 C5.420,7.813 1.541,11.546 1.541,16.136 C1.541,20.725 5.420,24.459 10.190,24.459 ZM10.190,10.376 C13.541,10.376 16.269,12.959 16.269,16.136 C16.269,19.312 13.541,21.895 10.190,21.895 C6.839,21.895 4.112,19.312 4.112,16.136 C4.112,12.959 6.839,10.376 10.190,10.376 ZM24.800,12.222 C24.800,18.969 30.517,24.459 37.543,24.459 C44.569,24.459 50.285,18.969 50.285,12.222 C50.285,5.475 44.569,-0.013 37.543,-0.013 C30.517,-0.013 24.800,5.475 24.800,12.222 ZM47.713,12.222 C47.713,17.556 43.150,21.895 37.543,21.895 C31.934,21.895 27.372,17.556 27.372,12.222 C27.372,6.889 31.934,2.550 37.543,2.550 C43.150,2.550 47.713,6.889 47.713,12.222 Z"/>
						</svg>
					</div>
					<div class="green-text medium-font font-24 number">
						<?php
						$children = get_children( 'post_mime_type=video' );
						echo count($children);
						?>
                    </div>
					<div class="type">ملف فيديو</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-3">
				<a class="l-shadow bg-white statics-block" href="<?php echo get_home_url().'/folders?file_type=audio'?>">
					<div class="icon">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							width="58px" height="64px">
							<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
							      d="M11.693,63.988 C18.139,63.988 23.379,58.734 23.379,52.277 L23.379,26.172 L56.076,18.556 L56.076,43.171 C54.152,39.987 50.520,37.878 46.438,37.878 C39.992,37.878 34.812,43.132 34.812,49.589 C34.812,56.047 39.959,61.301 46.405,61.301 C52.852,61.301 57.999,56.047 57.999,49.589 L57.999,0.012 L21.456,8.517 L21.456,45.859 C19.533,42.674 15.774,40.565 11.693,40.565 C5.246,40.565 0.001,45.819 0.001,52.277 C0.001,58.734 5.246,63.988 11.693,63.988 ZM46.569,59.375 C41.183,59.375 36.801,54.985 36.801,49.589 C36.801,44.194 41.183,39.805 46.569,39.805 C51.956,39.805 56.338,44.194 56.338,49.589 C56.338,54.985 51.956,59.375 46.569,59.375 ZM56.076,2.433 L56.076,16.578 L23.379,24.195 L23.379,10.050 L56.076,2.433 ZM11.698,42.491 C17.083,42.491 21.465,46.881 21.465,52.277 C21.465,57.672 17.083,62.062 11.698,62.062 C6.311,62.062 1.929,57.672 1.929,52.277 C1.929,46.881 6.311,42.491 11.698,42.491 Z"/>
						</svg>
					</div>
					<div class="green-text medium-font font-24 number">
						<?php
						$children = get_children( 'post_mime_type=audio' );
						echo count($children);
						?>
                    </div>
					<div class="type">ملف صوتيات</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-3">
				<a class="l-shadow bg-white statics-block" href="<?php echo get_home_url().'/folders?file_type=zip'?>">
					<div class="icon">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							width="49px" height="64px">
							<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
							      d="M43.787,64.000 L4.170,64.000 C1.870,64.000 -0.000,62.148 -0.000,59.871 L-0.000,16.516 C-0.000,15.545 0.504,14.554 1.497,13.572 L13.614,1.574 C14.338,0.856 15.459,-0.000 16.681,-0.000 L44.830,-0.000 C47.130,-0.000 49.000,1.852 49.000,4.129 L49.000,59.871 C49.000,62.353 45.862,64.000 43.787,64.000 ZM14.596,3.522 L3.557,14.451 L12.511,14.451 C13.679,14.451 14.596,13.545 14.596,12.387 L14.596,3.522 ZM46.915,4.129 C46.915,2.971 45.999,2.065 44.830,2.065 L16.681,2.065 L16.681,12.387 C16.681,14.664 14.811,16.516 12.511,16.516 L2.085,16.516 L2.085,59.871 C2.085,61.029 3.001,61.935 4.170,61.935 L43.787,61.935 C45.079,61.935 46.915,60.868 46.915,59.871 L46.915,4.129 ZM38.574,44.387 L10.425,44.387 C9.849,44.387 9.383,43.925 9.383,43.355 C9.383,42.785 9.849,42.323 10.425,42.323 L38.574,42.323 C39.151,42.323 39.617,42.785 39.617,43.355 C39.617,43.925 39.151,44.387 38.574,44.387 ZM38.574,35.097 L10.425,35.097 C9.849,35.097 9.383,34.634 9.383,34.065 C9.383,33.495 9.849,33.032 10.425,33.032 L38.574,33.032 C39.151,33.032 39.617,33.495 39.617,34.065 C39.617,34.634 39.151,35.097 38.574,35.097 ZM38.574,24.774 L10.425,24.774 C9.849,24.774 9.383,24.312 9.383,23.742 C9.383,23.172 9.849,22.710 10.425,22.710 L38.574,22.710 C39.151,22.710 39.617,23.172 39.617,23.742 C39.617,24.312 39.151,24.774 38.574,24.774 ZM38.574,15.484 L23.979,15.484 C23.402,15.484 22.936,15.022 22.936,14.451 C22.936,13.882 23.402,13.419 23.979,13.419 L38.574,13.419 C39.151,13.419 39.617,13.882 39.617,14.451 C39.617,15.022 39.151,15.484 38.574,15.484 ZM10.287,52.645 L38.209,52.645 C38.785,52.645 39.251,53.107 39.251,53.677 C39.251,54.248 38.785,54.710 38.209,54.710 L10.287,54.710 C9.711,54.710 9.245,54.248 9.245,53.677 C9.245,53.107 9.711,52.645 10.287,52.645 Z"/>
						</svg>
					</div>
					<div class="green-text medium-font font-24 number">
						<?php
						echo intval(count(get_children( 'post_mime_type=application/rar' ))+count(get_children( 'post_mime_type=application/zip' )));
						?>
                    </div>
					<div class="type">ملف مضغوط</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-3">
				<a class="l-shadow bg-white statics-block" href="<?php echo get_home_url().'/folders?file_type=others'?>">
					<div class="icon">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							width="56px" height="64px">
							<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
							      d="M56.000,59.823 C56.000,62.127 54.126,64.000 51.823,64.000 L4.177,64.000 C1.874,64.000 -0.000,62.127 -0.000,59.823 L-0.000,44.177 C-0.000,44.138 0.010,44.103 0.011,44.065 C0.012,44.056 0.008,44.049 0.010,44.040 L0.025,43.930 C0.040,43.684 0.069,43.442 0.125,43.208 L5.603,3.569 C5.914,1.496 7.651,0.000 9.735,0.000 L46.265,0.000 C48.349,0.000 50.086,1.496 50.395,3.557 L55.875,43.208 C55.931,43.442 55.960,43.683 55.975,43.930 L55.990,44.040 C55.991,44.049 55.988,44.056 55.989,44.065 C55.990,44.103 56.000,44.138 56.000,44.177 L56.000,59.823 ZM48.416,3.842 C48.256,2.780 47.350,2.000 46.265,2.000 L9.735,2.000 C8.649,2.000 7.744,2.780 7.583,3.854 L2.540,40.336 C3.043,40.120 3.596,40.000 4.177,40.000 L14.186,40.000 C16.148,40.000 17.818,41.323 18.247,43.218 C19.284,47.800 23.295,51.000 28.000,51.000 C32.705,51.000 36.716,47.800 37.753,43.218 C38.182,41.323 39.852,40.000 41.813,40.000 L51.823,40.000 C52.404,40.000 52.957,40.120 53.460,40.336 L48.416,3.842 ZM54.000,44.243 L53.910,43.592 C53.653,42.677 52.819,42.000 51.823,42.000 L41.813,42.000 C40.809,42.000 39.921,42.698 39.704,43.659 C38.459,49.158 33.646,53.000 28.000,53.000 C22.353,53.000 17.541,49.158 16.296,43.659 C16.079,42.698 15.191,42.000 14.186,42.000 L4.177,42.000 C3.181,42.000 2.347,42.677 2.090,43.592 L2.000,44.243 L2.000,59.823 C2.000,61.023 2.976,62.000 4.177,62.000 L51.823,62.000 C53.023,62.000 54.000,61.023 54.000,59.823 L54.000,44.243 ZM48.000,32.000 L8.000,32.000 C7.447,32.000 7.000,31.552 7.000,31.000 C7.000,30.448 7.447,30.000 8.000,30.000 L48.000,30.000 C48.553,30.000 49.000,30.448 49.000,31.000 C49.000,31.552 48.553,32.000 48.000,32.000 ZM46.000,22.000 L10.000,22.000 C9.447,22.000 9.000,21.552 9.000,21.000 C9.000,20.448 9.447,20.000 10.000,20.000 L46.000,20.000 C46.553,20.000 47.000,20.448 47.000,21.000 C47.000,21.552 46.553,22.000 46.000,22.000 ZM44.000,12.000 L12.000,12.000 C11.447,12.000 11.000,11.552 11.000,11.000 C11.000,10.448 11.447,10.000 12.000,10.000 L44.000,10.000 C44.553,10.000 45.000,10.448 45.000,11.000 C45.000,11.552 44.553,12.000 44.000,12.000 Z"/>
						</svg>
					</div>
					<div class="green-text medium-font font-24 number">
						<?php
						echo intval(count(get_children( 'post_type=attachment' ))-count(get_children( 'post_mime_type=application/zip' ))-count(get_children( 'post_mime_type=application/rar' ))-count(get_children( 'post_mime_type=audio' ))-count(get_children( 'post_mime_type=video' )));
						?>
                    </div>
					<div class="type">ملفات اخرى</div>
				</a>
			</div>
		</div>

		<div class="last-files-block">
			<h2 class="font-24 green-text regular-font">أحدث الملفات</h2>

			<div class="last-files-table-container">
				<div class="last-files-table">
					<div class="last-files-tr last-files-th d-flex justify-content-around font-14 medium-font">
						<span class="file-title">اسم الملف</span>
						<span class="file-author">المالك</span>
						<span class="file-date">التاريخ</span>
						<span class="file-size">حجم الملف</span>
					</div>
                    <?php
                    if($userRole == 'emp-private'){
	                    $attachments = get_posts( array(
		                    'post_type' => 'attachment',
		                    'posts_per_page' => 10,
		                    'post_status' => null,
		                    'author' => $user->ID
	                    ) );
                    }else{
	                    $attachments = get_posts( array(
		                    'post_type' => 'attachment',
		                    'posts_per_page' => 10,
		                    'post_status' => null
	                    ) );
                    }


                    foreach ( $attachments as $attachment ) {
                      //  if( $user->ID != $attachment->post_author) continue;
	                    ?>
                        <div class="last-files-tr bg-white l-shadow d-flex justify-content-around">
							<span><img class="file-type-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/<?php
								if (strpos( get_post_mime_type($attachment->ID), 'video')!== false) echo 'mp4.svg';
								elseif (strpos( get_post_mime_type($attachment->ID), 'audio')!== false) echo 'mp3.svg';
								elseif (strpos( get_post_mime_type($attachment->ID), 'zip')!== false) echo 'zip.svg';
								elseif (strpos( get_post_mime_type($attachment->ID), 'rar')!== false) echo 'zip.svg';
                                elseif (strpos( get_post_mime_type($attachment->ID), 'pdf')!== false) echo 'pdf.svg';
                                elseif (strpos( get_post_mime_type($attachment->ID), 'txt')!== false) echo 'txt.svg';
                                elseif (strpos( get_post_mime_type($attachment->ID), 'doc')!== false) echo 'docx.svg';
                                elseif (strpos( get_post_mime_type($attachment->ID), 'image')!== false) echo 'png.svg';
                                else echo 'file.svg';?>"></span>
							<span class="file-title"><a href="<?php echo(get_permalink($attachment->ID));?>"><?php echo $attachment->post_title?></a></span>
							<span class="file-author"><?php $user = get_user_by('id', $attachment->post_author); echo $user->nickname;?></span>
							<span class="file-date"><?php echo $attachment->post_date?></span>
							<span class="file-size"><?php echo round(filesize( get_attached_file( $attachment->ID ) )/1024/1024,2);?> MB</span>
							<div class="dropdown d-inline-block">
								<a class="op-menu" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</a>
	                    <?php if(($userRole == 'administrator' || $user->ID == $attachment->post_author)) {?>
                            <div class="dropdown-menu text-right l-shadow user-drop" aria-labelledby="dropdown08">
									<a class="dropdown-item" href="<?php echo get_home_url().'/wp-admin/post.php?post='.$attachment->ID.'&action=edit' ?>">
                                <span class="icon">
                                    <svg
	                                    xmlns="http://www.w3.org/2000/svg"
	                                    xmlns:xlink="http://www.w3.org/1999/xlink"
	                                    width="7px" height="18px">
<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
      d="M6.125,3.666 L0.875,3.666 C0.352,3.666 -0.000,3.440 -0.000,3.103 L-0.000,1.694 C-0.000,0.673 1.112,0.003 2.188,0.003 L4.812,0.003 C5.888,0.003 7.000,0.673 7.000,1.694 L7.000,3.103 C7.000,3.440 6.648,3.666 6.125,3.666 ZM6.417,1.694 C6.417,1.034 5.584,0.566 4.812,0.566 L2.188,0.566 C1.416,0.566 0.583,1.034 0.583,1.694 L0.583,3.052 C0.633,3.074 0.739,3.103 0.875,3.103 L6.125,3.103 C6.261,3.103 6.367,3.074 6.417,3.052 L6.417,1.694 ZM2.333,12.684 L2.333,4.794 C2.333,4.638 2.464,4.512 2.625,4.512 C2.786,4.512 2.917,4.638 2.917,4.794 L2.917,12.684 C2.917,12.840 2.786,12.966 2.625,12.966 C2.464,12.966 2.333,12.840 2.333,12.684 ZM4.083,12.684 L4.083,4.794 C4.083,4.638 4.214,4.512 4.375,4.512 C4.536,4.512 4.667,4.638 4.667,4.794 L4.667,12.684 C4.667,12.840 4.536,12.966 4.375,12.966 C4.214,12.966 4.083,12.840 4.083,12.684 ZM0.875,4.512 C1.036,4.512 1.167,4.638 1.167,4.794 L1.167,13.533 L2.541,16.447 C2.587,16.480 2.628,16.523 2.648,16.580 C2.777,16.947 2.924,17.184 3.107,17.313 C3.303,17.375 3.706,17.393 3.854,17.333 C3.909,17.298 4.085,17.082 4.220,16.877 L4.270,16.768 C4.297,16.701 4.323,16.628 4.348,16.546 C4.362,16.499 4.391,16.462 4.425,16.429 L5.833,13.341 L5.833,4.794 C5.833,4.638 5.964,4.512 6.125,4.512 C6.286,4.512 6.417,4.638 6.417,4.794 L6.417,13.459 L4.819,16.956 C4.546,17.645 4.104,17.997 3.500,17.997 C3.215,17.997 2.987,17.915 2.802,17.794 C2.771,17.780 2.736,17.767 2.711,17.752 C2.586,17.675 2.424,17.468 2.310,17.308 L2.285,17.265 L0.583,13.656 L0.583,4.794 C0.583,4.638 0.714,4.512 0.875,4.512 Z"/>
</svg>
                                </span>
										تعديل
									</a>
									<a class="dropdown-item" href="<?php echo get_delete_post_link($attachment->ID) ?>">
                                <span class="icon">
                                  <svg
	                                  xmlns="http://www.w3.org/2000/svg"
	                                  xmlns:xlink="http://www.w3.org/1999/xlink"
	                                  width="13px" height="18px">
<path fill-rule="evenodd"  fill="rgb(74, 74, 74)"
      d="M12.717,2.812 L11.869,2.812 L11.869,16.810 C11.869,17.466 11.333,18.000 10.674,18.000 L2.326,18.000 C1.667,18.000 1.130,17.466 1.130,16.810 L1.130,2.812 L0.283,2.812 C0.126,2.812 -0.000,2.686 -0.000,2.531 C-0.000,2.376 0.126,2.250 0.283,2.250 L4.239,2.250 L4.239,1.190 C4.239,0.534 4.776,-0.000 5.435,-0.000 L7.565,-0.000 C8.224,-0.000 8.761,0.534 8.761,1.190 L8.761,2.250 L12.717,2.250 C12.874,2.250 13.000,2.376 13.000,2.531 C13.000,2.686 12.874,2.812 12.717,2.812 ZM8.196,1.190 C8.196,0.844 7.913,0.562 7.565,0.562 L5.435,0.562 C5.087,0.562 4.804,0.844 4.804,1.190 L4.804,2.250 L8.196,2.250 L8.196,1.190 ZM11.304,2.812 L1.696,2.812 L1.696,16.810 C1.696,17.156 1.978,17.437 2.326,17.437 L10.674,17.437 C11.021,17.437 11.304,17.156 11.304,16.810 L11.304,2.812 ZM8.196,15.469 C8.039,15.469 7.913,15.343 7.913,15.187 L7.913,5.625 C7.913,5.470 8.039,5.344 8.196,5.344 C8.352,5.344 8.478,5.470 8.478,5.625 L8.478,15.187 C8.478,15.343 8.352,15.469 8.196,15.469 ZM4.804,15.469 C4.648,15.469 4.522,15.343 4.522,15.187 L4.522,5.625 C4.522,5.470 4.648,5.344 4.804,5.344 C4.960,5.344 5.087,5.470 5.087,5.625 L5.087,15.187 C5.087,15.343 4.960,15.469 4.804,15.469 Z"/>
</svg>
                                </span>
										حذف
									</a>
								</div>
                        <?php }?>
							</div>
						</div>
                        <?php
                    }
                    ?>
				</div>
			</div>

            <div class="text-center  mt-5 ">
                <a class="text-white p-3 browse-button" href="<?php echo get_home_url().'/folders'?>">تصفح المجلدات</a>
            </div>
		</div>
	</div>

<?php get_footer(); ?>