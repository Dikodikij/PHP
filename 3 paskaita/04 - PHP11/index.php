<html>
    <head>
    <title>staciakampis</title>
    </head>
    <body>
<?php
        function plotas($num1, $num2) {
        $result = $num1*$num2;
        return $result;
}
        if (!isset($_POST["a"]) && !isset($_POST["a"]) && !isset($_POST["submit"]) )  {   
    ?>
        <form action="<?php $_PHP_SELF; ?>" method="POST">
            Iveskite staciakampio ilgi: <input type="number" name="a"><br>
            Iveskite staciakampio ploti: <input type="number" name="b"><br>
            <input type="submit" value="Siusti duomenis ir Skaiciuoti" name="submit">
        </form>
        
    <?php
        } else { 
            $num1=$_POST['a'];
            $num2=$_POST['b'];
            echo 'Atsakymas: staciakampio su sonais ' .$num1 . ' ir ' .$num2 . ' = '.  plotas($num1, $num2);
        }
        ?>
    </body>
</html>