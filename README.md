# Phpui
Phpui is a php only Ui framework.
###What does it do
Write your code in pure php and DYnamically generate the Html,Javascript,Css etc
Add the phpui folder to your project
Require loader.php in your files to use the framework
## How it works
Create a new html document object
```

$htmlDoc=new HtmlDocument('Hello',Lang::$english);
$htmlDoc->addClass(Classes::$content);
$htmlDoc->setMetaViewport('device-width',1.0,0,'minimal-ui');
$htmlDoc->setMetaDescription('PhpUi is a php only extensible web framework');
$htmlDoc->setMetaKeywords('php,ui,phpUI,web,framework');
$htmlDoc->setMetaAuthor('Script-floor');
//start printing element
$htmlDoc->Start();
//create the body
$body=new phpUI(typeOf::$body);
//add classes to $body
$body->addClass(Classes::$containerFluid);
$body->Start();
//close the element with end method
$body->End();
$htmlDoc->End();
```
### Next steps

Add other elements like buttons, lists etc. For example adding a button

```

//create a button
$button=new phpUI(typeOf::$button);
$button->setText('hello');
$button->setId('btn1');
$button->Start();
$button->End();
//create a div
$div=new phpUI(typeOf::$div);
$div->setId('div1');
$div->Start();
$div->End();

```
## Add to your project

There are 2 ways you can add SDVersion to your project:
```
require_once('pms-includes/ui/loader.php');

```
or include in your project

```
include('pms-includes/ui/loader.php');
```
happy Coding