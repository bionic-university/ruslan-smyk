<?php
/**
 * Created by PhpStorm.
 * User: bionic
 * Date: 6/17/14
 * Time: 9:59 AM
 */
namespace RuslanSmyk\RectalBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', array('class'=>'mainNav'));


        //$menu->setParent()

        //$menu->setAttribute('class', 'mainNav');

        $menu->addChild('Draftee', array('route' => 'draftee'));
        $menu->addChild('Unit', array('route' => 'unit'));
        $menu->addChild('Fund', array('route' => 'fund'));
        $menu->addChild('Reservist', array('route' => 'reservist'));
        // ... add more children
        //var_dump($menu);
        //var_dump($menu);

        return $menu;
    }
}