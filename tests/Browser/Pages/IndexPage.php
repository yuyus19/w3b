<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;
use PHPUnit\Framework\Assert as PHPUnit;

class IndexPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/';
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

    public function testTitle(Browser $browser)
    {
        $browser->assertTitleContains('MyPC');
    }

    public function testHasMainWithGrid(Browser $browser)
    {
        $browser->assertPresent('main');
        $mainDisplay = $browser->element('main')->getCSSValue('display');
        PHPUnit::assertEquals('grid', $mainDisplay, "Expected main to use the \"grid\" display style, but it uses \"$mainDisplay\".");
    }

    public function testMainHasTwoPCs(Browser $browser)
    {
        $browser->assertPresent('main .pc:nth-child(1)');
        $browser->assertPresent('main .pc:nth-child(2)');
    }

    public function testEachPCHasTheirRespectiveImage(Browser $browser)
    {
        $browser->assertPresent('main .pc:nth-child(1) img')
            ->assertPresent('main .pc:nth-child(2) img')
            ->assertAttribute('main .pc:nth-child(1) img', 'src', asset('img/pc1.png'))
            ->assertAttribute('main .pc:nth-child(2) img', 'src', asset('img/pc2.png'));
    }

    public function testEachPCHasAH2Title(Browser $browser)
    {
        $browser->assertPresent('main .pc:nth-child(1) h2')
            ->assertPresent('main .pc:nth-child(2) h2')
            ->assertSeeIn('main .pc:nth-child(1) h2', 'The GigaChad 2000')
            ->assertSeeIn('main .pc:nth-child(2) h2', 'The PlebBoi');
    }

    public function testEachPCHasAParagraph(Browser $browser)
    {
        $browser->assertPresent('main .pc:nth-child(1) p')
            ->assertPresent('main .pc:nth-child(2) p');
    }

    public function testEachPCHasAListOfSpecs(Browser $browser)
    {
        $browser->assertPresent('main .pc:nth-child(1) ul > li')
            ->assertPresent('main .pc:nth-child(2) ul > li');
    }

    public function testEachPCRedirectsToTheirRespectivePage(Browser $browser)
    {
        $browser->assertPresent('main .pc:nth-child(1) a.details-link')
            ->assertPresent('main .pc:nth-child(2) a.details-link')
            ->click('main .pc:nth-child(1) a.details-link')->assertPathIs('/gigachad')
            ->visit('/')
            ->click('main .pc:nth-child(2) a.details-link')->assertPathIs('/plebboi');
    }

    public function testStyles(Browser $browser)
    {
        $navBarColor = $browser->element('nav')->getCSSValue('background-color');
        $buttons = $browser->elements('a.details-link');
        foreach($buttons as $button) {
            PHPUnit::assertEquals($navBarColor, $button->getCSSValue('background-color'), 'Expected navbar and details link to have the same color');
        }
    }
}
