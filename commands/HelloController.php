<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use app\models\Articles;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";
    }
    public function actionArticles($count = 50){

        while($count--){
            $add = new Articles();
            $add->title = 'Title '.$count;
            $add->index = 'Index '.$count;
            $add->content = "Content ".$count;
            $add->type = rand(1,6);
            $add->status = 1;
            $add->create_at = date("Y-m-d  H:i:s");
            if($add->save())
                print "[+]No.{$count} created OK!!\n";
            else
                print "[-]No.{$count} fault!!\n";

        }
    }
}
