<?php

/**
 * @author     Jirka Svoboda <code@svobik.com>
 * @copyright  2017 © svobik.com
 * @license    https://www.svobik.com/license.md
 * @timestamp  14/06/2017 11:00
 */

namespace dlds\mlm\kernel;

use dlds\mlm\kernel\interfaces\MlmRewardInterface;
use dlds\mlm\kernel\patterns\composites\interfaces\MlmCompositeItemInterface;

/**
 * Class MlmPocketItem
 * @package dlds\mlm\kernel
 */
class MlmPocketItem implements MlmCompositeItemInterface
{
    /**
     * @var MlmRewardInterface
     */
    private $_rwd;

    /**
     * MlmPocketItem constructor.
     * @param MlmRewardInterface $rwd
     */
    public function __construct(MlmRewardInterface $rwd)
    {
        $this->_rwd = $rwd;
    }

    // <editor-fold defaultstate="collapsed" desc="MlmCompositeItemInterface methods">

    /**
     * @inheritdoc
     */
    public function value()
    {
        return $this->_rwd;
    }

    /**
     * @inheritdoc
     */
    public function attributes($refresh = false)
    {
        return $this->value()->__mlmAttributes($refresh);
    }
    // </editor-fold>


}