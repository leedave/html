<?php

namespace Leedch\Html\Core;

use Leedch\Html\Core\Html;

/**
 * HTML5 Coding Class
 *
 * @author leed
 */
class Html5 extends Html{
    
    public function docType($encoding) {
        return "<?xml version=\"1.0\" encoding=\"".$encoding."\" ?>\n"
                ."<!DOCTYPE html>\n";
    }
    
    public function htmlDocument($title, $headers = "", $body = "", $lang = "de", $encoding = "UTF-8") {
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
     * Render a BR Tag
     * 
     * @param int $amount   Number of how many BR Tags
     * @return string
     */
    public function br($amount = 1) {
        $output = "";
        for ($i = 0; $i < $amount; $i++) {
            $output .= $this->tag("br");
        }
        return $output;
    }
    
    public function html($content, $attributes) {
        return $this->tag("html", $content, $attributes);
    }
    
    public function title($title) {
        return $this->tag("title", $title);
    }
    
    public function head($content) {
        return $this->tag("head", $content);
    }
    
    public function body($content) {
        return $this->tag("body", $content);
    }
    
    public function form($action, $content, $multipart = false, $method = "post", $attributes = []) {
        
        $formAttributes = [
            "action" => $action,
            "method" => $method,
        ];
        
        if ($multipart) {
            $formAttributes["enctype"] = "multipart/form-data";
        }
        
        $formAttributes = array_merge($formAttributes, $attributes);
        
        return $this->tag("form", $content, $formAttributes);
    }
    
    public function button($label, $type = "submit", $onclick = "", $attributes = []) {
        $buttonAttributes = [
            "type" => $type,
        ];
        
        if ($onclick) {
            $buttonAttributes["onclick"] = $onclick;
        }
        $buttonAttributes = array_merge($buttonAttributes, $attributes);        
        
        return $this->tag("button", $label, $buttonAttributes);
    }
    
    public function label($label, $for, $attributes = []) {
        $attributesLabel = [
            "for" => $for,
        ];
        $attributesLabel = array_merge($attributesLabel, $attributes);
        return $this->tag("label", $label, $attributesLabel);
    }
    
    public function input($name, $type, $value = null, $attributes = []) {
        $attributesInput = [
            "name" => $name,
            "type" => $type,
        ];
        if (!is_null($value)) {
            $attributesInput["value"] = $value;
        }
        $attributesInput = array_merge($attributesInput, $attributes);
        return $this->tag("input", "", $attributesInput);
    }
    
    public function td($content = "", $attributes = []) {
        return $this->tag("td", $content, $attributes);
    }
    
    public function th($content = "", $attributes = []) {
        return $this->tag("th", $content, $attributes);
    }
    
    public function tr($content = "", $attributes = []) {
        return $this->tag("tr", $content, $attributes);
    }
    
    public function tbody($content = "", $attributes = []) {
        return $this->tag("tbody", $content, $attributes);
    }
    
    public function thead($content = "", $attributes = []) {
        return $this->tag("thead", $content, $attributes);
    }
    
    public function table($content = "", $attributes = []) {
        return $this->tag("table", $content, $attributes);
    }
    
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
    
    public function div($content, $attributes = []) {
        return $this->tag("div", $content, $attributes);
    }
}
