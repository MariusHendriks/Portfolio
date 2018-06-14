@for ($i=0; $i < 23; $i++)
  <audio id="sound{{$i}}">
    <source src="{{asset('sounds/'.$i.'.m4a')}}" type="audio/mp4">
  </audio>
@endfor
<script>
for (var i = 1; i < 23; i++) {
  console.log(".fret" + i);
  $(".fret" + i).mouseenter(function(e) {
     var oldclassname = e.target.className;
     var newclassname = oldclassname.replace("fret", "").replace(" ", "").replace("fret", "");
     console.log("sound" + newclassname)
     var sound = document.getElementById("sound" + newclassname);
     console.log(sound)
     sound.play();
     sound.currentTime = 0;
  });
};
</script>
