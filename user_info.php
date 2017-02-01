<html>
<?php

$server_name = "localhost";
$db_user = "root";
$db_password = "tyf";

function creat_base_db()
{
	$conn = mysqli_connect($GLOBALS['server_name'], $GLOBALS['db_user'], $GLOBALS['db_password']);
	if (!$conn)
	{
		exit('<p>Connection failed: </p>' . mysqli_error());
	}
	else
	{
		echo '<br>Connect DB Success !</br>';
	}

	$sql = 'CREATE DATABASE CtripTestCase';
	if (mysqli_query($conn, $sql))
	{
		echo "Creat database success! <br>";
	}

/*	if (mysqli_query($conn, "DROP DATABASE CtripTestCase"))
	{
		echo "Delete user database<br>";
	}
*/

	mysqli_close($conn);
}

function creat_table_data()
{
	$conn = mysqli_connect($GLOBALS['server_name'], $GLOBALS['db_user'], $GLOBALS['db_password'], "CtripTestCase");
	if (!$conn)
	{
		exit('<p>Connection CtripTestCasefailed: </p>' . mysqli_error());
	}
	else
	{
		echo '<br>Connect CtripTestCase Success !</br>';
	}

	$sql_arr = array(
			'CREATE TABLE user_info',
			'CREATE TABLE requestments_info',
		);
	$sql = implode(';', $sql_arr);
	if (mysqli_multi_query($conn, $sql))
	{
		echo "Creat tables success!<br>";
	}
	else
	{
		exit('Creat tables error : <br>' . mysqli_error());
	}

	mysqli_close($conn);
}
//creat_base_db();
//creat_table_data();
$user_name = $user_pwd = "";

function check_user()
{
    $conn = mysqli_connect($GLOBALS['server_name'], $GLOBALS['db_user'], $GLOBALS['db_password'], "CtripTestCase");
    if (!$conn)
    {
        exit('<p>Connection CtripTestCasefailed: </p>' . mysqli_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $GLOBLE['user_name'] = $_POST['user_name'];
        $GLOBLE['user_pwd'] = $_POST['user_pwd'];
        $sql = 'select user_name from user_info where user_name=$GLOBLE[\'user_name\']';
        if (mysqli_query($conn, $sql))
        {
            echo "welcome " . $GLOBLE['user_name'] . " ! <br>";
        }
        else
        {
            echo "user account does not exist !";
        }

    }
}

check_user();
?>
</html>