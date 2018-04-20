<div class="function" id="divCatalog">
    <h3 class="function_t">网站分类</h3>
    <div class="function_c" id="allmap">
       
    </div>
</div>
<div class="function" id="divCatalog">
    <h3 class="function_t">网站分类</h3>
    <div class="function_c">
        <nav>
            <ul>
                @foreach($menuAll as $k=>$v)
                <li class="li-cate">
                    <a href="{{$v['url']}}" class="qianduan">
                        <i class="iconfont icon-wenjian"></i> {{$v['title']}} 
                        @if(!empty($v['children']))
                        <i class="iconfont icon-add"></i>
                        @endif
                    </a>
                    @if(!empty($v['children']))
                    <ul class="ul-subcates">
                        @foreach($v['children'] as $chil)
                        <li class="li-subcate">
                            <a href="{{$chil['url']}}">
                                <i class="iconfont icon-dot"></i> {{$chil['title']}}</a>
                        </li>
                         @endforeach
                    </ul>
                     @endif
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
<script type="text/javascript">
	//百度地图API功能
	function loadJScript() {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = "http://api.map.baidu.com/api?v=2.0&ak=irv7pcwStoXIOINsXGIzy9f9MvWKekdM&callback=init";
		document.body.appendChild(script);
	}
	function init() {
		var map = new BMap.Map("allmap");            // 创建Map实例
		var point = new BMap.Point(116.404, 39.915); // 创建点坐标
		map.centerAndZoom(point,15);                 
		map.enableScrollWheelZoom();                 //启用滚轮放大缩小
	}  
	window.onload = loadJScript;  //异步加载地图
</script>