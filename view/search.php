<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Webslesson Tutorial</title>
  <script src="../view/js/jquery-3.2.1.min.js"></script>
  <script src="../view/js/jquery.tabledit.min.js"></script>
  <script src="../view/js/jquery.tabledit.js"></script>
  <script src="../view/js/jquery.min.js"></script> 
              

  <style> 
  body{
    background-color:     #fff986;
  }
  #result {
    background-color: #d07cff;
  }
  .search{
    font-size: 50px;
    float: left;
    
  }
		.masterlist {
			width: 100%;
			border-collapse: collapse;
        }

		.masterlist th {
			background: #aaa;
			text-align: left;
        }

		.masterlist th, .masterlist td {
			padding: 10px;
			border-bottom: 1px solid #aaa;
        }
        input[type=text] {
    		width: 200px;
    		height:30px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
		}

/* When the input field gets focus, change its width to 100% */	
		/*input[type=text]:focus {
		    width: 100%;
		}
		.search{
			font-size: 20px;			

		}*/

   </style>

 </head>
 <body>
  <div class="container">
   <br />
   <h1 align="center">Search Student</h1><br />
   <div class="form-group">
    <div class="input-group">
     <span class="search"><h><b>Search</b></h></span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Student Details" class="form-control" />

    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>



<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
