## Installation

### Install HelpMe-Plugin
Start at your ILIAS root directory 
```bash
mkdir -p Customizing/global/plugins/Services/UIComponent/UserInterfaceHook/
cd Customizing/global/plugins/Services/UIComponent/UserInterfaceHook/
git clone git@git.studer-raimann.ch:ILIAS/Plugins/HelpMe.git HelpMe
```
Update, activate and config the plugin in the ILIAS Plugin Administration

If yout want use the Jira recipient with oAuth authorization you can find a guide to config your Jira installation: https://developer.atlassian.com/cloud/jira/platform/jira-rest-api-oauth-authentication/

### Dependencies
* [composer](https://getcomposer.org)
* [npm](https://nodejs.org)
* [html2canvas](https://www.npmjs.com/package/html2canvas)
* [sinergi/browser-detector](https://packagist.org/packages/sinergi/browser-detector)
* [srag/activerecordconfig](https://packagist.org/packages/srag/activerecordconfig)
* [srag/dic](https://packagist.org/packages/srag/dic)
* [srag/jiracurl](https://packagist.org/packages/srag/jiracurl)
* [srag/removeplugindataconfirm](https://packagist.org/packages/srag/removeplugindataconfirm)

Please use it for further development!

### Contact
info@studer-raimann.ch
https://studer-raimann.ch
