<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76fcb8bda755ff290414e73dfe631bb7
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
        ),
        'P' => 
        array (
            'PDepend\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'PDepend\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdepend/pdepend/src/main/php/PDepend',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPMD\\' => 
            array (
                0 => __DIR__ . '/..' . '/phpmd/phpmd/src/main/php',
            ),
        ),
    );

    public static $classMap = array (
        'PHP_Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
        'SebastianBergmann\\FinderFacade\\Configuration' => __DIR__ . '/..' . '/sebastian/finder-facade/src/Configuration.php',
        'SebastianBergmann\\FinderFacade\\FinderFacade' => __DIR__ . '/..' . '/sebastian/finder-facade/src/FinderFacade.php',
        'SebastianBergmann\\PHPCPD\\CLI\\Application' => __DIR__ . '/..' . '/sebastian/phpcpd/src/CLI/Application.php',
        'SebastianBergmann\\PHPCPD\\CLI\\Command' => __DIR__ . '/..' . '/sebastian/phpcpd/src/CLI/Command.php',
        'SebastianBergmann\\PHPCPD\\CodeClone' => __DIR__ . '/..' . '/sebastian/phpcpd/src/CodeClone.php',
        'SebastianBergmann\\PHPCPD\\CodeCloneFile' => __DIR__ . '/..' . '/sebastian/phpcpd/src/CodeCloneFile.php',
        'SebastianBergmann\\PHPCPD\\CodeCloneMap' => __DIR__ . '/..' . '/sebastian/phpcpd/src/CodeCloneMap.php',
        'SebastianBergmann\\PHPCPD\\Detector\\Detector' => __DIR__ . '/..' . '/sebastian/phpcpd/src/Detector/Detector.php',
        'SebastianBergmann\\PHPCPD\\Detector\\Strategy\\AbstractStrategy' => __DIR__ . '/..' . '/sebastian/phpcpd/src/Detector/Strategy/Abstract.php',
        'SebastianBergmann\\PHPCPD\\Detector\\Strategy\\DefaultStrategy' => __DIR__ . '/..' . '/sebastian/phpcpd/src/Detector/Strategy/Default.php',
        'SebastianBergmann\\PHPCPD\\Log\\AbstractXmlLogger' => __DIR__ . '/..' . '/sebastian/phpcpd/src/Log/AbstractXmlLogger.php',
        'SebastianBergmann\\PHPCPD\\Log\\PMD' => __DIR__ . '/..' . '/sebastian/phpcpd/src/Log/PMD.php',
        'SebastianBergmann\\PHPCPD\\Log\\Text' => __DIR__ . '/..' . '/sebastian/phpcpd/src/Log/Text.php',
        'SebastianBergmann\\Version' => __DIR__ . '/..' . '/sebastian/version/src/Version.php',
        'TheSeer\\fDOM\\CSS\\DollarEqualRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/DollarEqualRule.php',
        'TheSeer\\fDOM\\CSS\\NotRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/NotRule.php',
        'TheSeer\\fDOM\\CSS\\NthChildRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/NthChildRule.php',
        'TheSeer\\fDOM\\CSS\\RegexRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/RegexRule.php',
        'TheSeer\\fDOM\\CSS\\RuleInterface' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/RuleInterface.php',
        'TheSeer\\fDOM\\CSS\\Translator' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/Translator.php',
        'TheSeer\\fDOM\\XPathQuery' => __DIR__ . '/..' . '/theseer/fdomdocument/src/XPathQuery.php',
        'TheSeer\\fDOM\\XPathQueryException' => __DIR__ . '/..' . '/theseer/fdomdocument/src/XPathQueryException.php',
        'TheSeer\\fDOM\\fDOMDocument' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMDocument.php',
        'TheSeer\\fDOM\\fDOMDocumentFragment' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMDocumentFragment.php',
        'TheSeer\\fDOM\\fDOMElement' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMElement.php',
        'TheSeer\\fDOM\\fDOMException' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMException.php',
        'TheSeer\\fDOM\\fDOMNode' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMNode.php',
        'TheSeer\\fDOM\\fDOMXPath' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMXPath.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76fcb8bda755ff290414e73dfe631bb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76fcb8bda755ff290414e73dfe631bb7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit76fcb8bda755ff290414e73dfe631bb7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit76fcb8bda755ff290414e73dfe631bb7::$classMap;

        }, null, ClassLoader::class);
    }
}
