<?php

require_once 'Person.php';

/**
 * Class Student
 */
class Student extends Person {

  /**
   * List of courses. Do not allow duplicates
   *
   * How can we achieve courses array to be unique? Assoc arrays maybe?
   *
   * @var Course[]
   */
  protected $_courses;

  /**
   * This os string representation of student id
   * Must be in format YYYY/xxxx. YYYY is year in 4 digit format and
   * xxxx is 4 digit number
   *
   * @var string
   */
  protected $_id;

  /**
   * Returns student id
   *
   * @return string
   */
  public function getId() {

  }

  /**
   * Builds and set student id based of year of entry and random 4 digit number
   *
   * @throws InvalidArgumentException
   * @param int $year
   * @param int $id
   */
  public function setId($year, $id) {

  }

  /**
   * Returns array of courses.
   *
   * @return Course[]
   */
  public function getCourses() {

  }

  /**
   * Set courses
   *
   * @param Course[] $courses
   */
  public function setCourses($courses) {

  }

  /**
   * Adds course to the list of courses and returns new list of courses
   *
   * @param Course $course
   * @return Course[]
   */
  public function addCourse($course) {

  }

  /**
   * Remove course for passed course id.
   *
   * @param Course $courseId
   */
  public function removeCourse($courseId) {

  }

  /**
   * Student card should print student name, student id and list of courses
   *
   * HINT: What is the easiest way to print persons name?
   * HINT: Are we printing Course HTML somewhere?
   * HINT: Run unit test for Student::getCard to see how HTML representation should look like
   *
   * @return string
   */
  public function getCard() {

  }

}