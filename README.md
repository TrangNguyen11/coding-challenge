# coding-challenge

Solve these problem to finished your coding challenge!

Problem #1:

```
Implement a groupByOwners function that:

Accepts an associative array containing the file owner name for each file name.
Returns an associative array containing an array of file names for each owner name, in any order.
For example, for associative array ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"] the groupByOwners function should return ["Randy" => ["Input.txt", "Output.txt"], "Stan" => ["Code.py"]].
```

Problem #2:
```
Implement the unique_names function. When passed two arrays of names, it will return an array containing the names that appear in either or both arrays. The returned array should have no duplicates.

For example, calling unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']) should return ['Emma', 'Olivia', 'Ava', 'Sophia'] in any order.
```
Problem #3:
```
The user interface contains two types of user input controls: TextInput, which accepts all texts and NumericInput, which accepts only digits.

Implement the class TextInput that contains:

Public function add($text) - adds the given text to the current value.
Public function getValue() - returns the current value (string).
Implement the class NumericInput that:

Inherits from TextInput.
Overrides the add method so that each non-numeric text is ignored.
For example, the following code should output '10':

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
```
