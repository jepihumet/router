<?php
/**
 * RouterException.php
 *
 * @author      Jepi Humet Alsius <jepihumet@gmail.com>
 * @link        http://jepihumet.com
 */
namespace Jepi\Router;

use Jepi\Exception\Exception;

class RouterException extends Exception
{
    protected $exceptionType = "Routing Exception";
}