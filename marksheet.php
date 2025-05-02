<?php
//for physics
$phy_ob = 63;
$phy_t = 75;
$phy_grade = $phy_ob / $phy_t * 100;

//for chemistry
$chem_ob = 53;
$chem_t = 60;
$chem_grade = $chem_ob / $chem_t * 100;

//for maths

$math_ob = 60;
$math_t = 75;
$math_grade = $math_ob / $math_t * 100; 

//for english

$eng_ob = 82;
$eng_t = 100;
$eng_grade = $eng_ob / $eng_t * 100;

//for computer 

$comp_ob = 60;
$comp_t = 60;
$comp_grade = $comp_ob / $comp_t * 100;

//now total

$obtain = $phy_ob + $chem_ob + $math_ob + $eng_ob + $comp_ob;
$total = 370;
$sum = $obtain / $total * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Student Marksheet</h2>

<table>
    <tr>
        <th>Subject</th>
        <th>Marks Obtained</th>
        <th>Total Marks</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>Physics</td>
        <td>63</td>
        <td>75</td>
        <td>
        <?php
            if($phy_grade >=  95){
                echo 'unbelievable';
            }elseif($phy_grade <= 45){
                echo '<span style="color:red;s">You are fail</span>';
            }elseif($phy_grade <= 55){
                echo 'C Grade';
            }elseif($phy_grade <= 65){
                echo 'B Grade';
            }elseif($phy_grade <= 85){
                echo 'A Grade';
            }elseif($phy_grade <= 95){
                echo 'A++';
            }else{
                $no = NULL;
                echo $no;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Chemistry</td>
        <td>53</td>
        <td>60</td>
        <td>
        <?php
            if($chem_grade >=  95){
                echo 'unbelievable';
            }elseif($chem_grade <= 45){
                echo '<span style="color:red;s">You are fail</span>';
            }elseif($chem_grade <= 55){
                echo 'C Grade';
            }elseif($chem_grade <= 65){
                echo 'B Grade';
            }elseif($chem_grade <= 85){
                echo 'A Grade';
            }elseif($chem_grade <= 95){
                echo 'A++';
            }else{
                $no = NULL;
                echo $no;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Mathematics</td>
        <td>60</td>
        <td>75</td>
        <td>
        <?php
            if($math_grade >=  95){
                echo 'unbelievable';
            }elseif($math_grade <= 45){
                echo '<span style="color:red;s">You are fail</span>';
            }elseif($math_grade <= 55){
                echo 'C Grade';
            }elseif($math_grade <= 65){
                echo 'B Grade';
            }elseif($math_grade <= 85){
                echo 'A Grade';
            }elseif($math_grade <= 95){
                echo 'A++';
            }else{
                $no =NULL;
                echo $no;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>English</td>
        <td>82</td>
        <td>100</td>
        <td>
        <?php
            if($eng_grade >=  95){
                echo 'unbelievable';
            }elseif($eng_grade <= 45){
                echo '<span style="color:red;s">You are fail</span>';
            }elseif($eng_grade <= 55){
                echo 'C Grade';
            }elseif($eng_grade <= 65){
                echo 'B Grade';
            }elseif($eng_grade <= 85){
                echo 'A Grade';
            }elseif($eng_grade <= 95){
                echo 'A++';
            }else{
                $no =NULL;
                echo $no;
            }
               ?>
        </td>
    </tr>
    <tr>
        <td>Computer</td>
        <td>60</td>
        <td>60</td>
        <td>
        <?php
            if($comp_grade >=  95){
                echo 'A++';
            }elseif($comp_grade <= 45){
                echo '<span style="color:red;s">You are fail</span>';
            }elseif($comp_grade <= 55){
                echo 'C Grade';
            }elseif($comp_grade <= 65){
                echo 'B Grade';
            }elseif($comp_grade <= 85){
                echo 'A Grade';
            }elseif($comp_grade <= 95){
                echo 'A++';
            }else{
                $no =NULL;
                echo $no;
            }
               ?>
        </td>
    </tr>
    <tr style="border: 2px solid black;">
        <td colspan="3"><b>Percentage</b></td>
        <td>
            <?php
            echo $sum;
            ?>
        </td>
    </tr>
    <tr style="border: 2px solid black;">
        <td colspan="3"><b>Grade</b></td>
        <td>
            <?php
            if($sum >=  95){
                echo 'unbelievable';
            }elseif($sum <= 45){
                echo '<span style="color:red;s">You are fail</span>';
            }elseif($sum <= 55){
                echo 'C Grade';
            }elseif($sum <= 65){
                echo 'B Grade';
            }elseif($sum <= 85){
                echo 'A Grade';
            }elseif($sum <= 95){
                echo 'A++';
            }else{
                $no =NULL;
                echo $no;
            }
            ?>
        </td>
    </tr>
</table>

</body>
</html>