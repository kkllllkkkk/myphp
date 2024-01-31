<?php
error_reporting(0);
$ts = $_GET['ts'];
if(!$ts) {
  $id = isset($_GET['id'])?$_GET['id']:'7';
  $n = [
'7'=>'7_7c833e',//桂阳新闻综合
'13'=>'13_46d84a',//邵东电视台
'18'=>'18_3aa230',//中方县电视台
'20'=>'20_68acda',//芷江电视台
'21'=>'21_f71392',//东安电视
'23'=>'23_5d556a',//新晃电视台
'24'=>'24_6c8648',//洪江区电视台
'26'=>'26_370917',//蓝山电视台
'27'=>'27_e9e1e5',//耒阳电视台
'31'=>'31_226756',//汉寿综合频道
'33'=>'33_eb14e5',//祁阳电视
'34'=>'34_5156ed',//靖州综合频道
'38'=>'38_6f397d',//麻阳电视台
'40'=>'40_1d0ed0',//永兴电视台
'131'=>'131_acfb72',//双峰县电视台
'134'=>'134_d590ee',//花垣综合
'143'=>'143_70175b',//吉首综合
'144'=>'144_4efb38',//古丈电视
'146'=>'146_f067fe',//龙山综合
'148'=>'148_feda2f',//临武综合
'149'=>'149_40cf24',//汝城电视台
'158'=>'158_423c80',//攸县电视台
'163'=>'163_2c7011',//沅江综合
'165'=>'165_5add87',//湘阴综合
'166'=>'166_a4ad1b',//汨罗综合
'168'=>'168_e04f1e',//CCTV1综合
'169'=>'169_b4d7a4',//城步电视
'170'=>'170_49c556',//新化电视台
'171'=>'171_daca67',//新邵新闻综合
'174'=>'174_6ab9f8',//桂东融媒
'180'=>'180_60f888',//衡东县电视台
'182'=>'182_3c0dc6',//绥宁电视台
'183'=>'183_554704',//衡阳县电视台
'184'=>'184_e3af1a',//嘉禾新闻综合
'203'=>'203_10cdf5',//长沙县新闻综合
'204'=>'204_16cb0f',//安化综合
  ];
  $m3u8 = "https://liveplay-srs.voc.com.cn/hls/tv/{$n[$id]}.m3u8";
  $url = "https://liveplay-srs.voc.com.cn/hls/tv/";
  $php = "http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF'];
  header('Content-Type: application/vnd.apple.mpegurl');
  print_r(preg_replace("/(.*?.ts)/i",$php."?ts=$url$1",get($m3u8)));
  } else {
   $data = get($ts);
   header('Content-Type: video/MP2T');
   echo $data;
   }

function get($url){
       $ch = curl_init($url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
       curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/yuanhs Safari/605.1.15');
       $result = curl_exec($ch);
       curl_close($ch);
       return $result;
}
?>