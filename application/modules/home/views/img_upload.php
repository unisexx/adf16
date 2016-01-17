<div id="content" style="margin-top:10px;height:100%;">
   <center><h1>Image Upload Using Imgur API</h1></center>
   <form action="" enctype="multipart/form-data" method="POST">
    Choose Image : <input name="img" size="35" type="file"/><br/>
    <input type="submit" name="submit" value="Upload"/>
   </form>
   <?
   if(isset($_POST['submit'])){
    $img=$_FILES['img'];
    if($img['name']==''){
     echo "<h2>An Image Please.</h2>";
    }else{
     $filename = $img['tmp_name'];
     $client_id="94af93212e2e617";//Your Client ID here
     $handle = fopen($filename, "r");
     $data = fread($handle, filesize($filename));
     $pvars   = array('image' => base64_encode($data));
     $timeout = 30;
     $curl    = curl_init();
     curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
     curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
     curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
     curl_setopt($curl, CURLOPT_POST, 1);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
     $out = curl_exec($curl);
     curl_close ($curl);
     $pms = json_decode($out,true);
     $url=$pms['data']['link'];
     if($url!=""){
      echo "<h2>Uploaded Without Any Problem</h2>";
      echo "<img src='$url'/>";
     }else{
      echo "<h2>There's a Problem</h2>";
      echo $pms['data']['error']['message'];
     }
    }
   }
   ?>
  </div>
  <style>
  input{
   border:none;
   padding:8px;
  }
  </style>