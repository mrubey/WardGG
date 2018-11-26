<head>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
   var url1 = "https://wind-bow.glitch.me/twitch-api/streams/capcomfighters";
   $.getJSON(url1,function(data1){
       if(data1.stream===null){
          $("#fccStatus1").html("CapcomFighters is currently Offline!");
       } else {
           $("#fccStatus1").html("CapcomFighters is currently Online!");
       }

   });
   var url2 = "https://wind-bow.glitch.me/twitch-api/streams/DaigoTheBeastTV";
   $.getJSON(url2,function(data2){
       if(data2.stream===null){
          $("#fccStatus2").html("DaigoTheBeastTV is currently Offline!");
       } else {
           $("#fccStatus2").html("DaigoTheBeastTV is currently Online!");
       }

   });
   var url3 = "https://wind-bow.glitch.me/twitch-api/streams/poongko";
   $.getJSON(url3,function(data3){
       if(data3.stream===null){
          $("#fccStatus3").html("Poongko is currently Offline!");
       } else {
           $("#fccStatus3").html("Poongko is currently Online!");
       }

   });
       
        
});
</script>
</head>
<div class="container" style="color:white">
   <div id="header" class="text-center">
      <h1> Top Twitch Channels</h1>
       <a href="https://www.twitch.tv/capcomfighters"target="blank">
      <h2 id="fccStatus1"></h2>
       </a>
       <a href="https://www.twitch.tv/DaigoTheBeastTV"target="blank">
      <h2 id="fccStatus2"></h2>
       </a>
       <a href="https://www.twitch.tv/poongko"target="blank">
      <h2 id="fccStatus3"></h2>
       </a>
   </div>