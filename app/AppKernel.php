<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\DoctrineMongoDBBundle\DoctrineMongoDBBundle(),
            new Symfony\Bundle\DoctrineFixturesBundle\DoctrineFixturesBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),

            new FOS\UserBundle\FOSUserBundle(),
            new FOS\CommentBundle\FOSCommentBundle(),
            new FOQ\TyperBundle\FOQTyperBundle(),
            new FOQ\ElasticaBundle\FOQElasticaBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Bundle\ApcBundle\ApcBundle(),
            new Bundle\ZendCacheBundle\ZendCacheBundle(),
            new Knplabs\Bundle\MenuBundle\KnplabsMenuBundle(),
            new Knplabs\Bundle\MarkdownBundle\KnplabsMarkdownBundle(),
            new Avalanche\Bundle\ImagineBundle\AvalancheImagineBundle(),
            new JMS\DebuggingBundle\JMSDebuggingBundle($this),

            new Ltc\UserBundle\LtcUserBundle(),
            new Ltc\CommentBundle\LtcCommentBundle(),
            new Ltc\CoreBundle\LtcCoreBundle(),
            new Ltc\DocBundle\LtcDocBundle(),
            new Ltc\BlogBundle\LtcBlogBundle(),
            new Ltc\ArticleBundle\LtcArticleBundle(),
            new Ltc\ImageBundle\LtcImageBundle(),
            new Ltc\TagBundle\LtcTagBundle(),
            new Ltc\StoryBundle\LtcStoryBundle(),
            new Ltc\CompatBundle\LtcCompatBundle(),
            new Ltc\ConfigBundle\LtcConfigBundle(),
            new Ltc\ImportBundle\LtcImportBundle(),
            new Ltc\AdminBundle\LtcAdminBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }

    public function registerRootDir()
    {
        return __DIR__;
    }
}
