<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Loader\Configurator\Traits; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException; use MailPoetVendor\Symfony\Component\DependencyInjection\Loader\Configurator\ReferenceConfigurator; trait FactoryTrait { public final function factory($factory) : self { if (\is_string($factory) && 1 === \substr_count($factory, ':')) { $factoryParts = \explode(':', $factory); throw new InvalidArgumentException(\sprintf('Invalid factory "%s": the "service:method" notation is not available when using PHP-based DI configuration. Use "[ref(\'%s\'), \'%s\']" instead.', $factory, $factoryParts[0], $factoryParts[1])); } $this->definition->setFactory(static::processValue($factory, \true)); return $this; } } 