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
                    <h4>충주공장</h4>
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
                        <li class="active"><a href="/introduction/factory_summary.php">공장 개요</a></li>
                        <li><a href="/introduction/manufacturing.php">제조 설비</a></li>
                    </ul>
                </nav>
                <div class="section-content">
                    <article class="factory-summary">
                        <div class="item-img">
                            <img src="/comm/images/introduction/img_factory_summary.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details">
                            <h6>공장 현황</h6>
                            <dl>
                                <dt>소재지</dt>
                                <dd>충북 충주시 신니면 덕고개로 416</dd>
                                <dt>공장면적</dt>
                                <dd>35,669 ㎡</dd>
                                <dt>생산인원</dt>
                                <dd>60명</dd>
                                <dt>생산능력</dt>
                                <dd>1,700 TON/월(21,000 TON/년)</dd>
                                <dt>공장인증</dt>
                                <dd>건축1급(국토해양부장관)</dd>
                            </dl>
                            <div class="btn-area">
                                <a href="#" class="btn btn-default" role="button">제조 설비 확인하기</a>
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
</body>
</html>