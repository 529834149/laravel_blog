// JavaScript Document

//mrszhao.com
//2017.8.1
//by 赵岚稹


//网站分类菜单
$(function(){
	if($(".ul-subcates")){
	$(".ul-subcates").prev().click(function(){//有下拉菜单的时候，点击该菜单上的a元素
		$(this).next().slideToggle();//让a下面的下拉菜单切换显示和隐藏。
		$(this).children(".icon-add").toggleClass("open");//让a里面的子元素切换open类名。
		return false;//阻止a的跳转。
		})
	}
})


//导航页面跳转，选中栏目的样式
$(function(){
	
  $(".divNavBar>ul>li>a").each(function(){ 
   $this = $(this); 
    if($this[0].href==String(window.location)){ 
            $(this).parent().addClass('current'); 
			$(this).siblings().removeClass("current"); 
	
      //$this.addClass("current");
//	  $this.parent().siblings().children("a").removeClass("current");
	}
}) 
	})



//手机端导航菜单	
$(function(){
	$(".mobile-menu").click(function(){
		$(".mobile-divNavBar").slideToggle();
		$(this).toggleClass("mobile-open");
		})
	if($(".mobile-divNavBar").children("ul").find("ul")	){
		$sub_ul=$(".mobile-divNavBar").children("ul").find("ul");
		$sub_ul.parent("li").children("a").append($("<i class='iconfont icon-add'></i>"));
		$sub_ul.prev("a").click(function(){
			$(this).next().slideToggle();
			$(this).children(".icon-add").toggleClass("open");
			return false;
			})
		}
	
	})
	
	
