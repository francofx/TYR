<?php  
 $connect = mysqli_connect("localhost", "root", "CMRmoronbrothers", "expedientes");  
 $output = '';  
//charset

  header("Content-Type: text/html; charset=ISO-8859-1");

  //header("Content-Type: text/html; charset=UTF-8");

 $sql = "SELECT * FROM expedientes WHERE numero LIKE '%".$_POST["search"]."%' LIMIT 100";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
      $output .= '<h4 align="center">Resultado de su busqueda</h4>';  
      $output .= '<div class="table-responsive">  
                          <table class="table table bordered">  
                               <tr>  
                                  
                                    <th>A&ntilde;o</th>  
                                    <th>Numero</th>  
                                    <th>Caratula</th> 
                                    <th>Tipo de proyecto</th>
                                    <th>Fecha de presentacion</th> 
                                    
                               </tr>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["anio"].'</td>  
                     <td>'.$row["numero"].'</td>  
                     <td>'.$row["caratula"].'</td>  
                     <td>'.$row["tipo_proy"].'</td>  
                     <td>'.$row["fec_presentacion"].'</td> 
                </tr>  
           ';  
      }  
      echo $output;  
 }  
 else  
 {  
      echo 'No se encotraron expedientes cargados en el sistema con ese numero por el momento';  
 }  
 ?>  