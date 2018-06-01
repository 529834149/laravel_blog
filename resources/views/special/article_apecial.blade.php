@extends('special_app.app')
@section('carousel')
@endsection
@section('content')
<style>
        
*{
margin:0;padding:0;
-webkit-touch-callout: none; /* prevent callout to copy image, etc when tap to hold */
-webkit-text-size-adjust: none; /* prevent webkit from resizing text to fit */
-webkit-tap-highlight-color: rgba(210,210,210,0.35); /* make transparent link selection, adjust last value opacity 0 to 1.0 */
-webkit-user-select: none; /* prevent copy paste, to allow, change 'none' to 'text' */
}
body{font-family:"微软雅黑";font-size:12px;}
ul,li{list-style:none;}
.ylcon{width:100%;min-width:320px;}
.tit{height:26px;line-height:26px;padding:0px 15px;position:relative;font-size:15px;color:#aaa;border-bottom:1px solid rgba(0, 0, 0, 0.15);}
 
.story{border-bottom:1px dashed #cecece;padding:0 15px 3px;position:relative;}
.story_t{font-size:1.2em;color:rgba(0,0,0,1);padding-top:5px;padding-bottom:2px;}
.story_m{color:rgba(110,110,110,1);line-height:21px;word-break:break-all;word-wrap:break-word;overflow:hidden;font-size:1.2em;padding:2px 0;}
.story_time{color:rgba(154,154,154,1);padding:2px 0;}
.story_hf{background:rgb(245,245,245);font-size:1.2em;border:1px solid rgba(204,204,204,0.2);border-radius:2px;color:rgba(110,110,110,1);padding:4px;margin-bottom:5px;}
.opbtn{position:absolute;top: 0;right: 0;}
/*评论狂*/
.commentguest{  
    width: 2em;  
    height: 2em;  
    top: 2.2em;  
    position: relative;  
}  
.commentguest img{  
    width:100%;  
    height: auto;  
}  
.comment-input{  
        transition: all 0.5s ease 0s;  
        font-family: "微软雅黑";  
        font-size: 1.1em;  
        position: relative;  
        left: 3.1em;  
}  
.commentarea{  
    position:absolute;   
    padding: 0.6em 1em;  
    border: 0.1em solid black;  
    background: #fff none repeat scroll 0 0;  
    width:34em;  
    z-index: 2;   
}  
.commentarea textarea{  
    border: 0 none;  
    display: block;  
    outline: 0 none;  
    resize: none;  
    width:32em;  
    height: 2em;  
      
}  
.comment-input:hover .commentarea{  
    height: 11.37em;  
}  
.comment-input:hover .commentarea textarea{  
    height:7em;  
}  
.comment-input:hover .commentbtn{  
    top:6em;  
    z-index: 3;  
}  
.commentbtn{  
    border: 0 none;  
    bottom: 2em;  
    height: 3.3em;  
    padding: 0;  
    left: 0.1em;  
    width:33.9em;  
    position: relative;  
    transition:top 0.1s ease 0s;  
  
}  
.commentmask{  
    border: 0 none;  
    top:2em;  
    height: 100%;  
    padding: 0;  
    right: 0;  
    width:33.9em;  
    background-color: #f4f5f6;  
    position: relative;  
    z-index: 1;  
}  
.getcomment{  
    width:6em;  
    float: right;  
    bottom: 1.2em;  
    position: relative;  
    width:6.7em;  
    height: 100%;  
    z-index:3;  
    background-color:#3f404c;  
    color: #fff;  
    line-height: 1.9em;  
    text-align: center;  
    font-size: 1.1em; 
    left: 41.05em;
}  
.getcomment:hover{  
    background-color: #AC2925;  
    color: #fff;  
}  
</style>
    <div class="container margin-top100">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="ui raised black segment">
                    <div class="ui black ribbon label"><i class="icon ion-ios-list"></i> 精华文章</div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><center><h2>{{$date->title}}</h2></center></div>
                            <hr style="margin-top: 50px;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 20px;">
                                <blockquote>
                                    <span style="font-style: normal; color: rgb(153, 153, 153);">
                                        {{$date->desc}}
                                    </span>
                                </blockquote>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 20px;color: #555555">
                                  {!!$date->content!!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="ui raised black segment">
                    <div class="ui black ribbon label"><i class="icon ion-ios-list"></i>评论专区</div>
                    <div class="ui vertical segment">
                        <div class="row">
                            <div class="ylcon">
                                <p class="tit">
                                    最新留言(5条)
                                </p>
                                <div id="messDivId">
                                    <div class="story">
                                        <div class="opbtn"></div>
                                        <p class="story_t"><img class="ui avatar image" src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png">怜星<span style="float:right;color: red;">楼主</span></p>
                                        <!--<p class="story_time">2015/07/12 20:48</p>-->
                                        <p class="story_m">我想问最近最火的tfboys呢他们的八卦呢我想问最近最火的tfboys呢,他们的八卦呢我想问最近最火的tfboys呢？！他们的八卦呢？！</p>
                                        <p class="story_m"> <i class="icon ion-ios-heart-outline"></i>喜欢<big>|</big><i class="icon ion-android-call"></i>举报<span style="float: right">发表于:2015/07/12 20:48</span></p>
                                    </div>
                                    <div class="story">
                                        <div class="opbtn"></div>
                                        <p class="story_t"><img class="ui avatar image" src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png">怜星<span style="float:right;color: red;">楼主</span></p>
                                        <!--<p class="story_time">2015/07/12 20:48</p>-->
                                        <p class="story_m">我想问最近最火的tfboys呢他们的八卦呢我想问最近最火的tfboys呢,他们的八卦呢我想问最近最火的tfboys呢？！他们的八卦呢？！</p>
                                        <p class="story_m"> <i class="icon ion-ios-heart-outline"></i>喜欢<big>|</big><i class="icon ion-android-call"></i>举报<span style="float: right">发表于:2015/07/12 20:48</span></p>
                                    </div>
                                </div>
                                <p class="tit">
                                    <center>所有留言(15条)</center>
                                </p>
                                <input id="aid" type="hidden" value="{{$date->id}}">
                                <div id="messDivId">
                                    <div class="story">
                                        <div class="opbtn"></div>
                                        <p class="story_t"><img class="ui avatar image" src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png">怜星<span style="float:right;color: red;">楼主</span></p>
                                        <!--<p class="story_time">2015/07/12 20:48</p>-->
                                        <p class="story_m">我想问最近最火的tfboys呢他们的八卦呢我想问最近最火的tfboys呢,他们的八卦呢我想问最近最火的tfboys呢？！他们的八卦呢？！</p>
                                        <p class="story_m"> <i class="icon ion-ios-heart-outline"></i>喜欢<big>|</big><i class="icon ion-android-call"></i>举报<span style="float: right">发表于:2015/07/12 20:48</span></p>
                                    </div>
    <!--                                    <div class="story">
                                        <div class="opbtn"></div>
                                        <p class="story_t"><img class="ui avatar image" src="https://dn-phphub.qbox.me/uploads/images/201709/10/4430/xlAZ6z2HsW.png">陈宝金</p>
                                        <p class="story_time">发表于:<i class="icon ion-clock"></i>2015/07/12 20:48</p>
                                        <p class="story_m">陈宝金  回复 我想问最近最火的tfboys呢他们的八卦呢我想问最近最火的tfboys呢,他们的八卦呢我想问最近最火的tfboys呢？！他们的八卦呢？！</p>
                                        <p class="story_hf">@剑花烟雨:的是相对无言眼波如流的默契的是相对无言眼波如流的默契的是相对无言眼波如流的默契的是相对无言眼波如流的默契的是相对无言眼波如流的默契的是相对无言眼波如流的默契</p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="editor">
                        <textarea style="width:100%;padding:12px;" id="myEditor" rows="10"  onpropertychange="if(this.scrollHeight> 80)this.style.posHeight=this.scrollHeight+5" placeholder="请写下您的评论"></textarea>  
                           <div class="commentbtn">  
                        <a href="javascript:;" class="getcomment btn btn-block" role="button" style="float:right">评论</a>  
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <script src="/public/special/js/editorlist.js?158874587744"></script>
@endsection