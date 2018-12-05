<?php
/**
 * default search form
 */
?>
<form class="form-inline m-auto" role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="form-control search" placeholder="<?php echo esc_attr( 'بحث…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
		<svg
			xmlns="http://www.w3.org/2000/svg"
			xmlns:xlink="http://www.w3.org/1999/xlink"
			width="19px" height="19px">
			<path fill-rule="evenodd"  fill="rgb(128, 128, 128)"
			      d="M18.803,16.845 L12.301,11.344 C13.777,9.647 13.647,8.532 13.647,6.822 C13.647,3.058 10.585,-0.000 6.823,-0.000 C3.059,-0.000 -0.000,3.062 -0.000,6.822 C-0.000,10.583 3.062,13.644 6.823,13.644 C8.534,13.644 9.650,13.773 11.347,12.297 L16.849,18.799 C16.980,18.930 17.156,19.000 17.326,19.000 C17.497,19.000 18.673,18.935 18.803,18.799 C19.064,18.538 19.064,17.106 18.803,16.845 ZM1.988,6.995 C1.988,4.234 4.235,1.991 6.993,1.991 C9.754,1.991 11.998,4.237 11.998,6.995 C11.998,9.753 9.754,12.002 6.993,12.002 C4.235,12.002 1.988,9.756 1.988,6.995 Z"/>
		</svg>
</form>
