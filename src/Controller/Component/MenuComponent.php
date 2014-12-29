<?php

namespace Gourmet\KnpMenu\Controller\Component;

use Cake\Controller\Component;
use Cake\Event\Event;
use Gourmet\KnpMenu\MenuTrait;

class MenuComponent extends Component
{

    use MenuTrait;

    public function beforeRender(Event $event)
    {
        $event->subject()->set('_knp_menus_', $this->_menus);
    }
}
