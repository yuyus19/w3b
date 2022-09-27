<?php

namespace Tests\Browser;

use Illuminate\Validation\Rules\In;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\IndexPage;
use Tests\DuskTestCase;

class IndexTest extends DuskTestCase
{
    public function testLogoGoesToHomePage()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testLogoGoesToHomePage();
        });
    }

    public function testHasMainWithGrid()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testHasMainWithGrid();
        });
    }

    public function testMainHasTwoPCs()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testMainHasTwoPCs();
        });
    }

    public function testEachPCHasTheirRespectiveImage()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testEachPCHasTheirRespectiveImage();
        });
    }

    public function testEachPCHasAH2Title()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testEachPCHasAH2Title();
        });
    }

    public function testEachPCHasAParagraph()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testEachPCHasAParagraph();
        });
    }

    public function testEachPCHasAListOfSpecs()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testEachPCHasAListOfSpecs();
        });
    }

    public function testColorsMatch()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testStyles();
        });
    }

    public function testTitle()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testTitle();
        });
    }

    public function testEachPCRedirectsToTheirRespectivePage()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit(new IndexPage())
                ->testEachPCRedirectsToTheirRespectivePage();
        });
    }
}
