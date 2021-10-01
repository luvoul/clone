<?php include_once "{$document}include/header.php"; ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jiiji</title>
    <style>
        #header {position: relative; padding-top: 35px;}
        #header .first {
            display: flex; 
            flex-direction: row;
            padding-bottom: 35px;
        }
        #header .logo{
            margin-left: 50px;
            margin-right: 50px;
            width: 245px;
            height: 76px;
        }
        #header a {
            text-decoration-line: none;
            text-align: center;
            item-align: center;
            padding-left: 30px;
            padding-right: 30px;
            font-weight: bold;
            color: black;
        }
        #header button {margin-left: 30px;}
        #header .menu {
            padding-top: 20px; 
            padding-bottom: 20px;
        }
        *{margin:0;padding:0;}
        ul,li{list-style:none;}
        #slide{
            height:700px;
            position:relative;
            overflow:hidden;
        }
        #slide ul{width:400%;height:100%;transition:1s;}
        #slide ul:after{content:"";display:block;clear:both;}
        #slide li{
            background-size: 100%;
            float:left;
            width:25%;
            height:100%;
        }
        #slide li:nth-child(1){background-image: url("/img/m_main_visual1.jpg");}
        #slide li:nth-child(2){background-image: url("/img/m_main_visual2.jpg");}
        #slide li:nth-child(3){background-image: url("/img/m_main_visual3.jpg");}
        #slide input{display:none;}
        #slide label{display:inline-block;vertical-align:middle;width:10px;height:10px;border:2px solid #666;background:#fff;transition:0.3s;border-radius:50%;cursor:pointer;}
        #slide .mv{
            text-align:left;
            position:absolute;
            bottom:10px;
            left:0;
            width:100%;
            padding-left: 150px;
            margin-bottom: 50px;
        }
        #mv1:checked~ul{margin-left:0%;}
        #mv2:checked~ul{margin-left:-100%;}
        #mv3:checked~ul{margin-left:-200%;}
        #mv1:checked~.mv>label:nth-child(1){background:#666;}
        #mv2:checked~.mv>label:nth-child(2){background:#666;}
        #mv3:checked~.mv>label:nth-child(3){background:#666;}
    </style>
</head>
<body> -->
    <!-- <div id="header">
        <div class="first">
            <a href="">진료시간</a>
            <a href="">오시는길</a>
            <a href="">원장소개</a>
            <h1 class="logo">
                <a href="/"><img src="/img/logo.jpg" /></a>
            </h1>
            <a href="">회원가입</a>
            <a href="">로그인</a>
            <button />
        </div>
        <hr/>
        <div class="menu">
            <a href="">킴스소개</a>
            <a href="">킴스특화진료</a>
            <a href="">킴스만성질환</a>
            <a href="">킴스언론보도</a>
            <a href="">킴스상담예약</a>
            <a href="">킴스커뮤니티</a>
        </div>
    <div id="slide">
        <input type="radio" name="mv" id="mv1" checked>
        <input type="radio" name="mv" id="mv2">
        <input type="radio" name="mv" id="mv3">
        <ul>
            <li>같이의 가치<br />아낌없는 가족사랑<br />그대의 손을 놓지 않겠습니다.</li>
            <li>110만 환자들과<br />같이했던 시간<br />30년 경력의 노하우</li>
            <li>100세 시대,<br />맞춤진료<br >양ㆍ한방 융합진료로 치매예방 및 치료를</li>
        </ul>
        <p class="mv">
            <label for="mv1"></label>
            <label for="mv2"></label>
            <label for="mv3"></label>
        </p>
    </div>

    <div id="container"></div>

    <div id="footer"></div>

</body>
</html> -->
<style>
    .parent { width:100%; float:left; padding: 35px; } 
    .parent div { width:33.33%; float:left;  }
    .menu {padding: 25px;}
    .menu a {padding: 20px;font-weight: bold;}
    ul,li{list-style:none;}
    .slide{
            width: 115%;
            height:650px;
            position:relative;
            overflow:hidden;
        }
    .slide ul{width:400%;height:100%;transition:1s;}
    .slide ul:after{content:"";display:block;clear:both;}
    .slide li{
        padding-top: 200px;
        padding-left: 100px;
        background-size: 100%;
        float:left;
        width:25%;
        height:100%;
        }
    .slide li:nth-child(1){background-image: url("/img/m_main_visual1.jpg");}
    .slide li:nth-child(2){background-image: url("/img/m_main_visual2.jpg");}
    .slide li:nth-child(3){background-image: url("/img/m_main_visual3.jpg");}
    .slide input{display:none;}
    .slide label{display:inline-block;vertical-align:middle;width:10px;height:10px;border:2px solid #666;background:#fff;transition:0.3s;border-radius:50%;cursor:pointer;}
    .slide .mv{
            text-align:left;
            position:absolute;
            bottom:10px;
            left:0;
            width:100%;
            padding-left: 150px;
            margin-bottom: 50px;
        }
    #mv1:checked~ul{margin-left:0%;}
    #mv2:checked~ul{margin-left:-100%;}
    #mv3:checked~ul{margin-left:-200%;}
    #mv1:checked~.mv>label:nth-child(1){background:#666;}
    #mv2:checked~.mv>label:nth-child(2){background:#666;}
    #mv3:checked~.mv>label:nth-child(3){background:#666;}
    .container .first li{
        width:33.33%;
        height: 400px;
        margin-top: 80px;
        background-size: 100%;
        float:left;
        }
    .container li:nth-child(1){background-image: url("/img/main_banner1_01.jpg");}
    .container li:nth-child(2){background-image: url("/img/main_banner1_02.jpg");}
    .container li:nth-child(3){background-image: url("/img/main_banner1_03.jpg");}
    .container .second li{
        width: 50%;
        height: 300px;
        background-size: 100%;
        float: left;
    }
    .container .second li:nth-child(1){background-image: url("/img/main_banner1_04.jpg");}
    .container .second li:nth-child(2){background-image: url("/img/main_banner1_05.jpg");}
</style>
<div class="commonBox">
    <div>
        <div>
            <!-- header top menu -->
            <div class="parent">
                <div> 
                    <a href="">진료시간</a>
                    <a href="">오시는길</a>
                    <a href="">원장소개</a>
                </div>
                <div>
                    <h1 class="logo">
                        <a href="/"><img src="/img/logo.jpg" /></a>
                    </h1>
                </div>
                <div>
                    <a href="">회원가입</a>
                    <a href="">로그인</a>
                    <button /> 
                </div>
            </div>
            <hr />
            <div>
                <div class="menu">
                    <a href="">킴스소개</a>
                    <a href="">킴스특화진료</a>
                    <a href="">킴스만성질환</a>
                    <a href="">킴스언론보도</a>
                    <a href="">킴스상담예약</a>
                    <a href="">킴스커뮤니티</a>
                </div>
            </div>
            <!-- slide -->
            <div class="slide">
                <input type="radio" name="mv" id="mv1" checked>
                <input type="radio" name="mv" id="mv2">
                <input type="radio" name="mv" id="mv3">
                <ul>
                    <li>같이의 가치<br />아낌없는 가족사랑<br />그대의 손을 놓지 않겠습니다.</li>
                    <li>110만 환자들과<br />같이했던 시간<br />30년 경력의 노하우</li>
                    <li>100세 시대,<br />맞춤진료<br >양ㆍ한방 융합진료로 치매예방 및 치료를</li>
                </ul>
                <p class="mv">
                    <label for="mv1"></label>
                    <label for="mv2"></label>
                    <label for="mv3"></label>
                </p>
            </div>
            <!-- container -->
            <div class=container>
                <div class="first">
                    <ul>
                        <li>BRAIN HEALTH<br />뇌 건강 클리닉<br />30년 110만 노하우</li>
                        <li>CHRONIC DISEASE<br />만성질환 클리닉<br />킴스만의 솔루션</li>
                        <li>DIET CLINIC<br />다이어트 클리닉<br />건강을 디자인하다</li>
                    </ul>
                </div>
                <div class="second">
                    <ul>
                        <li>IMMUNITY IMPROVEMENT<br />면연력 프로그램<br >킴스의 체온상승 특허 활용</li>
                        <li>KIMS SOLUTION<br />치매 프로그램<br />양ㆍ한방 융합치료, 청명</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php include_once "{$document}include/footer.php"; ?>