<?php

require_once(dirname(realpath($argv[0])) . '/classes/Student.php');
require_once(dirname(realpath($argv[0])) . '/classes/Course.php');

class StudentTest extends PHPUnit_Framework_TestCase  {

  /**
   * @var Student
   */
  protected $_student;

  private function _defaultCourses() {
    return array(
      'cS_111' => new Course('cS_111', 'Economics'),
      'cP_987' => new Course('cP_987', 'OOP - Java 2')
    );
  }

  public function setUp() {
    $this->_student = new Student('Nemanja', 'Cenkovic', '11-17-1987', 'M');
    $this->_student->setCourses($this->_defaultCourses());
  }

  public function testGetCourses() {
    $this->assertEquals($this->_defaultCourses(), $this->_student->getCourses(),
      'Asserting originally set courses');
  }

  public function testAddCourse() {
    $this->_student->addCourse(new Course('cS_001', 'OOP - Java 1'));
    $this->assertEquals(
      $this->_defaultCourses() + array('cS_001' => 'OOP - Java 1'),
      $this->_student->getCourses(),
      'Adding new course.'
    );

    $this->_student->addCourse(new Course('cS_111', 'Economics'));
    $this->assertEquals(
      $this->_defaultCourses() + array('cS_001' => 'OOP - Java 1'),
      $this->_student->getCourses(),
      'Adding existing course should change number of courses'
    );
  }

  public function testRemoveCourse() {
    $this->_student->removeCourse('cS_111');
    $this->assertEquals(
      array('cP_987' => new Course('cP_987', 'OOP - Java 2')),
      $this->_student->getCourses(),
      'Removing course should change courses property'
    );

    $this->_student->removeCourse('cS_888');
    $this->assertEquals(
      array('cP_987' => new Course('cP_987', 'OOP - Java 2')),
      $this->_student->getCourses(),
      'Removing course that does not exists shouldn\'t change anything'
    );

    $this->_student->removeCourse('cP_987');
    $this->assertEquals(array(), $this->_student->getCourses(),
      'No more courses!!!');
  }

  public function testSetId() {
    $this->_student->setId(2016, 987);
    $this->assertEquals('2016/987', $this->_student->getId());

    $this->setExpectedException(InvalidArgumentException::class);
    $this->_student->setId(11, 'asds');
  }

  public function testGetCard() {
    $this->assertEquals(
      "<p>" .
        "<h1>Mr. Nemanja Cenkovic</h1>" .
        "<h2>Courses:</h2>" .
        "<ul>" .
          "<li><b>cS_111</b><span>Economics</span></li>" .
          "<li><b>cP_987</b><span>OOP - Java 2</span></li>" .
        "</ul>" .
      "</p>",
      $this->_student->getCard(),
      'HTML representation of student'
    );
  }

}