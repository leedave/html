<?php

namespace Leedch\Html;

use Leedch\Html\Html;

/**
 * HTML5 Coding Class
 *
 * @author leed
 */
class Html5 extends Html{
    
    /**
     * Create a Hyperlink
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function a(string $content, array $attributes) : string
    {
        return self::tag("a", $content, $attributes);
    }
    
    /**
     * Abbreviations
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function abbr(string $content, array $attributes = []) : string
    {
        return self::tag("abbr", $content, $attributes);
    }
    
    /**
     * Area Tag, use in <map> for image maps
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function area(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("area", $content, $attributes);
    }
    
    /**
     * <article>
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function article(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("article", $content, $attributes);
    }
    
    /**
     * <aside>
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function aside(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("aside", $content, $attributes);
    }
    
    /**
     * <audio>
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function audio(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("audio", $content, $attributes);
    }
    
    /**
     * <b> bold
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function b(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("b", $content, $attributes);
    }
    
    /**
     * <base> Base Url
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function base(
        array $attributes = []
    ) : string
    {
        return self::tag("base", null, $attributes);
    }
    
    /**
     * <bdi> Bi-Directional Isolation
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function bdi(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("bdi", $content, $attributes);
    }
    
    /**
     * <bdo> Bi-Directional Override -> text from right-to-left
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function bdo(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("bdo", $content, $attributes);
    }
    
    
    /**
     * <blockquote> Text from other source use attr "cite"
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function blockquote(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("blockquote", $content, $attributes);
    }
    
    
    
    /**
     * Address Tag
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function address(string $content, array $attributes = []) : string
    {
        return self::tag("address", $content, $attributes);
    }
    
    /**
     * Creates the Body Tag
     * 
     * @param string $content
     * @param array $attributes
     * @return string HTML Code
     */
    public static function body(string $content, array $attributes = []) : string
    {
        return self::tag("body", $content, $attributes);
    }
       
    /**
     * Create a BR Tag
     * 
     * @param int $amount   Number of how many BR Tags
     * @return string HTML Code
     */
    public static function br(int $amount = 1) : string
    {
        $output = "";
        for ($i = 0; $i < $amount; $i++) {
            $output .= self::tag("br");
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
    public static function button(
        string $label, 
        string $type = "submit", 
        string $onclick = null, 
        array $attributes = []
    ) : string
    {
        $buttonPreAttributes = [
            "type" => $type,
        ];
        
        if ($onclick) {
            $buttonPreAttributes["onclick"] = $onclick;
        }
        $buttonAttributes = array_merge($buttonPreAttributes, $attributes);        
        
        return self::tag("button", $label, $buttonAttributes);
    }
    
    
    /**
     * <canvas> Canvas Object
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function canvas(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("canvas", $content, $attributes);
    }
    
    
    /**
     * <caption> Table Caption
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function caption(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("caption", $content, $attributes);
    }
    
    
    /**
     * <cite> Describes the title of a work, movie, song etc
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function cite(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("cite", $content, $attributes);
    }
    
    
    /**
     * <code> defines pc code
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function code(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("code", $content, $attributes);
    }
    
    
    /**
     * <col> Subobject of colgroup in tables, defines formatting
     * @param array $attributes
     * @return string
     */
    public static function col(
        array $attributes = []
    ) : string
    {
        return self::tag("col", null, $attributes);
    }
    
    
    /**
     * <colgroup> group of col objects for formatting
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function colgroup(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("colgroup", $content, $attributes);
    }
    
    
    /**
     * <data> Enriches text with machine readable information
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function data(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("data", $content, $attributes);
    }
    
    /**
     * <datalist> Mix between input and select (can edit, can select)
     * doesn't work with safari (WTF) and IE9
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function datalist(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("datalist", $content, $attributes);
    }
    
    /**
     * <dd> describe a term in combination with <dt>
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function dd(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("dd", $content, $attributes);
    }
    
    /**
     * <del> deleted text (strike-through)
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function del(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("del", $content, $attributes);
    }
    
    /**
     * <details> Semantic Tag
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function details(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("details", $content, $attributes);
    }
    
    /**
     * <dfn> semantic definition
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function dfn(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("dfn", $content, $attributes);
    }
    
    /**
     * <dialog> primitive dialog method, should be a modal (poor browser support atm)
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function dialog(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("dialog", $content, $attributes);
    }
    
    /**
     * Create a div tag
     * 
     * @param string $content
     * @param array $attributes
     * @return string HTML Code
     */
    public static function div(string $content, array $attributes = []) : string
    {
        return self::tag("div", $content, $attributes);
    }
    
    /**
     * <dl> Description List
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function dl(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("dl", $content, $attributes);
    }
    
    /**
     * <dt> description term
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function dt(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("dt", $content, $attributes);
    }
    
    /**
     * <em> Emphasized text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function em(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("em", $content, $attributes);
    }
    
    /**
     * <embed> Container for external or interactive content
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function embed(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("embed", $content, $attributes);
    }
    
    /**
     * <fieldset> visually combines elements
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function fieldset(
        string $content, 
        string $legend = null,
        array $attributes = []
    ) : string
    {
        if ($legend) {
            $content = self::legend($legend);
        }
        return self::tag("fieldset", $content, $attributes);
    }
    
    /**
     * <figcaption> Caption for a <figure> element
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function figcaption(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("figcaption", $content, $attributes);
    }
    
    /**
     * <figure> Marks a photo by being a container for <img> and <figcatption>
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function figure(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("figure", $content, $attributes);
    }
    
    /**
     * <footer> Marks a footer section
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function footer(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("footer", $content, $attributes);
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
    public static function form(
        string $action, 
        string $content, 
        bool $multipart = false, 
        string $method = "post", 
        array $attributes = []
    ) : string
    {
        
        $formPreAttributes = [
            "action" => $action,
            "method" => $method,
        ];
        
        if ($multipart) {
            $formPreAttributes["enctype"] = "multipart/form-data";
        }
        
        $formAttributes = array_merge($formPreAttributes, $attributes);
        
        return self::tag("form", $content, $formAttributes);
    }
    
    /**
     * Heading Tag <h1>, <h2>, <h3> etc.
     * @param string $content
     * @param int $level
     * @param type $attributes
     */
    public static function h(
        string $content, 
        int $level = 1, 
        $attributes = []
    ) : string
    {
        return self::tag("h".$level, $content, $attributes);
    }
    
    /**
     * <h1> H1 Heading
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function h1(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::h($content, 1, $attributes);
    }
    
    /**
     * <h2> H2 Heading
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function h2(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::h($content, 2, $attributes);
    }
    
    /**
     * <h3> H3 Heading
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function h3(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::h($content, 3, $attributes);
    }
    
    /**
     * <h4> H4 Heading
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function h4(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::h($content, 4, $attributes);
    }
    
    /**
     * <h5> H5 Heading
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function h5(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::h($content, 5, $attributes);
    }
    
    /**
     * <h6> H6 Heading
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function h6(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::h($content, 6, $attributes);
    }
    
    /**
     * Create head tag
     * 
     * @param string $content
     * @return string HTML Code
     */
    public static function head(string $content) : string 
    {
        return self::tag("head", $content);
    }
    
    /**
     * <header> header section
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function header(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("header", $content, $attributes);
    }
    
    /**
     * <hr> horizontal line / thematic break in text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function hr(
        array $attributes = []
    ) : string
    {
        return self::tag("hr", null, $attributes);
    }
    
    /**
     * Create html tag
     * @param string $content
     * @param array $attributes
     * @return string HTML Code
     */
    public static function html(
        string $content, 
        array $attributes = []
    ) : string 
    {
        return self::tag("html", $content, $attributes);
    }
    
    /**
     * 
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function i(string $content = null, array $attributes = []) : string
    {
        return self::tag("i", $content, $attributes);
    }
    
    /**
     * <iframe> iframe element, yes still important in HTML5
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function iframe(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("iframe", $content, $attributes);
    }
    
    /**
     * <Img> Tag
     * @param array $attributes
     * @return string HTML Code
     */
    public static function img(array $attributes = []) : string
    {
        return self::tag("img", '', $attributes);
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
    public static function input(
        string $name, 
        string $type = "text", 
        string $value = null, 
        array $attributes = []
    ) : string 
    {
        $preAttributesInput = [
            "name" => $name,
            "type" => $type,
        ];
        if (!is_null($value)) {
            $preAttributesInput["value"] = $value;
        }
        $attributesInput = array_merge($preAttributesInput, $attributes);
        return self::tag("input", "", $attributesInput);
    }
    
    /**
     * <ins> Marks inserted text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function ins(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("ins", $content, $attributes);
    }
    
    /**
     * <kbd> defines keyboard input
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function kbd(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("kbd", $content, $attributes);
    }
    
    /**
     * Creates label Tag
     * 
     * @param string $label content of tag
     * @param string $for for attribute (always needed)
     * @param array $attributes further attributes
     * @return string HTML Code
     */
    public static function label(
        string $label, 
        string $for, 
        array $attributes = []
    ) : string
    {
        $preAttributesLabel = [
            "for" => $for,
        ];
        $attributesLabel = array_merge($preAttributesLabel, $attributes);
        return self::tag("label", $label, $attributesLabel);
    }
    
    /**
     * <legend> used in fieldset as a title for the set
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function legend(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("legend", $content, $attributes);
    }
    
    /**
     * <link> inserts stylesheets and links other docs in special ways
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function link(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("link", $content, $attributes);
    }
    
    /**
     * <main> main content semantic marker
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function main(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("main", $content, $attributes);
    }
    
    /**
     * <map> image map
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function map(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("map", $content, $attributes);
    }
    
    /**
     * <mark> marks a piece of text (like with a highlighter pen)
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function mark(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("mark", $content, $attributes);
    }
    
    /**
     * <menu> Menu element poor support
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function menu(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("menu", $content, $attributes);
    }
    
    /**
     * <menuitem> subelement of <menu>
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function menuitem(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("menuitem", $content, $attributes);
    }
    
    /**
     * <meta> meta tags (head area)
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function meta(
        array $attributes = []
    ) : string
    {
        return self::tag("meta", null, $attributes);
    }
    
    /**
     * <meter> Displays a Gauge, fallback in content, do not use for progress
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function meter(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("meter", $content, $attributes);
    }
    
    /**
     * <nav> Navigation Links
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function nav(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("nav", $content, $attributes);
    }
    
    /**
     * <noscript> Alternate content for browser w/o script support
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function noscript(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("noscript", $content, $attributes);
    }
    
    /**
     * <object> embeds things like flash files
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function object(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("object", $content, $attributes);
    }
    
    /**
     * <optgroup> Option Group (use in select)
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function optgroup(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("optgroup", $content, $attributes);
    }
    
    /**
     * <option> option for select or datalist
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function option(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("option", $content, $attributes);
    }
    
    /**
     * <output> result of calculation... works with form inputs
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function output(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("output", $content, $attributes);
    }
    
    /**
     * <p> paragraph
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function p(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("p", $content, $attributes);
    }
    
    /**
     * <param> parameters for plugins (audio, video tags)
     * @param array $attributes
     * @return string
     */
    public static function param(
        array $attributes = []
    ) : string
    {
        return self::tag("param", null, $attributes);
    }
    
    /**
     * <picutre> responsive image container tag
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function picture(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("picture", $content, $attributes);
    }
    
    /**
     * <pre> preformatted text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function pre(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("pre", $content, $attributes);
    }
    
    /**
     * <progress> progress bar
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function progress(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("progress", $content, $attributes);
    }
    
    /**
     * <q> short quotation
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function q(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("q", $content, $attributes);
    }
    
    /**
     * <rp> parentheses around ruby text (what the hell is this¿)
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function rp(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("rp", $content, $attributes);
    }
    
    /**
     * <rt> some pronounciation thing for chinese text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function rt(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("rt", $content, $attributes);
    }
    
    /**
     * <ruby> used in japanese and chinese text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function ruby(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("ruby", $content, $attributes);
    }
    
    /**
     * <s> strikethrough / no longer correct
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function s(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("s", $content, $attributes);
    }
    
    /**
     * <samp> sample output from a computer program
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function samp(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("samp", $content, $attributes);
    }
    
    /**
     * <script> script tag for Javascript etc.
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function script(
        string $content, 
        array $attributes = ["type" => "text/javascript"],
        bool $addCdataTag = true
    ) : string
    {
        if ($addCdataTag) {
            $content = "\n//<![CDATA[\n" . $content ."\n//]]>\n";
        }
        return self::tag("script", $content, $attributes);
    }
    
    /**
     * <section> section in a document
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function section(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("section", $content, $attributes);
    }
    
    /**
     * <select> Select Field
     * @param string $content
     * @param array $attributes
     * @param array $options (label => value)
     * @return string
     */
    public static function select(
        string $content, 
        array $attributes = [],
        array $options = []
    ) : string
    {
        foreach ($options as $key => $val) {
            $content .= $this->option($key, ["value" => $val]);
        }
        return self::tag("select", $content, $attributes);
    }
        
    /**
     * <small> Smaller text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function small(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("small", $content, $attributes);
    }
    
    /**
     * <source> subelement for audio, video etc
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function source(
        array $attributes = []
    ) : string
    {
        return self::tag("source", null, $attributes);
    }
    
    /**
     * Create span tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public static function span(
        string $content = null, 
        array $attributes = []
    ) : string 
    {
        return self::tag("span", $content, $attributes);
    }
    
    /**
     * <strong> strong text (more important than bold)
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function strong(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("strong", $content, $attributes);
    }
    
    /**
     * <style> inline CSS
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function style(
        string $content, 
        array $attributes = ["type" => "text/css"]
    ) : string
    {
        return self::tag("style", $content, $attributes);
    }
    
    /**
     * <sub> subscript
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function sub(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("sub", $content, $attributes);
    }
    
    /**
     * <summary> visible heading for <details> tag
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function summary(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("summary", $content, $attributes);
    }
    
    /**
     * <sup> superscript text
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function sup(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("sup", $content, $attributes);
    }
    
    /**
     * Create table tag
     * 
     * @param string $content   content
     * @param array $attributes attributes
     * @return string HTML Code
     */
    public static function table(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("table", $content, $attributes);
    }
    
    /**
     * create tbody tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public static function tbody(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("tbody", $content, $attributes);
    }
    
    /**
     * create td tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public static function td(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("td", $content, $attributes);
    }
    
    /**
     * <textarea> the multi-line input field
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function textarea(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("textarea", $content, $attributes);
    }
    
    /**
     * <tfoot> table footer area
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function tfoot(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("tfoot", $content, $attributes);
    }
    
    /**
     * Create th tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public static function th(
        string $content = null, 
        array $attributes = []
    ) : string 
    {
        return self::tag("th", $content, $attributes);
    }
    
    /**
     * Create thead tag 
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public static function thead(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("thead", $content, $attributes);
    }
    
    /**
     * <time> can add semantic value to text, otherwise useless
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function time(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("time", $content, $attributes);
    }
    
    /**
     * Create title tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return string HTML Code
     */
    public static function title(string $title, array $attributes = []) : string
    {
        return self::tag("title", $title, $attributes);
    }
    
    /**
     * Create tr tag
     * 
     * @param string $content content
     * @param array $attributes further attributes
     * @return HTML Code
     */
    public static function tr(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("tr", $content, $attributes);
    }
    
    /**
     * <track> subtitle tracks for video/audio
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function track(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("track", $content, $attributes);
    }
    
    /**
     * <u> underlined
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function u(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("u", $content, $attributes);
    }
    
    /**
     * Render unordered list tag
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function ul(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("ul", $content, $attributes);
    }
    
    /**
     * <video> video container tag
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function video(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("video", $content, $attributes);
    }
    
    /**
     * <wbr> word break opportunities
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function wbr(
        string $content, 
        array $attributes = []
    ) : string
    {
        return self::tag("wbr", $content, $attributes);
    }
    
    /**
     * Render Ordered List
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function ol(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("ol", $content, $attributes);
    }
    
    /**
     * Render List Item Tag
     * @param string $content
     * @param array $attributes
     * @return string
     */
    public static function li(
        string $content = null, 
        array $attributes = []
    ) : string
    {
        return self::tag("li", $content, $attributes);
    }
    
    /****** Special Methods ******/
    
    /**
     * Creates the standard HTML5 doctype lines
     * 
     * @param string $encoding encoding used (defaults to utf-8)
     * @return string HTML Code
     */
    public static function docType(string $encoding = "utf-8") : string {
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
    public static function htmlDocument(
        string $title, 
        string $headers = "", 
        string $body = "", 
        string $lang = "en", 
        string $encoding = "utf-8"
    ) : string
    {
        $headerContent = self::title($title)
                        . $headers;
        
        $head = self::head($headerContent);
        $body = self::body($body);
        
        $htmlAttributes = [
            "lang" => $lang,
        ];
        
        return self::docType($encoding)
               . self::html($head.$body, $htmlAttributes);
    }
    
    /**
     * Put all elements together to form a standard table
     * 
     * @param array $head two dimensional rows and cells (no keys)
     * @param array $body two dimensional rows and cells (no keys)
     * @param array $attributes
     * @return string   Compiled HTML Table
     */
    public static function renderTable(
        array $head = [], 
        array $body = [], 
        array $attributes = []
    ) : string 
    {
        $strHead = "";
        $strBody = "";
        
        foreach ($head as $thRow) {
            $strHead .= self::renderTableHeaderRow($thRow);
        }
        if ($strHead != "") {
            $strHead = self::thead($strHead);
        }
        
        foreach ($body as $tr) {
            $strBody .= self::renderTableRow($tr);
        }
        if ($strBody != "") {
            $strBody = self::tbody($strBody);
        }
        
        return self::tag("table", $strHead.$strBody, $attributes);
    }
    
    /**
     * Make a table row <tr><td>bla</td></tr>
     * @param array $arrCells
     * @return string
     */
    public static function renderTableRow(array $arrCells) : string
    {
        $strRow = "";
        foreach ($arrCells as $td) {
            $strRow .= self::td($td);
        }
        return self::tr($strRow);
    }
    
    /**
     * Make a table header row <tr><th>bla</th></tr>
     * @param array $arrCells
     * @return type
     */
    public static function renderTableHeaderRow(array $arrCells) : string
    {
        $strRow = "";
        foreach ($arrCells as $th) {
            $strRow .= self::th($th);
        }
        return self::tr($strRow);
    }
}
