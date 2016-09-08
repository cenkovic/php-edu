<?php

require_once 'Person.php';

class Teacher extends Person {

  const TITLE_PROFESSOR = 'Professor';
  const TITLE_HELPER = 'Helper';

  /**
   * @var string
   */
  protected $_title;

  /**
   * List of courses. Do not allow duplicates
   *
   * How can we achieve courses array to be unique? Assoc arrays maybe?
   *
   * @var Course[]
   */
  protected $_courses;

  /**
   * Teacher constructor.
   * @param string $firstName
   * @param string $lastName
   * @param DateTime|int|string $dateOfBirth
   * @param string $gender
   * @param string $title
   */
  public function __construct($firstName, $lastName, $dateOfBirth, $gender, $title) {
    parent::__construct($firstName, $lastName, $dateOfBirth, $gender);
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
   * Get teacher's title
   *
   * @return string
   */
  public function getTitle() {

  }

  /**
   * Sets teacher title
   *
   * @throws InvalidArgumentException
   * @param string @title
   */
  public function setTitle($title) {

  }

  /**
   * String representation of teacher objet
   * Should be Prof. Luke Skywalker
   *
   * @return string
   */
  public function __toString() {
    return "";
  }


  /**
   * Professors card should print student name, student id and list of courses
   *
   * HINT: What is the easiest way to print persons name?
   * HINT: Are we printing Course HTML somewhere?
   * HINT: Run unit test for Professor::getCard to see how HTML representation should look like
   *
   * @return string
   */
  public function getCard() {

  }

}