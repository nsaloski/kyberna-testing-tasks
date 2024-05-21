<?php
/* 
 *
 * @copyright   2023 Ultrasoft Systems. All rights reserved
 * @author      Ultrasoft Systems.
 *
 * @link        https://ultrasoft.mk
 *
 */

namespace App\Services;

class MessageGenerator
{
    public function getHelloMessage(): string
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }
}
