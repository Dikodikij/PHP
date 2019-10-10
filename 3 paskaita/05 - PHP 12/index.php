<html>
    <head>
    <title>staciakampis</title>
    </head>
    <body>
<?php
        if (!isset($_POST["a"]) && !isset($_POST["b"]) && !isset($_POST["submit"]) )  {   
    ?>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
            Iveskite Vardas: <input type="text" name="a"><br>
            Iveskite Pavarde: <input type="text" name="b"><br>
            <input type="submit" value="spausti" name="submit">
        </form>
    <?php
        } else { 
            $vardas=$_POST['a'];
            $pavarde=$_POST['b'];
            echo  $vardas. ' ' .$pavarde;
        }
        ?>
    </body>
</html>