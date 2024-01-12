<?php

namespace Drupal\Tests\demo_module\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Class DemoFunctionalTest.
 *
 * @group functional
 */
class DemoFunctionalTest extends BrowserTestBase
{
  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'claro';

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['demo_module'];

  /**
   * Test it displays homepage.
   *
   * @test
   */
  public function testItDisplaysHomepage() {
    $this->drupalGet('<front>');

    $this->assertSession()->pageTextContainsOnce('Hello world');
  }

}
