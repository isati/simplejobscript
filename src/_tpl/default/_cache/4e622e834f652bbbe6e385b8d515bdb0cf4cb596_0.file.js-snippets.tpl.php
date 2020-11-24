<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:17:02
  from "/var/www/src/_tpl/default/1.5/layout/js-snippets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd946eeb8a13_06528997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e622e834f652bbbe6e385b8d515bdb0cf4cb596' => 
    array (
      0 => '/var/www/src/_tpl/default/1.5/layout/js-snippets.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd946eeb8a13_06528997 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/functions.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php if ($_smarty_tpl->tpl_vars['INIT_GOOGLE_MAPS']->value) {?>
	 <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo @constant('GOOGLE_MAPS_API_KEY');?>
"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
		

			
				var latitude = "<?php echo $_smarty_tpl->tpl_vars['SEO_LATITUDE']->value;?>
";
				var longitude = "<?php echo $_smarty_tpl->tpl_vars['SEO_LONGITUDE']->value;?>
";
			

            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init(parseFloat(latitude), parseFloat(longitude)));

            function init(la, li) {

                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(la, li),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(la, li), //34.0522, -118.2436
                    map: map,
                    icon: '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/sjs_map.png',
                    title: 'Contact us'
                });
            }
	    
		<?php echo '</script'; ?>
>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['current_category']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	
		var varName = '<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
';
		// category
		$('#check_' + varName).attr('checked', true);
		$('#check_' + varName).parent().parent().css('display', 'block');
	
	<?php echo '</script'; ?>
>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['current_jobtype_varname']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	
		var varName = '<?php echo $_smarty_tpl->tpl_vars['current_jobtype_varname']->value;?>
';
		// job type
		$('#check_' + varName).attr('checked', true);
		$('#check_' + varName).parent().parent().css('display', 'block');
	
	<?php echo '</script'; ?>
>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['current_city_varname']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	
		var varName = '<?php echo $_smarty_tpl->tpl_vars['current_city_varname']->value;?>
';
		// city
		$('#check_' + varName).attr('checked', true);
		$('#check_' + varName).parent().parent().css('display', 'block');
	
	<?php echo '</script'; ?>
>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['LOAD_TAGL']->value == 'true') {?>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/assets/js/jquery-ui.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/assets/js/rainbow-custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/src/taggle-ie8.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/src/taggle-ie9.js" type="text/javascript"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/src/taggle.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['TAGL_INIT_JOB_DETAIL']->value == 'true') {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		
		   new Taggle($('.skillsTaggle.textarea')[0], {
			    duplicateTagClass: 'bounce'
			});
	    
		<?php echo '</script'; ?>
>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true') {?>
		<?php if ($_smarty_tpl->tpl_vars['TAGL_INIT_PROFILE_EDIT']->value == 'true') {?>
			<?php echo '<script'; ?>
 type="text/javascript">
			
				var current_tags = [];
				
				   	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['skills_arr']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
				   	
				   	current_tags.push('<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
');
				    
				   	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				

			   new Taggle($('.profileEditTaggle.textarea')[0], {
			   		tags: current_tags,
				    duplicateTagClass: 'bounce'
				});
		    
			<?php echo '</script'; ?>
>
		<?php }?>
	<?php }?>

<?php if ($_smarty_tpl->tpl_vars['SM_PROFILES']->value) {
echo '<script'; ?>
 type="text/javascript">

	
		   	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SM_PROFILES']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
		   	
		   	var obj = {id: '<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
', name: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
', icon: '<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
'};
		   	SimpleJobScript.sm_profiles.push(obj);
		    
		   	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	

<?php echo '</script'; ?>
>
<?php }?>

	<?php echo '<script'; ?>
 type="text/javascript">
	
 		$(document).ready(function()
		{
			
			$('#old-user-link').click(function(e) {
				$("#old-user").delay(100).fadeIn(100);
		 		$("#new-user").fadeOut(100);
		 		$('#old-user').removeClass('hide-me-now');
				$('#new-user-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		    $('#new-user-link').click(function(e) {
				$("#new-user").delay(100).fadeIn(100);
		 		$("#old-user").fadeOut(100);
				$('#old-user-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

			var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });

			$('.filter-title').on('click',function(){
				$(this).next('.filter-slide').slideToggle();
				$(this).find('i').toggleClass('fa-angle-up');
				$(this).find('i').toggleClass('fa-angle-down');
			}) ; 
	
			
			// AJAX sidebar SEARCH pages
			<?php if ($_smarty_tpl->tpl_vars['SIDEBAR_CHEVRON']->value == 'activated') {?>
			var jobsUrl = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
";
			var latestJobsTranslation = "<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['all_jobs'];?>
";
			

				// init AJAX sidebar search events
				SimpleJobScript.InitSearchBoxes(jobsUrl, latestJobsTranslation);

				$('#types-panel').on('hidden.bs.collapse', SimpleJobScript.toggleChevron);
				$('#types-panel').on('shown.bs.collapse', SimpleJobScript.toggleChevron);

				$('#cats-panel').on('hidden.bs.collapse', SimpleJobScript.toggleChevron);
				$('#cats-panel').on('shown.bs.collapse', SimpleJobScript.toggleChevron);

				$('#loc-panel').on('hidden.bs.collapse', SimpleJobScript.toggleChevron);
				$('#loc-panel').on('shown.bs.collapse', SimpleJobScript.toggleChevron);
			
			<?php }?>
			

			$(window).load(function() {
				$(".page-loader").fadeOut("slow");
			})

		    $("#menu-toggle").click(function(e) {
		        e.preventDefault();
		        $("#wrapper").toggleClass("toggled");
		    });

			SimpleJobScript.I18n = <?php echo $_smarty_tpl->tpl_vars['translationsJson']->value;?>
;

			
			<?php if ($_smarty_tpl->tpl_vars['LOAD_TAGL']->value == 'true') {?>
			
				SimpleJobScript.translateTaggle();
			
			<?php }?>
			

			var codeType = 0;

			
			var iPage = "<?php echo $_smarty_tpl->tpl_vars['IndeedPage']->value;?>
";
			var iJobType = "<?php echo $_smarty_tpl->tpl_vars['IndeedJobType']->value;?>
";
			var iLocation = "<?php echo $_smarty_tpl->tpl_vars['IndeedLocation']->value;?>
";
			var iCity = "<?php echo $_smarty_tpl->tpl_vars['IndeedCity']->value;?>
";

			var iFn = ["<?php echo $_smarty_tpl->tpl_vars['indeedFilterNames']->value[0];?>
", "<?php echo $_smarty_tpl->tpl_vars['indeedFilterNames']->value[1];?>
", "<?php echo $_smarty_tpl->tpl_vars['indeedFilterNames']->value[2];?>
"];;

			

			
			var v = "<?php echo $_smarty_tpl->tpl_vars['SJS_PRODUCT']->value;?>
";
			SimpleJobScript.cr(v);
			
			
			//INDEED
			
				<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'activated') {?>

				   <?php if ($_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
					
						codeType = 1;
					
				   <?php }?>

			
 
						// register query search
						var keywords = $('#keywords');
						keywords.keyup(function(key) {
							var searchKeywords = jQuery.trim(this.value);
							var len = searchKeywords.length;
				
						    if (key.keyCode != 9 && len >= 3)
							{ 
								
							    $('#jobs-loader').removeClass('displayNone');


								clearTimeout(window.search_timer);	

								if (codeType == 1) {
									window.search_timer = setTimeout(function(){
									SimpleJobScript.HybridSearch('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
search/<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
|', '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
indeed-query/|', searchKeywords, iLocation, iCity, iJobType)}, 2100);
								} else {
									window.search_timer = setTimeout(function(){
									SimpleJobScript.IndeedQuerySearch('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
indeed-query/|', searchKeywords, iLocation, iCity, iJobType)}, 2100);
								}

						    }
						});

			
				<?php if ($_smarty_tpl->tpl_vars['IndeedLandingSearch']->value == 'true') {?>
					var iTitle = "<?php echo $_smarty_tpl->tpl_vars['IndeedTitle']->value;?>
";
					var lpFn = [iTitle, "<?php echo $_smarty_tpl->tpl_vars['IndeedLocationFullName']->value;?>
"];
			
						// indeed landing page search
						$('#jobs-loader').removeClass('displayNone');
						clearTimeout(window.search_timer);
						window.search_timer = setTimeout(function(){
								SimpleJobScript.IndeedLandingSearch('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
indeed-landing', iPage, iLocation, iTitle, lpFn);
						}, 2100);
			
				<?php } else { ?>
			
						// standard indeed listings
						$('#jobs-loader').removeClass('displayNone');
						clearTimeout(window.search_timer);
						window.search_timer = setTimeout(function(){
								SimpleJobScript.IndeedSearch('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
indeed', iPage, iJobType, iLocation, iCity, iFn);
						}, 2100);
			
				<?php }?>
			



			
				<?php } else { ?>
			
						// standard search without indeed
						var keywords = $('#keywords');
						keywords.keyup(function(key) {
							var searchKeywords = jQuery.trim(this.value);
							var len = searchKeywords.length;
				
						    if (key.keyCode != 9 && len >= 3)
							{ 
							    $('#jobs-loader').removeClass('displayNone');
								clearTimeout(window.search_timer);	
								window.search_timer = setTimeout(function(){
									SimpleJobScript.PerformSearch('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
search/<?php echo $_smarty_tpl->tpl_vars['current_category']->value;?>
|', searchKeywords)}, 800);
						    }
						});

			
				<?php }?>
			

		});
		
		SimpleJobScript.simplejobscript_url = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
";
		
	
	<?php echo '</script'; ?>
>

	<?php if (@constant('GOOGLE_ANALYTICS_CODE')) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	
		window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
		ga('create', '<?php echo @constant('GOOGLE_ANALYTICS_CODE');?>
', 'auto');
		ga('send', 'pageview');
	
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 async src='https://www.google-analytics.com/analytics.js'><?php echo '</script'; ?>
>
	<?php }
}
}
