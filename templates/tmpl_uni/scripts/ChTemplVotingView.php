<?php

/**
 * This work, "Cheetah - https://cheetah.deanbassett.com", is a derivative of "Dolphin Pro V7.4.2" by BoonEx Pty Limited - https://www.boonex.com/, used under CC-BY. "Cheetah" is licensed under CC-BY by Dean J. Bassett Jr.
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 */

ch_import('ChBaseVotingView');

/**
 * @see ChWsbVoting
 */
class ChTemplVotingView extends ChBaseVotingView
{
    function __construct( $sSystem, $iId, $iInit = 1 )
    {
        parent::__construct( $sSystem, $iId, $iInit );
    }
}
