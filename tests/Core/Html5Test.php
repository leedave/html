<?php

namespace Leedch\Html\Core;

use Leedch\Html\Core\Html5;
use PHPUnit\Framework\TestCase;

class Html5Test extends TestCase {

    public function testDocType() 
    {
        $h = new Html5();
        $response = $h->docType("utf-8");
        $expected = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
                ."<!DOCTYPE html>\n";
        $this->assertEquals($expected, $response);
    }

    public function testHtmlDocument() 
    {
        $h = new Html5();
        $headers = "<myHeaderTag />\n";
        $body = "<myBodyTag />\n";
        $response = $h->htmlDocument("MyTitle", $headers, $body, "de", "utf-8");
        $expected = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
                . "<!DOCTYPE html>\n"
                . "<html lang=\"de\">\n"
                . "<head>\n"
                . "<title>\n"
                . "MyTitle</title>\n"
                . "<myHeaderTag />\n"
                . "</head>\n"
                . "<body>\n"
                . "<myBodyTag />\n"
                . "</body>\n"
                . "</html>\n";
        $this->assertEquals($expected, $response);
    }

    public function testBr() 
    {
        $h = new Html5();
        $response = $h->br();
        $expected = "<br />\n";
        $this->assertEquals($expected, $response);
    }

    public function testHtml() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testTitle() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testHead() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testBody() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testForm() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testButton() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testLabel() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testInput() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testTd() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testTh() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testTr() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testTbody() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testThead() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testTable() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testRenderTable() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testDiv() 
    {
        $this->assertEquals('your input', 'your input');
    }

    public function testTag() 
    {
        $this->assertEquals('your input', 'your input');
    }


}
