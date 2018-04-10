<html>
    <head>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        
        <script type="text/javascript">
        
$(document).ready(function(){
            
            $('#insert').click(function( event ) {
  event.preventDefault();
 
       $.ajax({
                url:"load.php",
                method:"post",
                dataType:"html",
                success:function(result){  
                    $('#res').html(result);
                  
                }
                })
                    
 
});
            
               
       
 })
 </script>
        
    </head>
    
    <body>
        
        <div id="res"> </div>
        
        <form method="post">
             
            <input type="submit" name="insert" id="insert" value="load">
        </form>
        
        
 </body>
    
 </html>


