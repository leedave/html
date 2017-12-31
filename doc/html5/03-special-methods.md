# Special Methods

## docType

Creates the default first two lines of a HTML document

```php
echo Html5::docType("utf-8");
```

Results in 
```html
<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html>
```

## htmlDocument

Creates a full HTML5 document

```php
echo Html5::htmlDocument("MyTitle", "headers", "body", "de", "utf-8");
```

Results in 
```html
<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>
MyTitle</title>
headers
</head>
<body>
body
</body>
</html>
```


## renderTable

This makes creating the rather complex table structures easier

```php
$arrHead = [["head1", "head2"]];
$arrBody = [["cell1Row1", "cell2Row1"], ["cell1Row2", "cell2Row2"]];
echo = Html5::renderTable($arrHead, $arrBody, ["class" => "myClass"]);
```

Results in 
```html
<table class="myClass">
<thead>
<tr>
<th>
head1</th>
<th>
head2</th>
</tr>
</thead>
<tbody>
<tr>
<td>
cell1Row1</td>
<td>
cell2Row1</td>
</tr>
<tr>
<td>
cell1Row2</td>
<td>
cell2Row2</td>
</tr>
</tbody>
</table>
```