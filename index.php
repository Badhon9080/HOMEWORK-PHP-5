<?php
   $api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";
   $video_url = "https://youtu.be/ys61IjpncYo?si=ctGUxX3vvCo9O2di";
   $main_url = explode("?si",$video_url);
   $video_array =  explode("/",$main_url[0]);
   $video_id = end($video_array);
   $url = str_replace("<insert-youtube-video-id-here>",$video_id,$api);
   echo "<h1>1<h1><img src='$url'>";

   $api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";
   $video_url = "https://youtu.be/55sTWNNfOxE?si=nYnmqGkMTDfoHXWD";
   $main_url = explode("?si",$video_url);
   $video_array =  explode("/",$main_url[0]);
   $video_id = end($video_array);
   $url = str_replace("<insert-youtube-video-id-here>",$video_id,$api);
   echo "<h1>2<h1><img src='$url'>";

   $api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";
$video_url = "https://youtu.be/3cWeknFxRBk?si=tArLqPDTdbNLLX8Q";
$main_url = explode("?si",$video_url);
$video_array =  explode("/",$main_url[0]);
$video_id = end($video_array);
$url = str_replace("<insert-youtube-video-id-here>",$video_id,$api);
echo "<h1>3<h1><img src='$url'>";



$api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";
$video_url = "https://youtu.be/abcyJwnP3qs?si=RS0l45LfHZKgq2k0";
$main_url = explode("?si",$video_url);
$video_array =  explode("/",$main_url[0]);
$video_id = end($video_array);
$url = str_replace("<insert-youtube-video-id-here>",$video_id,$api);
echo "<h1>4<h1><img src='$url'>";

?>
