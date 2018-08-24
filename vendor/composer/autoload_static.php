<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit679e4855aab9cb5de530fa63a2ce4632
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\HelpMe\\' => 20,
            'srag\\DIC\\' => 9,
            'srag\\ActiveRecordConfig\\' => 24,
        ),
        'S' => 
        array (
            'Sinergi\\BrowserDetector\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\HelpMe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\ActiveRecordConfig\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
        'Sinergi\\BrowserDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/sinergi/browser-detector/src',
        ),
    );

    public static $classMap = array (
        'ActiveRecord' => __DIR__ . '/../..' . '/../../../../../../../Services/ActiveRecord/class.ActiveRecord.php',
        'Sinergi\\BrowserDetector\\AcceptLanguage' => __DIR__ . '/..' . '/sinergi/browser-detector/src/AcceptLanguage.php',
        'Sinergi\\BrowserDetector\\Browser' => __DIR__ . '/..' . '/sinergi/browser-detector/src/Browser.php',
        'Sinergi\\BrowserDetector\\BrowserDetector' => __DIR__ . '/..' . '/sinergi/browser-detector/src/BrowserDetector.php',
        'Sinergi\\BrowserDetector\\DetectorInterface' => __DIR__ . '/..' . '/sinergi/browser-detector/src/DetectorInterface.php',
        'Sinergi\\BrowserDetector\\Device' => __DIR__ . '/..' . '/sinergi/browser-detector/src/Device.php',
        'Sinergi\\BrowserDetector\\DeviceDetector' => __DIR__ . '/..' . '/sinergi/browser-detector/src/DeviceDetector.php',
        'Sinergi\\BrowserDetector\\InvalidArgumentException' => __DIR__ . '/..' . '/sinergi/browser-detector/src/InvalidArgumentException.php',
        'Sinergi\\BrowserDetector\\Language' => __DIR__ . '/..' . '/sinergi/browser-detector/src/Language.php',
        'Sinergi\\BrowserDetector\\LanguageDetector' => __DIR__ . '/..' . '/sinergi/browser-detector/src/LanguageDetector.php',
        'Sinergi\\BrowserDetector\\Os' => __DIR__ . '/..' . '/sinergi/browser-detector/src/Os.php',
        'Sinergi\\BrowserDetector\\OsDetector' => __DIR__ . '/..' . '/sinergi/browser-detector/src/OsDetector.php',
        'Sinergi\\BrowserDetector\\UserAgent' => __DIR__ . '/..' . '/sinergi/browser-detector/src/UserAgent.php',
        'ilCurlConnection' => __DIR__ . '/../..' . '/../../../../../../../Services/WebServices/Curl/classes/class.ilCurlConnection.php',
        'ilDatePresentation' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDatePresentation.php',
        'ilDateTime' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDateTime.php',
        'ilEMailInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilEMailInputGUI.php',
        'ilFileInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilFileInputGUI.php',
        'ilHelpMeConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilHelpMeConfigGUI.php',
        'ilHelpMeGUI' => __DIR__ . '/../..' . '/classes/class.ilHelpMeGUI.php',
        'ilHelpMePlugin' => __DIR__ . '/../..' . '/classes/class.ilHelpMePlugin.php',
        'ilHelpMeUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilHelpMeUIHookGUI.php',
        'ilMailMimeSenderUser' => __DIR__ . '/../..' . '/../../../../../../../Services/Mail/classes/Mime/Sender/class.ilMailMimeSenderUser.php',
        'ilMimeMail' => __DIR__ . '/../..' . '/../../../../../../../Services/Mail/classes/class.ilMimeMail.php',
        'ilModalGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Modal/classes/class.ilModalGUI.php',
        'ilMultiSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilMultiSelectInputGUI.php',
        'ilNonEditableValueGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilNonEditableValueGUI.php',
        'ilObjUser' => __DIR__ . '/../..' . '/../../../../../../../Services/User/classes/class.ilObjUser.php',
        'ilPasswordInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilPasswordInputGUI.php',
        'ilPluginConfigGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Component/classes/class.ilPluginConfigGUI.php',
        'ilPropertyFormGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilPropertyFormGUI.php',
        'ilRadioGroupInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilRadioGroupInputGUI.php',
        'ilRadioOption' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilRadioOption.php',
        'ilSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilSelectInputGUI.php',
        'ilTextAreaInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilTextAreaInputGUI.php',
        'ilTextInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilTextInputGUI.php',
        'ilUIHookPluginGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/classes/class.ilUIHookPluginGUI.php',
        'ilUIPluginRouterGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/classes/class.ilUIPluginRouterGUI.php',
        'ilUserInterfaceHookPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/classes/class.ilUserInterfaceHookPlugin.php',
        'ilUtil' => __DIR__ . '/../..' . '/../../../../../../../Services/Utilities/classes/class.ilUtil.php',
        'iljQueryUtil' => __DIR__ . '/../..' . '/../../../../../../../Services/jQuery/classes/class.iljQueryUtil.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/class.ActiveRecordConfig.php',
        'srag\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/AbstractDIC.php',
        'srag\\DIC\\DICCache' => __DIR__ . '/..' . '/srag/dic/src/DICCache.php',
        'srag\\DIC\\DICException' => __DIR__ . '/..' . '/srag/dic/src/DICException.php',
        'srag\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DICInterface.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/LegacyDIC.php',
        'srag\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/NewDIC.php',
        'srag\\Plugins\\HelpMe\\Config\\ilHelpMeConfig' => __DIR__ . '/../..' . '/src/Config/class.ilHelpMeConfig.php',
        'srag\\Plugins\\HelpMe\\Config\\ilHelpMeConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/class.ilHelpMeConfigFormGUI.php',
        'srag\\Plugins\\HelpMe\\Config\\ilHelpMeConfigOld' => __DIR__ . '/../..' . '/src/Config/class.ilHelpMeConfigOld.php',
        'srag\\Plugins\\HelpMe\\Config\\ilHelpMeConfigPriority' => __DIR__ . '/../..' . '/src/Config/class.ilHelpMeConfigPriority.php',
        'srag\\Plugins\\HelpMe\\Config\\ilHelpMeConfigRole' => __DIR__ . '/../..' . '/src/Config/class.ilHelpMeConfigRole.php',
        'srag\\Plugins\\HelpMe\\Jira\\ilJiraCurl' => __DIR__ . '/../..' . '/src/Jira/class.ilJiraCurl.php',
        'srag\\Plugins\\HelpMe\\Recipient\\ilHelpMeRecipient' => __DIR__ . '/../..' . '/src/Recipient/class.ilHelpMeRecipient.php',
        'srag\\Plugins\\HelpMe\\Recipient\\ilHelpMeRecipientCreateJiraTicket' => __DIR__ . '/../..' . '/src/Recipient/class.ilHelpMeRecipientCreateJiraTicket.php',
        'srag\\Plugins\\HelpMe\\Recipient\\ilHelpMeRecipientSendMail' => __DIR__ . '/../..' . '/src/Recipient/class.ilHelpMeRecipientSendMail.php',
        'srag\\Plugins\\HelpMe\\Recipient\\ilHelpMeRecipientSendMailSender' => __DIR__ . '/../..' . '/src/Recipient/class.ilHelpMeRecipientSendMailSender.php',
        'srag\\Plugins\\HelpMe\\Support\\ilHelpMeSuccessFormGUI' => __DIR__ . '/../..' . '/src/Support/class.ilHelpMeSuccessFormGUI.php',
        'srag\\Plugins\\HelpMe\\Support\\ilHelpMeSupport' => __DIR__ . '/../..' . '/src/Support/class.ilHelpMeSupport.php',
        'srag\\Plugins\\HelpMe\\Support\\ilHelpMeSupportFormGUI' => __DIR__ . '/../..' . '/src/Support/class.ilHelpMeSupportFormGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit679e4855aab9cb5de530fa63a2ce4632::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit679e4855aab9cb5de530fa63a2ce4632::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit679e4855aab9cb5de530fa63a2ce4632::$classMap;

        }, null, ClassLoader::class);
    }
}
