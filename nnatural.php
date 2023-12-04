<html>
<head>
    <title>PHP Program To find the Sum of N natural numbers</title>
</head>
<body>
    <form method="get">
        <table border="0">
            <tr>
                <td> <input type="text" name="num" value="" placeholder="Enter a positive integer"/> </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Submit"/> </td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_GET['submit']))
    {
        $n = $_GET['num'];
        $sum = 0;

        // Using a loop to calculate the sum of N natural numbers
        for($i = 1; $i <= $n; ++$i)
        {
            $sum = $sum + $i;
        }

        echo "Sum of $n natural numbers = $sum";
    }
    ?>
</body>
</html>
