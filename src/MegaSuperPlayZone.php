<?php

namespace awonusi;

class MegaSuperPlayZone extends AbstractProduct
{
    private const WIDTH = 200;
    private const HEIGHT = 92;
    private const DEPTH = 200;
    private const PRICE = 599;
    private const TYPE = 'MEGA_SUPER_PLAY_ZONE';

    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->width = MegaSuperPlayZone::WIDTH;
        $this->height = MegaSuperPlayZone::HEIGHT;
        $this->depth = MegaSuperPlayZone::DEPTH;
        $this->price = MegaSuperPlayZone::PRICE;
        $this->type = MegaSuperPlayZone::TYPE;
        $this->id = $id;
    }
   
}