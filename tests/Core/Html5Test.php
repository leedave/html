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
        
        $response = $h->br(3);
        $expected = "<br />\n"
                   . "<br />\n"
                   . "<br />\n";
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
        $h = new Html5();
        $action = "myurl.php";
        $content = "content";
        $multipart = true;
        $method = "post";
        $attributes = [
            "class" => "myClass"
        ];
        $response = $h->form($action, $content, $multipart, $method, $attributes);
        $expected = "<form action=\"myurl.php\" method=\"post\" enctype=\"multipart/form-data\" class=\"myClass\">\n"
                . "content</form>\n";
        $this->assertEquals($expected, $response);
        
        $action = "myurl2.php";
        $content = "content";
        $multipart = false;
        $method = "get";
        $attributes = [
            "class" => "myClass"
        ];
        $response = $h->form($action, $content, $multipart, $method, $attributes);
        $expected = "<form action=\"myurl2.php\" method=\"get\" class=\"myClass\">\n"
                . "content</form>\n";
        $this->assertEquals($expected, $response);
    }

   public function testButton() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->button("MyButton", "submit", "", ["class" => "myClass"]);
        $expected = "<button type=\"submit\" class=\"myClass\">\n"
                . "MyButton</button>\n";
        $this->assertEquals($expected, $response);
    }

    public function testLabel() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->label("myLabel", "parent", ["class" => "myClass"]);
        $expected = "<label for=\"parent\" class=\"myClass\">\n"
                . "myLabel</label>\n";
        $this->assertEquals($expected, $response);
    }

    public function testInput() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $name = "inputName";
        $type = "text";
        $value = null;
        $attributes = ["class" => "myClass", "id" => "myInput"];
        $response = $m->input($name, $type, $value, $attributes = []);
        $expected = "<input name=\"inputName\" type=\"text\" class=\"myClass\" id=\"myInput\" />\n";
        $this->assertEquals($expected, $response);
        $value = "defaultValue";
        $expected = "<input name=\"inputName\" type=\"text\" value=\"defaultValue\" class=\"myClass\" id=\"myInput\" />\n";
        $this->assertEquals($expected, $response);
    }

    public function testTd() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->td("Cell Content", ["class" => "myClass"]);
        $expected = "<td class=\"myClass\">\n"
                . "Cell Content</td>\n";
        $this->assertEquals($expected, $response);
    }

    public function testTh() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->th($content = "", $attributes = []);
        $expected = "";
        $this->assertEquals($expected, $response);
    }

    public function testTr() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->tr($content = "", $attributes = []);
        $expected = "";
        $this->assertEquals($expected, $response);
    }

    public function testTbody() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->tbody($content = "", $attributes = []);
        $expected = "";
        $this->assertEquals($expected, $response);
    }

    public function testThead() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->thead($content = "", $attributes = []);
        $expected = "";
        $this->assertEquals($expected, $response);
    }

    public function testTable() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->table($content = "", $attributes = []);
        $expected = "";
        $this->assertEquals($expected, $response);
    }
    
    public function testRenderTable() 
    {
        $m = new \Leedch\Html\Core\Html5();
        $response = $m->renderTable($head = [], $body = [], $attributes = []);
        $expected = "";
        $this->assertEquals($expected, $response);
    }

    public function testDiv() 
    {
        $h = new Html5();
        $response = $h->div('content', ['class' => 'myClass']);
        $expected = "<div class=\"myClass\">\n"
                . "content</div>\n";
        $this->assertEquals($expected, $response);
    }
}
