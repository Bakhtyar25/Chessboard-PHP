<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
      <h1 style="margin-left:515px;">Chess board</h1>
      <h1 style="margin-left:450px;">Bakhtyar Muhammed</h1>
   <table width="500px" height="500px" cellspacing="0px" cellpadding="0px" border="0.5px" style="border: 1px solid ; margin-left:350px;" >
  
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=
          #6E3A07></td>";
          }
          }
          echo "</tr>";
    }
          ?>
         
  </table>

  </body>
  </html>