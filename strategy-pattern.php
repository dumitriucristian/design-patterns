<h3>What it does:</h3>
<p>Take a class that does something specific in a lot of different ways and extract all of these algorithms into separate concrete classes, called strategies</p>
<p>Each concrete strategy class will implement the strategy  interface </p>
<p>The strategy interface will have one method that will be implemented by all the concrete classes</p>
<p>The context class will, have a method, that use as param an object of type strategy interface</p>

<h3>How it does:</h3>
<p></p>

<h3>How to do it</h3>

<ul>
    <li>Define a family of algorithms</li>
    <li>Put each of them in a separate class</li>
    <li>Make their objects interchangeable</li>
</ul>

<?php
//bad implementation of a transport class
 class GoToSchoolBad
 {
     public function goToSchoolOnFoot()
     {
         echo 'I am going to school on foot' . '<br />';
     }

     public function goToSchoolByCar()
     {
         echo 'Going to school by car' . '<br />';
     }

     //... another 9999 methods to get to school. It's a huge class, hard to mantain and test.
 }
 $goToSchool = new GoToSchoolBad();
 $goToSchoolOnFoot = $goToSchool->goToSchoolOnFoot();

?>
<?php
//good implementation of a transport class
 interface GoToSchool
 {
     public function go();

 }

 //implement the interface for each concrete class
class GoToSchoolByCar implements GoToSchool
{
    public function go()
    {
        return 'Going to school by car' . '<br />';
    }
}

//implement the interface for each concrete class
class GoToSchoolOnFoot implements GoToSchool
{
    public function go()
    {
        return 'I am going to school on foot' . '<br />';
    }
}
//context class use the interface and concrete classes
class Student
{
    //require for interface object
    public function goToSchool(GoToSchool $go)
    {
        //go to school
        echo $go->go();
    }
}

 $student1 = new Student();
//first day student go on fooot , no money for gas
 $student1->goToSchool(new GoToSchoolOnFoot());

 //second day student win to lottery so go to school by car
 $student1->goToSchool(new GoToSchoolByCar());

/* you now have independent classes that can be changed without changing other methods */
/* it's not about the implementation class it's about optimization" */
?>
