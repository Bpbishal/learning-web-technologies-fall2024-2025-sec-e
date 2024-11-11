<?php
      for($i=1;$i<=3;$i++)
      {
          for($j=1;$j<=$i;$j++)
          {
              print("* ");
          }
          print("<br>");

      }
      print("<br>");

     
      for($i=3;$i>=1;$i--)
      {
          for($j=1;$j<=$i;$j++)
          {
              print($j." ");
          }
          print("<br>");

      }
      print("<br>");

      $letter="A";
      for($i=1;$i<=3;$i++)
      {
          for($j=1;$j<=$i;$j++)
          {
              print($letter." ");
              $letter++;
          }
          print("<br>");

      }
?>