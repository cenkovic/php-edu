<?php

require_once(dirname(realpath($argv[0])) . '/classes/Teacher.php');
require_once(dirname(realpath($argv[0])) . '/classes/Course.php');

class TeacherTest extends PHPUnit_Framework_TestCase  {

  /**
   * @var Teacher
   */
  protected $_teacher;

  private function _defaultCourses() {
    return array(
      'cS_111' => new Course('cS_111', 'Economics'),
      'cP_987' => new Course('cP_987', 'OOP - Java 2')
    );
  }

  public function setUp() {
    $this->_teacher = new Teacher('Jovan', 'Jokic', '11-11-1989', 'M', Teacher::TITLE_PROFESSOR);
    $this->_teacher->setCourses($this->_defaultCourses());
  }

  public function testSetTitle() {
    $this->assertEquals(Teacher::TITLE_PROFESSOR, $this->_teacher->getTitle(),
      'Testing Professor title');

    $this->_teacher->setTitle(Teacher::TITLE_HELPER);
    $this->assertEquals(Teacher::TITLE_HELPER, $this->_teacher->getTitle(),
      'Testing helper title');

    $this->setExpectedException(InvalidArgumentException::class);
    $this->_teacher->setTitle('Moron');
  }

  public function testToString() {
    $this->assertEquals("Professor Jovan Jokic", "$this->_teacher",
      "Jokic the Professor");

    $this->_teacher->setTitle(Teacher::TITLE_HELPER);
    $this->assertEquals("Helper Jovan Jokic", "$this->_teacher",
      "Jokic the Helper");
  }

  public function testGetCard() {
    $this->assertEquals(
      "<div>" .
        "<h1>Profesor Jovan</h1>" .
        "<table>" .
          "<tr><td>cS_111</td><td>Economics</td></tr>" .
          "<tr><td>cP_987</td><td>OOP - Java 2</td></tr>" .
        "</table>" .
      "</div>",
      $this->_teacher->getCard(),
      'HTML representation of teacher'
    );
  }

}