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
class GetAppUserByIdResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $surname public property
     */
    public $surname;

    /**
     * @todo Write general description for this property
     * @required
     * @maps given_name
     * @var string $givenName public property
     */
    public $givenName;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id        Initialization value for $this->id
     * @param string $surname   Initialization value for $this->surname
     * @param string $givenName Initialization value for $this->givenName
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->id        = func_get_arg(0);
            $this->surname   = func_get_arg(1);
            $this->givenName = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']         = $this->id;
        $json['surname']    = $this->surname;
        $json['given_name'] = $this->givenName;

        return $json;
    }
}
