<html>
<style>
    body {
        background-image: url(https://t3.ftcdn.net/jpg/03/78/58/26/360_F_378582601_hLLWTYGSwalunj8jS1PIoHNm3piR5CBd.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    input {
        background-color: white;
    }

    td {
        border: none;
        border-radius: 1rem;
       
    }

    form {
        border: solid 1px black;
        box-shadow: 5px 5px 5px 5px black;
        width: 40rem;
        padding: 2rem;
        background-color: maroon;
        opacity:60%;
        border-radius: 2rem;
    }

    table {

        border: solid 1px black;
        border-radius: 1rem;
        background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20210414/pngtree-light-shadow-flash-effect-maroon-background-image_606086.jpg);
        box-shadow: 5px 5px 5px black;
    }

   .sub {
        background-color: none;
        height: 60px;
        background-color: none;
        
        
    }
   #submit{
        background-color:red;
        height: 40px;
        width:100px;
        border-radius: 10px;
        cursor: pointer;
        color: yellow;
    }
    #first_name {
        height: 40px;
        color: red;
        border-radius: 10px;
    }
    #last_name {
        height: 40px;
        color: red;
        border-radius: 10px;
    }
    #salary {
        height: 40px;
        color: green;
        border-radius: 10px;
    }
    h4{
        color: white;
    }
</style>

<head>

<body>
    <center>
        <form id="form1" name="form1" method="post" action="">
            <table padding="10" width="313" height="252" border="1" cellpadding="20" cellspacing="20" align="center">
                <tr>
                    <td colspan="2">
                        <center>
                            <h3 style="color:orange; text-shadow: 1px 0px black;">Tax Calculator </h3>
                        </center>
                    </td>

                </tr>

                <tr>
                    <td width="100">
                        <h4>First Name</h4>
                    </td>
                    <td width="128"><input type="text" name="first_name" id="first_name" /></td>
                </tr>

                <tr>
                    <td>
                        <h4>Last Name</h4>
                    </td>
                    <td> <input type="text" name="last_name" id="last_name" /></td>
                </tr>

                <tr>
                    <td>
                        <h4>Salary</h4>
                    </td>
                    <td> <input type="text" name="salary" id="salary" /> </td>
                </tr>

              
                    <tr>

                        <td colspan="2" class="sub" >
                            <center><input type="submit" name="submit" id="submit" value="Submit" /></center>
                        </td>
                    </tr>
           


            </table>


        </form>
    </center>
</body>
</head>

</html>
<?php
// class Tax_Calculator{



if (isset($_POST['submit'])) {
    class Salary{
        public $salary;
        public $nsal;
        public $tax;
    }
    $salary = $_POST['salary'];

    if ($salary <= 20833) {
        $tax = 0;
    } else if ($salary && 20834 && 33332) {
        $tax = $salary * 20 / 100;
    } else if ($salary && 33333 && 66666) {
        $tax = $salary * 25 / 100 + 2500;
    } else if ($salary && 66667 && 166666) {
        $tax = $salary * 30 / 100 + 10833.33;
    } else if ($salary && 166667 && 666666) {
        $tax = $salary * 32 / 100 + 40833.33;
    } else if ($salary < 666667) {
        $tax = $salary * 35 / 100 + 200833.33;
    }

    $salary = $_POST['salary'];
    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];


  

    
}

echo "<h3 color='white' align='center'>First Name: = " . $first_name . "</h3>";
echo "<h3 align='center'>Last Name: = " . $last_name . "</h3>";
echo "<h3 align='center'>Salary = " . $salary . "</h3>";

echo "<h3 align='center'>Tax = " . $tax . "</h3>";
    $nsal = $salary - $tax;
echo "<h3 align='center'>NetSalary = " . $nsal . "</h3>";

// }
?>
<!-- If an employee makes 20,833 pesos and below, he/she will not have to pay for taxes.
If an employee makes between 20,833 and 33,332 pesos, he/she will pay 20% of the salary exceeding 20,833 pesos.
If an employee makes between 33,333 to 66,666 pesos, he/she will pay 2,500 pesos + 25% of the salary exceeding 33,333 pesos.

If an employee makes between 66,667 to 166,666 pesos, he/she will pay 10,833.33 pesos + 30% of the salary exceeding 66,667 pesos.

If the employee makes between 166,667 to 666,666 pesos, he/she will pay 40,833.33 pesos + 32% of the salary exceeding 166,667.
If the employee makes between 666,667 and above, he/she will pay 200,833.33 pesos + 35% of the salary over 666,667. -->