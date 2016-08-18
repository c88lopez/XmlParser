<?php
/**
 * test for Parse class file
 *
 * PHP version 7
 *
 * @category Test
 * @package  Parser
 * @author   Cristian Lopez <cristian.lopez@jampp.com>
 */
namespace test\c88lopez\XmlParser;
use c88lopez\XmlParser\Parser;

class ParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Parser
     */
    protected $instance;

    /**
     * setUp
     */
    public function setUp()
    {
        $this->instance = new Parser();
    }

    /**
     * tearDown
     */
    public function tearDown()
    {
        unset($this->instance);
    }

    public function testSettersAndGetters()
    {
        $dummyUrl = 'a/dummy/and/invalid/url';

        $this->assertEquals(null, $this->instance->getUrl());
        $this->assertInstanceOf('c88lopez\XmlParser\Parser', $this->instance->setUrl($dummyUrl));
        $this->assertEquals($dummyUrl, $this->instance->getUrl());
    }
}
