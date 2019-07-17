 <?php
  

function send_LINE($msg){
 $access_token = 'Frj74jgRfunp0iCKpmYS9iUMdOxCP8bTGl+5gEGHeX+EV19XFFjp4wwBjiYm9zT4sh135VXvDPbhEXj+Cy4JpAWYk+YTIBpSppXL4JGGN7g0C+dc9EJL6Jz4QejTnvQIYO/z+bVo7E9w6PLlDneF4QdB04t89/1O/w1cDnyilFU=; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'V1mKYI3RoNKhPrItBAPjxj255JBbpMP29E0ePPUcn0G',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
