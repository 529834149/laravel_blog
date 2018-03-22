<nav>
    <ul>
        <li onclick="read({{$case_article[0]->aid}});">
            <a href="/article/{{$case_article[0]->aid}}" class="picbox" rel="bookmark" onclick="read({{$case_article[0]->aid}});">
                <img src="http://www.mrszhao.com/zb_users/upload/2017/09/201709261506406946224693.jpg" class="thumb" width="94" height="64" alt="CSS3案例集11：columns多列实现报纸排版效果"></a>
            <h4 class="title" onclick="read({{$case_article[0]->aid}});">
                <a href="/article/{{$case_article[0]->aid}}" title="CSS3案例集11：columns多列实现报纸排版效果">{{$case_article[0]->article_title}}</a></h4>
            <p class="postmeta">
                <span class="time">2017-09-26</span>
                <span class="eye">阅读（
                    <?php 
                        $read_key = 'article_read_aid_'.$case_article[0]->aid;
                        echo \Cache::get($read_key) ?\Cache::get($read_key) :0;

                    ?>
                    ）</span></p>
        </li>
        <li>
            <a href="/article/{{$case_article[1]->aid}}" class="picbox" rel="bookmark" onclick="read({{$case_article[1]->aid}});">
                <img src="http://www.mrszhao.com/zb_users/upload/2017/10/201710231508729688202176.gif" class="thumb" width="94" height="64" alt="CSS3案例集12：响应式布局初体验！(更新移动端导航菜单)"></a>
            <h4 class="title" onclick="read({{$case_article[1]->aid}});">
                <a href="/article/{{$case_article[1]->aid}}" title="CSS3案例集12：响应式布局初体验！(更新移动端导航菜单)">{{$case_article[1]->article_title}}</a></h4>
            <p class="postmeta">
                <span class="time">2018-01-30</span>
                <span class="eye">阅读（
                    <?php 
                        $read_key = 'article_read_aid_'.$case_article[1]->aid;
                        echo \Cache::get($read_key) ?\Cache::get($read_key) :0;

                    ?>
                    ）</span></p>
        </li>
        <li>
            <a href="/article/{{$case_article[2]->aid}}" class="picbox" rel="bookmark" onclick="read({{$case_article[2]->aid}});">
                <img src="http://www.mrszhao.com/zb_users/upload/2017/10/201710231508741412315508.jpg" class="thumb" width="94" height="64" alt="CSS3案例集13：改版ofo小黄车官网响应式布局"></a>
            <h4 class="title" onclick="read({{$case_article[2]->aid}});">
                <a href="/article/{{$case_article[2]->aid}}" title="CSS3案例集13：改版ofo小黄车官网响应式布局">{{$case_article[2]->article_title}}</a></h4>
            <p class="postmeta">
                <span class="time">2017-10-23</span>
                <span class="eye">阅读（
                    <?php 
                        $read_key = 'article_read_aid_'.$case_article[2]->aid;
                        echo \Cache::get($read_key) ?\Cache::get($read_key) :0;

                    ?>
                    
                    ）</span></p>
        </li>
        <li>
            <a href="/article/{{$case_article[3]->aid}}" class="picbox" rel="bookmark" onclick="read({{$case_article[3]->aid}});">
                <img src="http://www.mrszhao.com/zb_users/upload/2017/10/201710251508914863685423.jpg" class="thumb" width="94" height="64" alt="成都华信智原UI1705班ps基础课程结课作品展！"></a>
            <h4 class="title" onclick="read({{$case_article[3]->aid}});">
                <a href="/article/{{$case_article[3]->aid}}" title="成都华信智原UI1705班ps基础课程结课作品展！">{{$case_article[3]->article_title}}</a></h4>
            <p class="postmeta">
                <span class="time">2017-11-13</span>
                <span class="eye">阅读（
                    <?php 
                        $read_key = 'article_read_aid_'.$case_article[3]->aid;
                        echo \Cache::get($read_key) ?\Cache::get($read_key) :0;

                    ?>
                    
                    ）</span></p>
        </li>
        <li>
            <a href="/article/{{$case_article[4]->aid}}" class="picbox" rel="bookmark" onclick="read({{$case_article[4]->aid}});">
                <img src="http://www.mrszhao.com/zb_users/upload/2018/01/201801081515394740565152.jpg" class="thumb" width="94" height="64" alt="华信智原UI1705班html+css结课作业展示！"></a>
            <h4 class="title" onclick="read({{$case_article[4]->aid}});">
                <a href="/article/{{$case_article[4]->aid}}" title="华信智原UI1705班html+css结课作业展示！">{{$case_article[4]->article_title}}</a></h4>
            <p class="postmeta">
                <span class="time">2018-01-08</span>
                <span class="eye">阅读（
                    <?php 
                        $read_key = 'article_read_aid_'.$case_article[4]->aid;
                        echo \Cache::get($read_key) ?\Cache::get($read_key) :0;

                    ?>
                    ）</span></p>
        </li>
    </ul>
</nav>