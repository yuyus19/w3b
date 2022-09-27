<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\GigaChadPage;
use Tests\DuskTestCase;

class GigaChadTest extends DuskTestCase
{
    public function testLogoGoesToHomePage()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testLogoGoesToHomePage();
        });
    }

    public function testMainElementExists()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testDetailsMainExists();
        });
    }

    public function testMainElementUsesFlexbox()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testMainElementUsesFlexbox();
        });
    }

    public function testPCImageWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testPCImageWithinDetailsArea();
        });
    }

    public function testH1TitleWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testH1TitleWithinDetailsArea();
        });
    }

    public function testParagraphWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testParagraphWithinDetailsArea();
        });
    }

    public function testStatListWithinDetailsArea()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testStatListWithinDetailsArea();
        });
    }

    public function testTitle()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testTitle();
        });
    }

    public function testAddToCart()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
               ->testAddToCart();
        });
    }

    public function testColorsMatch()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new GigaChadPage())
                ->testStyles();
        });
    }

}
