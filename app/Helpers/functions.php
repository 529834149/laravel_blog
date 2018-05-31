<?php
/**
 * 全局函数在此声明
 */
 
 	 //去空格
    function delBlank($str)
    {
        $str = str_replace('&nbsp;','',$str); 
        $str = preg_replace("/\s(?=\s)/", '', $str);
        $str = preg_replace("/[\n\r\t]/", '', $str);
        $str = preg_replace("/ /","",$str);
        $str = preg_replace("/  /","",$str);  //匹配html中的空格
        return trim($str); //返回字符串
    	
    }
    
    //去HTML标签
    function delLabel($string)
    {
    	$body = preg_replace("/<(.*?)>/", '', $string);
    	return $body;
    } 
    
    
    //获取文章内的图片地址
    function getPicFromString($string)
    {
    	$pic = '';
    	$string = stripslashes($string);
    	$string = preg_replace("/\<img src=\".*?image\/face\/(.+?).gif\".*?\>\s*/is", '', $string);	//移除表情符
    	preg_match_all("/<[img|IMG].*?src\=[\"\'](.*?)[\"\']/i", $string, $mathes);
    	if(!empty($mathes[1]) || !empty($mathes[2])){
    		$pic_arrays = array();
    		$pic = $mathes[0];
    		foreach ($pic as $key){
    			preg_match_all("/src\=[\"\'](.*?)[\"\']/i", substr($key,5), $picture);
    			$pic_arrays[] = $picture[1][0];
    		}
    		$pic_array['exists']="y";
    		$pic_array['url']=$pic_arrays;
		}else{
    		$pic_array['exists']="n";
    	}
    	return $pic_array;
    }
     
    //获取文章内的视频地址
    function getVideoFromString($string)
    {
    	$video = '';
    	$string = stripslashes($string);
    	preg_match_all("/<EMBED[^>]*?\s+src=['\"]?([^\"].*?)['\"]?\s+[^>]*?>/i", $string, $mathes);
    	if(!empty($mathes[1]) || !empty($mathes[2])){
    		$video_arrays = array();
    		$video = $mathes[0];
    		foreach ($video as $key){
    			preg_match_all("/src\=[\"\'](.*?)[\"\']/i", substr($key,5), $videos);
    			$video_arrays[] = $videos[1][0];
    		}
    		$video_array['exists']="y";
    		$video_array['url']=$video_arrays;
    	}else{
    		$video_array['exists']="n";
    	}
    	return $video_array;
    }
    
	//查询日期文章时间处理
    function getDateA($date)
    {
    	if(strlen($date) == 4){
    		$datetime = [
    			'left' => strtotime($date."0101"),
    			'right' => strtotime($date."0101 +1 year")
    		];
    	}elseif(strlen($date) == 6){
    		$datetime = [
	    		'left' => strtotime($date."01"),
	    		'right' => strtotime($date."01 +1 month")
    		];
    	}
    	return $datetime;
    }

	//对数组$arr按照$keys进行排序,$type排序方式(asc或desc),$num返回多少项
    function arraySort($arr,$keys,$type,$num){
    	$keysvalue = $new_array = array();
    	foreach ($arr as $k=>$v){
    		$keysvalue[$k] = $v[$keys];
    	}
    	if($type == 'asc'){
    		asort($keysvalue);
    	}else{
    		arsort($keysvalue);
    	}
    	reset($keysvalue);
    	$i =0;
    	foreach ($keysvalue as $k=>$v){
    		$new_array[$i] = $arr[$k];
    		if ($i<$num){
    			$i++;
    		}else{
    			break;
    		}
    	}
    	return $new_array;
    } 
 
 	//日期换算
   function china_year($numYear){ 
		$china_era = array('0'=>'庚','1'=>'辛','2'=>'壬','3'=>'癸','4'=>'甲','5'=>'乙','6'=>'丙','7'=>'丁','8'=>'戊','9'=>'己');
		$china_branch = array('0'=>'申','1'=>'酉','2'=>'戌','3'=>'亥','4'=>'子','5'=>'丑','6'=>'寅','7'=>'卯','8'=>'辰','9'=>'巳','10'=>'午','11'=>'未');
		$lastNum = mb_strcut($numYear, -1);
		$remainder = $numYear%12;
		$chinaYear = $china_era[$lastNum].$china_branch[$remainder].'年';
		return $chinaYear;
	}
	
	//数组排序
	function list_sort_by($list,$field, $sortby='asc') {
	   if(is_array($list)){
	       $refer = $resultSet = array();
	       foreach ($list as $i => $data)
	           $refer[$i] = &$data[$field];
	       switch ($sortby) {
	           case 'asc': // 正向排序
	                asort($refer);
	                break;
	           case 'desc':// 逆向排序
	                arsort($refer);
	                break;
	           case 'nat': // 自然排序
	                natcasesort($refer);
	                break;
	       }
	       foreach ( $refer as $key=> $val)
	           $resultSet[] = &$list[$key];
	       return $resultSet;
	   }
	   return false;
  } 
	
	
function getAvatarColor($uid) {
    $avatar_color = '';
    switch($uid % 3) {
        case 0:
            $avatar_color = 'e55151';
            break;
        case 1:
            $avatar_color = '5185e5';
            break;
        case 2:
            $avatar_color = 'e58951';
            break;
        default :
           $avatar_color = 'e55151'; 
            break; 

    } 
    return $avatar_color; 
}


/**
 * 用于生成纯文本摘要，最好两次截取操作
 * @param  [type] $str [description]
 * @return [type]      [description]
 */
function html2Text($str){
    //$str = preg_replace("/\<figcaption class\=\"\".*\<\/figcaption\>/","",$str);//针对medium编辑器图片简介
    $str = preg_replace("/\<figcaption.*\<\/figcaption\>/","",$str);//针对medium编辑器图片简介
    
    $str=preg_replace("/<sty(.*)\/style>|<scr(.*)\/script>|<!--(.*)-->/isU","",$str);//去除CSS样式、JS脚本、HTML注释 

    $alltext="";//用于保存TXT文本的变量 
    $start=1;//用于检测<左、>右标签的控制开关 
    for($i=0;$i<strlen($str);$i++){//遍历经过处理后的字符串中的每一个字符 
        if(($start==0)&&($str[$i]==">")){//如果检测到>右标签，则使用$start=1;开启截取功能 
            $start=1; 
        }else if($start==1){//截取功能 
          if($str[$i]=="<"){//如果字符是<左标签，则使用<font color='red'>|</font>替换 
            $start=0; 
            //$alltext.="<font color='red'>|</font>"; 
            $alltext.="";//entere
          }else if(ord($str[$i])>31){//如果字符是ASCII大于31的有效字符，则将字符添加到$alltext变量中 
            $alltext.=$str[$i]; 
          } 
        } 
    } 
    //下方是去除空格和一些特殊字符的操作 
    $alltext = str_replace("　"," ",$alltext); 
    $alltext = preg_replace("/&([^;&]*)(;|&)/","",$alltext); 
    $alltext = preg_replace("/[ ]+/s"," ",$alltext); 

    return $alltext; 
} 
	
 
	
function generateCode()
{
	//生成只有大写字母和数字
	$chars = '0123456789';//所有字符的集合
	$len = 6;//码值的总长度
	$chars_length = strlen($chars);//字符串长度
	
	$code = '';//初始化码值
	for($i=1; $i<=$len; ++$i){//循环生成4个随机下标
		$rand_index = mt_rand(0, $chars_length-1);//得到0到长度-1之间的任意随机数 
		$code .= $chars[$rand_index];//索引下标的字符串访问形式，拼凑码值
	} 
	return $code;
}

//去除重复的值
function array_unique_list($arr) {
   
    $ar = array_map('serialize', $arr);
    $ar = array_unique($ar);
    return array_map('unserialize', $ar);
}
//13位时间戳
function Millisecond($time){
	list($msec ,$sec) =  explode ( " " ,  microtime ());
	$millisecond = intval($msec*1000) + $sec*1000;
	return $millisecond;
}


function parseImgs($content,$order='all')
{ 
    $pattern='/<img.*?src="(.*?)".*?>/is';  
    preg_match_all($pattern,$content,$match); 
    if(isset($match[1])&&!empty($match[1])){
        if($order==='all'){
            return [
            	'exists' => 'y' ,   //图片是否存在 
		        'url' => $match[1]    //存在对应的URL
            ];//$match[1];
        }
        if(is_numeric($order)&&isset($match[1][$order])){
            return [
            	'exists' => 'y' ,   //图片是否存在 
		        'url' => $match[1][$order]    //存在对应的URL
            ];//return $match[1][$order];
        }
    }
    return [
    	'exists' => 'n' ,   //图片是否存在 
		 'url' => []    //存在对应的URL
    ];
}	
	
/*function replaceimg($pics,$content,$count){   
	if(is_array($pics) && count($pics) > $count-1){ 
		foreach($pics as $key=>$value){ 
			$content= str_replace($key,'http://images.blogchina.com/'.$value,$content); 
			unset($pics[$key]); 
			replaceimg($pics,$content,$count);
		}
	}
	return $content;
}*/

/*function replaceimg($pic,$pics,$content,$count){   
	if(is_array($pics) && count($pics) > $count-1){ 
		foreach($pics as $key=>$value){ 
			foreach($pic as $k=>$v){ 
				if($key == $value){
					$content= str_replace($key,'http://sr.blogchina.com/public/images/grabfail.png',$content);  
					$content = str_replace('http://sr.blogchina.com/public/images/grabfail.pngsr','100vw',$content);
					unset($pics[$key]);   
					replaceimg($pic,$pics,$content,$count);
				}else{    
					if($value == $v['url']){ 
						if($v['width'] == NULL){
							$content= str_replace($key,'http://sr.blogchina.com/public/images/grabfail.png',$content);  
							$content = str_replace('http://sr.blogchina.com/public/images/grabfail.pngsr','100vw',$content);
							unset($pics[$key]);   
							replaceimg($pic,$pics,$content,$count);
						}else{ dd($v['width']);
							$width = $v['width'];
							$heigth = $v['height']; 
							$diff = 100/($width/$heigth); 
							$content= str_replace($key,'http://images.blogchina.com/'.$value,$content);  
							$content = str_replace('http://images.blogchina.com/'.$value.'sr',$diff.'vw',$content);
							unset($pics[$key]);   
							replaceimg($pic,$pics,$content,$count);
						}
					} 
				}
			}
		}
	} dd($content);
	return $content;
}*/



function replaceimg($pic,$pics,$content,$count){
	if(is_array($pics) && count($pics) > $count-1){ 
		foreach($pic as $k=>$v){ 
			foreach($pics as $key=>$value){ 
				if($key == $value){
//					$content= str_replace($key,'http://sr.blogchina.com/public/images/grabfail.png',$content);  
//					$content = str_replace('http://sr.blogchina.com/public/images/grabfail.pngsr','100vw',$content);
					
					$content = str_replace($value.'sr','100vw',$content);
					unset($pics[$key]);
				}else{       
					if($value == $v['url']){  
						$width = $v['width']; 
						$heigth = $v['height'];
						$diff = 100/($width/$heigth);
						$content= str_replace($key,'http://images.blogchina.com/'.$value,$content);  
						$content = str_replace('http://images.blogchina.com/'.$value.'sr',$diff.'vw',$content);
						unset($pics[$k]); 
					} 
				}
			}
		}
	} 
	return $content;
}
 
function delstyle($content){
	$content =  preg_replace("/style=.+?['|\"]/i",'',$content);
	$content =  preg_replace("/<img src=\"data:image\/(jpeg|png|gif);base64,([\s\S]*)\">/",'',$content);
	return preg_replace('/<img.+?src=\"(.+?)\".+?>/i','<img class="lazy" src="http://sr.blogchina.com/public/images/blank.gif" style="width:100vw; height:\1sr;"  data-echo="\1">',$content);
}





//格式化时间	
function format_date($time){
//	if(!is_numeric($time)){
//		$time=strtotime($time);
//	} 
    $t=time()-($time/1000);
    $f=array(
        '31536000'=>'年',
        '2592000'=>'个月',
        '604800'=>'星期',
        '86400'=>'天',
        '3600'=>'小时',
        '60'=>'分钟',
        '1'=>'秒'
    );
    foreach ($f as $k=>$v)    {
        if (0 !=$c=floor($t/(int)$k)) {
            return $c.' '.$v.'前更新';
        }
    }
}	
	
 function mdate($time = NULL) {
	    $text = '';
	    $time = $time === NULL || $time > time() ? time() : intval($time);
	    $t = time() - $time; //时间差 （秒）
	    $y = date('Y', $time)-date('Y', time());//是否跨年
	    switch($t){
	     case $t == 0:
	       $text = '刚刚';
	       break;
	     case $t < 60:
	      $text = $t . '秒前'; // 一分钟内
	      break;
	     case $t < 60 * 60:
	      $text = floor($t / 60) . '分钟前'; //一小时内
	      break;
	     case $t < 60 * 60 * 24:
	      $text = floor($t / (60 * 60)) . '小时前'; // 一天内
	      break;
	     case $t < 60 * 60 * 24 * 3:
	      $text = floor($time/(60*60*24)) ==1 ?'昨天':'前天'; //昨天和前天
	      break;
	     case $t < 60 * 60 * 24 * 30:
	      $text = date('m月d日', $time); //一个月内
	      break;
	     case $t < 60 * 60 * 24 * 365&&$y==0:
	      $text = date('m月d日', $time); //一年内
	      break;
	     default:
	      $text = date('Y年m月d日', $time); //一年以前
	      break;
	    }
	        
	    return $text;
	}	
	
	
	
	
	
	
function formatTime($date) {  
	$date = $date/1000; 
     
    $diff = $_SERVER['REQUEST_TIME'] - $date;
    $day = floor($diff / 86400); 
    $free = $diff % 86400;  
    if($day > 0) {  
        if($day > 2){
            $day = date('n-j',$date);
            return str_replace('-','月',$day).'日';
        }else{
            return $day."天前更新"; 
        } 
    }else{  
        if($free>0){  
            $hour = floor($free / 3600);  
            $free = $free % 3600;  
            if($hour>0){  
                return $hour."小时前更新";  
            }else{  
                if($free>0){  
                    $min = floor($free / 60);  
                    $free = $free % 60;  
                    if($min>0){  
                        return $min."分钟前更新";  
                    }else{  
                        if($free>0){  
                            return $free."秒前更新";  
                        }else{  
                            return '刚刚更新';  
                        }  
                   }  
                }else{  
                    return '刚刚更新';  
                }  
           }  
       }else{  
           return '刚刚更新';  
       }  
    }  
} 
  //CURL抓取网站url数据
function html_curls($url,$data){
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // post数据
        curl_setopt($ch, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
        //打印获得的数据
        
    }
function getHtml($url){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);
            curl_setopt($ch, CURLOPT_REFERER, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
    }
  /*
    * 上传云盘云
    * @$img是当前匹配到的图片链接
    *   @param Array $img
    */
   function YunImg($img)
    {
       if(is_array($img)){
           $headers = array("Accept" => "application/json"); 
           $data1 = \Unirest\Request::post("http://image5.blogchina.com/v5_image/public/index.php/upload", $headers, ['uc_image_token'=>'afjkegkgjsss348@4@#asefksjyusrfg','type'=>'read_smart','uid'=>1,'imgurl'=>$img]); 
           $imgUrls = $data1->raw_body; 
           $response = json_decode($imgUrls,true); 
           return $response;
       }else{
           return $img;
       }
    }
    //如何将原图片连接放图数组中
    function image_group($img)
    {
        $arr= [];
        foreach($img['url'] as $k=>$v){
            $arr[$k]['url'] = $v;
            $arr[$k]['width'] = 0;
            $arr[$k]['height'] = 0;
            $arr[$k]['is_grab_image'] = 'n';
        }
       return $arr;  
    }
	
	
	
