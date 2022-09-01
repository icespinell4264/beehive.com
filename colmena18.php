<?php
	include_once 'header.php';
?>

<section class="home-section">
  
<html>
<head>
  <title>Live Add Edit Delete Datatables Records using PHP Ajax</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0px;
   background-color:#f1f1f1;
  }
  .box
  {
   width:900px;
   padding:200px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   box-sizing:border-box;
  }
  .table_responsive{
    width:500px;
    padding: 100px;
  }
  </style>
 </head>

 <body>
  <div class="container_box">
  <h1 align="center">Beehive18</h1>
   <p align="center"> day/month/year, 00/00/0000.</p>
   <p align="center">Type time in this style 12:00 no 24:00. </p>
   <p align="center">Please fill everything before touching anything outside the table. </p>
   <br />
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info">Add</button>
    </div>
    <br />
    <div id="alert_message" ></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Colmena</th>
       <th>Cuadros</th>
       <th>Reina</th>
       <th>Huevos</th>
       <th>Larvas</th>
       <th>Pupas</th>
       <th>Machos</th>
       <th>Celdas de Reina</th>
       <th>Celdas de Zangano</th>
       <th>Miel</th>
      <th>Polen</th>
       <th>Comentarios</th>
       <th>Fecha</th>
      <th>Hora</th>
       <th>Tiempo</th>
       <th></th>
       
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript">
  $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"colmenafunctions/tablefunctions18/fetch.php",
     type:"POST"
    }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"colmenafunctions/tablefunctions18/update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
    var html = '<tr>'
    html += '<th id= "data1">Colmena18</th>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>'; 
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td contenteditable id="data6"></td>'; 
   html += '<td contenteditable id="data7"></td>';
   html += '<td contenteditable id="data8"></td>';
   html += '<td contenteditable id="data9"></td>'; 
   html += '<td contenteditable id="data10"></td>';
   html += '<td contenteditable id="data11"></td>';
   html += '<td contenteditable id="data12"></td>'; 
   html += '<td contenteditable id="data13"></td>';
   html += '<td contenteditable id="data14"></td>';
   html += '<td contenteditable id="data15"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var Colmena = $('#data1').text();
   var Cuadros = $('#data2').text();
   var Reina = $('#data3').text();
   var Huevos = $('#data4').text();
   var Larvas = $('#data5').text();
   var Pupas = $('#data6').text();
   var Machos = $('#data7').text();
   var Celdas_de_Reina = $('#data8').text();
   var Celdas_de_Zangano = $('#data9').text();
   var Polen=$('#data10').text();
   var  Miel  = $('#data11').text();
   var Comentarios = $('#data12').text();
   var Fecha = $('#data13').text();
   var Hora = $('#data14').text();
   var Tiempo = $('#data15').text();
   
   
   if( Colmena!= '' && Cuadros != '' &&  Reina != '' && Huevos != '' && Larvas != '' &&  Pupas != '' 
   && Machos != '' && Celdas_de_Reina != '' && Celdas_de_Zangano != '' && Miel != '' && Polen != '' && Comentarios != ''&& Fecha != '' && Hora != '' && Tiempo != '' )
   {
    $.ajax({
     url:"colmenafunctions/tablefunctions18/insert.php",
     method:"POST",
     data:{Colmena:Colmena, Cuadros:Cuadros, Reina:Reina, Huevos:Huevos, Reina:Reina, Larvas:Larvas, Pupas:Pupas, Machos:Machos, 
     Celdas_de_Reina:Celdas_de_Reina, Celdas_de_Zangano:Celdas_de_Zangano,Miel:Miel,Polen:Polen, Comentarios:Comentarios,Fecha:Fecha,Hora:Hora, Tiempo:Tiempo},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("All fields required");
   }
  });
 
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"colmenafunctions/tablefunctions18/delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>
</div>
</div>
</section>

