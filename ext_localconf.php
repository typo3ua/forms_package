<?php
defined('TYPO3_MODE') || die();

/***************
 * Make the extension configuration accessible
 */
$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
);
$bootstrapPackageConfiguration = $extensionConfiguration->get('forms_package');

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:forms_package/Configuration/TsConfig/Page/All.tsconfig">');

/***************
 * Register custom EXT:form configuration
 */
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('form')) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
        module.tx_form {
            settings {
                yamlConfigurations {
                    110 = EXT:forms_package/Configuration/Form/Setup.yaml
                }
            }
        }
        plugin.tx_form {
            settings {
                yamlConfigurations {
                    110 = EXT:forms_package/Configuration/Form/Setup.yaml
                }
            }
        }
    '));
}

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['forms_package'] = 'EXT:forms_package/Configuration/RTE/Default.yaml';

/***************
 * Register "t3ua" as global fluid namespace
 */
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['t3ua'][] = 'T3UA\\FormsPackage\\ViewHelpers';

