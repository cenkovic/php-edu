<?php

require_once(dirname(realpath($argv[0])) . '/classes/Student.php');

class PersonTest extends PHPUnit_Framework_TestCase  {

  /**
   * @var Person
   */
  protected $_person;

  public function setUp() {
    $this->_person = new Student('Nemanja', 'Cenkovic', '11-17-1987', 'M');
  }

  public function testSetName() {
    $this->assertEquals('Nemanja Cenkovic', $this->_person->getName(),
      'First name and last name should have space between them');

    $this->_person->setName('    Milica', '     Stevanovic  ');
    $this->assertEquals('Milica Stevanovic', $this->_person->getName(),
      'No more than one empty spaces between first and last name. Trim also');

    $this->_person->setName('sredojE', 'CutovIc');
    $this->assertEquals('Sredoje Cutovic', $this->_person->getName(),
      'First letter should be upper case. All other lower case');
  }

  public function testSetDateOfBirth() {
    $this->assertEquals(
      DateTime::createFromFormat('d-m-Y', '11-17-1987'),
      $this->_person->getDateOfBirth(),
      'String date should be set as DateTime object'
    );

    $date = new DateTime();
    $date->setTimestamp(564171937);
    $this->_person->setDateOfBirth(564171937);
    $this->assertEquals(
      $date,
      $this->_person->getDateOfBirth(),
      'Unix timestamp should be set as DateTime object'
    );

    $date2 = new DateTime();
    $this->_person->setDateOfBirth($date2);
    $this->assertEquals(
      $date2,
      $this->_person->getDateOfBirth(),
      'DateTime object should be set as it is.'
    );
  }

  public function testSetGender() {
    $this->assertEquals('M', $this->_person->getGender(), 'Male?');

    $this->_person->setGender('F');
    $this->assertEquals('F', $this->_person->getGender(), 'Female?');

    $this->setExpectedException(InvalidArgumentException::class);
    $this->_person->setGender('U');
  }

  public function testIsAdult() {
    $this->assertTrue($this->_person->isAdult(), 'Nemanja is adult!');

    $this->_person->setDateOfBirth('1-1-2015');
    $this->assertFalse($this->_person->isAdult(), 'Baby cannot be adult!');
  }

  public function testToString() {
    $this->assertEquals('Mr. Nemanja Cenkovic', "$this->_person",
      'Male person should be Mr. ...');

    $milica = new Student('Milica', 'Stevanovic', '11-11-1993', 'F');
    $this->assertEquals('Mrs. Milica Stevanovic', "$milica",
      'Female person should be Mrs. ...');
  }

}