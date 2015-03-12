<?php
class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase
{

	public $sampleUrl = 'http://www.google.fr';

    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl($this->sampleUrl);
    }

	/**
	 * Résultat OK
	 */
    public function testTitleOk()
    {
        $this->url($this->sampleUrl);
        $this->assertEquals('Google', $this->title());
    }
	
	/**
	 * Resultat Ko
	 */
	public function testTitleKo()
    {
        $this->url($this->sampleUrl);
        $this->assertEquals('Wrong Title', $this->title());
    }

}
?>