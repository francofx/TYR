<html>  
      <head>  
           <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

           <title>Tramites y reclamos</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <h2 align="center">Búsqueda de expedientes</h2><br /> 
                <p>Ingresando el número del expediente de tu interés, vas a poder hacerle un seguimiento

seguro, conocer su fecha de ingreso y las fechas y detalles de las diferentes etapas por las

que va atravesando en el mecanismo legislativo.</p> 
                <div class="form-group">  
                     <div class="input-group">  
                          <span class="input-group-addon">Buscar</span>  
                          <input type="text" name="search_text" id="search_text" placeholder="Busqueda por Numero de expediente" class="form-control" />  
                     </div>  
                </div>  
                <br />  
                <div id="result"></div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#search_text').keyup(function(){  
           var txt = $(this).val();  
           if(txt != '')  
           {  
                $.ajax({  
                     url:"fetch.php",  
                     method:"post",  
                     data:{search:txt},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          $('#result').html(data);  


                     }  
                });  
           }  
           else  
           {  
                $('#result').html('');                 
           }  
      });  
 });  
 </script>  