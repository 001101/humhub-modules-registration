<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.org/licences GNU AGPL v3
 */

namespace humhub\modules\registration;

use yii\base\Object;
use yii\helpers\Url;

class Events extends Object
{
    /** 
     * Add the Q&A menu item to 
     * the top menu 
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        /**
         * User registration of new input
         */
        $event->sender->addItem(array(
            'label' => \Yii::t('AdminModule.widgets_AdminMenuWidget', 'Registration'),
            'url' => Url::toRoute('/registration/registration/index'),
            'icon' => '<i class="fa fa-user-plus"></i>',
            'sortOrder' => 10000,
            'group' => 'manage',
            'newItemCount' => 0,
            'isActive' => (\Yii::$app->controller->module && \Yii::$app->controller->module->id == 'registration' && \Yii::$app->controller->id == 'registration'),
            'isVisible' => \Yii::$app->user->isAdmin(),
        ));
    }

}