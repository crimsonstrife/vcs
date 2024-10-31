<?php

/*
 * @author Jeroen Fiege <jeroen@webcreate.nl>
 * @copyright Webcreate (http://webcreate.nl)
 */

use Webcreate\Util\Cli;
use PHPUnit\Framework\TestCase;
use Webcreate\Vcs\Svn\Svnadmin;

require_once __DIR__ . "/../Test/Util/xsprintf.php";

class SvnadminTest extends TestCase
{
    private $svndir;

    public function setUp(): void
    {
        $this->svndir = sys_get_temp_dir();
    }

    public function testCreate()
    {
        $cli = $this->getMockBuilder('Webcreate\\Util\\Cli')
                    ->onlyMethods(['execute', 'getOutput', 'getErrorOutput'])
                    ->getMock();
        $cli
            ->expects($this->once())
            ->method('execute')
            ->with(xsprintf('/usr/local/bin/svnadmin create %xs', $this->svndir.'/test_test'))
            ->will($this->returnValue(0))
        ;

        $svnadmin = new Svnadmin($this->svndir, '/usr/local/bin/svnadmin', $cli);
        $svnadmin->create('test_test');
    }
}
