<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

body{
  background: #f2f2f2;
}

.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;width: 100%;
  border: 1px solid #00B4CC;
  padding: 5px;
  height: 50px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  position: absolute;
  right: -50px;
  width: 40px;
  height: 36px;
  opacity: 0;
  cursor: pointer;
}

.search:before {
  position: absolute;
  right: -50px;
  width: 40px;
  height: 36px;
  line-height: 36px;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px; font-family: 'FontAwesome';
  content: '\f002';
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 60%;
  margin: 10% auto;
}
  </style>
 </head>
 <body>
      <div class="codrops-top clearfix">
        <a class="codrops-icon codrops-icon-prev" href="../../index.php"><span>Previous page</span></a>
     
      </div>

    <div class="container" align="center">

 
    <header>
        <h1>University <span>Documnets List</span></h1> 
        <nav class="codrops-demos">
          <a class="current-demo" href="search-book.php">BOOK</a>
          <a class="current-demo" href="search-review.php">Review</a>
         <a class="current-demo" href="search-thesis.php">Thesis</a>
        </nav>
      </header>
 
   <div class="form-group">
    <div class="input-group">
       <div class="wrap">
   <div class="search">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" class="searchTerm" placeholder="Search by Book " class="form-control" />
    </div>
   </div></div></div>
  
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
   url:"thesis.php",
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