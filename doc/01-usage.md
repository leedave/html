# Using Html

- [Installation](#Installation)
- [Usage](#Usage)
- [Tags](#Tags)

## Installation

To get the latest version run 

```bash
composer require leedch/html
```

You can also just get the code @ Github [Leedch/Html](https://github.com/leedave/html)

## Usage

Most Html Tags can be printed by just calling the tag name on the Html class. 

Usually the methods support two parameters. 
- The first parameter is the content of the Xml Tag
- The second parameter is a key - value array that defines the attributes of the tag 

```php
$h = new \Leedch\Html\Html5();
echo $h->div('My Div Content', ["class" => "myClass", "id" => "divId"]);
```
Results in 
```html
<div class="myClass" id="divId">My Div Content</div>
```

## Tags
Currently supported Tags are

- body
- br
- button
- div
- form
- head
- html
- input
- title
- label
- th
- td
- tr
- tbody
- thead
- table```
-