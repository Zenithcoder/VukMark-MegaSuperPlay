<?php

namespace awonusi;

class MegaSuperPlayI extends AbstractProduct
{

    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->width = 354;
        $this->height = 120;
        $this->depth = 280;
        $this->price = 639;
        $this->type = 'MEGA_SUPER_PLAY_I';
        $this->id = $id;
    }
   
}