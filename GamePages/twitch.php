<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
   var url1 = "https://wind-bow.glitch.me/twitch-api/streams/dmbrandon";
   $.getJSON(url1,function(data1){
       if(data1.stream===null){
          $("#fccStatus1").html("DmBrandon is currently Offline!");
       } else {
           $("#fccStatus1").html("DmBrandon is currently Online!");
       }

   });
   var url2 = "https://wind-bow.glitch.me/twitch-api/streams/weak3n";
   $.getJSON(url2,function(data2){
       if(data2.stream===null){
          $("#fccStatus2").html("Weak3n is currently Offline!");
       } else {
           $("#fccStatus2").html("Weak3n is currently Online!");
       }

   });
   var url3 = "https://wind-bow.glitch.me/twitch-api/streams/hireztv";
   $.getJSON(url3,function(data3){
       if(data3.stream===null){
          $("#fccStatus3").html("HiRezTV is currently Offline!");
       } else {
           $("#fccStatus3").html("HiRezTV is currently Online!");
       }

   });
       
        
});
</script>
</head>
<div class="container" style="color:white">
   <div id="header" class="text-center">
      <h1> Top Twitch Channels</h1>
       <a href="https://www.twitch.tv/dmbrandon"target="blank">
      <h2 id="fccStatus1"></h2>
       </a>
       <a href="https://www.twitch.tv/weak3n"target="blank">
      <h2 id="fccStatus2"></h2>
       </a>
       <a href="https://www.twitch.tv/hireztv"target="blank">
      <h2 id="fccStatus3"></h2>
       </a>
   </div>