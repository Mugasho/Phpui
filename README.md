# Phpui
Phpui is a php only Ui framework.<br>
## What does it do
Write your code in pure php and DYnamically generate the Html,Javascript,Css etc


## Installation

```sh
composer require mugasho/phpui
```
## How it works

Create a new html document object
```php

$htmlDoc=new PhpUi\HtmlDocument('Hello',Lang::$english);
$htmlDoc->addClass(Classes::$content);
$htmlDoc->setMetaViewport('device-width',1.0,0,'minimal-ui');
$htmlDoc->setMetaDescription('PhpUi is a php only extensible web framework');
$htmlDoc->setMetaKeywords('php,ui,phpUI,web,framework');
$htmlDoc->setMetaAuthor('Script-floor');
//start printing element
$htmlDoc->start();
//create the body
$body=new PhpUi\UI(typeOf::$body);
//add classes to $body
$body->addClass(Classes::$containerFluid);
$body->start();
//close the element with end method
$body->end();
$htmlDoc->end();
```
## Next steps

Add other elements like buttons, lists etc. For example adding a button

```

$button=new PhpUi\UI(typeOf::$button);
$button->setText('hello');
$button->setId('btn1');
$button->start();
$button->end();
//create a div
$div=new Php\UI(typeOf::$div);
$div->setId('div1');
$div->start();
$div->end();

happy Coding
