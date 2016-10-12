<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

set_include_path("../libs");

  require_once('../database/smarty.php');
  require_once('../database/session.php');
  require_once('../database/base.php');
  require_once('../database/Users.php');
  require_once('../database/Pandlet.php');

  if (empty($s_email)) {
  	 header("Location: index.php");
  	 die;
  }


   $farm = Users::getFarm($s_email);
   $farm = $farm['farm'];
  
  
class Cwarning {
 
  
  static function indiceX() {
  global $dbh;
      try{
          
       $stmt = $dbh->prepare("SELECT times,dates,value FROM temperature WHERE value>10");
       //$stmt->bindParam(':farm', $farm);
       
       $stmt-> execute();
       
       //echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
       //$i = mysqli_stmt_num_rows($stmt);
       $curYear=date('Y');
       $result=0;
       //$j = 0;
       //while ($row=fetch_row($stmt) )
       
       foreach($stmt as $row)
       {  
         $temp =$row['value'];
         $date =$row['dates'];
         $time =$row['times'];
         
         
         list ($year, $month, $day) = explode('-',$date);
         list ($hour, $min) = explode(':',$time);
         //echo "temp $temp";
         if($year==$curYear)
         {
           //convert date to date type
           strtotime($time);
           $time1="20:00";
           strtotime($time1);
           $time2="06:00";
           strtotime($time2);
           if($time<$time1)
           {    if($time>$time2)
           { $result = $result + $temp;}
           }
        // echo "resultado $result";
         }
        
        
           
       }
       //return $stmt->fetchAll(PDO::FETCH_ASSOC);
        $j=14;  
        $indice=$result*$j; 
         
         return $indice;
       
      } catch (Exception $ex) {

      }
      
      
   }
}


class Geada {

  static function geadaa() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT times,dates,value FROM temperature WHERE value<0");
        
       $stmt-> execute();
       
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (Exception $ex) {

      }
   }
}

class Escaldao {

  static function escalda() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value,dates,times FROM temperature WHERE value>36");
        
       $stmt-> execute();
   
     
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (Exception $ex) {

      }
   }
}

class Mildio {

  static function temperaturas() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value,dates,times FROM temperature WHERE value>12");
       
       $stmt-> execute();
       
       foreach($stmt as $row)
       {  
         $temp =$row['value'];
         $date =$row['dates'];
         $time =$row['times'];
         $setme=0;
         $curtime= time();
         $curYear=date('Y');
         list ($year, $month, $day) = explode('-',$date);
         list ($hour, $min) = explode(':',$time);
         //echo "temp $temp";
         if($year==$curYear)
         {
           //convert date to date type
           strtotime($time);
           $time1="7:00";
           strtotime($time1);
          
           if($time<($curtime-$time1))
           {    
          $setme=1;
             }
       }
       
       
      if($setme!=1){return $stmt->fetchAll(PDO::FETCH_ASSOC);}
       else {return 0;}
      } }catch (Exception $ex) {

      }
   }
   
     static function moistures() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value,dates,times FROM moisture WHERE value>12");
      
       $stmt-> execute();
       
       foreach($stmt as $row)
       {  
         $temp =$row['value'];
         $date =$row['dates'];
         $time =$row['times'];
         $setme=0;
         $curtime= time();
         $curYear=date('Y');
         list ($year, $month, $day) = explode('-',$date);
         list ($hour, $min) = explode(':',$time);
         //echo "temp $temp";
         if($year==$curYear)
         {
           //convert date to date type
           strtotime($time);
           $time1="7:00";
           strtotime($time1);
          
           if($time<($curtime-$time1))
           {    
          $setmi=1;
             }
       }
       
       
       if($setmi!=1){return $stmt->fetchAll(PDO::FETCH_ASSOC);}
       else {return 0;}
      } }catch (Exception $ex) {

      }
   }
}
   

class Oidio {

  static function temperaturas() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value,dates,times FROM temperature WHERE value>15 AND value<28");
        
       $stmt-> execute();
       
       foreach($stmt as $row)
       {  
         $temp =$row['value'];
         $date =$row['dates'];
         $time =$row['times'];
         $setme=0;
         $curtime= time();
         $curYear=date('Y');
         list ($year, $month, $day) = explode('-',$date);
         list ($hour, $min) = explode(':',$time);
         //echo "temp $temp";
         if($year==$curYear)
         {
           //convert date to date type
           strtotime($time);
           $time1="7:00";
           strtotime($time1);
          
           if($time<($curtime-$time1))
           {    
          $setme=1;
             }
       }
       
       
      if($setme!=1){return $stmt->fetchAll(PDO::FETCH_ASSOC);}
       else {return 0;}
      } }catch (Exception $ex) {

      }
   }
   
     static function moistures() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value,dates,times FROM moisture WHERE value<35");
        
       $stmt-> execute();
       
       foreach($stmt as $row)
       {  
         $temp =$row['value'];
         $date =$row['dates'];
         $time =$row['times'];
         $setme=0;
         $curtime= time();
         $curYear=date('Y');
         list ($year, $month, $day) = explode('-',$date);
         list ($hour, $min) = explode(':',$time);
         //echo "temp $temp";
         if($year==$curYear)
         {
           //convert date to date type
           strtotime($time);
           $time1="7:00";
           strtotime($time1);
          
           if($time<($curtime-$time1))
           {    
          $setmi=1;
             }
       }
       
       
       if($setmi!=1){return $stmt->fetchAll(PDO::FETCH_ASSOC);}
       else {return 0;}
      } }catch (Exception $ex) {

      }
   }
}

class PodridaoC {

  static function indice() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value,dates,times FROM temperature WHERE value>20 AND value<25");
       $stmt-> execute();
       
       foreach($stmt as $row)
       {  
         $temp =$row['value'];
         $date =$row['dates'];
         $time =$row['times'];
         $setme=0;
         $curtime= time();
         $curYear=date('Y');
         list ($year, $month, $day) = explode('-',$date);
         list ($hour, $min) = explode(':',$time);
         //echo "temp $temp";
         if($year==$curYear)
         {
           //convert date to date type
           strtotime($time);
           $time1="15:00";
           strtotime($time1);
          
           if($time<($curtime-$time1))
           {    
          $setme=1;
             }
       }
       
       
      if($setme!=1){return $stmt->fetchAll(PDO::FETCH_ASSOC);}
       else {return 0;}
      } }catch (Exception $ex) {

      }
   }
     
}

class Podridao {

  static function indiceX() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value FROM temperature");
       $stmt-> execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (Exception $ex) {

      }
   }
}

class Escoriose {

  static function indiceX() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT dates FROM temperature");
       $stmt-> execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (Exception $ex) {

      }
   }
}

class Esca {

  static function indic() {
  global $dbh;
      try{
       $stmt = $dbh->prepare("SELECT value,dates,times FROM temperature WHERE value<30");
       $stmt-> execute();
        foreach($stmt as $row)
       {  
         $temp =$row['value'];
         $date =$row['dates'];
         $time =$row['times'];
         $setme=0;
         $curMonth= date('m');
         $curYear=date('Y');
         list ($year, $month, $day) = explode('-',$date);

                    if($year==$curYear)
                        { if($month!=$curMonth)
                        {
                        $setme = 1;
                        }
                        }
                    
                   
         //echo "temp $temp";
       
       return $setme;}
      } catch (Exception $ex) {

      }
   }
}

  /*
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[27]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

*/

?>
