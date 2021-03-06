<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Request.proto

namespace Message\Payload;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>message.payload.Request.Header</code>
 */
class Request_Header extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string service = 1;</code>
     */
    private $service = '';
    /**
     * Generated from protobuf field <code>string method = 2;</code>
     */
    private $method = '';
    /**
     * Generated from protobuf field <code>string domain = 3;</code>
     */
    private $domain = '';
    /**
     * Generated from protobuf field <code>string version = 4;</code>
     */
    private $version = '';
    /**
     * Generated from protobuf field <code>int32 type = 5;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>string mId = 6;</code>
     */
    private $mId = '';
    /**
     * Generated from protobuf field <code>string url = 7;</code>
     */
    private $url = '';
    /**
     * Generated from protobuf field <code>string tokenId = 8;</code>
     */
    private $tokenId = '';

    public function __construct() {
        \GPBMetadata\Request::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string method = 2;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>string method = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string domain = 3;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>string domain = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string version = 4;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>int32 type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt32($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mId = 6;</code>
     * @return string
     */
    public function getMId()
    {
        return $this->mId;
    }

    /**
     * Generated from protobuf field <code>string mId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 7;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tokenId = 8;</code>
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Generated from protobuf field <code>string tokenId = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tokenId = $var;

        return $this;
    }

}

