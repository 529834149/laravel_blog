;(function(window,$){
    var NET_URL = 'http://net.blogchina.com/';
    var uid = $('#show_author_id').val();
    var aid = $("#show_aid").val();
    var issub = false;
    var  Editorlist  = {
        init:function(){
            this.submitCommon();
         
        },
        getCookie:function(objName)
        {
            var arrStr = document.cookie.split("; ");
            for(var i = 0;i < arrStr.length;i ++)
            {             
                var temp = arrStr[i].split("=");
                if(temp[0] == objName) return unescape(temp[1]);
            }     
        },
        submitCommon: function(){
           
            $('.getcomment').click(function(){
                var editor = $('#myEditor').val();
                var aid = $('#aid').val();
                $.ajax({
                    url: '/article_common',
                    type: 'post',
                    data: {aid: aid, content: editor},
                    dataType: 'json',
                    success: function(date){
                            console.log(date);
                    }
                })
            })
//            $.ajax({
//                url: NET_URL + 'blog/article/add_click_num',
//                type: 'get',
//                data: {aid: aid, user_id: uid, type: 'click', incr: 'y'},
//                dataType: 'jsonp',
//                jsonp: 'callback',
//                success: function(msg){
//                    if(msg.meta.code == 200){
//                        console.log('点击数加1');
//                    }
//                }
//            })
        },

    };
    window.Editorlist = Editorlist;
    $(function () {
        Editorlist.init();
    })
}(window,jQuery));