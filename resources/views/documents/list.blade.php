@extends('layouts.app')
@section('carousel')
<div class="catalog-bg note">
    <h2>talking is cheap,show me your code.</h2>
</div>
@endsection
@section('content')
	<style type="text/css">
	.text-danger{
		color: red;
	}
	.control-label{
		text-align: left !important; 
	}
	#resultBox {
		width: 100%;
		height: 300px;
		border: 1px solid #888;
		padding: 5px;
		overflow: auto;
		margin-bottom: 20px;
	}
	.uploaderMsgBox {
		width: 100%;
		border-bottom: 1px solid #888;
	}
	[act=cancel-upload]{
		text-decoration: none;
		cursor:pointer;
	}
	</style>

<div class="divMiddle w1200  cases">
    <main>
        <div class="post page">
            <h2 class="post-title">文章归档</h2>
            <nav>
                <ul>
                     <li>
                        <span class="title">
                            <a href="/article/14" title="3年PHPer的面试总结">2018-02</a></span>
                        <span class="time">发表了20篇文章</span>
                    </li>
                 </ul>
            </nav>
            <form id="form1">
                <input id="uploadVideoNow-file" type="file" style="display:none;"/>
            </form>
            <div class="row" style="padding:10px;">
                <h4>示例1：直接上传视频</h4>
                <a onclick="getSignature();return false;" id="uploadVideoNow" href="javascript:void(0);" class="btn btn-outline">直接上传视频</a>
            </div>
            
            <form id="form2">
		<input id="addVideo-file" type="file" style="display:none;"/>
		<input id="addCover-file" type="file" style="display:none;"/>
	</form>
	<div class="row" style="padding:10px;">
		<h4>示例2：上传视频和封面</h4>
		<a id="addVideo" href="javascript:void(0);" class="btn btn-outline">添加视频</a>
		<a id="addCover" href="javascript:void(0);" class="btn btn-outline">添加封面</a>
		<a id="uploadFile" href="javascript:void(0);" class="btn btn-outline">上传视频和封面</a>
	</div>




            <div class="post-body">
                <style>.hk-archives h3{font-weight: bold;}.hk-archives ul{margin-left: 20px;}.hk-archives ul ul{margin-left: 30px;}.hk-archives span{line-height: 32px;font-size: 16px;}.hk-archives a{color:#428bca;}.hk-archives a:hover{color:#5EB309;}</style>
                <div class="hk-archives">
                    <iframe src="//1254408948.vod2.myqcloud.com/vod-player/1254408948/7447398156240077990/tcplayer/console/vod-player.html?autoplay=false&width=1920&height=1080" frameborder="0" scrolling="no" width="100%" height="1080" allowfullscreen >

                    </iframe>
                    <iframe src="//1254408948.vod2.myqcloud.com/vod-player/1254408948/7447398156238826834/tcplayer/console/vod-player.html?autoplay=false&width=1920&height=1080" frameborder="0" scrolling="no" width="100%" height="1080" allowfullscreen >
                    </iframe>
<!--
注意事项：
* 设置allowfullscreen属性将允许iframe内的页面调用Full Screen API，如去掉该属性，播放器的全屏按钮将无法使用。
* IE10以下（包括IE10）不支持Full Screen API，全屏功能将无法使用，只能通过外部CSS样式设置iframe全屏，并配合浏览器全屏功能进行全屏显示（快捷键为F11）
-->
        <!--
        注意事项：
        * 设置allowfullscreen属性将允许iframe内的页面调用Full Screen API，如去掉该属性，播放器的全屏按钮将无法使用。
        * IE10以下（包括IE10）不支持Full Screen API，全屏功能将无法使用，只能通过外部CSS样式设置iframe全屏，并配合浏览器全屏功能进行全屏显示（快捷键为F11）
        -->
                </div>
            </div>
        </div>
       
    </main>

</div>
<!--签名请求-->
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- <script src="//imgcache.qq.com/open/qcloud/js/vod/crypto.js"></script> -->
<script src="//imgcache.qq.com/open/qcloud/js/vod/sdk/ugcUploader.js"></script>
<!-- <script src="//video.qcloud.com/signature/lib/ugcUploader.js"></script> -->
<script type="text/javascript">

	
	var index = 0;
	var cosBox = [];
	/** 
	 * 计算签名
	**/
	var getSignature = function(callback){
		$.ajax({
                    url: 'signature',
                    data: JSON.stringify({
                            "Action":"GetVodSignatureV2"
                    }),
                    type: 'POST',
                    dataType: 'json',
                    success: function(res){
                        if(res.meta.code ==200){
                            callback(res.data);
                        }

                        if(res.returnData && res.returnData.signature) {
                                callback(res.returnData.signature);
                        } else {
                                return '获取签名失败';
                        }

                    }
		});
	};

	/**
	 * 添加上传信息模块
	 */
	
	var addUploaderMsgBox = function(type){
		var html = '<div class="uploaderMsgBox" name="box'+index+'">';
		if(!type || type == 'hasVideo') {
			html += '视频名称：<span name="videoname'+index+'"></span>；' + 
				'计算sha进度：<span name="videosha'+index+'">0%</span>；' + 
				'上传进度：<span name="videocurr'+index+'">0%</span>；' + 
				'fileId：<span name="videofileId'+index+'">   </span>；' + 
				'上传结果：<span name="videoresult'+index+'">   </span>；<br>' + 
				'地址：<span name="videourl'+index+'">   </span>；'+
				'<a href="javascript:void(0);" name="cancel'+index+'" cosnum='+index+' act="cancel-upload">取消上传</a><br>';
		}
		
		if(!type || type == 'hasCover') {
			html += '封面名称：<span name="covername'+index+'"></span>；' + 
			'计算sha进度：<span name="coversha'+index+'">0%</span>；' + 
			'上传进度：<span name="covercurr'+index+'">0%</span>；' + 
			'上传结果：<span name="coverresult'+index+'">   </span>；<br>' + 
			'地址：<span name="coverurl'+index+'">   </span>；<br>' + 
			'</div>'
		}
		html += '</div>';
		
		$('#resultBox').append(html);
		return index++;
	};

	/** 
	 * 示例1：直接上传视频
	**/
	$('#uploadVideoNow-file').on('change', function (e) {
		var num = addUploaderMsgBox('hasVideo');
		var videoFile = this.files[0];
		$('#result').append(videoFile.name +　'\n');
		var resultMsg = qcVideo.ugcUploader.start({
		videoFile: videoFile,
		getSignature: getSignature,
		allowAudio: 1,
		success: function(result){
			if(result.type == 'video') {
				$('[name=videoresult'+num+']').text('上传成功');
				$('[name=cancel'+num+']').remove();
				cosBox[num] = null;
			} else if (result.type == 'cover') {
				$('[name=coverresult'+num+']').text('上传成功');
			}
		},
		error: function(result){
			if(result.type == 'video') {
				$('[name=videoresult'+num+']').text('上传失败>>'+result.msg);
			} else if (result.type == 'cover') {
				$('[name=coverresult'+num+']').text('上传失败>>'+result.msg);
			}
		},
		progress: function(result){
			if(result.type == 'video') {
				$('[name=videoname'+num+']').text(result.name);
				$('[name=videosha'+num+']').text(Math.floor(result.shacurr*100)+'%');
				$('[name=videocurr'+num+']').text(Math.floor(result.curr*100)+'%');
				$('[name=cancel'+num+']').attr('taskId', result.taskId);
				cosBox[num] = result.cos;
			} else if (result.type == 'cover') {
				$('[name=covername'+num+']').text(result.name);
				$('[name=coversha'+num+']').text(Math.floor(result.shacurr*100)+'%');
				$('[name=covercurr'+num+']').text(Math.floor(result.curr*100)+'%');
			}
			
		},
		finish: function(result){
			$('[name=videofileId'+num+']').text(result.fileId);
			$('[name=videourl'+num+']').text(result.videoUrl);
			if(result.message) {
				$('[name=videofileId'+num+']').text(result.message);
			}
		}
		});
		if(resultMsg){
			$('[name=box'+num+']').text(resultMsg);
		}
		$('#form1')[0].reset();
	});
	$('#uploadVideoNow').on('click', function () {
		$('#uploadVideoNow-file').click();
	});
	/*
	 * 取消上传绑定事件，示例一与示例二通用
	 */
	$('#resultBox').on('click', '[act=cancel-upload]', function() {
		var cancelresult = qcVideo.ugcUploader.cancel({
			cos: cosBox[$(this).attr('cosnum')],
			taskId: $(this).attr('taskId')
		});
		console.log(cancelresult);
	});


	/** 
	 * 示例2：上传视频+封面
	**/
	var videoFileList = [];
	var coverFileList = [];
	// 给addVideo添加监听事件
	$('#addVideo-file').on('change', function (e) {
		var videoFile = this.files[0];
		videoFileList[0] = videoFile;
		$('#result').append(videoFile.name +　'\n');

	});
	$('#addVideo').on('click', function () {
		$('#addVideo-file').click();
	});
	// 给addCover添加监听事件
	$('#addCover-file').on('change', function (e) {
		var coverFile = this.files[0];
		coverFileList[0] = coverFile;
		$('#result').append(coverFile.name +　'\n');

	});
	$('#addCover').on('click', function () {
		$('#addCover-file').click();
	});

	var startUploader = function(){
		if(videoFileList.length){
			var num = addUploaderMsgBox();
			if(!coverFileList[0]){
				$('[name=covername'+num+']').text('没有上传封面');
			}
			var resultMsg = qcVideo.ugcUploader.start({
				videoFile: videoFileList[0],
				coverFile: coverFileList[0],
				getSignature: getSignature,
				allowAudio: 1,
				success: function(result){
					if(result.type == 'video') {
						$('[name=videoresult'+num+']').text('上传成功');
						$('[name=cancel'+num+']').remove();
						cosBox[num] = null;
					} else if (result.type == 'cover') {
						$('[name=coverresult'+num+']').text('上传成功');
					}
				},
				error: function(result){
					if(result.type == 'video') {
						$('[name=videoresult'+num+']').text('上传失败>>'+result.msg);
					} else if (result.type == 'cover') {
						$('[name=coverresult'+num+']').text('上传失败>>'+result.msg);
					}
				},
				progress: function(result){
					if(result.type == 'video') {
						$('[name=videoname'+num+']').text(result.name);
						$('[name=videosha'+num+']').text(Math.floor(result.shacurr*100)+'%');
						$('[name=videocurr'+num+']').text(Math.floor(result.curr*100)+'%');
						$('[name=cancel'+num+']').attr('taskId', result.taskId);
						cosBox[num] = result.cos;
					} else if (result.type == 'cover') {
						$('[name=covername'+num+']').text(result.name);
						$('[name=coversha'+num+']').text(Math.floor(result.shacurr*100)+'%');
						$('[name=covercurr'+num+']').text(Math.floor(result.curr*100)+'%');
					}
				},
				finish: function(result){
					$('[name=videofileId'+num+']').text(result.fileId);
					$('[name=videourl'+num+']').text(result.videoUrl);
					if(result.coverUrl) {
						$('[name=coverurl'+num+']').text(result.coverUrl);
					}
					if(result.message) {
						$('[name=videofileId'+num+']').text(result.message);
					}
				}
			});
			if(resultMsg){
				$('[name=box'+num+']').text(resultMsg);
			}
		} else {
			$('#result').append('请添加视频！\n');
		}
		
	}

	// 上传按钮点击事件
	$('#uploadFile').on('click', function () {
		var secretId = $('#secretId').val();
		var secretKey = $('#secretKey').val();
		startUploader();
		$('#form2')[0].reset();
	});

	/** 
	 * 示例3：直修改封面
	**/
	$('#changeCover-file').on('change', function (e) {
		var num = addUploaderMsgBox('hasCover');
		var changeCoverFile = this.files[0];
		var fileId = $('[name=fileId]').val();
		var resultMsg = qcVideo.ugcUploader.start({
		fileId: fileId,
		coverFile: changeCoverFile,
		getSignature: getSignature,
		success: function(result){
			if(result.type == 'video') {
				$('[name=videoresult'+num+']').text('上传成功');
			} else if (result.type == 'cover') {
				$('[name=coverresult'+num+']').text('上传成功');
			}
		},
		error: function(result){
			if(result.type == 'video') {
				$('[name=videoresult'+num+']').text('上传失败>>'+result.msg);
			} else if (result.type == 'cover') {
				$('[name=coverresult'+num+']').text('上传失败>>'+result.msg);
			}
		},
		progress: function(result){
			if(result.type == 'video') {
				$('[name=videoname'+num+']').text(result.name);
				$('[name=videosha'+num+']').text(Math.floor(result.shacurr*100)+'%');
				$('[name=videocurr'+num+']').text(Math.floor(result.curr*100)+'%');
			} else if (result.type == 'cover') {
				$('[name=covername'+num+']').text(result.name);
				$('[name=coversha'+num+']').text(Math.floor(result.shacurr*100)+'%');
				$('[name=covercurr'+num+']').text(Math.floor(result.curr*100)+'%');
			}
			
		},
		finish: function(result){
			$('[name=coverurl'+num+']').text(result.coverUrl);
			if(result.message) {
				$('[name=coverurl'+num+']').text(result.message);
			}
		}
		});
		if(resultMsg){
			$('[name=box'+num+']').text(resultMsg);
		}
		$('#form1')[0].reset();
	});
	$('#changeCover').on('click', function () {
		$('#changeCover-file').click();
	});
</script>
<script>
	var _mtac = {};
	(function() {
		var mta = document.createElement("script");
		mta.src = "//pingjs.qq.com/h5/stats.js?v2.0.2";
		mta.setAttribute("name", "MTAH5");
		mta.setAttribute("sid", "500586412");
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(mta, s);
	})();
</script>

@endsection