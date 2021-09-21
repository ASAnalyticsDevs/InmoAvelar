<?php
	
	if ( ! defined( 'ABSPATH' ) ) {
		die( 'Please do not load this file directly!' );
	}
	
	function wow_typicons_icons() {
		
		$typicons = array (
		'css_prefix_text' => 'typcn ',
		'glyphs' => 
		array (
			0 => array ( 'css' => 'typcn-adjust-brightness' ),
			1 => array ( 'css' => 'typcn-adjust-contrast' ),
			2 => array ( 'css' => 'typcn-anchor-outline' ),
			3 => array ( 'css' => 'typcn-anchor' ),
			4 => array ( 'css' => 'typcn-archive' ),
			5 => array ( 'css' => 'typcn-arrow-back-outline' ),
			6 => array ( 'css' => 'typcn-arrow-back' ),
			7 => array ( 'css' => 'typcn-arrow-down-outline' ),
			8 => array ( 'css' => 'typcn-arrow-down-thick' ),
			9 => array ( 'css' => 'typcn-arrow-down' ),
			10 => array ( 'css' => 'typcn-arrow-forward-outline' ),
			11 => array ( 'css' => 'typcn-arrow-forward' ),
			12 => array ( 'css' => 'typcn-arrow-left-outline' ),
			13 => array ( 'css' => 'typcn-arrow-left-thick' ),
			14 => array ( 'css' => 'typcn-arrow-left' ),
			15 => array ( 'css' => 'typcn-arrow-loop-outline' ),
			16 => array ( 'css' => 'typcn-arrow-loop' ),
			17 => array ( 'css' => 'typcn-arrow-maximise-outline' ),
			18 => array ( 'css' => 'typcn-arrow-maximise' ),
			19 => array ( 'css' => 'typcn-arrow-minimise-outline' ),
			20 => array ( 'css' => 'typcn-arrow-minimise' ),
			21 => array ( 'css' => 'typcn-arrow-move-outline' ),
			22 => array ( 'css' => 'typcn-arrow-move' ),
			23 => array ( 'css' => 'typcn-arrow-repeat-outline' ),
			24 => array ( 'css' => 'typcn-arrow-repeat' ),
			25 => array ( 'css' => 'typcn-arrow-right-outline' ),
			26 => array ( 'css' => 'typcn-arrow-right-thick' ),
			27 => array ( 'css' => 'typcn-arrow-right' ),
			28 => array ( 'css' => 'typcn-arrow-shuffle' ),
			29 => array ( 'css' => 'typcn-arrow-sorted-down' ),
			30 => array ( 'css' => 'typcn-arrow-sorted-up' ),
			31 => array ( 'css' => 'typcn-arrow-sync-outline' ),
			32 => array ( 'css' => 'typcn-arrow-sync' ),
			33 => array ( 'css' => 'typcn-arrow-unsorted' ),
			34 => array ( 'css' => 'typcn-arrow-up-outline' ),
			35 => array ( 'css' => 'typcn-arrow-up-thick' ),
			36 => array ( 'css' => 'typcn-arrow-up' ),
			37 => array ( 'css' => 'typcn-at' ),
			38 => array ( 'css' => 'typcn-attachment-outline' ),
			39 => array ( 'css' => 'typcn-attachment' ),
			40 => array ( 'css' => 'typcn-backspace-outline' ),
			41 => array ( 'css' => 'typcn-backspace' ),
			42 => array ( 'css' => 'typcn-battery-charge' ),
			43 => array ( 'css' => 'typcn-battery-full' ),
			44 => array ( 'css' => 'typcn-battery-high' ),
			45 => array ( 'css' => 'typcn-battery-low' ),
			46 => array ( 'css' => 'typcn-battery-mid' ),
			47 => array ( 'css' => 'typcn-beaker' ),
			48 => array ( 'css' => 'typcn-beer' ),
			49 => array ( 'css' => 'typcn-bell' ),
			50 => array ( 'css' => 'typcn-book' ),
			51 => array ( 'css' => 'typcn-bookmark' ),
			52 => array ( 'css' => 'typcn-briefcase' ),
			53 => array ( 'css' => 'typcn-brush' ),
			54 => array ( 'css' => 'typcn-business-card' ),
			55 => array ( 'css' => 'typcn-calculator' ),
			56 => array ( 'css' => 'typcn-calendar-outline' ),
			57 => array ( 'css' => 'typcn-calendar' ),
			58 => array ( 'css' => 'typcn-camera-outline' ),
			59 => array ( 'css' => 'typcn-camera' ),
			60 => array ( 'css' => 'typcn-cancel-outline' ),
			61 => array ( 'css' => 'typcn-cancel' ),
			62 => array ( 'css' => 'typcn-chart-area-outline' ),
			63 => array ( 'css' => 'typcn-chart-area' ),
			64 => array ( 'css' => 'typcn-chart-bar-outline' ),
			65 => array ( 'css' => 'typcn-chart-bar' ),
			66 => array ( 'css' => 'typcn-chart-line-outline' ),
			67 => array ( 'css' => 'typcn-chart-line' ),
			68 => array ( 'css' => 'typcn-chart-pie-outline' ),
			69 => array ( 'css' => 'typcn-chart-pie' ),
			70 => array ( 'css' => 'typcn-chevron-left-outline' ),
			71 => array ( 'css' => 'typcn-chevron-left' ),
			72 => array ( 'css' => 'typcn-chevron-right-outline' ),
			73 => array ( 'css' => 'typcn-chevron-right' ),
			74 => array ( 'css' => 'typcn-clipboard' ),
			75 => array ( 'css' => 'typcn-cloud-storage' ),
			76 => array ( 'css' => 'typcn-cloud-storage-outline' ),
			77 => array ( 'css' => 'typcn-code-outline' ),
			78 => array ( 'css' => 'typcn-code' ),
			79 => array ( 'css' => 'typcn-coffee' ),
			80 => array ( 'css' => 'typcn-cog-outline' ),
			81 => array ( 'css' => 'typcn-cog' ),
			82 => array ( 'css' => 'typcn-compass' ),
			83 => array ( 'css' => 'typcn-contacts' ),
			84 => array ( 'css' => 'typcn-credit-card' ),
			85 => array ( 'css' => 'typcn-css3' ),
			86 => array ( 'css' => 'typcn-database' ),
			87 => array ( 'css' => 'typcn-delete-outline' ),
			88 => array ( 'css' => 'typcn-delete' ),
			89 => array ( 'css' => 'typcn-device-desktop' ),
			90 => array ( 'css' => 'typcn-device-laptop' ),
			91 => array ( 'css' => 'typcn-device-phone' ),
			92 => array ( 'css' => 'typcn-device-tablet' ),
			93 => array ( 'css' => 'typcn-directions' ),
			94 => array ( 'css' => 'typcn-divide-outline' ),
			95 => array ( 'css' => 'typcn-divide' ),
			96 => array ( 'css' => 'typcn-document-add' ),
			97 => array ( 'css' => 'typcn-document-delete' ),
			98 => array ( 'css' => 'typcn-document-text' ),
			99 => array ( 'css' => 'typcn-document' ),
			100 => array ( 'css' => 'typcn-download-outline' ),
			101 => array ( 'css' => 'typcn-download' ),
			102 => array ( 'css' => 'typcn-dropbox' ),
			103 => array ( 'css' => 'typcn-edit' ),
			104 => array ( 'css' => 'typcn-eject-outline' ),
			105 => array ( 'css' => 'typcn-eject' ),
			106 => array ( 'css' => 'typcn-equals-outline' ),
			107 => array ( 'css' => 'typcn-equals' ),
			108 => array ( 'css' => 'typcn-export-outline' ),
			109 => array ( 'css' => 'typcn-export' ),
			110 => array ( 'css' => 'typcn-eye-outline' ),
			111 => array ( 'css' => 'typcn-eye' ),
			112 => array ( 'css' => 'typcn-feather' ),
			113 => array ( 'css' => 'typcn-film' ),
			114 => array ( 'css' => 'typcn-filter' ),
			115 => array ( 'css' => 'typcn-flag-outline' ),
			116 => array ( 'css' => 'typcn-flag' ),
			117 => array ( 'css' => 'typcn-flash-outline' ),
			118 => array ( 'css' => 'typcn-flash' ),
			119 => array ( 'css' => 'typcn-flow-children' ),
			120 => array ( 'css' => 'typcn-flow-merge' ),
			121 => array ( 'css' => 'typcn-flow-parallel' ),
			122 => array ( 'css' => 'typcn-flow-switch' ),
			123 => array ( 'css' => 'typcn-folder-add' ),
			124 => array ( 'css' => 'typcn-folder-delete' ),
			125 => array ( 'css' => 'typcn-folder-open' ),
			126 => array ( 'css' => 'typcn-folder' ),
			127 => array ( 'css' => 'typcn-gift' ),
			128 => array ( 'css' => 'typcn-globe-outline' ),
			129 => array ( 'css' => 'typcn-globe' ),
			130 => array ( 'css' => 'typcn-group-outline' ),
			131 => array ( 'css' => 'typcn-group' ),
			132 => array ( 'css' => 'typcn-headphones' ),
			133 => array ( 'css' => 'typcn-heart-full-outline' ),
			134 => array ( 'css' => 'typcn-heart-half-outline' ),
			135 => array ( 'css' => 'typcn-heart-outline' ),
			136 => array ( 'css' => 'typcn-heart' ),
			137 => array ( 'css' => 'typcn-home-outline' ),
			138 => array ( 'css' => 'typcn-home' ),
			139 => array ( 'css' => 'typcn-html5' ),
			140 => array ( 'css' => 'typcn-image-outline' ),
			141 => array ( 'css' => 'typcn-image' ),
			142 => array ( 'css' => 'typcn-infinity-outline' ),
			143 => array ( 'css' => 'typcn-infinity' ),
			144 => array ( 'css' => 'typcn-info-large-outline' ),
			145 => array ( 'css' => 'typcn-info-large' ),
			146 => array ( 'css' => 'typcn-info-outline' ),
			147 => array ( 'css' => 'typcn-info' ),
			148 => array ( 'css' => 'typcn-input-checked-outline' ),
			149 => array ( 'css' => 'typcn-input-checked' ),
			150 => array ( 'css' => 'typcn-key-outline' ),
			151 => array ( 'css' => 'typcn-key' ),
			152 => array ( 'css' => 'typcn-keyboard' ),
			153 => array ( 'css' => 'typcn-leaf' ),
			154 => array ( 'css' => 'typcn-lightbulb' ),
			155 => array ( 'css' => 'typcn-link-outline' ),
			156 => array ( 'css' => 'typcn-link' ),
			157 => array ( 'css' => 'typcn-location-arrow-outline' ),
			158 => array ( 'css' => 'typcn-location-arrow' ),
			159 => array ( 'css' => 'typcn-location-outline' ),
			160 => array ( 'css' => 'typcn-location' ),
			161 => array ( 'css' => 'typcn-lock-closed-outline' ),
			162 => array ( 'css' => 'typcn-lock-closed' ),
			163 => array ( 'css' => 'typcn-lock-open-outline' ),
			164 => array ( 'css' => 'typcn-lock-open' ),
			165 => array ( 'css' => 'typcn-mail' ),
			166 => array ( 'css' => 'typcn-map' ),
			167 => array ( 'css' => 'typcn-media-eject-outline' ),
			168 => array ( 'css' => 'typcn-media-eject' ),
			169 => array ( 'css' => 'typcn-media-fast-forward-outline' ),
			170 => array ( 'css' => 'typcn-media-fast-forward' ),
			171 => array ( 'css' => 'typcn-media-pause-outline' ),
			172 => array ( 'css' => 'typcn-media-pause' ),
			173 => array ( 'css' => 'typcn-media-play-outline' ),
			174 => array ( 'css' => 'typcn-media-play-reverse-outline' ),
			175 => array ( 'css' => 'typcn-media-play-reverse' ),
			176 => array ( 'css' => 'typcn-media-play' ),
			177 => array ( 'css' => 'typcn-media-record-outline' ),
			178 => array ( 'css' => 'typcn-media-record' ),
			179 => array ( 'css' => 'typcn-media-rewind-outline' ),
			180 => array ( 'css' => 'typcn-media-rewind' ),
			181 => array ( 'css' => 'typcn-media-stop-outline' ),
			182 => array ( 'css' => 'typcn-media-stop' ),
			183 => array ( 'css' => 'typcn-message-typing' ),
			184 => array ( 'css' => 'typcn-message' ),
			185 => array ( 'css' => 'typcn-messages' ),
			186 => array ( 'css' => 'typcn-microphone-outline' ),
			187 => array ( 'css' => 'typcn-microphone' ),
			188 => array ( 'css' => 'typcn-minus-outline' ),
			189 => array ( 'css' => 'typcn-minus' ),
			190 => array ( 'css' => 'typcn-mortar-board' ),
			191 => array ( 'css' => 'typcn-news' ),
			192 => array ( 'css' => 'typcn-notes-outline' ),
			193 => array ( 'css' => 'typcn-notes' ),
			194 => array ( 'css' => 'typcn-pen' ),
			195 => array ( 'css' => 'typcn-pencil' ),
			196 => array ( 'css' => 'typcn-phone-outline' ),
			197 => array ( 'css' => 'typcn-phone' ),
			198 => array ( 'css' => 'typcn-pi-outline' ),
			199 => array ( 'css' => 'typcn-pi' ),
			200 => array ( 'css' => 'typcn-pin-outline' ),
			201 => array ( 'css' => 'typcn-pin' ),
			202 => array ( 'css' => 'typcn-pipette' ),
			203 => array ( 'css' => 'typcn-plane-outline' ),
			204 => array ( 'css' => 'typcn-plane' ),
			205 => array ( 'css' => 'typcn-plug' ),
			206 => array ( 'css' => 'typcn-plus-outline' ),
			207 => array ( 'css' => 'typcn-plus' ),
			208 => array ( 'css' => 'typcn-point-of-interest-outline' ),
			209 => array ( 'css' => 'typcn-point-of-interest' ),
			210 => array ( 'css' => 'typcn-power-outline' ),
			211 => array ( 'css' => 'typcn-power' ),
			212 => array ( 'css' => 'typcn-printer' ),
			213 => array ( 'css' => 'typcn-puzzle-outline' ),
			214 => array ( 'css' => 'typcn-puzzle' ),
			215 => array ( 'css' => 'typcn-radar-outline' ),
			216 => array ( 'css' => 'typcn-radar' ),
			217 => array ( 'css' => 'typcn-refresh-outline' ),
			218 => array ( 'css' => 'typcn-refresh' ),
			219 => array ( 'css' => 'typcn-rss-outline' ),
			220 => array ( 'css' => 'typcn-rss' ),
			221 => array ( 'css' => 'typcn-scissors-outline' ),
			222 => array ( 'css' => 'typcn-scissors' ),
			223 => array ( 'css' => 'typcn-shopping-bag' ),
			224 => array ( 'css' => 'typcn-shopping-cart' ),
			225 => array ( 'css' => 'typcn-social-at-circular' ),
			226 => array ( 'css' => 'typcn-social-dribbble-circular' ),
			227 => array ( 'css' => 'typcn-social-dribbble' ),
			228 => array ( 'css' => 'typcn-social-facebook-circular' ),
			229 => array ( 'css' => 'typcn-social-facebook' ),
			230 => array ( 'css' => 'typcn-social-flickr-circular' ),
			231 => array ( 'css' => 'typcn-social-flickr' ),
			232 => array ( 'css' => 'typcn-social-github-circular' ),
			233 => array ( 'css' => 'typcn-social-github' ),
			234 => array ( 'css' => 'typcn-social-google-plus-circular' ),
			235 => array ( 'css' => 'typcn-social-google-plus' ),
			236 => array ( 'css' => 'typcn-social-instagram-circular' ),
			237 => array ( 'css' => 'typcn-social-instagram' ),
			238 => array ( 'css' => 'typcn-social-last-fm-circular' ),
			239 => array ( 'css' => 'typcn-social-last-fm' ),
			240 => array ( 'css' => 'typcn-social-linkedin-circular' ),
			241 => array ( 'css' => 'typcn-social-linkedin' ),
			242 => array ( 'css' => 'typcn-social-pinterest-circular' ),
			243 => array ( 'css' => 'typcn-social-pinterest' ),
			244 => array ( 'css' => 'typcn-social-skype-outline' ),
			245 => array ( 'css' => 'typcn-social-skype' ),
			246 => array ( 'css' => 'typcn-social-tumbler-circular' ),
			247 => array ( 'css' => 'typcn-social-tumbler' ),
			248 => array ( 'css' => 'typcn-social-twitter-circular' ),
			249 => array ( 'css' => 'typcn-social-twitter' ),
			250 => array ( 'css' => 'typcn-social-vimeo-circular' ),
			251 => array ( 'css' => 'typcn-social-vimeo' ),
			252 => array ( 'css' => 'typcn-social-youtube-circular' ),
			253 => array ( 'css' => 'typcn-social-youtube' ),
			254 => array ( 'css' => 'typcn-sort-alphabetically-outline' ),
			255 => array ( 'css' => 'typcn-sort-alphabetically' ),
			256 => array ( 'css' => 'typcn-sort-numerically-outline' ),
			257 => array ( 'css' => 'typcn-sort-numerically' ),
			258 => array ( 'css' => 'typcn-spanner-outline' ),
			259 => array ( 'css' => 'typcn-spanner' ),
			260 => array ( 'css' => 'typcn-spiral' ),
			261 => array ( 'css' => 'typcn-star-full-outline' ),
			262 => array ( 'css' => 'typcn-star-half-outline' ),
			263 => array ( 'css' => 'typcn-star-half' ),
			264 => array ( 'css' => 'typcn-star-outline' ),
			265 => array ( 'css' => 'typcn-star' ),
			266 => array ( 'css' => 'typcn-starburst-outline' ),
			267 => array ( 'css' => 'typcn-starburst' ),
			268 => array ( 'css' => 'typcn-stopwatch' ),
			269 => array ( 'css' => 'typcn-support' ),
			270 => array ( 'css' => 'typcn-tabs-outline' ),
			271 => array ( 'css' => 'typcn-tag' ),
			272 => array ( 'css' => 'typcn-tags' ),
			273 => array ( 'css' => 'typcn-th-large-outline' ),
			274 => array ( 'css' => 'typcn-th-large' ),
			275 => array ( 'css' => 'typcn-th-list-outline' ),
			276 => array ( 'css' => 'typcn-th-list' ),
			277 => array ( 'css' => 'typcn-th-menu-outline' ),
			278 => array ( 'css' => 'typcn-th-menu' ),
			279 => array ( 'css' => 'typcn-th-small-outline' ),
			280 => array ( 'css' => 'typcn-th-small' ),
			281 => array ( 'css' => 'typcn-thermometer' ),
			282 => array ( 'css' => 'typcn-thumbs-down' ),
			283 => array ( 'css' => 'typcn-thumbs-ok' ),
			284 => array ( 'css' => 'typcn-thumbs-up' ),
			285 => array ( 'css' => 'typcn-tick-outline' ),
			286 => array ( 'css' => 'typcn-tick' ),
			287 => array ( 'css' => 'typcn-ticket' ),
			288 => array ( 'css' => 'typcn-time' ),
			289 => array ( 'css' => 'typcn-times-outline' ),
			290 => array ( 'css' => 'typcn-times' ),
			291 => array ( 'css' => 'typcn-trash' ),
			292 => array ( 'css' => 'typcn-tree' ),
			293 => array ( 'css' => 'typcn-upload-outline' ),
			294 => array ( 'css' => 'typcn-upload' ),
			295 => array ( 'css' => 'typcn-user-add-outline' ),
			296 => array ( 'css' => 'typcn-user-add' ),
			297 => array ( 'css' => 'typcn-user-delete-outline' ),
			298 => array ( 'css' => 'typcn-user-delete' ),
			299 => array ( 'css' => 'typcn-user-outline' ),
			300 => array ( 'css' => 'typcn-user' ),
			301 => array ( 'css' => 'typcn-vendor-android' ),
			302 => array ( 'css' => 'typcn-vendor-apple' ),
			303 => array ( 'css' => 'typcn-vendor-microsoft' ),
			304 => array ( 'css' => 'typcn-video-outline' ),
			305 => array ( 'css' => 'typcn-video' ),
			306 => array ( 'css' => 'typcn-volume-down' ),
			307 => array ( 'css' => 'typcn-volume-mute' ),
			308 => array ( 'css' => 'typcn-volume-up' ),
			309 => array ( 'css' => 'typcn-volume' ),
			310 => array ( 'css' => 'typcn-warning-outline' ),
			311 => array ( 'css' => 'typcn-warning' ),
			312 => array ( 'css' => 'typcn-watch' ),
			313 => array ( 'css' => 'typcn-waves-outline' ),
			314 => array ( 'css' => 'typcn-waves' ),
			315 => array ( 'css' => 'typcn-weather-cloudy' ),
			316 => array ( 'css' => 'typcn-weather-downpour' ),
			317 => array ( 'css' => 'typcn-weather-night' ),
			318 => array ( 'css' => 'typcn-weather-partly-sunny' ),
			319 => array ( 'css' => 'typcn-weather-shower' ),
			320 => array ( 'css' => 'typcn-weather-snow' ),
			321 => array ( 'css' => 'typcn-weather-stormy' ),
			322 => array ( 'css' => 'typcn-weather-sunny' ),
			323 => array ( 'css' => 'typcn-weather-windy-cloudy' ),
			324 => array ( 'css' => 'typcn-weather-windy' ),
			325 => array ( 'css' => 'typcn-wi-fi-outline' ),
			326 => array ( 'css' => 'typcn-wi-fi' ),
			327 => array ( 'css' => 'typcn-wine' ),
			328 => array ( 'css' => 'typcn-world-outline' ),
			329 => array ( 'css' => 'typcn-world' ),
			330 => array ( 'css' => 'typcn-zoom-in-outline' ),
			331 => array ( 'css' => 'typcn-zoom-in' ),
			332 => array ( 'css' => 'typcn-zoom-out-outline' ),
			333 => array ( 'css' => 'typcn-zoom-out' ),
			334 => array ( 'css' => 'typcn-zoom-outline' ),
			335 => array ( 'css' => 'typcn-zoom' ),
		
		),
		);
		
		return $typicons;
		
	}	