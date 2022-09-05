<?php

namespace awonusi;

class MegaSuperPlayZone extends AbstractProduct
{

    public function __construct(int $id)
    {
        parent::__construct($id);
        $this->width = 200;
        $this->height = 92;
        $this->depth = 200;
        $this->price = 599;
        $this->type = 'MEGA_SUPER_PLAY_ZONE';
        $this->id = $id;
    }
   
}