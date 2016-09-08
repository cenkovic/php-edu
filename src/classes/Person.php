<?php

/**
 * Class Person
 *
 * Questions:
 *  1) Can we refactor and move courses and courses related methods from
 *     children classes to parent Person class?
 *  2) Can we do same for getCard method?
 */
abstract class Person {

  /**
   * Gender constants
   */
  const MALE   = 'M';
  const FEMALE = 'F';

  const ADULT_AGE = 18;

  /**
   * @var string
   */
  protected $_name;

  /**
   * @var DateTime
   */
  protected $_dateOfBirth;

  /**
   * @var string
   */
  protected $_gender;

  /**
   * Person constructor.
   * @param string $firstName
   * @param string $lastName
   * @param DateTime|int|string $dateOfBirth
   * @param string $gender
   */
  public function __construct($firstName, $lastName, $dateOfBirth, $gender) {
    $this->setName($firstName, $lastName);
    $this->setDateOfBirth($dateOfBirth);
    $this->setGender($gender);
  }

  /**
   * Returns person's name
   *
   * @return string
   */
  public function getName() {

  }

  /**
   * Set persons name.
   *
   * @param string $firstName
   * @param string $lastName
   */
  public function setName($firstName, $lastName) {

  }

  /**
   * Returns person date of birth
   *
   * @return DateTime
   */
  public function getDateOfBirth() {

  }

  /**
   * Sets date of birth for the person.
   *
   * $date param can be php DateTime object or date string in
   * format 17-11-1987 or unix timestamp
   *
   * @throws InvalidArgumentException
   * @param DateTime|int|string $date
   */
  public function setDateOfBirth($date) {

  }

  /**
   * Returns persons gender
   *
   * @return string
   */
  public function getGender() {

  }

  /**
   * Sets person gender
   *
   * Allowed genders are M and F
   *
   * @param string $gender
   * @throws InvalidArgumentException
   */
  public function setGender($gender) {

  }

  /**
   * Check if person is adult
   *
   * @return bool
   */
  public function isAdult() {

  }

  /**
   * This is string representation of the person object
   *
   * Printing person object should output: Mr. John Doe or Mrs. Sara Doe
   *
   * @return string
   */
  public function __toString() {
    return '';
  }

  /**
   * HTML representation of persons card
   *
   * @return string
   */
  public abstract function getCard();

}