<?php

namespace Leedch\Html;

use Leedch\Html\Html5 as H;
use PHPUnit\Framework\TestCase;

class Html5Test extends TestCase {

    public function testBr() 
    {
        $response = H::br();
        $expected = "<br />\n";
        $this->assertEquals($expected, $response);
        
        $response = H::br(3);
        $expected = "<br />\n"
                   . "<br />\n"
                   . "<br />\n";
        $this->assertEquals($expected, $response);
    }

    public function testHtml() 
    {
        $response = H::html('test', ['lang' => 'de']);
        $expected = "<html lang=\"de\">\n"
                . "test</html>\n";
        $this->assertEquals($expected, $response);
    }

    public function testTitle() 
    {
        $response = H::title('MyTitle');
        $expected = "<title>\n"
                . "MyTitle</title>\n";
        $this->assertEquals($expected, $response);
    }

    public function testHead() 
    {
        $response = H::head('content');
        $expected = "<head>\n"
                . "content</head>\n";
        $this->assertEquals($expected, $response);
    }

    public function testBody() 
    {
        $response = H::body('content');
        $expected = "<body>\n"
                . "content</body>\n";
        $this->assertEquals($expected, $response);
    }

    public function testForm() 
    {
        $action = "myurl.php";
        $content = "content";
        $multipart = true;
        $method = "post";
        $attributes = [
            "class" => "myClass"
        ];
        $response = H::form($action, $content, $multipart, $method, $attributes);
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
        $response = H::form($action, $content, $multipart, $method, $attributes);
        $expected = "<form action=\"myurl2.php\" method=\"get\" class=\"myClass\">\n"
                . "content</form>\n";
        $this->assertEquals($expected, $response);
    }

   public function testButton() 
    {
        $response = H::button("MyButton", "submit", "", ["class" => "myClass"]);
        $expected = "<button type=\"submit\" class=\"myClass\">\n"
                . "MyButton</button>\n";
        $this->assertEquals($expected, $response);
    }

    public function testLabel() 
    {
        $response = H::label("myLabel", "parent", ["class" => "myClass"]);
        $expected = "<label for=\"parent\" class=\"myClass\">\n"
                . "myLabel</label>\n";
        $this->assertEquals($expected, $response);
    }

    public function testInput() 
    {
        $name = "inputName";
        $type = "text";
        $value = null;
        $attributes = ["class" => "myClass", "id" => "myInput"];
        $response = H::input($name, $type, $value, $attributes);
        $expected = "<input name=\"inputName\" type=\"text\" class=\"myClass\" id=\"myInput\" />\n";
        $this->assertEquals($expected, $response);
        $value = "defaultValue";
        $response = H::input($name, $type, $value, $attributes);
        $expected = "<input name=\"inputName\" type=\"text\" value=\"defaultValue\" class=\"myClass\" id=\"myInput\" />\n";
        $this->assertEquals($expected, $response);
    }

    public function testTd() 
    {
        $response = H::td("Cell Content", ["class" => "myClass"]);
        $expected = "<td class=\"myClass\">\n"
                . "Cell Content</td>\n";
        $this->assertEquals($expected, $response);
    }

    public function testTh() 
    {
        $response = H::th('Th Content', ["class" => "myClass"]);
        $expected = "<th class=\"myClass\">\n"
                    . "Th Content</th>\n";
        $this->assertEquals($expected, $response);
    }

    public function testTr() 
    {
        $response = H::tr("Tr Content", ["class" => "myClass"]);
        $expected = "<tr class=\"myClass\">\n"
                    . "Tr Content</tr>\n";
        $this->assertEquals($expected, $response);
    }

    public function testTbody() 
    {
        $response = H::tbody("Tbody Content", ["class" => "myClass"]);
        $expected = "<tbody class=\"myClass\">\n"
                    ."Tbody Content</tbody>\n";
        $this->assertEquals($expected, $response);
    }

    public function testThead() 
    {
        $response = H::thead("Thead Content", ["class" => "myClass"]);
        $expected = "<thead class=\"myClass\">\n"
                    . "Thead Content</thead>\n";
        $this->assertEquals($expected, $response);
    }

    public function testTable() 
    {
        $response = H::table("Table Content", ["class" => "myClass", "id" => "tableId"]);
        $expected = "<table class=\"myClass\" id=\"tableId\">\n"
                    . "Table Content</table>\n";
        $this->assertEquals($expected, $response);
    }
    
    public function testDiv() 
    {
        $response = H::div('content', ['class' => 'myClass']);
        $expected = "<div class=\"myClass\">\n"
                . "content</div>\n";
        $this->assertEquals($expected, $response);
    }
    
    public function testSpan() 
    {
        $response = H::span('content', ['class' => 'myClass']);
        $expected = "<span class=\"myClass\">\n"
                . "content</span>\n";
        $this->assertEquals($expected, $response);
    }
    
    /***** Special Methods *****/
    
    public function testDocType() 
    {
        $response = H::docType("utf-8");
        $expected = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
                ."<!DOCTYPE html>\n";
        $this->assertEquals($expected, $response);
    }

    public function testHtmlDocument() 
    {
        $headers = "<myHeaderTag />\n";
        $body = "<myBodyTag />\n";
        $response = H::htmlDocument("MyTitle", $headers, $body, "de", "utf-8");
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
    
    public function testRenderTable() 
    {
        $arrHead = [["head1", "head2"]];
        $arrBody = [["cell1Row1", "cell2Row1"], ["cell1Row2", "cell2Row2"]];
        $response = H::renderTable($arrHead, $arrBody, ["class" => "myClass"]);
        $expected = "<table class=\"myClass\">\n"
                    ."<thead>\n"
                    ."<tr>\n"
                    ."<th>\n"
                    ."head1</th>\n"
                    ."<th>\n"
                    ."head2</th>\n"
                    ."</tr>\n"
                    ."</thead>\n"
                    ."<tbody>\n"
                    ."<tr>\n"
                    ."<td>\n"
                    ."cell1Row1</td>\n"
                    ."<td>\n"
                    ."cell2Row1</td>\n"
                    ."</tr>\n"
                    ."<tr>\n"
                    ."<td>\n"
                    ."cell1Row2</td>\n"
                    ."<td>\n"
                    ."cell2Row2</td>\n"
                    ."</tr>\n"
                    ."</tbody>\n"
                    ."</table>\n";
        $this->assertEquals($expected, $response);
    }
    
    protected function basicTagTest($tagName)
    {
        $emptyContent = H::$tagName("");
        $this->assertEquals("<".$tagName." />\n", $emptyContent);
        $textContent = H::$tagName("My hidden secret");
        $this->assertEquals("<".$tagName.">\nMy hidden secret</".$tagName.">\n", $textContent);
        $oneAttr = H::$tagName("I have an attribute", ["class" => "oneAttrib"]);
        $this->assertEquals("<".$tagName." class=\"oneAttrib\">\nI have an attribute</".$tagName.">\n", $oneAttr);
        $multiAttr = H::$tagName("I have attributes", ["class" => "attribs", "id" => "myId", "data-id" => 5]);
        $this->assertEquals("<".$tagName." class=\"attribs\" id=\"myId\" data-id=\"5\">\nI have attributes</".$tagName.">\n", $multiAttr);
    }
    
    public function testAllBasicTags()
    {
        //All HTML Tags that are triggered with params $content and optional $attributes
        $arrBasicTags = [
            "a",
            "abbr",
            "address",
            "article",
            "aside",
            "audio",
            "b",
            "bdi",
            "bdo",
            "blockquote",
            "body",
            "caption",
            "cite",
            "code",
            "colgroup",
            "data",
            "datalist",
            "dd",
            "del",
            "details",
            "dfn",
            "dialog",
            "div",
            "dl",
            "dt",
            "em",
            "embed",
            "figcaption",
            "figure",
            "footer",
            "h1",
            "h2",
            "h3",
            "h4",
            "h5",
            "h6",
            "head",
            "header",
            "html",
            "iframe",
            "ins",
            "kbd",
            "legend",
            "link",
            "main",
            "map",
            "mark",
            "menu",
            "menuitem",
            "meter",
            "nav",
            "noscript",
            "object",
            "optgroup",
            "option",
            "output",
            "p",
            "picture",
            "pre",
            "q",
            "rp",
            "rt",
            "ruby",
            "s",
            "samp",
            "section",
            "small",
            "strong",
            "sub",
            "summary",
            "sup",
            "textarea",
            "tfoot",
            "thead",
            "time",
            "title",
            "track",
            "u",
            "video",
            "wbr",
        ];
        
        foreach ($arrBasicTags as $tag) {
            $this->basicTagTest($tag);
        }
    }
}
