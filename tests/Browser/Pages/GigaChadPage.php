<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;
use PHPUnit\Framework\Assert as PHPUnit;

class GigaChadPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/gigachad';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param Browser $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }

    public function testLogoGoesToHomePage(Browser $browser)
    {
        $browser->assertPresent('nav a#logo')->click('nav #logo')->assertPathIs('/');
    }

    public function testDetailsMainExists(Browser $browser)
    {
        $browser->assertPresent('main.details-area');
    }

    public function testMainElementUsesFlexbox(Browser $browser)
    {
        $display = $browser->element('main.details-area')->getCSSValue('display');
        PHPUnit::assertEquals('flex', $display, "Expected main.details-area to use the \"flex\" display style, but it uses \"$display\".");
    }

    public function testPCImageWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area img#pc-image')
            ->assertAttribute('main.details-area img#pc-image', 'src', asset('img/pc1.png'));
    }

    public function testH1TitleWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area h1')
            ->assertSeeIn('main.details-area h1', 'The GigaChad 2000');
    }

    public function testParagraphWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area p');
    }

    public function testStatListWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area ul > li');
    }

    public function testTitle(Browser $browser)
    {
        $browser->assertTitleContains('The GigaChad 2000')
            ->assertTitleContains('MyPC');
    }

    public function testAddToCart(Browser $browser)
    {
        $browser
            ->assertSeeIn('#cart-count', "0")
            ->click('button#add-to-cart')
            ->assertSeeIn('#cart-count', "1");
    }

    public function testStyles(Browser $browser)
    {
        $navBarColor = $browser->element('nav')->getCSSValue('background-color');
        PHPUnit::assertEquals($navBarColor, $browser->element('#add-to-cart')->getCSSValue('background-color'), 'Expected navbar and add to cart button to have the same color');
        PHPUnit::assertEquals($navBarColor, $browser->element('.details-area h1')->getCSSValue('color'), 'Expected navbar and pc h1 to have the same color');
    }
}
