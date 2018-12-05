<?php
/*
Template Name: Archives
*/
get_header();

if(isset($_GET['file_type'])){
    $file_type = $_GET['file_type'];
} else $file_type = '';
?>
<?php

/* List folders */
$terms1 = get_terms( array(
	'taxonomy' => 'folder',
	'hide_empty' => false,
	'parent' => 0
) );


/* List tags */
$terms = get_terms( array(
	'taxonomy' => 'media_tag',
	'hide_empty' => false
) );

//print_r($terms );

?>
	<div class="container">
		<nav class="mfa-breadcrumb" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo get_home_url()?>">الرئيسية</a></li>
				<li class="breadcrumb-item active"><a href="#">المجلدات</a></li>
			</ol>
		</nav>
		<div class="row folders">
			<?php


			foreach ( $terms1 as $child ) {
				$term = get_term_by( 'id', $child );
				?>
				<div class="col-sm-4 col-lg-2">
					<a class="l-shadow bg-white statics-block" href="<?php echo get_term_link( $child, $taxonomy_name );if(isset($_GET['file_type'])) echo '?file_type='.$file_type?>">
						<div class="icon">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								width="64px" height="58px">
								<path fill-rule="evenodd"  fill="rgb(63, 185, 128)"
								      d="M58.617,16.204 L58.617,15.546 C58.617,12.258 55.925,9.567 52.635,9.567 L37.682,9.567 C35.708,9.567 34.093,7.654 34.093,5.680 L34.093,5.979 C34.093,2.691 31.402,-0.000 28.112,-0.000 L5.981,-0.000 C2.692,-0.000 0.000,2.691 0.000,5.979 L0.000,52.021 C0.000,55.309 2.692,58.000 5.981,58.000 L5.981,58.000 L58.019,58.000 C61.308,58.000 64.000,55.309 64.000,52.021 L64.000,22.124 C64.000,19.014 61.607,16.503 58.617,16.204 ZM5.981,55.608 C4.008,55.608 2.393,53.994 2.393,52.021 L2.393,5.979 C2.393,4.006 4.008,2.392 5.981,2.392 L28.112,2.392 C30.086,2.392 31.701,4.006 31.701,5.979 C31.701,9.268 34.393,11.959 37.682,11.959 L52.635,11.959 C54.609,11.959 56.224,13.573 56.224,15.546 L56.224,16.144 L15.551,16.144 C12.262,16.144 9.570,18.835 9.570,22.124 L9.570,52.021 C9.570,53.994 7.955,55.608 5.981,55.608 L5.981,55.608 ZM61.607,52.021 C61.607,53.994 59.992,55.608 58.019,55.608 L10.766,55.608 C11.544,54.592 11.963,53.336 11.963,52.021 L11.963,22.124 C11.963,20.150 13.578,18.536 15.551,18.536 L58.019,18.536 C59.992,18.536 61.607,20.150 61.607,22.124 L61.607,52.021 Z"/>
							</svg>
						</div>
						<div class="type regular-font mt-3"><?php echo $child->name ?></div>
					</a>
				</div>
				<?php
			}

			?>
		</div>
	</div>

<?php get_footer();