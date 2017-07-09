<?php

namespace Leedch\Html\Core;

/**
 * A basic class for writing HTML
 *
 * @author leed
 */
class Html {
    
    /**
     * Write a basic XML/HTML Tag
     * @param string $name      Name of the Tag
     * @param string $content   Content to put in the tag, can be empty
     * @param array $attributes  Key => Val strings for tag attributes
     * @param bool $eol         Insert Line Break after Tag
     * @return string
     */
    public function tag($name, $content = "", $attributes = [], $eol = true) {
        $strEol = $eol?PHP_EOL:"";
        $strAttributes = "";
        $arrStrAttributes = [];
        foreach ($attributes as $key => $val) {
            if (!$key) {
                $arrStrAttributes[] = $val;
            } else {
                $arrStrAttributes[] = $key.'="'.$val.'"';
            }
        }
        if (count($arrStrAttributes) > 0) {
            $strAttributes = " ".implode(" ", $arrStrAttributes);
        }
        
        if (!$content) {
            return "<".$name.$strAttributes." />".$strEol;
        }        
        return "<".$name.$strAttributes.">".$strEol.$content."</".$name.">".$strEol;
    }
    
}
