<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$info = Telephonetypes::Find();
		$this->view->setVar('info', $info);
    }

}

