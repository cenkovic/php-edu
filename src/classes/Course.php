<?php

class Course {

  /**
   * Format must be {cP|cS}_[0-9]{3}
   * Good formats: cP_999, cS_001, cP_912
   * Bad formats: CP_111, 123, cP98, cS121
   *
   * @var string
   */
  protected $_id;

  /**
   * @var string
   */
  protected $_title;

  /**
   * Course constructor.
   * @param string $id
   * @param string $title
   */
  public function __construct($id, $title) {
  }

  /**
   * @return string
   */
  public function getId() {

  }

  /**
   * @throws InvalidArgumentException
   * @param string $id
   */
  public function setId($id) {

  }

  /**
   * @return string
   */
  public function getTitle() {

  }

  /**
   * @param string $title
   */
  public function setTitle($title) {

  }

  /**
   * String representation of Course object
   *
   * course_123: Economics
   *
   * @return string
   */
  public function __toString() {

  }

  /**
   * HTML representation of Card object
   * It is up to you to decide how should it looks like.
   *
   * @return string
   */
  public function getCard() {

  }

}