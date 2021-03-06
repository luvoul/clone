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
            <a href="">????????????</a>
            <a href="">????????????</a>
            <a href="">????????????</a>
            <h1 class="logo">
                <a href="/"><img src="/img/logo.jpg" /></a>
            </h1>
            <a href="">????????????</a>
            <a href="">?????????</a>
            <button />
        </div>
        <hr/>
        <div class="menu">
            <a href="">????????????</a>
            <a href="">??????????????????</a>
            <a href="">??????????????????</a>
            <a href="">??????????????????</a>
            <a href="">??????????????????</a>
            <a href="">??????????????????</a>
        </div>
    <div id="slide">
        <input type="radio" name="mv" id="mv1" checked>
        <input type="radio" name="mv" id="mv2">
        <input type="radio" name="mv" id="mv3">
        <ul>
            <li>????????? ??????<br />???????????? ????????????<br />????????? ?????? ?????? ???????????????.</li>
            <li>110??? ????????????<br />???????????? ??????<br />30??? ????????? ?????????</li>
            <li>100??? ??????,<br />????????????<br >???????????? ??????????????? ???????????? ??? ?????????</li>
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
                    <a href="">????????????</a>
                    <a href="">????????????</a>
                    <a href="">????????????</a>
                </div>
                <div>
                    <h1 class="logo">
                        <a href="/"><img src="/img/logo.jpg" /></a>
                    </h1>
                </div>
                <div>
                    <a href="">????????????</a>
                    <a href="">?????????</a>
                    <button /> 
                </div>
            </div>
            <hr />
            <div>
                <div class="menu">
                    <a href="">????????????</a>
                    <a href="">??????????????????</a>
                    <a href="">??????????????????</a>
                    <a href="">??????????????????</a>
                    <a href="">??????????????????</a>
                    <a href="">??????????????????</a>
                </div>
            </div>
            <!-- slide -->
            <div class="slide">
                <input type="radio" name="mv" id="mv1" checked>
                <input type="radio" name="mv" id="mv2">
                <input type="radio" name="mv" id="mv3">
                <ul>
                    <li>????????? ??????<br />???????????? ????????????<br />????????? ?????? ?????? ???????????????.</li>
                    <li>110??? ????????????<br />???????????? ??????<br />30??? ????????? ?????????</li>
                    <li>100??? ??????,<br />????????????<br >???????????? ??????????????? ???????????? ??? ?????????</li>
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
                        <li>BRAIN HEALTH<br />??? ?????? ?????????<br />30??? 110??? ?????????</li>
                        <li>CHRONIC DISEASE<br />???????????? ?????????<br />???????????? ?????????</li>
                        <li>DIET CLINIC<br />???????????? ?????????<br />????????? ???????????????</li>
                    </ul>
                </div>
                <div class="second">
                    <ul>
                        <li>IMMUNITY IMPROVEMENT<br />????????? ????????????<br >????????? ???????????? ?????? ??????</li>
                        <li>KIMS SOLUTION<br />?????? ????????????<br />???????????? ????????????, ??????</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php include_once "{$document}include/footer.php"; ?>