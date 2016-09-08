***PHP EDU***

**This is sample TDD php project**

Goal is to implement all methods in classes Teacher, Student, Person
and Course.

Some unit tests are already set. To run the first cd to classes and 
execute `../../vendor/phpunit/phpunit/phpunit tests`

Command above will run all unit tests. They will help you to implement
missing methods.

**Assignments**
* Implement all methods in Person class. Person class is parent class
of Student and Teacher class since both Student and Teacher are Persons. 
Unit tests for Person class are already written to you.

* Implement all methods for Student class. Same as for Person class,
unit tests are already written for you

* Implement all methods for Teacher class. Pay attention to courses 
property. Are they redundant? Can we stay DRY? Not all tests are 
implemented. Or are they?

* Implement all method for Course class. No unit tests are written
for Course class. This will be your job in this assignment

* Classes are not auto loaded. Running unit tests from different 
directorry will probably couse fatal errors. We should fix that

* Add student.php page in public_html directory and add student
object to the view. Try to print student object. HTML representation
of Student class should be printed