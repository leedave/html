# Using Html5

- [Installation](#Installation)
- [Usage](#Usage)
- [Supported Tags](02-supported-tags.md)
- [Special Methods](03-special-methods.md)

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

Some tags require more parameters, these are however always documented in the 
phpDoc format, so that you IDE can recognize it. 

```php
$h = new \Leedch\Html\Html5();
echo $h->div('My Div Content', ["class" => "myClass", "id" => "divId"]);
```
Results in 
```html
<div class="myClass" id="divId">My Div Content</div>
```

Any custom tag can be generated using the *tag* method. This requires 3 parameters
- Tag Name
- Tag Content
- Array of Attributes

```php
$h = new \Leedch\Html\Html5();
echo $h->tag('div', 'My Div Content', ["class" => "myClass", "id" => "divId"]);
```
Results in 
```html
<div class="myClass" id="divId">My Div Content</div>
```

## Tags
Currently supported Tags are listed in [Supported Tags](02-supported-tags.md)

## Special Methods
There are some special methods, designed to make more complex structures easy
[Special Methods](03-special-methods.md)