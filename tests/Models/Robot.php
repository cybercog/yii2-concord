<?php
/**
 * This file is part of the fangface/yii2-concord package
 *
 * For the full copyright and license information, please view
 * the file LICENSE.md that was distributed with this source code.
 *
 * @package fangface/yii2-concord
 * @author Fangface <dev@fangface.net>
 * @copyright Copyright (c) 2014 Fangface <dev@fangface.net>
 * @license https://github.com/fangface/yii2-concord/blob/master/LICENSE.md MIT License
 *
 */

namespace fangface\concord\tests\models;

use fangface\concord\db\ActiveRecord;

/**
 * Active Record class for the clients remote dbRemote.{prefix}robot table
 *
 * @property integer $id primary key
 * @property string $name
 * @property string $type
 * @property integer $year
 * @property string $extraField Extra field only present in dbTestRemote2
 */
class Robot extends ActiveRecord
{

    protected static $dbResourceName    = 'dbRemote';
    protected static $isClientResource  = true;

    protected $disableCreatedUpd  = true;
    protected $disableModifiedUpd = true;

}
