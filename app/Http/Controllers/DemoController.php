<?php

namespace App\Http\Controllers;
use App\Model\Article;
class DemoController extends Controller
{
	public function  index()
	{
            return view('layouts.app1');
	}
}
//             $arr = Article::select('aid','article_title','article_url','covers_url','introduction_first','introduction_second','did','editor_url','publish_time','add_time')
//                        ->where('add_time','>',0)
//                        ->orderBy('add_time','desc')
//                        ->take(5)
//                        ->get()->toArray();
//           $item=array();
//            foreach($arr as $k=>$v){
//                if(!isset($item[$v['did']])){
//                     $item[$v['did']][]=$v;
//                    
//                }else{
//                    $item[$v['did']][]=$v;
//                }
//            }
//            $res = array_values($item);
//            $list = [];
//            foreach($res as $k=>$v){
//                $list[$k]['did'] = $v[0]['did'];
//                $list[$k]['nickname'] = $this->dren_info($list[$k]['did'],'nickname');
//                $list[$k]['position'] = $this->dren_info($list[$k]['did'],'position');
//                $list[$k]['introduction'] = $this->dren_info($list[$k]['did'],'introduction');
//                $list[$k]['list'] = $this->rest($v);
//            }
//            return $this->returnCode(200,'',$list);
//            dd($list);
//           
//            
//	}
//        public function rest($arr)
//        {
//           $data = [];
//           foreach($arr as $k=>$v){
//               
//               $data[$k]['aid'] = $v['aid'];
//               $data[$k]['article_url'] = $v['article_url'];
//               $data[$k]['covers_url'] = $v['covers_url'];
//               $data[$k]['introduction_first'] = $v['introduction_first'];
//               $data[$k]['introduction_second'] = $v['introduction_second'];
//               $data[$k]['editor_url'] = $v['editor_url'];
//               $data[$k]['publish_time'] = $v['publish_time'];
//               $data[$k]['add_time'] = $v['add_time'];
//               $data[$k]['did'] = $v['did'];
//
//           }
//          return $data;
//        }
//        public function dren_info($did,$value){
//            if($value =='nickname'){
//                $dren_info = Dern::where('did',$did)->first();
//                return $dren_info['nickname'];
//            }else if($value =='position'){
//                $dren_info = Dern::where('did',$did)->first();
//                return $dren_info['position'];
//            }else if($value =='introduction'){
//                $dren_info = Dern::where('did',$did)->first();
//                return $dren_info['introduction']; 
//            }
//        }
    
