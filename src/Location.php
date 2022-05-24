<?php


namespace Pjehan\Acfoop;


class Location
{

    private string $param;
    private string $operator;
    private string $value;

    public function __construct(string $param, string $value, string $operator = '==')
    {
        $this->setParam($param);
        $this->setValue($value);
        $this->setOperator($operator);
    }

    /**
     * @return string
     */
    public function getParam(): string
    {
        return $this->param;
    }

    /**
     * @param string $param
     * @return Location
     */
    public function setParam(string $param): Location
    {
        $this->param = $param;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     * @return Location
     */
    public function setOperator(string $operator): Location
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Location
     */
    public function setValue(string $value): Location
    {
        $this->value = $value;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'param'     => $this->getParam(),
            'operator'  => $this->getOperator(),
            'value'     => $this->getValue()
        ];
    }

}
