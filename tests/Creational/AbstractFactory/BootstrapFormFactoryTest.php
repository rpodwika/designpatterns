<?php
namespace Rpodwika\Designpatterns\Tests\Creational\AbstractFactory;

use Rpodwika\Designpatterns\Creational\AbstractFactory\BootstrapFormFactory;
use Rpodwika\Designpatterns\Creational\AbstractFactory\FormFactoryInterface;
use Rpodwika\Designpatterns\Creational\AbstractFactory\ButtonInterface;
use Rpodwika\Designpatterns\Creational\AbstractFactory\TextInputInterface;

/**
 * Class BoostrapFormFactoryTest
 * @package Rpodwika\Designpatterns\Tests\Creational\AbstractFactory
 * @covers Rpodwika\Designpatterns\Creational\AbstractFactory\BootstrapFormFactory
 * @covers Rpodwika\Designpatterns\Creational\AbstractFactory\BootstrapButton
 * @covers Rpodwika\Designpatterns\Creational\AbstractFactory\BootstrapTextInput
 *
 */
class BootstrapFormFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param FormFactoryInterface $formFactory
     */
    public function creationMethod(FormFactoryInterface $formFactory)
    {
        $button = $formFactory->createButton('test' , 'sample');
        $textInput = $formFactory->createTextInput('textinput_name', 'sample text');

        $this->assertInstanceOf(ButtonInterface::class, $button);
        $this->assertInstanceOf(TextInputInterface::class, $textInput);
        $this->assertRegExp('#name="test"#', $button->render());
        $this->assertRegExp('#<button .*>sample<\/button>#', $button->render());
        $this->assertRegExp('#<input.* value="sample text" \/>#', $textInput->render());
        $this->assertRegExp('#<input.* name="textinput_name".* \/>#', $textInput->render());

        $button->setName('y')->setText('x');
        $textInput->setName('y')->setValue('x');

        $this->assertRegExp('#name="y"#', $button->render());
        $this->assertRegExp('#<button .*>x<\/button>#', $button->render());
        $this->assertRegExp('#<input.* value="x".*\/>#', $textInput->render());
        $this->assertRegExp('#<input.* name="y".*\/>#', $textInput->render());
    }


    public function testBootstrapFactory()
    {
        $boostrapFactory = new BootstrapFormFactory();

        $this->creationMethod($boostrapFactory);
    }
}