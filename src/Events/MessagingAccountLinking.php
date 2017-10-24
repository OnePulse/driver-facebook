<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 24/10/17
 * Time: 18:20
 */

namespace BotMan\Drivers\Facebook\Events;


class MessagingAccountLinking extends FacebookEvent
{

    /**
     * Return the event name to match.
     *
     * @return string
     */
    public function getName()
    {
        return 'messaging_account_linking';
    }
}