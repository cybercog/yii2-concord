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

namespace fangface\concord\models\eav;

use fangface\concord\db\ActiveRecord;

/**
 * Default Active Record class for the attributeDefinitions table
 *
 * @method AttributeDefinitions findOne($condition = null) static
 * @method AttributeDefinitions[] findAll($condition = null) static
 * @method AttributeDefinitions[] findByCondition($condition, $one) static
 */
class AttributeDefinitions extends ActiveRecord
{
    protected $disableAutoBehaviors = true;

}
