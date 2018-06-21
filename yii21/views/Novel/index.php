<?php
use \yii\helpers\Html;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A67小说</title>
<meta name="Description" content="A67小说！" />
<link href="css/style.css" type="text/css"  rel="stylesheet"/>
<link href="css/xiaoshuocontent.css" type="text/css"  rel="stylesheet"/>

<div id="main">
    <div class="banner980"><img src="images/banner980.jpg" width="980" height="60" /></div>
    <div class="weizhi">当前位置：<a href="">A67首页</a> > <a href="">手机小说</a> > <a href="" title="玄幻小说">玄幻小说</a> > 斗破苍穹</div>
    <div class="left">
        <?php foreach ($novel as $nov):?>
        <div class="pic"><img alt="<?= Html::encode($nov['title'])?> 缩略图" src="<?= Html::encode($nov['img_url'])?>" /></div>

        <div class="info">
            <div class="pf">
                <H1><?= Html::encode($nov['title'])?></H1>
                <li>用户评分：<font id="rank"><?= Html::encode($nov['score'])?></font> 分 （共有<font id="rank_num">8272</font>人评分）</li>
                <li><span>评分：</span>
                    <div id="rank_pic">
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_1.gif" border="0" /><img src="images/rank_2.gif" border="0" />
                        <img src="images/rank_3.gif" border="0" /><img src="images/rank_4.gif" border="0" />
                    </div></li>
            </div>
            <ul>
                <li>作者：<a href="" target="_blank"><?= Html::encode($nov['author_id'])?></a></li>
                <li>状态：<?= Html::encode($nov['status'])?></li>
                <li>标签：<a href="" target="_blank">穿越</a> <a href="" target="_blank">升级</a> <a href="" target="_blank">功法进化</a> <a href="" target="_blank">热血</a> <a href="" target="_blank">萧炎</a></li>
                <li>类型：<a href="" target="_blank">玄幻</a> <a href="" target="_blank">魔法</a></li>
                <li>最新：<a href="" target="_blank">第八百四十八章 抵达和平镇</a></li>
            </ul>
            <div class="downtb">
                <a href="#" target="_blank"><img alt="斗破苍穹最新章节列表" src="images/read.gif" border="0" /></a>
                <a href="#downloadurls"><img alt="斗破苍穹TXT全集下载" src="images/txtdown.gif" border="0" /></a>
                <!-- JiaThis Button BEGIN -->
                <a href="" class="jiathis" target="_blank"><img src="images/fenxiang.gif" width="80" height="30" alt="分享斗破苍穹" border="0" id="jiathis_a"/></a>
                <script type="text/javascript" src="http://www.jiathis.com/code/jia.js?uid=92057" charset="utf-8"></script>
                <!-- JiaThis Button END -->
            </div>

        </div>
        <div class="content250"><iframe src="http://www.a67.com/proxy.html?id=45918" width="250" height="250" scrolling="no" frameborder="0" style="display:block;margin:0"></iframe></div>
        <H2>斗破苍穹内容简介</H2>
        <div class="jieshao">
            <div class="higher">
                <?= Html::encode($nov['desc'])?>
                <p><strong>更多《斗破苍穹》章节请全集TXT下载&middot;&middot;&middot;&middot;&middot;</strong></p>
            </div>
        </div>
        <H2>斗破苍穹作品相关...</H2>
        <div class="zhangjie">
            <ul>
                <li><a href="" target="_blank">上架感言</a></li>
                <li><a href="" target="_blank">土豆三江访谈感言</a></li>
                <li><a href="" target="_blank">封推感言</a></li>
            </ul>
        </div>
        <?php endforeach?>
        <H2>斗破苍穹正文...</H2>
        <div class="zhangjie">
            <ul>
                <li><a href="19647.html" target="_blank">第一章 陨落的天才</a></li><li><a href="19648.html" target="_blank">第二章 斗气大陆</a></li><li><a href="19649.html" target="_blank">第三章 客人【求收藏，求推荐票^_^】</a></li>

                <li><a href="251720.html" target="_blank">第八百四十五章 欣蓝</a></li><li><a href="251721.html" target="_blank">第八百四十六章 见面</a></li><li><a href="251722.html" target="_blank">第八百四十七章 办法</a></li>



                <li><a href="251723.html" target="_blank">第八百四十八章 抵达和平镇</a></li>
            </ul>
        </div>
        <H2 id="downloadurls">斗破苍穹下载地址</H2>
        <div class="downurls">
            <ul>
                <li><a href="#" target="_blank" >斗破苍穹TXT全集下载地址</a> 格式：TXT<span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">下载到电脑</a></span></li>
                <li><a href="">斗破苍穹JAR全集下载地址</a> 格式：JAR<span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">下载到电脑</a></span></li>
                <li><a href="" target="_blank" >斗破苍穹JAD全集下载地址</a> 格式：JAD<span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-0" target="_blank" rel="nofollow">下载到电脑</a></span></li>
                <li><a href="" target="_blank">斗破苍穹UMD全集下载地址</a> 格式：UMD<span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">下载到电脑</a></span></li>
                <li><a href="" target="_blank">斗破苍穹ZIP全集下载地址</a> 格式：ZIP<span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">迅雷高速下载</a></span><span><a href="http://www.a67.com/download/26059-1" target="_blank" rel="nofollow">下载到电脑</a></span></li>
            </ul>
        </div>
    </div>




