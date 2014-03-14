$(window).load(function(){
	if (navigator.userAgent.indexOf('Mac OS X') != -1) {
		if ($.browser.mozilla) {
			$("#shell").mCustomScrollbar({
				scrollInertia: 500,
				autoHideScrollbar: true,
				theme: 'dark',
				advanced:{ updateOnContentResize: true }
			});
		}
	} else {
		$("#shell").mCustomScrollbar({
			scrollInertia: 500,
			autoHideScrollbar: true,
			theme: 'dark',
			advanced:{ updateOnContentResize: true }
		});
	}
});

$(document).ready(function(){
    
	$('.cloud-img').click(function() {
		$('.active').removeClass('active');
		$('.cloud-img').css('opacity', 0.15);
		$(this).css('opacity', 1);
		$(this).parent('li').addClass('active');
		var dChecked = 'a';
		var imgName = $(this).data('imgname');
		var imgUrlFull = $(this).data('imgurl');
		var imgUrl = $(this).data('imgurl').split('/').pop();
		var location = $(this).parent('li').index();
		var liCode = '<li class="full-size animated fadeInUp"><form id="render-img" method="get" action="/render.php"><div><label >Cloud Image</label><span class="cloud-name"></span><a class="cloud-preview fancybox fancybox.iframe">Preview Image</a></div><div><label>Device Shell</label><label class="device-label" for="iphone"><img src="/img/iPhoneIcon.png" alt="" /><span>iPhone</span><i class="animated fadeInUp">Recommended Width: 320px</i></label><input id="iphone" type="radio" name="d" value="a" /><label class="device-label" for="ipadh"><img src="/img/iPadHIcon.png" alt="" /><span>iPad Horizontal</span><i class="animated fadeInUp">Recommended Width: 1024px</i></label><input id="ipadh" type="radio" name="d" value="b" /><label class="device-label" for="ipadv"><img src="/img/iPadVIcon.png" alt="" /><span>iPad Vertical</span><i class="animated fadeInUp">Recommended Width: 768px</i></label><input id="ipadv" type="radio" name="d" value="c" /><label class="device-label" for="browser"><img src="/img/browserIcon.png" alt="" /><span>Browser</span><i class="animated fadeInUp">Recommended Width: 1360px</i></label><input id="browser" type="radio" name="d" value="d" /></div><input type="hidden" name="i" class="cloud-img-url" /><input type="submit" value="Submit and Generate Page" class="btn" /></form></li>';
		
		if(location < 4) {
			$('.full-size').remove();
			if($('#cloud-images ul li:eq(3)').length != 0) {
				$(liCode).insertAfter('#cloud-images ul li:eq(3)');	
			} else {
				$(liCode).insertAfter('#cloud-images ul li:last');	
			}
		} else if(location < 8) {
			$('.full-size').remove();
			if($('#cloud-images ul li:eq(7)').length != 0) {
				$(liCode).insertAfter('#cloud-images ul li:eq(7)');	
			} else {
				$(liCode).insertAfter('#cloud-images ul li:last');	
			}
		} else if(location < 12) {
			$('.full-size').remove();
			if($('#cloud-images ul li:eq(11)').length != 0) {
				$(liCode).insertAfter('#cloud-images ul li:eq(11)');	
			} else {
				$(liCode).insertAfter('#cloud-images ul li:last');	
			}
		} else if(location < 16) {
			$('.full-size').remove();
			if($('#cloud-images ul li:eq(15)').length != 0) {
				$(liCode).insertAfter('#cloud-images ul li:eq(15)');	
			} else {
				$(liCode).insertAfter('#cloud-images ul li:last');	
			}
		} else {
			$('.full-size').remove();
			if($('#cloud-images ul li:eq(19)').length != 0) {
				$(liCode).insertAfter('#cloud-images ul li:eq(19)');	
			} else {
				$(liCode).insertAfter('#cloud-images ul li:last');	
			}
		}
		
		$('.cloud-name').text(imgName);
		$('.cloud-preview').attr('href', imgUrlFull);
		$('.cloud-img-url').attr('value', imgUrl);
		
		$('.device-label').click(function() {
			$('.device-label').removeClass('current');
			$(this).addClass('current');
			dChecked = $(this).next('input').val();
		});
		
		$('#render-img').submit(function() {
			window.location.href = "/" + dChecked + "/" + imgUrl;
			return false;	
		});
		
		return false;
	});
	
	$('.fancybox').fancybox({closeBtn: false, openEffect: 'fade', closeEffect: 'fade'});
	
	$('.learn-more').click(function() {
		$('#footer-info').fadeIn();
		return false;
	});
	
	$('.close-btn').click(function() {
    	$('#footer-info').fadeOut();
		return false;
	});
	
	var url = window.location.href;

    if (url.search("usr") > 0) {
        $('input#password').focus();
    } 

});

$(document).keyup(function(e) {
  if (e.keyCode == 27) { $('#footer-info').fadeOut(); } 
});