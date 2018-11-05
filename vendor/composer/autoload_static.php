<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42fa09a936c3d865da5123c7a1c8d53f
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\' => 29,
            'srag\\Plugins\\HelpMe\\' => 20,
            'srag\\JiraCurl\\' => 14,
            'srag\\DIC\\' => 9,
            'srag\\CustomInputGUIs\\' => 21,
            'srag\\ActiveRecordConfig\\' => 24,
        ),
        'S' => 
        array (
            'Sinergi\\BrowserDetector\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\HelpMe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\JiraCurl\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/jiracurl/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
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
        'HelpMeRemoveDataConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.HelpMeRemoveDataConfirm.php',
        'HelpMeSupportGUI' => __DIR__ . '/../..' . '/classes/Support/class.HelpMeSupportGUI.php',
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
        'ilHelpMeConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilHelpMeConfigGUI.php',
        'ilHelpMePlugin' => __DIR__ . '/../..' . '/classes/class.ilHelpMePlugin.php',
        'ilHelpMeUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilHelpMeUIHookGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\DIC\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/LegacyDIC.php',
        'srag\\DIC\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/NewDIC.php',
        'srag\\DIC\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\JiraCurl\\JiraCurl' => __DIR__ . '/..' . '/srag/jiracurl/src/JiraCurl.php',
        'srag\\Plugins\\HelpMe\\Access\\Access' => __DIR__ . '/../..' . '/src/Access/Access.php',
        'srag\\Plugins\\HelpMe\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\HelpMe\\Access\\Roles' => __DIR__ . '/../..' . '/src/Access/Roles.php',
        'srag\\Plugins\\HelpMe\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigOld' => __DIR__ . '/../..' . '/src/Config/ConfigOld.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigPriorityOld' => __DIR__ . '/../..' . '/src/Config/ConfigPriorityOld.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigRoleOld' => __DIR__ . '/../..' . '/src/Config/ConfigRoleOld.php',
        'srag\\Plugins\\HelpMe\\Config\\Projects\\ProjectFormGUI' => __DIR__ . '/../..' . '/src/Config/Projects/ProjectFormGUI.php',
        'srag\\Plugins\\HelpMe\\Config\\Projects\\ProjectsTableGUI' => __DIR__ . '/../..' . '/src/Config/Projects/ProjectsTableGUI.php',
        'srag\\Plugins\\HelpMe\\Recipient\\Recipient' => __DIR__ . '/../..' . '/src/Recipient/Recipient.php',
        'srag\\Plugins\\HelpMe\\Recipient\\RecipientCreateJiraTicket' => __DIR__ . '/../..' . '/src/Recipient/RecipientCreateJiraTicket.php',
        'srag\\Plugins\\HelpMe\\Recipient\\RecipientSendMail' => __DIR__ . '/../..' . '/src/Recipient/RecipientSendMail.php',
        'srag\\Plugins\\HelpMe\\Recipient\\RecipientSendMailSender' => __DIR__ . '/../..' . '/src/Recipient/RecipientSendMailSender.php',
        'srag\\Plugins\\HelpMe\\Support\\SuccessFormGUI' => __DIR__ . '/../..' . '/src/Support/SuccessFormGUI.php',
        'srag\\Plugins\\HelpMe\\Support\\Support' => __DIR__ . '/../..' . '/src/Support/Support.php',
        'srag\\Plugins\\HelpMe\\Support\\SupportFormGUI' => __DIR__ . '/../..' . '/src/Support/SupportFormGUI.php',
        'srag\\Plugins\\HelpMe\\Utils\\HelpMeTrait' => __DIR__ . '/../..' . '/src/Utils/HelpMeTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42fa09a936c3d865da5123c7a1c8d53f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42fa09a936c3d865da5123c7a1c8d53f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42fa09a936c3d865da5123c7a1c8d53f::$classMap;

        }, null, ClassLoader::class);
    }
}
