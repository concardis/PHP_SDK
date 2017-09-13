<?php

namespace Concardis\Payengine\Lib\Models\Response;


class ListWrapper
{

    /**
     * @var array
     */
    private $elements;

    /**
     * @var integer
     */
    private $totalPages;

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
    }


}