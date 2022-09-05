<?php

namespace awonusi;

class MegaSuperPlayI extends AbstractProduct
{
    private const WIDTH = 354;
    private const HEIGHT = 120;
    private const DEPTH = 280;
    private const PRICE = 639;
    private const TYPE = 'MEGA_SUPER_PLAY_I';

    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->width = MegaSuperPlayI::WIDTH;
        $this->height = MegaSuperPlayI::HEIGHT;
        $this->depth = MegaSuperPlayI::DEPTH;
        $this->price = MegaSuperPlayI::PRICE;
        $this->type = MegaSuperPlayI::TYPE;
        $this->id = $id;
    }
   
}