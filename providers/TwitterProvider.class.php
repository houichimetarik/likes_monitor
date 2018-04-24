<?php

include "Provider.class.php";

// Twitter data provider using Twitter API
class TwitterProvider extends Provider{

  function fetch_twitter_count($user) {

    $json = file_get_contents("http://api.twitter.com/1/users/show.json?screen_name=".$user."");

    $count = json_decode($json, true); // json strint

    return intval($count['followers_count']); // here is your integer
}
  
} // end class TwitterProvider

?>
