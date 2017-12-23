<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;

abstract class AbstractFeatureContext implements Context
{

    protected function itemsTable(TableNode $table)
    {
        $itemsTable = [];

        foreach($table as $item){
            $itemsTable[] = $item;
        }

        return $itemsTable;
    }

    protected function singleItemsTable(TableNode $table, $key = 0)
    {
        return $this->itemsTable($table)[$key];
    }

}
