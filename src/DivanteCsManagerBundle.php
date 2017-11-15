<?php
/**
 * @category    pimcore5-csmanager
 * @date        15/11/2017 12:01
 * @author      Mariusz Gomse <mgomse@divante.pl>
 * @copyright   Copyright (c) 2017 Divante Ltd. (https://divante.co)
 */
namespace Divante\CsManagerBundle;
use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

/**
 * Class DivanteCsManagerBundle
 *
 * @package Divante\CsManagerBundle
 */
class DivanteCsManagerBundle extends AbstractPimcoreBundle
{
    /**
     * {@inheritdoc}
     */
    public function getNiceName()
    {
        return  "Classification Store Manager";
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return "Shelve objects and perform actions only on these separated objects";
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return  "0.1.0";
    }
}
