<?php
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Numericality;


class sampleForm extends Form
{
	public function initization(){
	$form = new Form();

$form->add(
    new Text(
        "name"
    )
);

$form->add(
    new Text(
        "telephone"
    )
);

        $this->add(
            new Select(
                "telephoneType",
                Telephonetypes::find(),
                array(
                    "using" => array(
                         "id",
                    
                    )
                )
            )
        );

	}
}
