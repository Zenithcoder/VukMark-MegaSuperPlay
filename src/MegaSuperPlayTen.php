<?php

namespace awonusi;

class MegaSuperPlayTen extends AbstractProduct
{
    private const WIDTH = 180;
    private const HEIGHT = 80;
    private const DEPTH = 140;
    private const PRICE = 1249;
    private const TYPE = 'MEGA_SUPER_PLAY_TEN';

    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->width = MegaSuperPlayTen::WIDTH;
        $this->height = MegaSuperPlayTen::HEIGHT;
        $this->depth = MegaSuperPlayTen::DEPTH;
        $this->price = MegaSuperPlayTen::PRICE;
        $this->type = MegaSuperPlayTen::TYPE;
        $this->id = $id;
    }
   
}