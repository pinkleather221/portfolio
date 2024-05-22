<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php




if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // Retrieve form data
    $employeeName = $_POST["txtname"];
    $employeeNumber = $_POST["txtnumber"];
    $employeeSalary = $_POST["txtsalary"];
    $nhifAmount = $_POST["txtnhif"];
    $nssfAmount = $_POST["txtnssf"];
    $houseAllowance = $_POST["txthouse"];
    $medicalAllowance = $_POST["txtmedical"];
    $payeAmount = $_POST["txtpaye"];

    // Calculate net salary
    $grossSalary = $employeeSalary + $houseAllowance + $medicalAllowance;
    $deductions = $nhifAmount + $nssfAmount + $payeAmount;
    $netSalary = $grossSalary - $deductions;

    // the results
    echo "<h2>Salary Details for $employeeName (Employee Number: $employeeNumber)</h2>";
    echo "<p><strong>Gross Salary:</strong> $grossSalary</p>";
    echo "<p><strong>Deductions:</strong> $deductions</p>";
    echo "<p><strong>Net Salary:</strong> $netSalary</p>";
}
else{
    echo "Form not submitted";
}  
?>   
</body>
</html>