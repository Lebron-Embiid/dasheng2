$(function(){
	$("#index_banner .swiper-wrapper").width(($("#index_banner .swiper-slide").width())*($("#index_banner .swiper-slide").length+3));
	var swiper = new Swiper('#index_banner',{
		initialSlide:0,			//默认第1个显示
		pagination: '.swiper-pagination',	//启用分页器
		paginationClickable: true,	//分页器指示点可以控制切换
		autoplay : 5000,		//自动切换
		loop: true,			//swiper循环
		autoplayDisableOnInteraction : false,	//操作swiper后自动切换不会停止
		speed: 300,			//轮播滑动开始到结束的时间
	});
})