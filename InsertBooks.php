<!DOCTYPE HTML>
<html>
<body bgcolor="f2f2f2">
    <center><h2>Book Catalog</h2></center>
    <br>
 
    <?php
        include("DBConnection.php");
 
        $title=$_POST["title"];
        $isbn=$_POST["isbn"];
        $author=$_POST["author"];
        $publisher=$_POST["publisher"];
        $yearpublished=$_POST["yearpublished"];
        $category=$_POST["category"];
        
 
        $query = "insert into book_info(title,isbn,author,publisher,yearpublished,category) values('$title','$isbn','$author','$publisher','$yearpublished','$category')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <h3> Book information is inserted successfully </h3>
 
    <a href="SearchBooks.php"> To search for the Book information click here </a>
 
</body>
</html>