<?php

use awonusi\MegaSuperPlayI;
use awonusi\MegaSuperPlayTen;
use awonusi\MegaSuperPlayZone;
use awonusi\Shelf;
use PHPUnit\Framework\TestCase;

class ShelfTest extends TestCase
{
    protected $MegaSuperPlayI;
    protected $MegaSuperPlayTen;
    protected $MegaSuperPlayZone;
    protected $Shelf;


    protected function setUp(): void
    {
        $this->MegaSuperPlayI = new MegaSuperPlayI(1);
        $this->MegaSuperPlayTen = new MegaSuperPlayTen(2);
        $this->MegaSuperPlayZone = new MegaSuperPlayZone(3);
        $this->Shelf = new Shelf();
    }

    public function testMegaSuperPlayI()
    {
        $this->assertSame(1, $this->MegaSuperPlayI->getId());
        $this->assertSame('MEGA_SUPER_PLAY_I', $this->MegaSuperPlayI->getType());
    }


    public function testMegaSuperPlayTen()
    {
        $this->assertSame(2, $this->MegaSuperPlayTen->getId());
        $this->assertSame('MEGA_SUPER_PLAY_TEN', $this->MegaSuperPlayTen->getType());
    }

    public function testMegaSuperPlayZone()
    {
        $this->assertSame(3, $this->MegaSuperPlayZone->getId());
        $this->assertSame('MEGA_SUPER_PLAY_ZONE', $this->MegaSuperPlayZone->getType());
    }

    public function testAddToShelf()
    {
        $this->Shelf->addProduct($this->MegaSuperPlayI);
        $this->Shelf->addProduct($this->MegaSuperPlayTen);
        $this->Shelf->addProduct($this->MegaSuperPlayZone);

        $this->assertEquals(1848, $this->Shelf->total());
    }

    public function testRemoveFromShelf()
    {
        $this->Shelf->addProduct($this->MegaSuperPlayI);
        $this->Shelf->addProduct($this->MegaSuperPlayTen);
        $this->Shelf->addProduct($this->MegaSuperPlayZone);

        $this->Shelf->removeProduct($this->MegaSuperPlayTen);

        $this->assertEquals(599, $this->Shelf->total());
    }

    public function testTotalByType()
    {
        $this->Shelf->addProduct($this->MegaSuperPlayI);
        $this->Shelf->addProduct($this->MegaSuperPlayTen);
        $this->Shelf->addProduct($this->MegaSuperPlayZone);

        $this->assertEquals(599, $this->Shelf->totalByType('MEGA_SUPER_PLAY_ZONE'));
    }

    public function testProductNotAllowedToBeAddedToShelf()
    {
        $this->Shelf->addProduct($this->MegaSuperPlayI);
        $this->assertNull($this->Shelf->products);
    }

}