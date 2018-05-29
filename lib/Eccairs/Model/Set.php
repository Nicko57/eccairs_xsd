<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("SET")
 * @Serializer\XmlNamespace(uri="http://www.w3.org/2001/XMLSchema-instance", prefix="xsi")
 * @Serializer\XmlNamespace(uri="http://www.w3.org/2001/XMLSchema", prefix="xsd")
 */
class Set
{
    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("TaxonomyName")
     */
    private $taxonomyName = "ECCAIRS Aviation";

    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("TaxonomyVersion")
     */
    private $taxonomyVersion = "3.4.0.1";

    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Domain")
     */
    private $domain = "RIT";

    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("Version")
     */
    private $version = "1.0.0.0";

    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    private $xmlns = "http://eccairsportal.jrc.ec.europa.eu/ECCAIRS5_dataBridge.xsd";

    /**
     * @var string
     *
     * @Serializer\SerializedName("Occurrence")
     */
    private $occurrence;

    /**
     * @return string
     */
    public function getTaxonomyName(): string
    {
        return $this->taxonomyName;
    }

    /**
     * @param string $taxonomyName
     */
    public function setTaxonomyName(string $taxonomyName)
    {
        $this->taxonomyName = $taxonomyName;
    }

    /**
     * @return string
     */
    public function getTaxonomyVersion(): string
    {
        return $this->taxonomyVersion;
    }

    /**
     * @param string $taxonomyVersion
     */
    public function setTaxonomyVersion(string $taxonomyVersion)
    {
        $this->taxonomyVersion = $taxonomyVersion;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getXmlns(): string
    {
        return $this->xmlns;
    }

    /**
     * @param string $xmlns
     */
    public function setXmlns(string $xmlns)
    {
        $this->xmlns = $xmlns;
    }

    /**
     * @return mixed
     */
    public function getOccurrence()
    {
        return $this->occurrence;
    }

    /**
     * @param mixed $occurrence
     */
    public function setOccurrence($occurrence)
    {
        $this->occurrence = $occurrence;
    }
}