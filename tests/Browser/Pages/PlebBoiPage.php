<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;
use PHPUnit\Framework\Assert as PHPUnit;

class PlebBoiPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/plebboi';
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
            ->assertAttribute('main.details-area img#pc-image', 'src', asset('img/pc2.png'));
    }

    public function testH1TitleWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area h1')
            ->assertSeeIn('main.details-area h1', 'The PlebBoi');
    }

    public function testParagraphWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area p');
    }

    public function testStatListWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area ul > li');
    }

    public function testColorPickerWithinDetailsArea(Browser $browser)
    {
        $browser->assertPresent('main.details-area #color-picker')
            ->assertPresent('main.details-area #color-picker label')
            ->assertPresent('main.details-area #color-picker select#color')
            ->assertAttribute('main.details-area #color-picker label', 'for', 'color');
    }

    public function testTitle(Browser $browser)
    {
        $browser->assertTitleContains('The PlebBoi')
            ->assertTitleContains('MyPC');
    }

    public function testImageVariant(Browser $browser, string $color, string $image)
    {
        $browser->assertPresent('select#color')
            ->select('select#color', $color)
            ->click('button#add-to-cart')
            ->assertAttribute('#pc-image', 'src', $image)
            ->assertSeeIn('#cart-count', "1");
    }

    public function testNoImageVariant(Browser $browser)
    {
        $browser->click('button#add-to-cart')
            ->waitForDialog()
            ->acceptDialog()
            ->assertSeeIn('#cart-count', "0");
    }

    public function testStyles(Browser $browser)
    {
        $navBarColor = $browser->element('nav')->getCSSValue('background-color');
        PHPUnit::assertEquals($navBarColor, $browser->element('#add-to-cart')->getCSSValue('background-color'), 'Expected navbar and add to cart button to have the same color');
        PHPUnit::assertEquals($navBarColor, $browser->element('.details-area h1')->getCSSValue('color'), 'Expected navbar and pc h1 to have the same color');
    }
}
