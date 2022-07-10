<!DOCTYPE HTML>
<html>
    <body bgcolor="f2f2f2">
    <center><h2>Book Catalog</h2></center>
    <br>
 
    <?php
    include("DBConnection.php");
 
    $search = $_REQUEST["search"];
 
    $query = "select Title,ISBN,Author,Publisher,YearPublished,Category from book_info where title like '%$search%'"; //search with a book name in the table book_info
    $result = mysqli_query($db,$query);
 
    if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
    {
    ?>
 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Title </th>
            <th> ISBN </th>
            <th> Author </th>
            <th> Publisher </th>
            <th> Year Published </th>
            <th> Cateogry </th>
            
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["Title"];?> </td>
            <td><?php echo $row["ISBN"];?> </td>
            <td><?php echo $row["Author"];?> </td>
            <td><?php echo $row["Publisher"];?> </td>
            <td><?php echo $row["YearPublished"];?> </td>
            <td><?php echo $row["Category"];?> </td>
            
        </tr>
        <?php
        }
        }
        else
        echo "<center>No books found in the library by the name $search </center>" ;
        ?>   
    </table>
    </body>
</html>
