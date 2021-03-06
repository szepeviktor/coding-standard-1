<?php
namespace MyApp\MyNamespace;

use Foo\BazTrait;
use MyProject\HelloWorld;

class Foo
{
    use BazTrait,
        \MyTrait;
    use    TooManySpaces;
    use \AnotherTrait    {
        \AnotherTrait::method as methodAlias;
    }
    use\Foo\ ATrait;
    use \BarTrait    ;
    use XTrait  , YTrait
        ;

    use \A, \B {
        \B::smallTalk insteadof \A;
      \A::bigTalk insteadof \B;
    }
    use HelloWorld
    { sayHello as protected;}
    use Hello { sayHello as private myPrivateHello; }


    /**
     * @param mixed $x
     */
    public function __construct($x)
    {
        $anonymousClass = new class {
            use BTrait;
            use ATrait;
        };

        $closure = function () use ($x) {};

        $class = new class {
            use Psr\NamespaceSeparator;
            use PSR7Number;
            use Psr_Underscore;
            use PsrLetter;
        };
    }
}
