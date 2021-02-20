<!-- Display the countdown timer in an element -->
<p id="time"></p>

<script>
(function() {
  var start = new Date;
  var minuto = new Date();
  var minutoexacto_core = ((minuto.getMinutes()/10).toFixed(1));
  var minutoexacto = parseInt(minutoexacto_core)*10;
  var horaactual = minuto.getHours();
  if(minutoexacto + 11 >= 60)
  {
    minutoaponer = minutoexacto + 1;
  }else
  {
    minutoaponer = minutoexacto + 11;
  }
  start.setHours(23, minutoaponer , 52); // 11pm
  function pad(num) {
    return ("0" + parseInt(num)).substr(-2);
  }

  function tick() {
    var now = new Date;
    if (now > start) { // too late, go to tomorrow
      start.setDate(start.getDate() + 1);
    }
    var remain = ((start - now) / 1000);
    var hh = pad((remain / 60 / 60) % 60);
    var mm = pad((remain / 60) % 60);
    var ss = pad(remain % 60);
    document.getElementById('time').innerHTML =
      hh + ":" + mm + ":" + ss;
    setTimeout(tick, 1000);
  }

  document.addEventListener('DOMContentLoaded', tick);
})();
</script>
