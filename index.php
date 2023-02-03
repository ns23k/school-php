<!--
before you start I want to tell you the values between <> are the values that vary according to usage
-->

<!-- declaring boilerplate html like we do in normal html file--> 
<html> 
<head> 
<title>demo</title>
<body bgcolor="#99738E">
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
  echo "<h1>printing variables</h1>";
  echo "<br>"; # adding html break line 
  echo $n1; # just like we do in python just need a $
  echo "<br>";
  echo $n2;
  echo "<br>"; # adding html break line
  /*
    showing arithmetic calculations 
	syntax:
	echo $<num1> <arithmetic opertator (like +,-,/,* etc.> $<num2>;
  */
   echo "<h1> showing arithmetic calculations </h1>";
   echo $n1+$n2;
  /* all arithmetic operators 
  key-points:-
  1. only used with numbers
  2. returns only numbers (if you are not dumb enough(if you are dumb then it will return an exeption(error))
  */
  $sum = $n1 + $n2; // addition
  $sub = $n1 - $n2; // subtraction
  $pro = $n1 * $n2; // product
  $div = $n1 / $n2; // division
  $mod = $n1 % $n2; // gives out the remainder of the calculation (0 in this case)
  // printing out all the above calculations
  echo "<br>";
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
  /*
	using sentences (strings) with arithmetic calculation
	we will just do the same thing as above
  */
  echo "<h1>using sentences (strings) with arithmetic calculation</h1>";
  echo "<br>";
  echo "the sum of 5 and 10 is ".$sum; // just use . (works just like python's +)
  echo "<br>"; # adding html break line
  echo "the differnece between 10 and 5 is ".$sub." (of course)"; // you can use multiple strings by just using another .
  echo "<br>"; # adding html break line
  echo "the the product of the numbers is ".$pro;
  echo "<br>"; # adding html break line
  echo "the division results in ".$div;
  echo "<br>"; # adding html break line
  echo "the remainder of two numbers is ".$mod;
  echo "<br>"; # adding html break line
  /**drum roles**/
  /* 
  logical operators (nothing new if you did python), same as python returns true and false
  key-points:-
  1. returns bolean value (true or false)
  2. used only for numbers or integers (pls don't use it with anything else (cuz i will not tell anything before exam)
  == (equals to (pretty self-explanatory(still don't get it? it means that two numbers are equal or not (atleast in this chapter otherwise it is used for other purposes)))
  > (greater than)
  < (less than)
  != (not equals to)
  >= (greater than equals to) (only returns true if the number is greater than or equal)
  <= (less than equals to) (only returns true if the number is less than or equal)
  syntax:-
  var_dump(<num> <operator> <num2>);
  if we don't use "var_dump" it will return 1 if true else it will return nothing
  */
   echo "<h1>logical operators</h1>";
   echo var_dump($n1==$n2); // false
   echo "<br>";
   echo var_dump($n1<$n2); // false
   echo "<br>";
   echo var_dump($n1>$n2); // true
   echo "<br>";
   echo var_dump($n1!=$n2); // true
   echo "<br>";
   echo var_dump($n1>=$n2); // true
   echo "<br>";
   echo var_dump($n1<=$n2); // false
   
  /*
  other operators
   key-points:-
   1. used with two logical operators
   2. returns boolean
   ! (not) (it reverses the statement so that means if the statement is true it will turn to false (same as python's not))
   && (and) (it will return if both statements are true (same as python's and)
   || (or) (return true if any one of the statements are true, if both are true it will then also return true, if both are false then it will return false (same as python's or))
   syntax:
   <logical_operator_1> <operator> <logical_operator_2>   
  */
   echo "<h1>other operators</h1>";
   echo "<br>";
   echo var_dump(!true); // will return false cuz not reverses the statement
   echo "<br>";
   echo var_dump(!false); // will return true cuz not reverses the statement
   echo "<br>";
   echo var_dump(!($n1==$n2)); // will return true cuz not reverses the statement
   echo "<br>";
   echo var_dump($n1!=$n2&&$n1>=$n2); // true cuz both are true
   echo "<br>";
   echo var_dump($n1==$n2&&$n1>=$n2); // false cuz first one is false
   echo "<br>";
   echo var_dump($n1==$n2||$n1>=$n2); // true cuz second one is true
   echo "<br>";
   echo var_dump($n1==$n2||$n1<=$n2); // false cuz both are false
   echo "<br>";
   echo var_dump($n1!=$n2||$n1>=$n2); // true cuz both are true
   echo "<br>";

?>
</body>
</html>
