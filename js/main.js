jQuery(function($){
// After CSS background-image elements are loaded completely
$chatbutton = $('#formilla-chat-button > div');
$chat = $('#chat');
$chat.on('click',function(){
    Formilla.initFormillaChat();
    console.log('click')
})
$('#primary[role="practice"] #content[role="main"] aside .areas h5').on('click',function(){
    var $areas = $('#primary[role="practice"] #content[role="main"] aside .areas ul');
    if($areas.hasClass('open')){
        $areas.removeClass('open');
    }else{
        $areas.addClass('open');
    }
});
 $('.flexslider').flexslider({
                animation: "slide",
                controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                directionNav: false
              });
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