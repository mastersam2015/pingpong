
<script src="jquery.js"></script>
<script language="JavaScript">

<!--


function send(x){
$.post("stul.php",{bbb : x});
}


function link (){


if ($('#gracz').val()==1){
window.location.href = "play1.html";
}

if ($('#gracz').val()==2){
window.location.href = "play2.html";
}


}



function kieruj (){
last_update = new Date().getTime();

$.get("stul.php", { lastfetch : last_update },  function(data) {
$("#idk").val(data);
});
if ($("#idk").val()=='g1g2'){
link();
}
}
window.setInterval('kieruj();', 100);


last_update = new Date().getTime();

$.get("stul.php", { lastfetch : last_update },  function(data) {
if(data=="g1"){
$("#p1").hide();
}

if(data=="g2"){
$("#p2").hide();
}

});

//-->
</script>


<div id="stul">
graj jako gracz 1<input type="radio" id="p1" onclick="$('#gracz').val(1);send('g1');$('#stul').html('oczekiwanie na graczy');"><br>
graj jako gracz 2<input type="radio" id="p2" onclick="$('#gracz').val(2);send('g2');$('#stul').html('oczekiwanie na graczy');"><br></div>
<input type="hidden" id="idk">
<input type="hidden" id="gracz">