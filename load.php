<h1>sfdfdfd</h1>


<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>contact</th>
        </tr>
    </thead>
 <?php 

$link= mysqli_connect("localhost","root","","college");

$query="SELECT * FROM students";

$result=mysqli_query($link, $query);

while($row=mysqli_fetch_array($result)){
  ?>  



    
  
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['contact']?></td>
        </tr>
      
    
    
    <?php }?>
</table>
