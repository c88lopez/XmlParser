<?php
/**
 * Short description for file
 *
 * PHP version 5
 *
 * @category CategoryName
 * @package  PackageName
 * @author   Cristian Lopez <cristian.lopez@jampp.com>
 */
namespace c88lopez\XmlParser;

/**
 * Short description for class Parser
 *
 * @category CategoryName
 * @package  PackageName
 * @author   Cristian Lopez <cristian.lopez@jampp.com>
 */
class Parser
{
    /**
     * Properties
     */
    /**
     * The URL to stream.
     * @var string
     */
    protected $url;

    /**
     * Methods
     */
    /**
     * getUrl
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Parser
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}