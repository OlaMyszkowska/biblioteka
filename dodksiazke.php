<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="css.css">
</head>
<body>
        <nav class="grid-1">Książki</nav>
        <nav class="grid-2">
        <ul id="list">
        <li>
        <a href="Index.php"> Menu </a>
        </li>
        <li>
           <a href="AddBook.php">Dodaj Książkę</a> 
        </li>
        </ul>
        </nav>
        <main class="grid-4">
  
<form id="forum">
        <input type="text" id="tytulname"  class="input" name="tytulname" placeholder="Tytuł ">
        <input type="text" id="lname" class="input" name="lname"  placeholder="autor">
        <input type="text" id="isbname" class="input" name="isbname" placeholder="Kod ISBN">
        <input type="date" id="dname" class="input" name="dname">
        <input type="text" id="ename" class="input" name="ename" placeholder="Ilość sztuk">
        <input type="submit" value="Dodaj książkę" >
 
</form>
        </main>
        <footer class="grid-3">Ola Myszkowska &copy</footer>
        <script src="addbook.js"></script>
</body>
</html>
