<?php

/*
 * @author Jeroen Fiege <jeroen@webcreate.nl>
 * @copyright Webcreate (http://webcreate.nl)
 */

namespace Webcreate\Vcs\Common;

/**
 * Model for status information
 *
 * @author Jeroen Fiege <jeroen@webcreate.nl>
 */
class Status
{
    public const MODIFIED    = 'M';
    public const ADDED       = 'A';
    public const UNVERSIONED = '?';
    public const DELETED     = 'D';
    public const UNMODIFIED  = ' ';
}
