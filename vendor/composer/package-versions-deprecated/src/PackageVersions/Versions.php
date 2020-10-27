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
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.12.0@c6d37b4c42aaa3c3ee175f05eca68056f4185646',
  'doctrine/doctrine-bundle' => '2.1.2@f5153089993e1230f5d8acbd8e126014d5a63e17',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '2.0.0@1dee036f22cd5dc0bc12132f1d1c38415907be55',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.22@68e418ec08fbfc6f58f6fd2eea70ca8efc8cc7d5',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v5.1.7@ef0bcafce1c14bbf49838b01e990a8bfafd071eb',
  'symfony/cache' => 'v5.1.7@292cd57b7c2e3c37aa2f0a2fa42dacae567dd5cd',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.7@6ad8be6e1280f6734150d8a04a9160dd34ceb191',
  'symfony/console' => 'v5.1.7@ae789a8a2ad189ce7e8216942cdb9b77319f5eb8',
  'symfony/dependency-injection' => 'v5.1.7@2dea4a3ef2eb79138354c1d49e9372cc921af20b',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.7@b7369a435a64d06e9036e69ed1cd6ce240338583',
  'symfony/dotenv' => 'v5.1.7@f406eaad1231415bf753fbef5aef267a787af4e5',
  'symfony/error-handler' => 'v5.1.7@5e4d8ef8d71822922d1eebd130219ae3491a5ca9',
  'symfony/event-dispatcher' => 'v5.1.7@d5de97d6af175a9e8131c546db054ca32842dd0f',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.1.7@e16e66c309214143cc01dae6d1ff1ee13e7be4fa',
  'symfony/filesystem' => 'v5.1.7@1a8697545a8d87b9f2f6b1d32414199cc5e20aae',
  'symfony/finder' => 'v5.1.7@2c3ba7ad6884e6c4451ce2340e2dc23f6fa3e0d8',
  'symfony/flex' => 'v1.9.10@7335ec033995aa34133e621627333368f260b626',
  'symfony/form' => 'v5.1.7@f3a49105e472fd168b743acdb5e0524c66aeb287',
  'symfony/framework-bundle' => 'v5.1.7@023ca658526278c0e74542079f1984e042aa6c1d',
  'symfony/http-client' => 'v5.1.7@df757997ee95101c0ca94c7ea2b76e16a758e0ca',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.1.7@353b42e7b4fd1c898aab09a059466c9cea74039b',
  'symfony/http-kernel' => 'v5.1.7@1764b87d2f10d5c9ce6e4850fe27934116d89708',
  'symfony/intl' => 'v5.1.7@9381fd69ce6407041185aa6f1bafbf7d65f0e66a',
  'symfony/mailer' => 'v5.1.7@0c4f93173b7e315f4035c401b8ddfa9b149b389c',
  'symfony/mime' => 'v5.1.7@4404d6545125863561721514ad9388db2661eec5',
  'symfony/monolog-bridge' => 'v5.1.7@37255bdafc2f94155a90154b1f9878eae020106d',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/notifier' => 'v5.1.7@19699652eaa69b0389bc985853f29b8e9177b1cf',
  'symfony/options-resolver' => 'v5.1.7@4c7e155bf7d93ea4ba3824d5a14476694a5278dd',
  'symfony/orm-pack' => 'v2.0.0@46aa731f213140388ee11ff3d2b6776a3b4a0d90',
  'symfony/polyfill-intl-grapheme' => 'v1.19.0@64fbe93b02024763359aea2bc81af05086c6af82',
  'symfony/polyfill-intl-icu' => 'v1.19.0@f740dd60a5b5f1511229e107f7e59f404b102084',
  'symfony/polyfill-intl-idn' => 'v1.19.0@4ad5115c0f5d5172a9fe8147675ec6de266d8826',
  'symfony/polyfill-intl-normalizer' => 'v1.19.0@8db0ae7936b42feb370840cf24de1a144fb0ef27',
  'symfony/polyfill-mbstring' => 'v1.19.0@b5f7b932ee6fa802fc792eabd77c4c88084517ce',
  'symfony/polyfill-php73' => 'v1.19.0@9d920e3218205554171b2503bb3e4a1366824a16',
  'symfony/polyfill-php80' => 'v1.19.0@f54ef00f4678f348f133097fa8c3701d197ff44d',
  'symfony/process' => 'v5.1.7@d3a2e64866169586502f0cd9cab69135ad12cee9',
  'symfony/property-access' => 'v5.1.7@4c43f7ff784e1e3ee1c96e15f76b342af6617b39',
  'symfony/property-info' => 'v5.1.7@22518930091e0bdb249694efc509e3697f7e325e',
  'symfony/routing' => 'v5.1.7@720348c2ae011f8c56964c0fc3e992840cb60ccf',
  'symfony/security-bundle' => 'v5.1.7@c9cbe7d78d734062365e2af6d8d475d8888a7bcc',
  'symfony/security-core' => 'v5.1.7@6c5d337d9549c1ab4c2edcee50bbb0bc509ebb17',
  'symfony/security-csrf' => 'v5.1.7@f1659a16028a50766dbffa73160fb94599131014',
  'symfony/security-guard' => 'v5.1.7@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.7@22d653f2b407794f6a81cc1a76aa617e65ad6d86',
  'symfony/serializer' => 'v5.1.7@6b673b802dabd2bcf7cab05d04d2d8ef8891b952',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.7@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.7@4a9afe9d07bac506f75bcee8ed3ce76da5a9343e',
  'symfony/translation' => 'v5.1.7@e3cdd5119b1b5bf0698c351b8ee20fb5a4ea248b',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.1.7@ad3c3e89353749dcead9ee25388177ebbb4569a1',
  'symfony/twig-bundle' => 'v5.1.7@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/validator' => 'v5.1.7@30f946a6d12518b806a785a4ba83c820f6f807ec',
  'symfony/var-dumper' => 'v5.1.7@c976c115a0d788808f7e71834c8eb0844f678d02',
  'symfony/var-exporter' => 'v5.1.7@8b858508e49beb257fd635104c3d449a8113e8fe',
  'symfony/web-link' => 'v5.1.7@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.7@e147a68cb66a8b510f4b7481fe4da5b2ab65ec6a',
  'twig/extra-bundle' => 'v3.1.0@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.1.0@9a29e1fa7b5431969f96878b8662e3fcb18601b7',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'symfony/browser-kit' => 'v5.1.7@8944cc83bb18f83f577225c695d999044e7c62b0',
  'symfony/css-selector' => 'v5.1.7@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/debug-bundle' => 'v5.1.7@3f4bcea52678eedf19260973217f5ae7b835edf5',
  'symfony/dom-crawler' => 'v5.1.7@6d6885e167aad0af4128b392f22d8f2a33dd88ec',
  'symfony/maker-bundle' => 'v1.22.0@430a9f6d5d2d60672337859c7833c0acc7ec05db',
  'symfony/phpunit-bridge' => 'v5.1.7@150aeb91dd9dafe13ec8416abd62e435330ca12d',
  'symfony/web-profiler-bundle' => 'v5.1.7@4b02edb4c4c2d57b94e62904e45f3484b29d36eb',
  'paragonie/random_compat' => '2.*@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
  'symfony/polyfill-ctype' => '*@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
  'symfony/polyfill-iconv' => '*@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
  'symfony/polyfill-php72' => '*@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
  'symfony/polyfill-php71' => '*@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
  'symfony/polyfill-php70' => '*@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
  'symfony/polyfill-php56' => '*@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
  '__root__' => 'dev-master@99dd1644b574f2e066d0e9bdb2edb84e220c5367',
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
