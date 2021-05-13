$(document).ready(function() {	
	// INITIATE THE FOOTER
  siteFooter();
	$(window).resize(function() {
		siteFooter();
	});
	
	function siteFooter() {
		var siteContent = $('#site-content , #template-site-content');
		var siteContentHeight = siteContent.height();
		var siteContentWidth = siteContent.width();

		console.log('Content Height = ' + siteContentHeight + 'px');
		console.log('Content Width = ' + siteContentWidth + 'px');
		console.log('Footer Height = ' + siteFooterHeight + 'px');
		console.log('Footer Width = ' + siteFooterWidth + 'px');

		var siteFooter = $('#site-footer');
		var siteFooterHeight = siteFooter.height();
		var siteFooterWidth = siteFooter.width();

		siteContent.css({
			"margin-bottom" : siteFooterHeight + 30
		});
	};
});




