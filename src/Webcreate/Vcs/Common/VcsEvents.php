<?php

/*
 * @author Jeroen Fiege <jeroen@webcreate.nl>
 * @copyright Webcreate (http://webcreate.nl)
 */

namespace Webcreate\Vcs\Common;

class VcsEvents
{
    public const PRE_CHECKOUT  = 'vcs.pre_checkout';
    public const POST_CHECKOUT = 'vcs.post_checkout';
    public const PRE_EXPORT    = 'vcs.pre_export';
    public const POST_EXPORT   = 'vcs.post_export';
}
