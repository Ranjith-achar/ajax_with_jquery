<html>
    <head>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        
        <script type="text/javascript">
        
        
        
        $(document).ready(function(){
            
            $('#insert').click(function( event ) {
  event.preventDefault();
 
       
     
 
 
        $.ajax({
                
                url:"insert.php",
                method:"post",
                data: $('form').serialize(),
                dataType:"text",
                success:function(strmsg){  
                    $('#messege').text(strmsg);
                  
                }
                })
                    $('#messege').fadeOut("slow",function(){})
 
 
});
            
               
       
 })
 </script>
        
    </head>
    
    <body>
        
        <p id="messege"> </p>
        
        <form method="post">
          Name :  <input type="text" name="name" id="name">
            </br>
                        </br>

          email :   <input type="email" name="email" id="email">
            </br>
                        </br>

           contact : <input type="text" name="contact" id="contact">
            </br>

            </br>
            <input type="submit" name="insert" id="insert">
        </form>
        
        
        
        
    </body>
    
    
    
</html>