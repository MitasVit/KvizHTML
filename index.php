<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="a.ico">
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
.deck142{
    left: 7%;
    margin: -25px 0 0 -25px;
    top: 50px;
}
.card{
    position: relative;
    left: 20px;
}
form{
    margin-left: 20px;
    margin-top: 50px;
}
.op478{
    position: relative;
    top:500%;
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
.deck142{
    width:30%;

     position: relative;
    left: 75px;
        top:25px;
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

    <div class="fullform">
        <br>
        <h1>Vlajky Evropských států</h1>
        <form action="/submit.php" >

        <div class="card-deck deck147" style="width:90%;top: 50px;left: 7%;margin: -25px 0 0 -25px;">
  <div class="card">
    <img class="card-img-top" src="https://cdn.xsd.cz/resize/2bb69f8589f03a93b83465d54a96f1ee_extract=212,0,1024,576_resize=680,383_.jpg?hash=7b56ab4cf07d0afcb85bb1ae15b04dee" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(1 bod)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q1" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Dánsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q1" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Kypr
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q1" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Polsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q1" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Rusko
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Lehká otázka | 1 bod za správnou odpověď</small>
    </div>
  </div>
  <!--
https://www.libea.cz/wp-content/uploads/2018/10/Irsko-640x427.jpg
https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg
  -->
  <div class="card">
    <img class="card-img-top" src="https://www.libea.cz/wp-content/uploads/2018/10/Irsko-640x427.jpg" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(1 bod)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Německo
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Kypr
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Irsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q2" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Uganda
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Lehká otázka | 1 bod za správnou odpověď</small>
    </div>
  </div><div class="card">
    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(1 bod)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Dánsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Kypr
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Polsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q3" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Rusko
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Lehká otázka | 1 bod za správnou odpověď</small>
    </div>
  </div>
</div>



<!--$_COOKIE

druhé tři
-->

<br>
<br>
<div class="card-deck deck147" style="width:90%;top: 50px;left: 7%;margin: -25px 0 0 -25px;">
  <div class="card">
    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/220px-Flag_of_Ukraine.svg.png" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(1 bod)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Uzbekistán
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Chile
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Řecko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q4" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Ukrajina
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Lehká otázka | 1 bod za správnou odpověď</small>
    </div>
  </div>
  <!--
https://www.libea.cz/wp-content/uploads/2018/10/Irsko-640x427.jpg
https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg
  -->
  <div class="card">
    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/220px-Flag_of_Greece.svg.png" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(2 body)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Uzbekistán
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Chile
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Řecko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q5" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Ukrajina
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Středně těžká otázka | 2 body za správnou odpověď</small>
    </div>
  </div><div class="card">
    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Civil_Ensign_of_Switzerland.svg/220px-Civil_Ensign_of_Switzerland.svg.png" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(2 body)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q6" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Švýcarsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q6" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Polsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q6" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Dánsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q6" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Rumonsko
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Středně těžká otázka | 2 body za správnou odpověď</small>
    </div>
  </div>
</div>


<!--$_COOKIE

třetí tři
-->

<br>
<br>
<div class="card-deck deck147" style="width:90%;top: 50px;left: 7%;margin: -25px 0 0 -25px;">
  <div class="card">
    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Austria.svg/220px-Flag_of_Austria.svg.png" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(1 bod)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Uzbekistán
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Chile
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Řecko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q7" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Ukrajina
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Lehká otázka | 1 body za správnou odpověď</small>
    </div>
  </div>
  <!--
https://www.libea.cz/wp-content/uploads/2018/10/Irsko-640x427.jpg
https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg
  -->
  <div class="card">
    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Sweden.svg/220px-Flag_of_Sweden.svg.png" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(2 body)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Uzbekistán
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Chile
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Řecko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q8" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Ukrajina
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Středně těžká otázka | 2 body za správnou odpověď</small>
    </div>
  </div><div class="card">
    <img class="card-img-top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPsAAADJCAMAAADSHrQyAAAADFBMVEX////OESbMABDnp6rZLsgpAAAApUlEQVR4nO3PAQ0AIAzAsAP+PSODkLUKtlld8zrgIe9N3pu8N3lv8t7kvcl7k/cm703em7w3eW/y3uS9yXuT9ybvTd6bvDd5b/Le5L3Je5P3Ju9N3pu8N3lv8t7kvcl7k/cm703em7w3eW/y3uS9yXuT9ybvTd6bvDd5b/Le5L3Je5P3pvT77prTNQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHzlAubyZflpPDkxAAAAAElFTkSuQmCC" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(5 bodů)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q9" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Malta
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q9" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Polsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q9" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Rakousko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q9" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Monako
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Těžká otázka | 5 bodů za správnou odpověď</small>
    </div>
  </div>
</div>

<!--$_COOKIE

poslední jeden
-->

<br>
<br>
<div class="card-deck deck142" >
  <div class="card">
    <img class="card-img-top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAA8FBMVEXQFCz////MzMzop6vOABn7/f3///3O0c/N0Mzra3avhoWxoqGtkYytlJPLzMrPz9LrZG/pUmDhPUzpYHCwjYjqZ3iwiIPjOEvBwMDGxsafnpyOf3TAvby3s7DS1df9/P/wl6XofIqpZGGod3S1oZ7ihpC5kpW6p6jUanb66e7XiIyumZO0np/Qh4X32OK5XVyZhX6uqqGUj4auX1/90tmfpJSpqKnGdXuKhXmckouUkZPwjJvkbXuRfG64u7uZm5rmVmOka2Z4bGS6qZ2Ad2x/fnxoX1ZoaGl/b2K8wbjufISnoJdUU1FHRkfAWWDWiJHXroAcAAAELklEQVR4nO3b4VPbNhzG8VqbcAhUbmkLkiU5tIVuBNbhdHNxxmibOltb0+7//2+mFEgcnl5fhc3g53tJ7rjTC/K5n4kth3tRW/rhx3tt6f+mmEcTjCYYTbDbYDKQyz/SJIpk1ECRA7lGk2j3UaOnMqJJFK0/ezzv+VbEOZmZ9OMkvijboMmVibhqjybXTXqcE5rQBKIJRhOMJhhNMJpg3/4FpZTr/WTpnO3adXIHTaLB/ov5nCQ//TwYLF0nd9HkYHhoFqf2Iusd/fKy03Mi5cGvx7k1QhntnDZKKJuPXv3W7TkZHv9+uOGMLsIjTrVWI1ePXt8oSctNpNzL3UnpU1WM/ViPlfK1LfPDg26ZyD8eNjoVf5alP3tTGPHRCX029q7Mrd5vLHl7uuojqW0mMnrw7n6jntA6TpwrysmkMLHXqXcqe99Ysb1z100i+WR7vqsWEkoL4UprJ9XEVl64sddCNRbEGzsrJmmfSfRke3GGFlJFMSOpbFVVaRJGJi7EUt0wiZtv2aRTb60Nz79sqVNt3qSm6ybaGZXW07gOo2KtS70RrusmvkhVlpmp/WqS9uL076LrJqY4U74Mf1FmU+Kn48Qb3XUT7Z3xpbfHVZpWJ3ZqnD/ruokZF7pMM2NP6qmt6rEJ57PdM+knibpMhIcWpnZxUk/DlNip17EWPaHmxXUXTMKcJIuCidI6TW31YVLZ1CsVzmvjxoJOzMmz+5tXPX6RKeeEckWe596H5+zDWWV7m4ueb911k4HcfdDoqbJ1GSCMNkkSXmbn+aX9OGyu+XTXr3fkQDa/gCOP6tqWTpzHohir+Nzo2rp8Y2mvYOUbTG0zme1Jr82TcnhSu9KF40Wff/bKaVPX5ej10pqVb1m3ziRaaxTJgy+j3JpEGOd8OHRiYevZ3mNzzcprn0kzGVD+2TOZErNP3/CSZL2j4ctO79t/vW0x2N9c7B68Pw0Hl7zZrz622+SipfuAO7wPCCa8N0oTmlyPJhhNMJpgNMFogtEE+57JZUlMk4tOX/W3L+u/27rhC8BbYrL7aLGptv5J0iS6tpF28//mdStM/utogtEEowlGE4wmGE0wmmA0wWiC0QSjCUYTjCYYTTCaYDTBaILRBKMJRhOMJhhNMJpgNMFogtEEowlGE4wmGE0wmmA0wWiC0QSjCUYTjCYYTTCaYDTBaILRBKMJRhOMJhhNMJpgNMFogtEEowlGE4wmGE0wmmA0wWiC0QSjCUYTjCYYTTCaYDTBaILRBKMJRhOMJhhNMJpgNMFogtEEowlGE4wmGE0wmmA0wWiC0QSjCUYTjCYYTTCaYDTBaILRBKMJRhOMJhhNMJpgNMFogtEEowlGE4wmGE0wmmA0wWiC0QSjCUYTjCYYTTCaYDTBaILRBKMJRhOMJhhNMJpgNMFogtEEowlGE6w9Jv8CgBDBhhCezrEAAAAASUVORK5CYII=" alt="vlajka dánska">
    <div class="card-body">
      <h5 class="card-title">Jaký stát má tuto vlajku?</h5>
      <p class="card-text"><i>(5 bodů)</i></p>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="gridRadios1" value="a1">
          <label class="form-check-label" for="gridRadios1">
            Malta
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="gridRadios2" value="a2">
          <label class="form-check-label" for="gridRadios2">
            Polsko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="gridRadios4" value="a3">
          <label class="form-check-label" for="gridRadios4">
            Rakousko
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="q10" id="gridRadios3" value="a4">
          <label class="form-check-label" for="gridRadios3">
            Monako
          </label>
        </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Těžká otázka | 5 bodů za správnou odpověď</small>
    </div>
  </div>
</div>
<br><br><br>
<button type="submit" class="btn btn-success btn-lg btn-block"> Odeslat</button>
</div>

        </form>
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
    <div class="area" >
            <ul class="circles" style="top:200%">
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
    <div class="area" >
            <ul class="circles" style="top: 100%">
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
    <div class="area" >
            <ul class="circles" style="top: 300%">
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
    <div class="text-center p-4 op478" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Mitáš Vít, všechna práva vyhrazena. Vytvořeno za účelem geografického projektu pod <a href="https://www.gympolicka.cz/"> Gymnáziem Polička</a>.
  </div>

<?php

?>

</body>

</html>
