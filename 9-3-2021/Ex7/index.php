<!DOCTYPE>
<html>
   <head>
      <title>Ex7</title>
   </head>
   <body>
      <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">   
      <?php  
      for($i=1; $i <= 8; $i++)  
      {  
          echo "<tr>";  
          for($col=1; $col <=8; $col++)  
          {  
            $total=$i + $col;  
            if($total%2 == 0)  
            {  
              echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";  
            }  
            else  
            {  
              echo "<td height=30px width=30px bgcolor=#000000></td>";  
            }  
          }  
          echo "</tr>";  
      }  
      ?>  
     </table>
   </body>
</html>