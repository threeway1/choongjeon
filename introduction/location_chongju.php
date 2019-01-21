<?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/dochead.php"); ?>
<link rel="stylesheet" href="/comm/css/sub.css">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/header.php"); ?>
    
    <div class="page-header">
        <div class="backdrop"></div>
        <div class="container">
            <div class="page-intro">
                <h3><span>C</span>OMPANY <span>I</span>NTRODUCTION</h3>
                <p>충전공영개발의 회사소개입니다.</p>
            </div>
            <nav class="snb-nav">
                <ul>
                    <li class="active"><a href="#">CEO 인사말</a></li>
                    <li><a href="#">회사개요</a></li>
                    <li><a href="#">회사연혁</a></li>
                    <li><a href="#">조직구성</a></li>
                    <li><a href="#">충주공장</a></li>
                    <li><a href="#">보유기술</a></li>
                    <li><a href="#">찾아오시는 길</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    <!-- Content -->
    <main id="content" class="introduction">
        <div class="container">
            <section>
                <div class="section-header">
                    <h4>찾아오시는 길</h4>
                    <div class="page-path">
                        <ol>
                            <li class="home"><a href="#"><img src="/comm/images/sub/ico_home.jpg" alt="메인이동"></a></li>
                            <li>회사소개</li>
                            <li>CEO인사말</li>
                        </ol>
                    </div>
                </div>
                <nav class="tab-menu">
                    <ul>
                        <li><a href="/introduction/location.php">서울 본사</a></li>
                        <li class="active"><a href="/introduction/location_chongju.php">충주 공장</a></li>
                    </ul>
                </nav>
                <div class="section-content">
                    <article class="location-chongju">
                        <div class="map">
                            <div id="daumRoughmapContainer1547623042812" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                        </div>
                        <div class="details">
                            <div class="information">
                                <ul>
                                    <li><b>주소</b> <address>충북 충주시 신니면 덕고개로 416</address>
                                    </li>
                                    <li><b>전화</b> 043-852-2200~1</li>
                                    <li><b>팩스</b> 043-851-9300</li>
                                </ul>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-blue" role="button">자세히 보기</a>
                                    <a href="#" class="btn btn-gray" role="button">인쇄하기</a>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/footer.php"); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/inc/docfoot.php"); ?>
    <script src="/assets/js/sub.js"></script>
    <script class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
    <script>
        new daum.roughmap.Lander({
            "timestamp" : "1547623042812",
            "key" : "rsur",
            "mapWidth" : "1170",
            "mapHeight" : "540"
        }).render();
    </script>
</body>
</html>