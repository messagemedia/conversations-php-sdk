<?php
/*
 * MessageMediaConversations
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaConversationsLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class AppUserDto implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $givenName public property
     */
    public $givenName;

    /**
     * @todo Write general description for this property
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $surname public property
     */
    public $surname;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $givenName Initialization value for $this->givenName
     * @param string $id        Initialization value for $this->id
     * @param string $surname   Initialization value for $this->surname
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->givenName = func_get_arg(0);
            $this->id        = func_get_arg(1);
            $this->surname   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['givenName'] = $this->givenName;
        $json['id']        = $this->id;
        $json['surname']   = $this->surname;

        return $json;
    }
}
