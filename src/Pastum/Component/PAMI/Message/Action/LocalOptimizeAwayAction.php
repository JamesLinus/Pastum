<?php

/*
 * This file is part of the Pastum package.
 *
 * (c) Michael H. Arieli <excelwebzone@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pastum\Component\PAMI\Message\Action;

/**
 * LocalOptimizeAway action message.
 */
class LocalOptimizeAwayAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel The channel name to optimize away
     */
    public function __construct($channel)
    {
        parent::__construct('LocalOptimizeAway');

        $this->setKey('Channel', $channel);
    }
}
