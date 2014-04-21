<?php
App::uses('coverletter', 'Model');

/**
 * coverletter Test Case
 *
 */
class coverletterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cover_letter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->coverletter = ClassRegistry::init('coverletter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->coverletter);

		parent::tearDown();
	}

}
