<?php get_header();
global  $userRole;
global  $user;

if ( have_posts() ) : while ( have_posts() ) : the_post();

    if($userRole != 'emp-private' || $user->ID == $post->post_author){
	    $allow = true;
    } else $allow = false;

?>

<?php
	if ((strpos( get_post_mime_type($post->ID), 'video') !== false || strpos( get_post_mime_type($post->ID), 'audio')!== false ) && $allow) {
    ?>
        <script type="text/javascript">
            FWDUVPUtils.onReady(function(){
                new FWDUVPlayer({
                    //main settings
                    useYoutube:"yes",
                    useVimeo:"yes",
                    instanceName:"player1",
                    parentId:"myDiv",
                    playlistsId:"playlists",
                    mainFolderPath:"<?php echo get_stylesheet_directory_uri() ?>/content",
                    skinPath:"minimal_skin_dark",
                    displayType:"responsive",
                    fillEntireVideoScreen:"no",
                    useHEXColorsForSkin:"no",
                    normalHEXButtonsColor:"#FF0000",
                    selectedHEXButtonsColor:"#000000",
                    useDeepLinking:"yes",
                    rightClickContextMenu:"default",
                    addKeyboardSupport:"yes",
                    showPreloader:"yes",
                    preloaderColors:["#999999", "#FFFFFF"],
                    autoScale:"yes",
                    showButtonsToolTip:"yes",
                    stopVideoWhenPlayComplete:"no",
                    autoPlay:"no",
                    loop:"no",
                    shuffle:"no",
                    maxWidth:1110,
                    maxHeight:650,
                    buttonsToolTipHideDelay:1.5,
                    volume:.8,
                    backgroundColor:"#000000",
                    videoBackgroundColor:"#000000",
                    posterBackgroundColor:"#0099FF",
                    buttonsToolTipFontColor:"#5a5a5a",
                    //logo settings
                    showLogo:"no",
                    hideLogoWithController:"yes",
                    logoPosition:"topRight",
                    logoMargins:5,
                    //playlists/categories settings
                    showPlaylistsSearchInput:"no",
                    showPlaylistsButtonAndPlaylists:"no",
                    usePlaylistsSelectBox:"no",
                    showPlaylistsByDefault:"no",
                    thumbnailSelectedType:"opacity",
                    startAtPlaylist:0,
                    buttonsMargins:0,
                    thumbnailMaxWidth:350,
                    thumbnailMaxHeight:350,
                    horizontalSpaceBetweenThumbnails:40,
                    verticalSpaceBetweenThumbnails:40,
                    inputBackgroundColor:"#333333",
                    inputColor:"#999999",
                    //playlist settings
                    showPlaylistButtonAndPlaylist:"no",
                    playlistPosition:"right",
                    showPlaylistByDefault:"no",
                    showPlaylistName:"yes",
                    showSearchInput:"yes",
                    showLoopButton:"yes",
                    showShuffleButton:"yes",
                    showNextAndPrevButtons:"yes",
                    forceDisableDownloadButtonForFolder:"yes",
                    addMouseWheelSupport:"yes",
                    startAtRandomVideo:"no",
                    folderVideoLabel:"VIDEO ",
                    playlistRightWidth:310,
                    playlistBottomHeight:599,
                    startAtVideo:0,
                    maxPlaylistItems:50,
                    thumbnailWidth:70,
                    thumbnailHeight:70,
                    spaceBetweenControllerAndPlaylist:2,
                    spaceBetweenThumbnails:2,
                    scrollbarOffestWidth:8,
                    scollbarSpeedSensitivity:.5,
                    mainSelectorBackgroundSelectedColor:"#FFFFFF",
                    mainSelectorTextNormalColor:"#FFFFFF",
                    mainSelectorTextSelectedColor:"#000000",
                    mainButtonBackgroundNormalColor:"#212021",
                    mainButtonBackgroundSelectedColor:"#FFFFFF",
                    mainButtonTextNormalColor:"#FFFFFF",
                    mainButtonTextSelectedColor:"#000000",
                    playlistBackgroundColor:"#000000",
                    playlistNameColor:"#FFFFFF",
                    thumbnailNormalBackgroundColor:"#1b1b1b",
                    thumbnailHoverBackgroundColor:"#313131",
                    thumbnailDisabledBackgroundColor:"#272727",
                    searchInputBackgroundColor:"#000000",
                    searchInputColor:"#999999",
                    youtubeAndFolderVideoTitleColor:"#FFFFFF",
                    youtubeOwnerColor:"#888888",
                    youtubeDescriptionColor:"#888888",
                    //controller settings
                    showController:"yes",
                    showControllerWhenVideoIsStopped:"yes",
                    showNextAndPrevButtonsInController:"no",
                    showPlaybackRateButton:"yes",
                    showVolumeButton:"yes",
                    showTime:"yes",
                    showQualityButton:"yes",
                    showInfoButton:"yes",
                    showDownloadButton:"no",
                    showFacebookButton:"no",
                    showEmbedButton:"no",
                    showFullScreenButton:"yes",
                    disableVideoScrubber:"no",
                    showDefaultControllerForVimeo:"no",
                    repeatBackground:"yes",
                    controllerHeight:37,
                    controllerHideDelay:3,
                    startSpaceBetweenButtons:7,
                    spaceBetweenButtons:8,
                    scrubbersOffsetWidth:2,
                    mainScrubberOffestTop:14,
                    timeOffsetLeftWidth:5,
                    timeOffsetRightWidth:3,
                    timeOffsetTop:0,
                    volumeScrubberHeight:80,
                    volumeScrubberOfsetHeight:12,
                    timeColor:"#888888",
                    youtubeQualityButtonNormalColor:"#888888",
                    youtubeQualityButtonSelectedColor:"#FFFFFF",
                    //subtitle
                    subtitlesOffLabel:"Subtitle off",
                    //popup add windows
                    showPopupAdsCloseButton:"yes",
                    //embed window and info window
                    embedAndInfoWindowCloseButtonMargins:0,
                    borderColor:"#333333",
                    mainLabelsColor:"#FFFFFF",
                    secondaryLabelsColor:"#a1a1a1",
                    shareAndEmbedTextColor:"#5a5a5a",
                    inputBackgroundColor:"#000000",
                    inputColor:"#FFFFFF",
                    //ads
                    openNewPageAtTheEndOfTheAds:"no",
                    playAdsOnlyOnce:"no",
                    adsButtonsPosition:"left",
                    skipToVideoText:"You can skip to video in: ",
                    skipToVideoButtonText:"Skip Ad",
                    adsTextNormalColor:"#888888",
                    adsTextSelectedColor:"#FFFFFF",
                    adsBorderNormalColor:"#666666",
                    adsBorderSelectedColor:"#FFFFFF"
                });
            });
        </script>
    <?php }?>


	<div class="container">
        <?php if($allow ){?>
		<nav class="mfa-breadcrumb" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo get_home_url()?>">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_home_url().'/folders'?>">المجلدات</a></li>
                <?php
				//$terms = get_terms(['taxonomy' => 'media_tag','hide_empty' => false, 'parent' => 0]);
				$terms = wp_get_post_terms( $post->ID, 'folder', array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all') );
				foreach ($terms as $term){
					?>
                    <li class="breadcrumb-item"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name;?></a></li>
					<?php
				}
				?>
            </ol>
		</nav>

		<div class="row">
			<?php
			if (strpos( get_post_mime_type($post->ID), 'video') !== false || strpos( get_post_mime_type($post->ID), 'audio')!== false) {
				?>

                <div class="col-12 mt-5">
                    <div id="myDiv"></div>

                    <!--  Playlists -->
                    <ul id="playlists" style="display:none;">
                        <li data-source="playlist1" data-playlist-name="قائمة الفيديوهات" data-thumbnail-path="content/thumbnails/large1.jpg">
                        </li>
                    </ul>

                    <!--  HTML playlist -->
                    <ul id="playlist1" style="display:none;">
                        <li data-thumb-source="content/thumbnails/small-rap.jpg" data-video-source="<?php echo wp_get_attachment_url($post->ID) ?>" data-poster-source="<?php echo wp_get_attachment_image($post->ID) ?>" data-start-at-time="00:00:10" data-stop-at-time="00:00:40">
                            <div data-video-short-description="">
                                <div>
                                    <p class="minimalDarkThumbnailTitle">START / STOP AT TIME EXAMPLE</p>
                                    <p class="minimalDarkThumbnailDesc">UVP can be set to start or / and stop at a specified time.</p>
                                </div>
                            </div>
                            <div data-video-long-description="">
                                <div>
                                    <p class="minimalDarkVideoTitleDesc">MP3 STICKY PLAYER</p>
                                    <p class="minimalDarkVideoMainDesc">Each video can contain a detailed description, the description can be formatted with CSS as you like. The description window and description button can be disabled individually for each video or globally for all videos.</p>
                                    <p class="minimalDarkLink">For more information about this please follow <a href="http://www.webdesign-flash.ro/p/msp/" target="_blank">this link</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

			<?php }?>

			<?php
			if (strpos( get_post_mime_type($post->ID), 'image') !== false) {
				?>

                <div class="col-12 mt-5 text-center">
                    <img src="<?php echo wp_get_attachment_url($post->ID) ?>" style="max-width: 100% ; max-height: 600px">
                </div>

			<?php }?>


			<?php
			if (strpos( get_post_mime_type($post->ID), 'pdf') !== false ) {
				?>

                <div class="col-12 mt-5">
                    <iframe
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/pdf/web/viewer.html?file=<?php echo wp_get_attachment_url($post->ID)?>"
                            width="100%"
                            height="600px"
                            style="border: none;"> </iframe>
                </div>

			<?php }?>

			<div class="col-md-8 mt-5">
				<div class="l-shadow bg-white pt-4 pr-4 pl-3 pb-4">
					<h1 class="font-24 medium-font"><?php echo the_title()?></h1>
					<p class="mt-4">
						<?php the_excerpt(); ?>
						<?php echo $post->post_content ?>
					</p>
					<ul class="file-tags list-unstyled p-0 clearfix font-14">
						<?php
						//$terms = get_terms(['taxonomy' => 'media_tag','hide_empty' => false, 'parent' => 0]);
						$terms = wp_get_post_terms( $post->ID, 'media_tag', array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all') );
						foreach ($terms as $term){
						    ?>
                            <li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name;?></a></li>
							<?php

						}
						?>
					</ul>

                </div>
			</div>
			<div class="col-md-4 mt-5">
				<div class=" l-shadow bg-white pt-4 pr-4 pl-3 operation">
					<ul class="list-unstyled p-0">
						<li class="pb-2"><span class="green-text regular-font">نوع الملف :</span> <?php echo get_post_mime_type($post->ID);?></li>
						<li class="pb-2"><span class="green-text regular-font">تم الرفع في :</span> <?php echo $post->post_date ?></li>
						<li class="pb-2"><span class="green-text regular-font">حجم الملف :</span> <?php echo round(filesize( get_attached_file( $post->ID ) )/1024/1024,2);?> MB</li>
						<?php
						if (strpos( get_post_mime_type($post->ID), 'video') !== false || strpos( get_post_mime_type($post->ID), 'audio')!== false) {
							?>
                            <li class="pb-2"><span class="green-text regular-font">المدة :</span> <?php $video_meta = get_post_meta( $post->ID, '_wp_attachment_metadata', true ); echo $video_meta['length_formatted']; ?></li>
						<?php }?>
					</ul>
                    <?php
                    if(($userRole == 'administrator' || $user->ID == $post->post_author)) {
	                    ?>
                        <div class="clearfix">
                            <a href="<?php echo get_home_url() . '/wp-admin/post.php?post=' . $post->ID . '&action=edit' ?>"
                               class="edit float-right text-center text-white">تعديل</a>
                            <a href="<?php echo get_delete_post_link( $post->ID ) ?>"
                               class="delete float-left text-center text-white">حذف</a>
                        </div>
	                    <?php
                    }
                    ?>
					<a href="<?php echo wp_get_attachment_url($post->ID) ?>" class="download text-center text-white">تحميل الملف</a>
				</div>

			</div>
		</div>
        <?php } else {?>
            <div class="alert alert-danger mt-5 font-24"> لايسمح لك بتصفح الملف </div>
        <?php }?>
	</div>

<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>