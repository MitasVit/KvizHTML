<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="a.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
@import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
}


.context {
    width: 100%;
    position: absolute;
    top:10%;
    
}

.context h1{
    text-align: center;
    /*color: #fff;*/
    font-size: 50px;
}


.area{
    background: #4e54c8;  
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:100vh;
    user-select: none;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        pointer-events: none;
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
h1{
    color: black;
}

@media (max-width:1025px){
.fullform{
    background-color: rgb(255,255,255);
    color: black;
}
}
@media (min-width:1025px){
    .fullform{
margin: 50px;
    background-color: rgb(255,255,255);
    color: black;
}
.inputs{
    position: relative;
    left: 15%
}
.deck147{
    position: relative;
    left: 10px;
    right: 10px;
}
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
<div class="context">

    <div class="fullform" style="max-height: 800px">
        <br>
        <h1>Vlajky Evropských států - vyhodnocení</h1>
        <ul class="list-group">
  
        <?php
        $poc_bodu = 0;
    if($_GET){
        //1

        if($_GET["q1"]){
            if($_GET["q1"] == "a1"){
                $poc_bodu++;
                echo('<li class="list-group-item">&#10003;Dánsko +1 bod</li>');
            }else if($_GET["q1"] == "a2"){
                echo('<li class="list-group-item">&#10060;Kypr - Správně: Dánsko 0 bodů</li>');
            }
            else if($_GET["q1"] == "a3"){
                echo('<li class="list-group-item">&#10060;Polsko - Správně: Dánsko 0 bodů</li>');
            }
            else if($_GET["q1"] == "a4"){
                echo('<li class="list-group-item">&#10060;Rusko - Správně: Dánsko 0 bodů</li>');
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Dánsko 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Dánsko 0 bodů</li>');
        }

        //2

        if($_GET["q2"]){
            if($_GET["q2"] == "a1"){
                 echo('<li class="list-group-item">&#10060;Německo - Správně: Irsko 0 bodů</li>');
            }else if($_GET["q2"] == "a2"){
                echo('<li class="list-group-item">&#10060;Kypr - Správně: Irsko 0 bodů</li>');
            }
            else if($_GET["q2"] == "a3"){
                $poc_bodu++;
                echo('<li class="list-group-item">&#10003;Irsko +1 bod</li>');
            }
            else if($_GET["q2"] == "a4"){
                echo('<li class="list-group-item">&#10060;Uganda - Správně: Irsko 0 bodů</li>');
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Irsko 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Irsko 0 bodů</li>');
        }

        //3

        if($_GET["q3"]){
            if($_GET["q3"] == "a1"){
                                $poc_bodu++;
                echo('<li class="list-group-item">&#10003;Itálie +1 bod</li>');
                
            }else if($_GET["q3"] == "a2"){
                echo('<li class="list-group-item">&#10060;Bosna a Hercegovina - Správně: Itálie 0 bodů</li>');
            }
            else if($_GET["q3"] == "a3"){
 echo('<li class="list-group-item">&#10060;Lucembursko - Správně: Itálie 0 bodů</li>');
            }
            else if($_GET["q3"] == "a4"){
                echo('<li class="list-group-item">&#10060;Kolumbie - Správně: Itálie 0 bodů</li>');
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Itálie 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Itálie 0 bodů</li>');
        }

        //4

        if($_GET["q4"]){
            if($_GET["q4"] == "a1"){
                                
                echo('<li class="list-group-item">&#10060;Uzbekistan - Správně: Ukrajina 0 bodů</li>');
            }else if($_GET["q4"] == "a2"){
                echo('<li class="list-group-item">&#10060;Chile - Správně: Ukrajina 0 bodů</li>');
            }
            else if($_GET["q4"] == "a3"){
 echo('<li class="list-group-item">&#10060;Řecko - Správně: Ukrajina 0 bodů</li>');
            }
            else if($_GET["q4"] == "a4"){
                $poc_bodu++;
                echo('<li class="list-group-item">&#10003;Ukrajina +1 bod</li>');
                
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Ukrajina 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Ukrajina 0 bodů</li>');
        }
        //5
        if($_GET["q5"]){
            if($_GET["q5"] == "a1"){
                                
                echo('<li class="list-group-item">&#10060;Uzbekistan - Správně: Řecko 0 bodů</li>');
            }else if($_GET["q5"] == "a2"){
                echo('<li class="list-group-item">&#10060;Chile - Správně: Řecko 0 bodů</li>');
            }
            else if($_GET["q5"] == "a3"){
                $poc_bodu = $poc_bodu+2;
                echo('<li class="list-group-item">&#10003;Řecko +2 body</li>');
 
            }
            else if($_GET["q5"] == "a4"){
                echo('<li class="list-group-item">&#10060;Ukrajina - Správně: Řecko 0 bodů</li>');
                
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Řecko 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Řecko 0 bodů</li>');
        }
        //6
        if($_GET["q6"]){
            if($_GET["q6"] == "a1"){
                                $poc_bodu = $poc_bodu+2;
                echo('<li class="list-group-item">&#10003;Švýcarsko +2 body</li>');
                                
                
            }else if($_GET["q6"] == "a2"){
                echo('<li class="list-group-item">&#10060;Polsko - Správně: Švýcarsko 0 bodů</li>');
            }
            else if($_GET["q6"] == "a3"){
echo('<li class="list-group-item">&#10060;Dánsko - Správně: Švýcarsko 0 bodů</li>');
 
            }
            else if($_GET["q6"] == "a4"){
                echo('<li class="list-group-item">&#10060;Rumonsko - Správně: Švýcarsko 0 bodů</li>');
                
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Švýcarsko 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Švýcarsko 0 bodů</li>');
        }
        //7
        if($_GET["q7"]){
            if($_GET["q7"] == "a1"){
                                $poc_bodu = $poc_bodu+2;
                echo('<li class="list-group-item">&#10003;Rakousko +2 body</li>');
                                
                
            }else if($_GET["q7"] == "a2"){
                echo('<li class="list-group-item">&#10060;Německo - Správně: Rakousko 0 bodů</li>');
            }
            else if($_GET["q7"] == "a3"){
echo('<li class="list-group-item">&#10060;Azerbajdžán - Správně: Rakousko 0 bodů</li>');
 
            }
            else if($_GET["q7"] == "a4"){
                echo('<li class="list-group-item">&#10060;Dánsko - Správně: Rakousko 0 bodů</li>');
                
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Rakousko 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Rakousko 0 bodů</li>');
        }
        //8
        if($_GET["q8"]){
            if($_GET["q8"] == "a1"){
echo('<li class="list-group-item">&#10060;Finsko - Správně: Švédsko 0 bodů</li>');
                                
                
            }else if($_GET["q8"] == "a2"){
                                                $poc_bodu = $poc_bodu+2;
                echo('<li class="list-group-item">&#10003;Švédsko +2 body</li>');
                
            }
            else if($_GET["q8"] == "a3"){
echo('<li class="list-group-item">&#10060;Kolumbie - Správně: Švédsko 0 bodů</li>');
 
            }
            else if($_GET["q8"] == "a4"){
                echo('<li class="list-group-item">&#10060;Austrálie - Správně: Švédsko 0 bodů</li>');
                
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Švédsko 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Švédsko 0 bodů</li>');
        }
        //9
        if($_GET["q9"]){
            if($_GET["q9"] == "a1"){
echo('<li class="list-group-item">&#10060;Malta - Správně: Monako 0 bodů</li>');
                                
                
            }else if($_GET["q9"] == "a2"){
                echo('<li class="list-group-item">&#10060;Polsko - Správně: Monako 0 bodů</li>');

                
            }
            else if($_GET["q9"] == "a3"){
 echo('<li class="list-group-item">&#10060;Rakousko - Správně: Monako 0 bodů</li>');
 
            }
            else if($_GET["q9"] == "a4"){
                                                                $poc_bodu = $poc_bodu+5;
                echo('<li class="list-group-item">&#10003;Monako +5 bodů</li>');
               
                
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Monako 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Monako 0 bodů</li>');
        }
        //10
        if($_GET["q10"]){
            if($_GET["q10"] == "a1"){
                $poc_bodu = $poc_bodu+5;
                echo('<li class="list-group-item">&#10003;Malta +5 bodů</li>');

                                
                
            }else if($_GET["q10"] == "a2"){
                echo('<li class="list-group-item">&#10060;Polsko - Správně: Malta 0 bodů</li>');

                
            }
            else if($_GET["q10"] == "a3"){
 echo('<li class="list-group-item">&#10060;Rakousko - Správně: Malta 0 bodů</li>');
 
            }
            else if($_GET["q10"] == "a4"){
                        echo('<li class="list-group-item">&#10060;Monako - Správně: Malta 0 bodů</li>');                                        
               
                
            }else{
                echo('<li class="list-group-item">&#10060;Neznámá odpověď - Správně: Malta 0 bodů</li>');
            }
        }else{
            echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Malta 0 bodů</li>');
        }
    }else{
        echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Dánsko 0 bodů</li>');
   echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Irsko 0 bodů</li>');

    echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Itálie 0 bodů</li>');

    echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Ukrajina 0 bodů</li>');

    echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Řecko 0 bodů</li>');

    echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Švýcarsko 0 bodů</li>');

    echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Rakousko 0 bodů</li>');

    echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Švédsko 0 bodů</li>');

        echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Monako 0 bodů</li>');
        echo('<li class="list-group-item">&#10060;Žádná odpověď - Správně: Malta 0 bodů</li>');
    }
    echo('</ul><br><br><h1 class="card-title"> Dohromady: <span> ');
    echo($poc_bodu);
    echo('</span>');
    if($poc_bodu == 0){
        echo(' bodů</h1>');
    }else if($poc_bodu == 1){
        echo(' bod</h1>');
    }
    else if($poc_bodu == 2){
        echo(' body</h1>');
    }
    else if($poc_bodu == 3){
        echo(' body</h1>');
    }
    else if($poc_bodu == 4){
        echo(' body</h1>');
    }
    else if($poc_bodu >= 5){
        echo(' bodů</h1>');
    }
?>
    <br>

    <button type="javascript:a()" class="btn btn-success btn-lg btn-block"> Znovu</button>
    <script>
        function a(){
            document.location.href = "http://kviz-euvlajky.funsite.cz/";
        }
        </script>
    </div>
</div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
    <div class="area">
            <ul class="circles" style=";top: 100%">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Mitáš Vít, všechna práva vyhrazena. Vytvořeno za účelem geografického projektu pod <a href="https://www.gympolicka.cz/"> Gymnáziem Polička</a>.
  </div>



</body>

</html>
