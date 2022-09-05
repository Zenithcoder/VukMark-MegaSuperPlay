<?php

namespace awonusi;

class MegaSuperPlayTen extends AbstractProduct
{
    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->width = 180;
        $this->height = 80;
        $this->depth = 140;
        $this->price = 1249;
        $this->type = 'MEGA_SUPER_PLAY_TEN';
        $this->id = $id;
    }
   
}