<!DOCTYPE HTML>
<html>
<body bgcolor="f2f2f2">
    <center><h2>Book Catalog</h2></center>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <form action="InsertBooks.php" method="post">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
           
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"> </td>
            </tr>
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="text" name="isbn" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Publisher: </td>
            <td> <input type="text" name="publisher" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Year Published: </td>
            <td> <input type="text" name="yearpublished" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Cateogry :</td>
            <td> <input type="text" name="category" size="48"> </td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>