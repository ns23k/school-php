<!--
before you start I want to tell you the values between <> are the values that vary according to usage
-->

<!-- declaring boilerplate html like we do in normal html file--> 
<html> 
<head> 
<title>demo</title>
<body>
<!-- this is where fun begins ;-D -->
<?php
 # basic
 /*
	 syntax  
	 echo <value>; (semin-colon is important)
 */
 echo "yo "; # works just like python's print or C++'s cout or C's println or you get the point
 /*
	declaring a variable
	syntax:
	$<name> = <value>;
 */
 $n1 = 10; # just like python's variables, things just that we need to start it with a $ and end it with a semi-colon (;)
 $n2 = 5;
 /*
	printing variables
	syntax:
	echo $<var_name>;
 */
  echo $n1; # just like we do in python just need a $
  echo "<br>"; # adding html break line
  /*
    showing arithmetic calculations 
	syntax:
	echo $<num1> <arithmetic opertator (like +,-,/,* etc.> $<num2>;
  */
  echo $n1 + $n2; // answer is 15
  /* all arithmetic operators */
  $sum = $n1 + $n2; // addition
  $sub = $n1 - $n2; // subtraction
  $pro = $n1 * $n2; // product
  $div = $n1 / $n2; // division
  $mod = $n1 % $n2; // gives out the remainder of the calculation (0 in this case)
  // printing out all the above calculations
  echo $sum;
  echo "<br>"; # adding html break line
  echo $sub;
  echo "<br>"; # adding html break line
  echo $pro;
  echo "<br>"; # adding html break line
  echo $div;
  echo "<br>"; # adding html break line
  echo $mod;
  echo "<br>"; # adding html break line
// Logical operators to-do
?>
</body>
</html>
