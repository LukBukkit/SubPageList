<?php

namespace SubPageList\Integration;

use SubPageList\SubPageCount;

/**
 * @file
 * @ingroup SPLTest
 * @group SubPageList
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class SubPageCountingTest extends \PHPUnit_Framework_TestCase {

	public function testCanCount() {
		$counter = new SubPageCount();

		//$counter->setCounter(  );

		//$counter->handle();

		$this->assertTrue( true ); // TODO
	}

}
