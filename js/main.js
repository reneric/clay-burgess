jQuery(function($){
// After CSS background-image elements are loaded completely
$('#intro .inner ul.slides li').add('.site-title, #header-bg,#navbar-bg,.social .container .links a,div#primary-border').cssBackgroundReady(function () {
    
    this.each(function () {
        $(this).css('opacity', 1);
    });
});
$nolink = $('.nav-menu li.nolink > a');
$nolink.on('click',function(e){
    e.preventDefault();
})
$area = $('aside .areas ul li');
$area.each(function(){
	$this = $(this);
	$span = $this.find('span');	
	$height = $this.height()/2;
	$span.css('top',$height-5+'px');
})
$moreparent = $('#primary[role="news"] #content[role="main"] .content-section .post .featured a');
$more = $('#primary[role="news"] #content[role="main"] .content-section .post .featured a span');
$moreheight = $more.height();
$more.css('lineHeight', $moreheight+'px');   
// After <img> tags are loaded completely
jQuery.fn.loadComplete = function (fn) {
    return this.each(function () {
        if (this.complete || this.readyState == 'complete') {
            fn.call(this);
        } else {

            $(this).load(fn);

        }
    });
};
$('img').loadComplete(function(){
   $(this).css('opacity',1);
});
});