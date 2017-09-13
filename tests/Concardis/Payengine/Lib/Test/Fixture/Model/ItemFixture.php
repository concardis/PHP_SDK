<?php

namespace Concardis\Payengine\Lib\Test\Fixture\Model;


use Concardis\Payengine\Lib\Models\Response\Orders\Item;

class ItemFixture
{

    /**
     * @return Item
     */
    public static function getFixture(){
        $item = new Item();
        $item->setArticleNumber("article_123");
        $item->setName("TestArticle");
        $item->setQuantity(3);
        $item->setTax(19);
        $item->setUnitPrice(100);
        $item->setUnitPriceWithTax(119);
        $item->setTotalPrice(300);
        $item->setTotalPriceWithTax(357);
        return $item;
    }


}