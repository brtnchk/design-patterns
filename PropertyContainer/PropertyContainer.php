<?php

class PropertyContainer implements PropertyContainerInterface
{
    private $propertyContainer = [];

    /**
     * @param $propertyName
     * @param $value
     */
    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @param $propertyName
     */
    public function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @param $propertyName
     * @return mixed|null
     */
    public function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @param $propertyName
     * @param $value
     * @throws Exception
     */
    public function setProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}
