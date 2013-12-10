<script>
function selectByGirlsLetter(letter){
	$('.child').hide();
	popup('Searching by letters...');
	$.ajax({
		type: "POST",
		url: "<?php echo AJAX_HREF ?>ajax/ajax/letter/" + letter,

		success: function(data){
			var obj = JSON.parse(data);
			if(obj == null){
				popup('Searching return zero result. Please try again.');
				closeDialogBox(2000);
			}else{
				$.each(obj, function(i, item) {
					
					$('.ad-image-wrapper').html('');
					$('.ad-info').html('');
					$('.ad-slideshow-controls').html('');
					closeDialogBox(0);
					if(i == 0){
						var display = "";
						$('#girlDescription').html('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						
						$('#galleryContainer').html('<div class="ad-image-wrapper"></div><div class="ad-controls"></div><div class="ad-nav"><div class="ad-thumbs"><ul class="ad-thumb-list" id="girlSlideShow"><li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li></ul></div></div>');
					}else{
						var display = "none";
						$('#girlDescription').append('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						$('#girlSlideShow').append('<li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li>');
					}
					
				});
				location.hash="ad-image-0";
				$('.ad-gallery').adGallery();
			}
		}
	});
}


function selectByGirlsSite(site){
	$('.child').hide();
	popup('Searching by sitename...');
	$.ajax({
		type: "POST",
		url: "<?php echo AJAX_HREF ?>ajax/ajax/site/" + site,

		success: function(data){
			var obj = JSON.parse(data);
			if(obj == null){
				popup('Searching return zero result. Please try again.');
				closeDialogBox(2000);
			}else{
				closeDialogBox(0);
				$.each(obj, function(i, item) {
					//alert(obj[i].girl_id + " " + obj[i].girl_name + " " + obj[i].girl_image);
					$('.ad-image-wrapper').empty();
					//$('#galleryContainer').html('<div class="ad-image-wrapper"></div>');
					if(i == 0){
						var display = "";
						$('#girlDescription').html('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						
						$('#galleryContainer').html('<div class="ad-image-wrapper"></div><div class="ad-controls"></div><div class="ad-nav"><div class="ad-thumbs"><ul class="ad-thumb-list" id="girlSlideShow"><li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li></ul></div></div>');
					}else{
						var display = "none";
						$('#girlDescription').append('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						$('#girlSlideShow').append('<li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li>');
					}
					
				});
				location.hash="ad-image-0";
				$('.ad-gallery').adGallery();
			}
		}
	});
}


function selectByGirlsDate(){
	$('.child').hide();
	popup('Ordering by date...');
	$.ajax({
		type: "POST",
		url: "<?php echo AJAX_HREF ?>ajax/ajax/dates",

		success: function(data){
			var obj = JSON.parse(data);
			if(obj == null){
				popup('Searching return zero result. Please try again.');
				closeDialogBox(2000);
			}else{
				closeDialogBox(0);
				$.each(obj, function(i, item) {
					//alert(obj[i].girl_id + " " + obj[i].girl_name + " " + obj[i].girl_image);
					$('.ad-image-wrapper').empty();
					//$('#galleryContainer').html('<div class="ad-image-wrapper"></div>');
					if(i == 0){
						var display = "";
						$('#girlDescription').html('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						
						$('#galleryContainer').html('<div class="ad-image-wrapper"></div><div class="ad-controls"></div><div class="ad-nav"><div class="ad-thumbs"><ul class="ad-thumb-list" id="girlSlideShow"><li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li></ul></div></div>');
					}else{
						var display = "none";
						$('#girlDescription').append('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						$('#girlSlideShow').append('<li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li>');
					}
					
				});
				location.hash="ad-image-0";
				$('.ad-gallery').adGallery();
			}
		}
	});
}


function selectByGirlsViews(){
	$('.child').hide();
	popup('Ordering by number of views...');
	$.ajax({
		type: "POST",
		url: "<?php echo AJAX_HREF ?>ajax/ajax/numviews",

		success: function(data){
			var obj = JSON.parse(data);
			if(obj == null){
				popup('Searching return zero result. Please try again.');
				closeDialogBox(2000);
			}else{
			closeDialogBox(0);
				$.each(obj, function(i, item) {
					//alert(obj[i].girl_id + " " + obj[i].girl_name + " " + obj[i].girl_image);
					$('.ad-image-wrapper').empty();
					//$('#galleryContainer').html('<div class="ad-image-wrapper"></div>');
					if(i == 0){
						var display = "";
						$('#girlDescription').html('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						
						
						$('#galleryContainer').html('<div class="ad-image-wrapper"></div><div class="ad-controls"></div><div class="ad-nav"><div class="ad-thumbs"><ul class="ad-thumb-list" id="girlSlideShow"><li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li></ul></div></div>');
					}else{
						var display = "none";
						$('#girlDescription').append('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						$('#girlSlideShow').append('<li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li>');
					}
					
				});
				location.hash="ad-image-0";
				$('.ad-gallery').adGallery();
			}
		}
	});
}


function selectByGirlsRate(){
	$('.child').hide();
	popup('Ordering by girls rating...');
	$.ajax({
		type: "POST",
		url: "<?php echo AJAX_HREF ?>ajax/ajax/rating",

		success: function(data){
			var obj = JSON.parse(data);
			if(obj == null){
				popup('Searching return zero result. Please try again.');
				closeDialogBox(2000);
			}else{
				closeDialogBox(0);
				$.each(obj, function(i, item) {
					//alert(obj[i].girl_id + " " + obj[i].girl_name + " " + obj[i].girl_image);
					$('.ad-image-wrapper').empty();
					//$('#galleryContainer').html('<div class="ad-image-wrapper"></div>');
					if(i == 0){
						var display = "";
						$('#girlDescription').html('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						
						$('#galleryContainer').html('<div class="ad-image-wrapper"></div><div class="ad-controls"></div><div class="ad-nav"><div class="ad-thumbs"><ul class="ad-thumb-list" id="girlSlideShow"><li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li></ul></div></div>');
					}else{
						var display = "none";
						$('#girlDescription').append('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						$('#girlSlideShow').append('<li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li>');
					}
					
				});
				location.hash="ad-image-0";
				$('.ad-gallery').adGallery();
			}
		}
	});
}


function selectByGirlsTag(tag){
	$('.child').hide();
	popup('Searchin through tags...');
	$.ajax({
		type: "POST",
		url: "<?php echo AJAX_HREF ?>ajax/ajax/tags/" + tag,

		success: function(data){
			var obj = JSON.parse(data);
			if(obj == null){
				popup('Searching return zero result. Please try again.');
				closeDialogBox(2000);
			}else{
				closeDialogBox(0);
				$.each(obj, function(i, item) {
					//alert(obj[i].girl_id + " " + obj[i].girl_name + " " + obj[i].girl_image);
					$('.ad-image-wrapper').empty();
					//$('#galleryContainer').html('<div class="ad-image-wrapper"></div>');
					if(i == 0){
						var display = "";
						$('#girlDescription').html('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						
						$('#galleryContainer').html('<div class="ad-image-wrapper"></div><div class="ad-controls"></div><div class="ad-nav"><div class="ad-thumbs"><ul class="ad-thumb-list" id="girlSlideShow"><li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li></ul></div></div>');
					}else{
						var display = "none";
						$('#girlDescription').append('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						$('#girlSlideShow').append('<li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li>');
					}
					
				});
				location.hash="ad-image-0";
				$('.ad-gallery').adGallery();
			}
		}
	});
}


function searchGirls(){
	$('.child').hide();
	var girlname = $('#search').val();
	popup('Searchin by girls name...');
	$.ajax({
		type: "POST",
		url: "<?php echo AJAX_HREF ?>ajax/ajax/search/" + girlname,

		success: function(data){
			var obj = JSON.parse(data);
			if(obj == null){
				popup('Searching return zero result. Please try again.');
				closeDialogBox(2000);
			}else{
				closeDialogBox(0);
				$.each(obj, function(i, item) {
					//alert(obj[i].girl_id + " " + obj[i].girl_name + " " + obj[i].girl_image);
					$('.ad-image-wrapper').empty();
					//$('#galleryContainer').html('<div class="ad-image-wrapper"></div>');
					if(i == 0){
						var display = "";
						$('#girlDescription').html('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');

						$('#galleryContainer').html('<div class="ad-image-wrapper"></div><div class="ad-controls"></div><div class="ad-nav"><div class="ad-thumbs"><ul class="ad-thumb-list" id="girlSlideShow"><li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li></ul></div></div>');
					}else{
						var display = "none";
						$('#girlDescription').append('<div id="girlid_'+obj[i].girl_id+'" class="allGirlsDetails" style="display:'+ display +'"><h1>'+obj[i].girl_name+'</h1><p><strong>Episode Name:</strong> '+obj[i].girl_episode+'</p><p><strong>Site Name:</strong> '+obj[i].girl_site_name+'</p><p><strong>Date:</strong> '+obj[i].girl_date+'</p><p><strong>Model Rate:</strong> '+obj[i].girl_model_rate+'</p><p><strong>Number of Views:</strong> '+obj[i].girl_num_views+'</p></div>');
						$('#girlSlideShow').append('<li><a href="'+obj[i].girl_image+'"><img src="'+obj[i].girl_thumb_image+'" title=""   alt="" class="image2" onclick="showGirlInformation('+obj[i].girl_id+')"></a></li>');
					}
					
				});
				location.hash="ad-image-0";
				$('.ad-gallery').adGallery();
			}
		}
	});
}
</script>

<div id="mainContainer">
	<div id="navigation">
		<div id="searchBar">
			<input type="text" id="search" placeholder="Girl's Name">
			<a href="javascript:void(0)" onclick="searchGirls();">Search</a>
		</div>
		<div class="clear"></div>
		
		<ul>
			<li  class="model_name"><a href="javascript:void(0)"  onclick="modelName();">MODEL NAME</a>
				<ul class="child">
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('a')">A</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('b')">B</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('c')">C</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('d')">D</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('e')">E</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('f')">F</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('g')">G</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('h')">H</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('i')">I</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('j')">J</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('k')">K</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('l')">L</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('m')">M</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('n')">N</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('o')">O</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('p')">P</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('q')">Q</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('r')">R</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('s')">S</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('t')">T</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('u')">U</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('v')">V</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('w')">W</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('x')">X</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('y')">Y</a></li>
					<li><a href="javascript:void(0)" onclick="selectByGirlsLetter('z')">Z</a></li>
				</ul>
			</li>
			<li  class="model_name"><a href="javascript:void(0)" id="site_name">BY SITE</a>
				<ul class="child">
					<?php foreach($data['site_details'] as $site) { ?>
					<li><a href="javascript:void(0)" onclick="selectByGirlsSite('<?php echo strtolower(str_replace(" ", "-",$site['sites'])) ?>')" id="<?php echo $site['site_id'] ?>"><?php echo $site['sites'] ?></a></li>
					<?php } ?>
				</ul>
			
			
			</li>
			<li><a href="javascript:void(0)" id="site" onclick="selectByGirlsDate();">BY DATE</a></li>
			<li><a href="javascript:void(0)" id="site" onclick="selectByGirlsViews();">UPDATES <span style="font-size:11px;">(# OF VIEWS)</span></a></li>
			<li><a href="javascript:void(0)" id="site" onclick="selectByGirlsRate();">MODELS RATE</a></li>
			<li class="model_name"><a href="javascript:void(0)" id="site">UPDATE TAGS</a>
				<ul class="child">
					<?php foreach($data['tag_details'] as $tag) { ?>
					<li><a href="javascript:void(0)" onclick="selectByGirlsTag('<?php echo strtolower($tag['tags']) ?>')" id="<?php echo $tag['tag_id'] ?>"><?php echo $tag['tags'] ?></a></li>
					<?php } ?>
				</ul>
			
			
			</li>
		</ul>
	</div>
	<div class="clear"></div>

	<div id="girlContainer">
		<div id="galleryContainer" class="ad-gallery">
			<div class="ad-image-wrapper">
			</div>
			<div class="ad-controls">
			</div>
			<div class="ad-nav">
				  <div class="ad-thumbs">
					<ul class="ad-thumb-list" id="girlSlideShow">
						<?php foreach($data['girl_details'] as $girl) { ?>
						<li>
						  <a href="<?php echo $girl['girl_image'] ?>">
							<img src="<?php echo $girl['girl_thumb_image'] ?>" title=""   alt="<?php //echo $girl['girl_name'] ?>" class="image2" onclick="showGirlInformation(<?php echo $girl['girl_id'] ?>)">
						  </a>
						</li>
						<?php } ?>

					</ul>
				  </div>
			</div>
		</div>
	</div>
	<div id="girlDescription">
		<?php foreach($data['girl_details'] as $key => $girl) { ?>
		<div id="girlid_<?php echo $girl['girl_id'] ?>" class="allGirlsDetails" style="display:<?php echo $key == 0 ? '' : 'none;' ?>">
		<h1><?php echo $girl['girl_name'] ?></h1>
			<p><strong>Episode Name:</strong> <?php echo $girl['girl_episode'] ?></p>
			<p><strong>Site Name:</strong> <?php echo $girl['girl_site_name'] ?></p>
			<p><strong>Date:</strong> <?php echo $girl['girl_date'] ?></p>
			<p><strong>Model Rate:</strong> <?php echo $girl['girl_model_rate'] ?></p>
			<p><strong>Number of Views:</strong> <?php echo $girl['girl_num_views'] ?></p>
		</div>
		<?php } ?>
	</div>
	<div class="clear"></div>
</div>

<div id="dialog-overlay" style="position:fixed"></div>
<div id="dialog-box" style="position:fixed">
	<div class="dialog-content" style="text-align:center;">
		
		<div id="dialog-message"></div>
	</div>
</div>

<script>
$('.model_name').on('mouseover', function() {
    $('.child').hide();
    $(this).children('.child').show();
}).on('mouseout', function() {
    $('.child').hide();
})
</script>