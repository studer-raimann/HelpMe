<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82c54ca93d1e962c039ba6a177c9b500
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\HelpMe\\' => 36,
            'srag\\Plugins\\HelpMe\\' => 20,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\JiraCurl\\HelpMe\\' => 21,
            'srag\\DIC\\HelpMe\\' => 16,
            'srag\\CustomInputGUIs\\HelpMe\\' => 28,
            'srag\\ActiveRecordConfig\\HelpMe\\' => 31,
        ),
        'S' => 
        array (
            'Sinergi\\BrowserDetector\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\HelpMe\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\HelpMe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\JiraCurl\\HelpMe\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/jiracurl/src',
        ),
        'srag\\DIC\\HelpMe\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\HelpMe\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\HelpMe\\' => 
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
        'srag\\ActiveRecordConfig\\HelpMe\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\HelpMe\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\HelpMe\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\HelpMe\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\HelpMe\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\HelpMe\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\HelpMe\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\HelpMe\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\HelpMe\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\HelpMe\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\HelpMe\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\DIC\\HelpMe\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\HelpMe\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\HelpMe\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\HelpMe\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\HelpMe\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\HelpMe\\DIC\\Implementation\\ILIAS52DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS52DIC.php',
        'srag\\DIC\\HelpMe\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\HelpMe\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\HelpMe\\DIC\\Implementation\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/LegacyDIC.php',
        'srag\\DIC\\HelpMe\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\HelpMe\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\HelpMe\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\HelpMe\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\HelpMe\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\HelpMe\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\HelpMe\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\HelpMe\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\HelpMe\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\JiraCurl\\HelpMe\\JiraCurl' => __DIR__ . '/..' . '/srag/jiracurl/src/JiraCurl.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\Plugins\\HelpMe\\Access\\Access' => __DIR__ . '/../..' . '/src/Access/Access.php',
        'srag\\Plugins\\HelpMe\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\HelpMe\\Access\\Roles' => __DIR__ . '/../..' . '/src/Access/Roles.php',
        'srag\\Plugins\\HelpMe\\Access\\Users' => __DIR__ . '/../..' . '/src/Access/Users.php',
        'srag\\Plugins\\HelpMe\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigOld' => __DIR__ . '/../..' . '/src/Config/ConfigOld.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigPriorityOld' => __DIR__ . '/../..' . '/src/Config/ConfigPriorityOld.php',
        'srag\\Plugins\\HelpMe\\Config\\ConfigRoleOld' => __DIR__ . '/../..' . '/src/Config/ConfigRoleOld.php',
        'srag\\Plugins\\HelpMe\\Project\\Project' => __DIR__ . '/../..' . '/src/Project/Project.php',
        'srag\\Plugins\\HelpMe\\Project\\ProjectFormGUI' => __DIR__ . '/../..' . '/src/Project/ProjectFormGUI.php',
        'srag\\Plugins\\HelpMe\\Project\\Projects' => __DIR__ . '/../..' . '/src/Project/Projects.php',
        'srag\\Plugins\\HelpMe\\Project\\ProjectsTableGUI' => __DIR__ . '/../..' . '/src/Project/ProjectsTableGUI.php',
        'srag\\Plugins\\HelpMe\\Recipient\\Recipient' => __DIR__ . '/../..' . '/src/Recipient/Recipient.php',
        'srag\\Plugins\\HelpMe\\Recipient\\RecipientCreateJiraTicket' => __DIR__ . '/../..' . '/src/Recipient/RecipientCreateJiraTicket.php',
        'srag\\Plugins\\HelpMe\\Recipient\\RecipientSendMail' => __DIR__ . '/../..' . '/src/Recipient/RecipientSendMail.php',
        'srag\\Plugins\\HelpMe\\Recipient\\RecipientSendMailSender' => __DIR__ . '/../..' . '/src/Recipient/RecipientSendMailSender.php',
        'srag\\Plugins\\HelpMe\\Support\\SuccessFormGUI' => __DIR__ . '/../..' . '/src/Support/SuccessFormGUI.php',
        'srag\\Plugins\\HelpMe\\Support\\Support' => __DIR__ . '/../..' . '/src/Support/Support.php',
        'srag\\Plugins\\HelpMe\\Support\\SupportFormGUI' => __DIR__ . '/../..' . '/src/Support/SupportFormGUI.php',
        'srag\\Plugins\\HelpMe\\Support\\SupportGUI' => __DIR__ . '/../..' . '/src/Support/class.SupportGUI.php',
        'srag\\Plugins\\HelpMe\\Utils\\HelpMeTrait' => __DIR__ . '/../..' . '/src/Utils/HelpMeTrait.php',
        'srag\\RemovePluginDataConfirm\\HelpMe\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\HelpMe\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\HelpMe\\Exception\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/Exception/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\HelpMe\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\HelpMe\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82c54ca93d1e962c039ba6a177c9b500::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82c54ca93d1e962c039ba6a177c9b500::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82c54ca93d1e962c039ba6a177c9b500::$classMap;

        }, null, ClassLoader::class);
    }
}
