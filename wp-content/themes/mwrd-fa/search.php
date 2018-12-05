<?php
/*
 Template Name: Search Page
 */

get_header();

?>
	<div class="container">
		<nav class="mfa-breadcrumb" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo get_home_url()?>">الرئيسية</a></li>
				<li class="breadcrumb-item active"><a href="#">البحث</a></li>
			</ol>
		</nav>
		<div class="row folders">
			<?php
			if(isset($_GET['s'])){
				get_folder_by_search($_GET['s']);
			}

			global $query_string;

			wp_parse_str( $query_string, $search_query );
			$search = new WP_Query( $search_query );
			global $wp_query;
			$total_results = $wp_query->found_posts;
			?>
		</div>
        <div class="last-files-block">
            <h2 class="font-24 green-text regular-font"><?php echo single_cat_title(); ?></h2>

            <div class="last-files-table-container">
                <div class="last-files-table">
                    <div class="last-files-tr last-files-th d-flex justify-content-around font-14 medium-font">
                        <span class="file-title">اسم الملف</span>
                        <span class="file-author">المالك</span>
                        <span class="file-date">التاريخ</span>
                        <span class="file-size">حجم الملف</span>
                    </div>
	                <?php while ( have_posts() ) : the_post(); ?>
                        <div class="last-files-tr bg-white l-shadow d-flex justify-content-around">
							<span><img class="file-type-icon" src="<?php echo get_template_directory_uri() ?>/assets/images/<?php
								if (strpos( get_post_mime_type($post->ID), 'video')!== false) echo 'mp4.svg';
                                elseif (strpos( get_post_mime_type($post->ID), 'audio')!== false) echo 'mp3.svg';
                                elseif (strpos( get_post_mime_type($post->ID), 'zip')!== false) echo 'zip.svg';
                                elseif (strpos( get_post_mime_type($post->ID), 'rar')!== false) echo 'zip.svg';
                                elseif (strpos( get_post_mime_type($post->ID), 'pdf')!== false) echo 'pdf.svg';
                                elseif (strpos( get_post_mime_type($post->ID), 'txt')!== false) echo 'txt.svg';
                                elseif (strpos( get_post_mime_type($post->ID), 'doc')!== false) echo 'docx.svg';
                                elseif (strpos( get_post_mime_type($post->ID), 'image')!== false) echo 'png.svg';
								else echo 'file.svg';?>"></span>
                            <span class="file-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                            <span class="file-author"><?php $user = get_user_by('id', $post->post_author); echo $user->nickname;?></span>
                            <span class="file-date"><?php echo $post->post_date?></span>
                            <span class="file-size"><?php echo round(filesize( get_attached_file( $post->ID ) )/1024/1024,2);?> MB</span>
                            <div class="dropdown d-inline-block">
                                <a class="op-menu" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <div class="dropdown-menu text-right l-shadow user-drop" aria-labelledby="dropdown08">
                                    <a class="dropdown-item" href="<?php echo get_home_url().'/wp-admin/post.php?post='.$post->ID.'&action=edit' ?>">
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
                                    <a class="dropdown-item" href="<?php echo get_delete_post_link($post->ID) ?>">
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
                            </div>
                        </div>
	                <?php endwhile; ?>
                </div>
            </div>
        </div>


    </div>

<?php get_footer();
