<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\PlebBoiPage;
use Tests\DuskTestCase;

class PlebBoiTest extends DuskTestCase
{
    public function testLogoGoesToHomePage()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testLogoGoesToHomePage();
        });
    }

    public function testMainElementExists()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testDetailsMainExists();
        });
    }

    public function testMainElementUsesFlexbox()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testMainElementUsesFlexbox();
        });
    }

    public function testPCImageWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testPCImageWithinDetailsArea();
        });
    }

    public function testH1TitleWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testH1TitleWithinDetailsArea();
        });
    }

    public function testParagraphWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testParagraphWithinDetailsArea();
        });
    }

    public function testStatListWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testStatListWithinDetailsArea();
        });
    }

    public function testColorPickerWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testColorPickerWithinDetailsArea();
        });
    }

    public function testTitle()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testTitle();
        });
    }

    public function testColorsMatch()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testStyles();
        });
    }

    public function testRedVariant()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testImageVariant('red', asset('img/plebboi/red.png'));
        });
    }

    public function testGreenVariant()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testImageVariant('green', asset('img/plebboi/green.png'));
        });
    }

    public function testBlueVariant()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testImageVariant('blue', asset('img/plebboi/blue.png'));
        });
    }

    public function testNoVariantSelect()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new PlebBoiPage())
                ->testNoImageVariant();
        });
    }
}
