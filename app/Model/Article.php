<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Article extends Model
{
    protected $connection = 'mysql';
    protected $table ='articles';
    protected $primaryKey = 'aid';//定义主键
//    public $timestamps = false;//类似addtime updatetime  
    public $timestamps = false;
    public static function https_request($url,$data = null)
    {
        /**Unirest抓取***/
            $headers = array("Accept" => "application/html");
            $data = \Unirest\Request::get($url, $headers, []); 
            $output	= $data->raw_body; 
            /***curl抓取***/
            if(empty($output) || $output == null || $output == false || strlen($output) <100){ 
                    $data = null;
            $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
                if (!empty($data)){
                    curl_setopt($curl, CURLOPT_POST, 1);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($curl);
                curl_close($curl);

                    /***file_get_contents抓取***/
                    if(empty($output) || $output == null || $output == false  || strlen($output) <100){
                            $output = file_Get_contents($url); 
                            if(empty($output) || $output == null || $output == false){
                                    $output = '';
                            }
                    }
        } 
        return $output;
    }
    public function link($params = [])
    {
        return route('article.show', array_merge([$this->aid, $this->slug], $params));
    }
    public function scopeFilter($query, $value)
    {
        if ($month = $value['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $value['year']) {
            $query->whereYear('created_at', $year);
        }
    }

   
    
}
