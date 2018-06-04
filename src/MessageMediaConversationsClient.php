<?php
/*
 * MessageMediaConversations
 *
 * This file was automatically generated for MessageMedia by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MessageMediaConversationsLib;

use MessageMediaConversationsLib\Controllers;

/**
 * MessageMediaConversations client class
 */
class MessageMediaConversationsClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $basicAuthUserName = null,
        $basicAuthPassword = null
    ) {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
    /**
     * Singleton access to Provisioning controller
     * @return Controllers\ProvisioningController The *Singleton* instance
     */
    public function getProvisioning()
    {
        return Controllers\ProvisioningController::getInstance();
    }
    /**
     * Singleton access to AppUsers controller
     * @return Controllers\AppUsersController The *Singleton* instance
     */
    public function getAppUsers()
    {
        return Controllers\AppUsersController::getInstance();
    }
    /**
     * Singleton access to Facebook controller
     * @return Controllers\FacebookController The *Singleton* instance
     */
    public function getFacebook()
    {
        return Controllers\FacebookController::getInstance();
    }
}
