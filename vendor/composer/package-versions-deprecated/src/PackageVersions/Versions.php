<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.6.2@2edb3bf1fffe57f1d5e6833e25e7b0b54dd7a583',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.1@2afde5a9844126bc311cd5f548b5475e75f800d3',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.3@015fdd490074d4daa891e2d1df998dc35ba54924',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.0@260991be753a38aa25b6f2d13dbb7f113f8dbf8f',
  'doctrine/orm' => '2.8.2@ebae57eb9637acd8252b398df3121b120688ed5c',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'laminas/laminas-code' => '4.0.0@28a6d70ea8b8bca687d7163300e611ae33baf82a',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.1.2@c544710aa18e079baf0027ca4c8236913f46945b',
  'lexik/jwt-authentication-bundle' => 'v2.11.2@f0a91712b4554454e6d28c648567e9381408e2d6',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.1.0@be4d5824caebc86da9e224e935e02e1201b3ea54',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v5.2.3@54a42aa50f9359d1184bf7e954521b45ca3d5828',
  'symfony/cache' => 'v5.2.3@d6aed6c1bbf6f59e521f46437475a0ff4878d388',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.2.3@50e0e1314a3b2609d32b6a5a0d0fb5342494c4ab',
  'symfony/console' => 'v5.2.3@89d4b176d12a2946a1ae4e34906a025b7b6b135a',
  'symfony/dependency-injection' => 'v5.2.3@62f72187be689540385dce6c68a5d4c16f034139',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.2.3@c348e596f49df406a7c0a51443864038b3137cac',
  'symfony/dotenv' => 'v5.2.3@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.2.3@48f18b3609e120ea66d59142c23dc53e9562c26d',
  'symfony/event-dispatcher' => 'v5.2.3@4f9760f8074978ad82e2ce854dff79a71fe45367',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.2.3@7bf30a4e29887110f8bd1882ccc82ee63c8a5133',
  'symfony/filesystem' => 'v5.2.3@262d033b57c73e8b59cd6e68a45c528318b15038',
  'symfony/finder' => 'v5.2.3@4adc8d172d602008c204c2e16956f99257248e03',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v5.2.3@4f3069be5fe46e72f3ec233fc61ac2828ea5b301',
  'symfony/framework-bundle' => 'v5.2.3@ff455b2afd3f98237d4131ffebe190e59cc0f011',
  'symfony/http-client' => 'v5.2.3@22cb1a7844fff206cc5186409776e78865405ea5',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.2.3@20c554c0f03f7cde5ce230ed248470cccbc34c36',
  'symfony/http-kernel' => 'v5.2.3@89bac04f29e7b0b52f9fa6a4288ca7a8f90a1a05',
  'symfony/intl' => 'v5.2.3@930f17689729cc47d2ce18be21ed403bcbeeb6a9',
  'symfony/mailer' => 'v5.2.3@1efa11a8f59b8ba706aa6ee112c4675dce4dccf6',
  'symfony/mime' => 'v5.2.3@7dee6a43493f39b51ff6c5bb2bd576fe40a76c86',
  'symfony/monolog-bridge' => 'v5.2.3@aca99c4135001224b917eed17cc846e8c0ba981c',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/notifier' => 'v5.2.3@bdb8702e91f19fc64d0c678f41fed144d0263657',
  'symfony/options-resolver' => 'v5.2.3@5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
  'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v5.2.3@313a38f09c77fbcdc1d223e57d368cea76a2fd2f',
  'symfony/property-access' => 'v5.2.3@3af8ed262bd3217512a13b023981fe68f36ad5f3',
  'symfony/property-info' => 'v5.2.3@4e4f368c3737b1c175d66f4fc0b99a5bcd161a77',
  'symfony/proxy-manager-bridge' => 'v5.2.3@fd6bb40190b1719abbe831be09adf38e0744d5f5',
  'symfony/routing' => 'v5.2.3@348b5917e56546c6d96adbf21d7f92c9ef563661',
  'symfony/security-bundle' => 'v5.2.3@51854aa28585d196e60519271338aecad86f95f5',
  'symfony/security-core' => 'v5.2.3@a468c863d65e2c3768b897b8ddf7547abb4512f8',
  'symfony/security-csrf' => 'v5.2.3@e22ef49d5d3773014942f3dfe301b168a4a833dc',
  'symfony/security-guard' => 'v5.2.3@a191352047f2ea0d927c62e1a2f261cf906d1bde',
  'symfony/security-http' => 'v5.2.3@122c8f52fd080fcc582ca475baf2b8e63d62e980',
  'symfony/serializer' => 'v5.2.3@70c5aa59ab0642033391a5591c9771ee417e7cef',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.2.3@b12274acfab9d9850c52583d136a24398cdf1a0c',
  'symfony/string' => 'v5.2.3@c95468897f408dd0aca2ff582074423dd0455122',
  'symfony/translation' => 'v5.2.3@c021864d4354ee55160ddcfd31dc477a1bc77949',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.2.3@3e8a56f4a8ab4db819f5ec726afad29d470b452d',
  'symfony/twig-bundle' => 'v5.2.3@5ebbb5f0e8bfaa0b4b37cb25ff97f83b18caf221',
  'symfony/validator' => 'v5.2.3@d83d2a9f060ce42636feef6af6facc39793354cf',
  'symfony/var-dumper' => 'v5.2.3@72ca213014a92223a5d18651ce79ef441c12b694',
  'symfony/var-exporter' => 'v5.2.3@5aed4875ab514c8cb9b6ff4772baa25fa4c10307',
  'symfony/web-link' => 'v5.2.3@28e6bd9028740602c158f5c6ac8d5e2a2692812e',
  'symfony/yaml' => 'v5.2.3@338cddc6d74929f6adf19ca5682ac4b8e109cdb0',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'willdurand/negotiation' => '3.0.0@04e14f38d4edfcc974114a07d2777d90c98f3d9c',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/browser-kit' => 'v5.2.3@b03b2057ed53ee4eab2e8f372084d7722b7b8ffd',
  'symfony/css-selector' => 'v5.2.3@f65f217b3314504a1ec99c2d6ef69016bb13490f',
  'symfony/debug-bundle' => 'v5.2.3@ec21bd26d24dab02ac40e4bec362b3f4032486e8',
  'symfony/dom-crawler' => 'v5.2.3@5d89ceb53ec65e1973a555072fac8ed5ecad3384',
  'symfony/maker-bundle' => 'v1.29.1@313b5669a5370bf36cd34fa8f5b5bbbfa5fb8aa8',
  'symfony/phpunit-bridge' => 'v5.2.3@587f2b6bbcda8c473b91c18165958ffbb8af3c4c',
  'symfony/web-profiler-bundle' => 'v5.2.3@4b28c24db64156ad892300be7fae1978bed075ce',
  'symfony/polyfill-ctype' => '*@afc07d9c19be0656c6eb44277f52e0c7f2cdf62e',
  'symfony/polyfill-iconv' => '*@afc07d9c19be0656c6eb44277f52e0c7f2cdf62e',
  'symfony/polyfill-php72' => '*@afc07d9c19be0656c6eb44277f52e0c7f2cdf62e',
  '__root__' => 'dev-nouvel@afc07d9c19be0656c6eb44277f52e0c7f2cdf62e',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
