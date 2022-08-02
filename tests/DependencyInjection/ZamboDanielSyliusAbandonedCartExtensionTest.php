<?php

declare(strict_types=1);

namespace Tests\ZamboDaniel\SyliusAbandonedCartPlugin\DependencyInjection;

use ZamboDaniel\SyliusAbandonedCartPlugin\DependencyInjection\ZamboDanielSyliusAbandonedCartExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

/**
 * See examples of tests and configuration options here: https://github.com/SymfonyTest/SymfonyDependencyInjectionTest
 */
final class ZamboDanielSyliusAbandonedCartExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions(): array
    {
        return [
            new ZamboDanielSyliusAbandonedCartExtension(),
        ];
    }

    protected function getMinimalConfiguration(): array
    {
        return [
            'option' => 'option_value',
        ];
    }

    /**
     * @test
     */
    public function after_loading_the_correct_parameter_has_been_set(): void
    {
        $this->load();

        $this->assertContainerBuilderHasParameter('zambo_daniel_sylius_abandoned_cart.option', 'option_value');
    }
}
