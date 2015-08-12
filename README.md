# Material Design Email Signature Generator
A pretty simple and pretty email signature generator for your office.

![screenshot](https://mir-cdn.behance.net/v1/rendition/project_modules/max_1200/138f4128666961.55cbb34ab08b9.jpg)

It is using materialize for css and animations:
http://materializecss.com/

Input your data on index.php and hit generate. 
You will see a preview of your signature and a textarea that selects all markup with just clicking into it. 
Copy paste it into your html signature.

##index.php
Hosts the basic input form. You can easily add or change input fields to your liking. 

##sig.php
Receives the submitted data via GET and constructs the html markup for the email signature.
Change the markup inside 
```html
<div id="signature">...</div>
```
To change how the email is constructed.
