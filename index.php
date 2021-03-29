<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css.css">

</head>
<body>
<div class="document" >
    <img id="doc_img" src="Записати.JPG">
    <p id="s_sur_name">SURNAME</p>
    <p id="s_ing_sur_name">SURNAME</p>
    <p id="s_name">NAME</p>
    <p id="s_ing_name">NAME</p>
    <p id="po_batkovi">POBAT</p>
    <p id="sex">sex</p>
    <p id="month">00</p> <p id="day">00</p><p id="year">0000</p>
    <p id="nationality">Україна/UKR</p>
    <p id="idnnom">000000000</p>
    <p id="record">00000000</p><p id="r_def">-</p><p id="r_num">00000</p>
    <p id="month1">00</p> <p id="day1">00</p><p id="year1">0000</p>





</div>
<div id="inp_div">
    <div class="rad">
        <p><input name="dzen" type="radio" id="m" value="nedzen">Ч</p>
        <p><input name="dzen" type="radio" id="w" value="dzen">Ж</p>
    </div>
    <input id="gen_btn" onclick="nameandsername()"  type="button" value="СОЗДАТЬ">
    <p>ИМЯ</p>
    <input type="text" name="" id="inp_name">
    <p>ИМЯ на анг</p>
    <input type="text" name="" id="inp_ingl_name">
    <p>ФАМИЛИЯ</p>
    <input type="text" name="" id="in_fam">
    <p>ФАМИЛИЯ НА АНГЛ</p>
    <input type="text" name="" id="in_fam_angl">
    <p>ПО ОТЧЕСТВУ</p>
    <input type="text" name="" id="in_batko">
</div>


</body>
<script type="text/javascript">
    function nameandsername() {
        let valukr = document.getElementById('inp_name').value;
        let valing = document.getElementById('inp_ingl_name').value;
        let inpfam = document.getElementById('in_fam').value;
        let ingfam = document.getElementById('in_fam_angl').value;
        let pobatk = document.getElementById('in_batko').value;
        let m =  document.getElementById('m');
        let w =  document.getElementById('w');
        let month = document.getElementById('month');
        let day = document.getElementById('day');
        let year = document.getElementById('year');
        let idnnom = document.getElementById('idnnom');
        let record = document.getElementById('record');
        let r_num = document.getElementById('r_num');
        let month1 = document.getElementById('month1');
        let day1 = document.getElementById('day1');
        let year1 = document.getElementById('year1');



        // if (!valukr && !ingfam) {
        //	alert("Введи данные!!!");
        //}
        //   ondblclick= "window.location.reload();"   перезагрузка сторінки
        // else if(!valukr){
        //	alert("Введи ИМЯ!!!");
        // }
        function randomInteger(min, max) {
            let rand = min - 0.5 + Math.random() * (max - min + 1);
            return Math.round(rand);
        }
        month.innerHTML = randomInteger(10, 31);
        day.innerHTML = randomInteger(10, 12);
        year.innerHTML = randomInteger(1950, 2008);
        idnnom.innerHTML = randomInteger(111111111, 999999999);
        record.innerHTML = randomInteger(11111111, 99999999);
        r_num.innerHTML = randomInteger(11111, 99999);
        month1.innerHTML = randomInteger(10, 31);
        day1.innerHTML = randomInteger(10, 12);
        year1.innerHTML = randomInteger(2023, 2060);

        let picswoomen = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg"];
        let picsmen = ["1m.jpg","2m.jpg","3m.jpg","4m.jpg","5m.jpg","6m.jpg","7m.jpg"];

        if (!m.checked) {
            let nom = randomInteger(1, 6);
            document.getElementById("doc_img").src = picswoomen[nom];
        }
        else{
            let nom = randomInteger(1, 6);
            document.getElementById("doc_img").src = picsmen[nom];
        }


        if(m.checked){
            document.getElementById('sex').innerHTML = "Ч/M";
        }
        if (w.checked) {
            document.getElementById('sex').innerHTML = "Ж/W";
        }
        document.getElementById('s_name').innerHTML = valukr;
        document.getElementById('s_sur_name').innerHTML = inpfam;
        document.getElementById('po_batkovi').innerHTML = pobatk;
        if (!valing ) {
            document.getElementById('s_ing_name').innerHTML = "";
        }
        else{
            document.getElementById('s_ing_name').innerHTML = valing;
        }
        if (!ingfam ) {
            document.getElementById('s_ing_sur_name').innerHTML = "";
        }
        else{
            document.getElementById('s_ing_sur_name').innerHTML = ingfam;
        }

    };


</script>
</html>
