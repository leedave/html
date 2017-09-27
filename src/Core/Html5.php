<?php

namespace Leedch\Html\Core;

use Leedch\Html\Core\Html;

/**
 * HTML5 Coding Class
 *
 * @author leed
 */
class Html5 extends Html{
    
    /**
     * Create a Hyperlink
     * @param type $content
     * @param type $attributes
     * @return type
     */
    public function a($content, $attributes)
    {
        return $this->tag("a", $content, $attributes);
    }
    
    /**
     * Creates the Body Tag
     * 
     * @param string $content
     * @param array $attributes
     * @return string HTML Code
     */
    public function body($content, $attributes = []) {
        return $this->tag("body", $content, $attributes);
    }
       
    /**
     * Create a BR Tag
     * 
     * @param int $amount   Number of how many BR Tags
     * @return string HTML Code
     */
    public function br($amount = 1) {
        $output = "";
        for ($i = 0; $i < $amount; $i++) {
            $output .= $this->tag("br");
        }
        return $output;
    }
    
    /**
     * Create a Button Tag
     * @param string $label Button Content
     * @param string $type type attribute
     * @param string $onclick onclick attribute
     * @param array $attributes further attributes
     * @return string HTML Code
     */
    public function button($label, $type = "submit", $onclick = "", $attributes = []) {
        $buttonPreAttributes = [
            "type" => $type,
        ];
        
        if ($onclick) {
            $buttonPreAttributes["onclick"] = $onclick;
        }
        $buttonAttributes = array_merge($buttonPreAttributes, $attributes);        
        
        return $this->tag("button", $label, $buttonAttributes);
    }
    
    /**
     * Create a div tag
     * 
     * @param string $content
     * @param array $attributes
     * @return string HTML Code
     */
    public function div($content, $attributes = []) {
        return $this->tag("div", $content, $attributes);
    }
    
    /**
     * Create a form element
     * 
     * @param string $action    action attribute (always needed)
     * @param string $content   content (form makes no sense without)
     * @param bool $multipart   set to true if you want to upload files
     * @param string $method    method attribute, usually "get" or "post"
     * @param array $attributes  further attributes
     * @return string HTML Code
     */
    public function form($action, $content, $multipart = false, $method = "post", $attributes = []) {
        
        $formPreAttributes = [
            "action" => $action,
            "method" => $method,
        ];
        
        if ($multipart) {
            $formPreAttributes["enctype"] = "multipart/form-data";
        }
        
        $formAttributes = array_merge($formPreAttributes, $attributes);
        
        return $this->tag("form", $content, $formAttributes);
    }
    
    /**
     * Create head tag
     * 
     * @param string $content
     * @return string HTML Code
     */
    public function head($content) {
        return $this->tag("head", $content);
    }
    
    /**
     * Create html tag
     * @param string $content
     * @param array $attributes
     * @return string HTML Code
     */
    public function html($content, $attributes) {
        return $this->tag("html", $content, $attributes);
    }
    
    /**
     * Create an input tag 
     * 
     * @param string $name name attribute (always needed)
     * @param string $type type attribute (always needed)
     * @param string $value pre set value
     * @param array $attributes further attributes
     * @return string HTML Code
     */
    public function input($name, $type, $value = null, $attributes = []) {
        $preAttributesInput = [
            "name" => $name,
            "type" => $type,
        ];
        if (!is_null($value)) {
            $preAttributesInput["value"] = $value;
        }
        $attributesInput = array_merge($preAttributesInput, $attributes);
        return $this->tag("input", "", $attributesInput);
    }
    
    /**
     * Creates label Tag
     * 
     * @param string $label content of tag
     * @param string $for for attribute (always needed)
     * @param array $attributes further attributes
     * @return string HTML Code
     */
    public function label($label, $for, $attributes = []) {
        $preAttributesLabel = [
            "for" => $for,
        ];
        $attributesLabel = array_merge($preAttributesLabel, $attributes);
        return $this->tag("label", $label, $attributesLabel);
    }
    
    /**
     * Create span tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public function span($content = "", $attributes = [])
    {
        return $this->tag("span", $content, $attributes);
    }
    
    /**
     * Create table tag
     * 
     * @param string $content   content
     * @param array $attributes attributes
     * @return string HTML Code
     */
    public function table($content = "", $attributes = []) {
        return $this->tag("table", $content, $attributes);
    }
    
    /**
     * create tbody tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public function tbody($content = "", $attributes = []) {
        return $this->tag("tbody", $content, $attributes);
    }
    
    /**
     * create td tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public function td($content = "", $attributes = []) {
        return $this->tag("td", $content, $attributes);
    }
    
    /**
     * Create th tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public function th($content = "", $attributes = []) {
        return $this->tag("th", $content, $attributes);
    }
    
    /**
     * Create thead tag 
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public function thead($content = "", $attributes = []) {
        return $this->tag("thead", $content, $attributes);
    }
    
    /**
     * Create title tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public function title($title, $attributes = []) {
        return $this->tag("title", $title, $attributes);
    }
    
    /**
     * Create tr tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public function tr($content = "", $attributes = []) {
        return $this->tag("tr", $content, $attributes);
    }
    
    
    /****** Special Methods ******/
    
    /**
     * Creates the standard HTML5 doctype lines
     * 
     * @param string $encoding encoding used (defaults to utf-8)
     * @return string HTML Code
     */
    public function docType($encoding = "utf-8") {
        return "<?xml version=\"1.0\" encoding=\"".$encoding."\" ?>\n"
                ."<!DOCTYPE html>\n";
    }
    
    /**
     * Creates a full HTML5 Document structure (doctype, head, body)
     * 
     * @param string $title title
     * @param string $headers full head content as string
     * @param string $body full boday content as string
     * @param string $lang ISO 2digit language code to set on document defaults to "en"
     * @param string $encoding encoding used, defaults to "utf-8"
     * @return strint HTML Code
     */
    public function htmlDocument($title, $headers = "", $body = "", $lang = "en", $encoding = "utf-8") {
        $headerContent = $this->title($title)
                        . $headers;
        
        $head = $this->head($headerContent);
        $body = $this->body($body);
        
        $htmlAttributes = [
            "lang" => $lang,
        ];
        
        return $this->docType($encoding)
               . $this->html($head.$body, $htmlAttributes);
    }//END drawHeaderHtml5
    
    /**
     * Put all elements together to form a standard table
     * 
     * @param array $head two dimensional rows and cells (no keys)
     * @param array $body two dimensional rows and cells (no keys)
     * @param array $attributes
     * @return string   Compiled HTML Table
     */
    public function renderTable($head = [], $body = [], $attributes = []) {
        $strHead = "";
        $strBody = "";
        
        foreach ($head as $thRow) {
            $strRow = "";
            foreach ($thRow as $th) {
                $strRow .= $this->th($th);
            }
            $strHead .= $this->tr($strRow);
        }
        if ($strHead != "") {
            $strHead = $this->thead($strHead);
        }
        
        foreach ($body as $tr) {
            $strRow = "";
            foreach ($tr as $td) {
                $strRow .= $this->td($td);
            }
            $strBody .= $this->tr($strRow);
        }
        if ($strBody != "") {
            $strBody = $this->tbody($strBody);
        }
        
        return $this->tag("table", $strHead.$strBody, $attributes);
    }
    
}
