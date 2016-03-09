<?php
function read($filename){
 $fn = $filename;
 $handle = fopen($fn,"r");
 echo $handle;
}
function write($filename,$mode,$content){
 $fn = $filename;
 $handle = fopen($fn,$mode);
 fwrite($handle,$content);
}
function alert($msg){
 echo "<script>alert('$msg')</script>";
}
function repeat_alert($repeats,$msg){
 $t = 0;
 do{
  if($repeats > 0){
   $t = $t + 1;
   echo "<script>alert('$msg')</script>";
  }
 }while($t < $repeats);
}
function alert_rand($delay,$msgArray,$repeats){
 $currentMsg = array_rand($msgArray);
 $d = $delay;
 while($d > 0){
  $d = $delay - 1;
  $repeat = $repeats;
 }
 while($d == 0){
  while($repeat > 0){
   $repeat = $repeat - 1;
   echo "<script>alert('$currentMsg')</script>";
   
  }
  while($repeat == 0){
   $repeat = $repeats;
   $d == $delay;
  }
 }
}
function dbConnect($host,$user,$pass,$db){
 $connect = mysql_connect($host,$user,$pass);
 $database = mysql_select_db($db);
 return true;
}

function checkEmail($str) 
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}

function getTime($time_stamp)
{
    $time_difference = strtotime('now') - $time_stamp;

    if ($time_difference >= 60 * 60 * 24 * 365.242199)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day * 365.242199 days/year
         * This means that the time difference is 1 year or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24 * 365.242199, 'year');
    }
    elseif ($time_difference >= 60 * 60 * 24 * 30.4368499)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day * 30.4368499 days/month
         * This means that the time difference is 1 month or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24 * 30.4368499, 'month');
    }
    elseif ($time_difference >= 60 * 60 * 24 * 7)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day * 7 days/week
         * This means that the time difference is 1 week or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24 * 7, 'week');
    }
    elseif ($time_difference >= 60 * 60 * 24)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour * 24 hours/day
         * This means that the time difference is 1 day or more
         */
        return get_time_ago_string($time_stamp, 60 * 60 * 24, 'day');
    }
    elseif ($time_difference >= 60 * 60)
    {
        /*
         * 60 seconds/minute * 60 minutes/hour
         * This means that the time difference is 1 hour or more
         */
        return get_time_ago_string($time_stamp, 60 * 60, 'hour');
    }
    else
    {
        /*
         * 60 seconds/minute
         * This means that the time difference is a matter of minutes
         */
        return get_time_ago_string($time_stamp, 60, 'minute');
    }
}

function get_time_ago_string($time_stamp, $divisor, $time_unit)
{
    $time_difference = strtotime("now") - $time_stamp;
    $time_units      = floor($time_difference / $divisor);

    settype($time_units, 'string');

    if ($time_units === '0')
    {
        return 'less than 1 ' . $time_unit . ' ago';
    }
    elseif ($time_units === '1')
    {
        return '1 ' . $time_unit . ' ago';
    }
    else
    {
        /*
         * More than "1" $time_unit. This is the "plural" message.
         */
        // TODO: This pluralizes the time unit, which is done by adding "s" at the end; this will not work for i18n!
        return $time_units . ' ' . $time_unit . 's ago';
    }
}

function grabResults($table,$color,$colorEnd,$bold){
 $query = "SELECT * FROM $table ORDER BY id DESC LIMIT 10";
 $result = mysql_query($query) or die(mysql_error());

 while($row = mysql_fetch_object($result)){
         $sender = htmlspecialchars($row->sender);
        $msg = $row->message;
        $time = getTime($row->time);
        echo  "<b>" . $time . " from " . $sender . "</b>" . $color . "<br><div class='msgBox'>" . $msg . "</div><hr>" . $colorEnd;
  
 }
}


function imgToolTip($src,$title){
 echo '<img src="$src" class="masterTooltip" title="$title" />';
}

function textToolTip($title,$text){
 echo '<p title="$title" class="masterTooltip">$text</p>';
}

function linkToolTip($link,$title,$text){
 echo '<a href="$link" title="$title" class="masterTooltip">$text</a>';
}


?>
