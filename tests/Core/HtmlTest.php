<?php

namespace Leedch\Html\Core;

use Leedch\Html\Core\Html;
use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase {

    public function testTag() 
    {
        $html = new Html();
        $divGenerated = $html->tag("div", "MyContent", ["class" => "myClass"]);
        $divTest = '<div class="myClass">'.PHP_EOL.'MyContent</div>'.PHP_EOL;
        $this->assertEquals($divTest, $divGenerated);
        
        $divGenerated = $html->tag("input", "", ["type" => "text", "name" => "testInput"]);
        $divTest = '<input type="text" name="testInput" />'.PHP_EOL;
        $this->assertEquals($divTest, $divGenerated);
    }


}
