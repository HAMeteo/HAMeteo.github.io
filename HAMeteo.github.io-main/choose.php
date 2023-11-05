<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="page-enter" content="revealTrans(duration=5.0,transition=20)">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>火腿气象台 | HAMeteo</title>
    <link rel="prefetch" href="/module/header.html">
    <link rel="prefetch" href="/module/footer.html">
    <meta name="keywords" content="业余无线电,业余无线电爱好者,无线电,气象台,气象云图,卫星云图,卫星,HAMeteo,HAM meteorologique" />
    <meta name="description" content="" />
    <meta name="application-name" content="火腿气象台 | HAMeteo" />
    <meta name="msapplication-tooltip" content="火腿气象台 | HAMeteo" />
    <meta name="revisit-after" content="1days" />
    <meta name="revised" content="BG7YST客席, 2023年7月25日" />
    <meta name="author" content="BG7YST客席, maqingshui@outlook.com">
    <meta name="renderer" content="webkit">
    <meta property="og:title" content="火腿气象台 | HAMeteo">
    <meta property="og:type" content="website">
    <meta property="og:url" content=" https://HAMeteo.top/">
    <meta name="copyright" content="本网站版权归火腿气象台所有">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/js/function.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/bootstrap-icons/1.10.4/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/css/index.css" />
    <script>
        function NOAA() {
            NOAAstyle.style.display = "block";
            fengyunstyle.style.display = "none";
            GK2Astyle.style.display = "none";
        }
        function GK2A() {
            GK2Astyle.style.display = "block";
            fengyunstyle.style.display = "none";
            NOAAstyle.style.display = "none";
        }
        function fengyun() {
            fengyunstyle.style.display = "block";
            GK2Astyle.style.display                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         = "none";
            NOAAstyle.style.display = "none";
        }
    </script>
</head>

<body id="top">
    <!--页眉 开始-->
    <div class="header">
        <div class="logo">
            <a class="logo" href="/">
                <span alt="logo">火腿气象台 | HAMeteo</span>
            </a>
        </div>
        <noscript>请您启用 JavaScript 以获得最佳浏览体验！</noscript>
    </div>
    <div class="stereoscopic-line"></div>
    <!--页眉 结束-->
    <!--内容部分开始-->
    <div class="center">
        <div class="welcome">
            <h1 class="disappear">欢迎访问火腿气象台</h1>
            <h2 class="welcometitle Hero-title">欢迎访问火腿气象台</h2>
            <h5>Welcome to HAMeteo</h5>
        </div>
        <div id="content">
            <div class="Slide-infor">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-5 col-lg-4 box-shadow-panel indexleft">
                            <h2>卫星系列</h2>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading1">
                                        <button onclick="NOAA()" class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" >
                                            NOAA系列极地轨道气象卫星
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body pull-down-menu">
                                            <ul class="satellite-list">
                                                <li><a href="/choose.php?NOAA-19">NOAA 19</a></li>
                                                <div class="stereoscopic-line"></div>
                                                <li><a href="/choose.php?NOAA-18">NOAA 18</a></li>
                                                <div class="stereoscopic-line"></div>
                                                <li><a href="/choose.php?NOAA-15">NOAA 15</a></li>
                                                <div class="stereoscopic-line"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button onclick="GK2A()" class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2">
                                            GK2A 地球同步轨道气象卫星
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body pull-down-menu">
                                            <ul class="satellite-list">
                                                <li><a href="/">NOAA 19</a></li>
                                                <div class="stereoscopic-line"></div>
                                                <li><a href="/">NOAA 18</a></li>
                                                <div class="stereoscopic-line"></div>
                                                <li><a href="/">NOAA 15</a></li>
                                                <div class="stereoscopic-line"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button onclick="fengyun()" class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3">
                                            风云系列地球同步轨道气象卫星
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body pull-down-menu">
                                            <ul class="satellite-list">
                                                <li><a href="/choose.php?NOAA-19">NOAA 19</a></li>
                                                <div class="stereoscopic-line"></div>
                                                <li><a href="/choose.php?NOAA-18">NOAA 18</a></li>
                                                <div class="stereoscopic-line"></div>
                                                <li><a href="/choose.php?NOAA-15">NOAA 15</a></li>
                                                <div class="stereoscopic-line"></div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-7 col-lg-8 box-shadow-panel indexleft">
                            <div id="NOAAstyle">
                                <h4>NOAA系列卫星介绍</h4>
                                <p class="synopsis recommendation">NOAA是太阳同步极轨卫星，采用双星运行，同一地区每天可有四次过境机会。第五代（NOAA-15—19）传感器采用改进型甚高分辨率辐射仪（AVHRR/3），和先进TIROS业务垂直探测器（ATOVS），包括高分辨率红外辐射探测仪（HIRS-3）、先进的微波探测装置A型（AMSU-A）和先进的微波探测装置B型（AMSU-B）。其中AVHRR/3传感器包括5个波段，可见光红色波段、近红外波段、中红外波段和两个热红外波段。NOAA卫星共经历了5代，目前使用较多的为第五代NOAA卫星，包括NOAA-15—NOAA-18；以下为部分NOAA卫星的发射时间和基本轨道参数。</p>
                                <p class="synopsis">NOAA-15卫星<br>发射时间1998年5月13号，正式运行日期1998年12月15日<br>轨道高度：808公里，轨道倾角：98.6度，轨道周期：101.2分</p>
                                <p class="synopsis">NOAA-18卫星<br>发射时间2005年5月11号，正式运行日期2005年6月26日<br>轨道高度：854公里，轨道倾角：未知，轨道周期：102分</p>
                                <p class="synopsis">NOAA-19卫星<br>发射时间2009年2月6号，正式运行日期2009年 月 日<br>轨道高度：852.2公里，轨道倾角：98.7，轨道周期：102.1分</p>
                            </div>
                            <div id="fengyunstyle" style="display:none">
                                <h4>风云系列气象卫星简介</h4>
                                <p class="synopsis recommendation">我国早在二十世纪七十年代就开始发展我国的气象卫星，截至2023年4月已发射了20颗气象卫星，其中8颗在轨运行，分别实现了极轨卫星和静止卫星的业务化运行，是继美国、俄罗斯之后第三个同时拥有极轨气象卫星和静止气象卫星的国家。</p>
                                <p class="synopsis recommendation">在世界气象组织（WMO）协调和管理下，世界各国已经实现了气象观测资料的交换和获取全球气象观测资料的目的，全球业务气象卫星探测系统就是在WMO协调下，通过各气象卫星发射和运行的国家共同努力建成的天基探测系统。中国的业务气象卫星风云三号和风云二号已经成为了全球业务气象卫星探测系统的重要成员。他们在覆盖范围和分辨率上相辅相成，成为中国获取全球资料和满足区域灾害性天气和环境监测、气象服务和地球系统科学研究的重要工具。</p>
                                <p class="synopsis recommendation">风云系列气象卫星已经成为代表中国力量、具有广泛国际声誉的对地观测卫星，被联合国世界气象组织纳入全球对地观测业务卫星序列，提升了我国及国际最先进的中长期数值天气预报模式的预报时效和精度；风云系列气象卫星还承担了国际减灾宪章机制的中方值班卫星任务，在国际气象防灾减灾工作中发挥着日益重要的作用。</p>
                                <p class="synopsis"><a href="http://www.nsmc.org.cn/nsmc/cn/satellite/index.html">详细资料：国家卫星气象中心(国家空间天气监测预警中心)</a></p>
                            </div>
                            <div id="GK2Astyle" style="display:none">
                                <h4>GK2A 地球同步卫星简介</h4>
                                <p class="synopsis recommendation">
                                    2019年6月27日,韩国气象厅披露,韩国新一代地球静止轨道气象卫星"千里眼"2A经过约6个月的在轨试验,正式交付使用。该星全名为地球静止轨道-韩国多用途卫星2A(GK2A),是2010年发射的"通信、海洋和气象卫星"(COMS,又名"千里眼"卫星,后更名为GK1)的后续星,于2018年12月5日搭乘"阿里安"5ECA火箭在库鲁航天发射场成功发射,并于2019年1月26日发回首批图像。GK2A性能先进,与欧美第三代静止轨道气象卫星基本处于同一水平。</p>
                                <p class="synopsis recommendation">与COMS（通信、海洋和气象卫星）相比，2018年12月5日发射的GK2A可用于多种观测，因为它有前5个频道中的16个频道。在此基础上，共生产52种气象产品。GK2A可以在10分钟的时间间隔内观测整个区域，对恶劣天气现象的监测更加迅速，以便减少气象灾害。此外，高性能气象传感器（AMI）提供更精确的观测。</p>
                                <p class="synopsis recommendation">韩国新一代气象卫星GK2A性能先进，加上与之配套的地面系统和应用技术开发，大幅提升了韩国气象预报的准确性和时效性，提升了韩国应对突发性气象灾害的能力。韩国气象厅和韩国国家气象卫星中心研发的基于GK2A卫星的气象产品，提供临近预报、热带气旋和海洋、水文及融合技术、气候变化监测及环境气象学等4大类共计52种产品，这些产品可用于预报台风、暴雨、暴雪、雾霾、 沙尘等。</p>
                                <p class="synopsis"><a href="https://www.gisrsdata.com/pages/5470fc">详细资料： 地信遥感数据汇</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 box-shadow-panel indexleft">
                        </div>
                        <div class="col-xs-12 col-md-6 box-shadow-panel indexright" style="height: 300px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--页脚 开始-->
    <div class="footer"></div>
    <!--页脚 结束-->
</body>

</html>