$(document).foundation({
  accordion: {
    callback : function (el) {
    var containerPos = $(el).parent().offset().top;
      $('html, body').animate({ scrollTop: containerPos }, 600);
    }
  }
});

(function() {
	var cx = '014277731840718597513:xbcfq13wqhe';
	var gcse = document.createElement('script');
	gcse.type = 'text/javascript';
	gcse.async = true;
	gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		'//cse.google.com/cse.js?cx=' + cx;
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(gcse, s);
})();
