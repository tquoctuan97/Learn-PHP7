<!DOCTYPE html>
<html>

<body>
    <?php
    function myTest()
    {
        $x = 5; // global scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    //using x inside this function will generate an error
    echo "<p>Variable x outside function is: $x</p>";
    ?>
</body>

</html>