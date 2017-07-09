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
        $h = new Html5();
        $response = $h->html('test', ['lang' => 'de']);
        $expected = "<html lang=\"de\">\n"
                . "test</html>\n";
        $this->assertEquals($expected, $response);
    }

    public function testTitle() 
    {
        $h = new Html5();
        $response = $h->title('MyTitle');
        $expected = "<title>\n"
                . "MyTitle</title>\n";
        $this->assertEquals($expected, $response);
    }

    public function testHead() 
    {
        $h = new Html5();
        $response = $h->head('content');
        $expected = "<head>\n"
                . "content</head>\n";
        $this->assertEquals($expected, $response);
    }

    public function testBody() 
    {
        $h = new Html5();
        $response = $h->body('content');
        $expected = "<body>\n"
                . "content</body>\n";
        $this->assertEquals($expected, $response);
    }

    public function testForm() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testButton() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testLabel() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testInput() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testTd() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testTh() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testTr() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testTbody() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testThead() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testTable() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testRenderTable() 
    {
        $this->assertEquals($expected, $response);
    }

    public function testDiv() 
    {
        $h = new Html5();
        $response = $h->div('content', ['class' => 'myClass']);
        $expected = "<div class=\"myClass\">\n"
                . "content</div>";
        $this->assertEquals($expected, $response);
    }
}
