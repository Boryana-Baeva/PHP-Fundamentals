<?php

class Box
{
    private $length;
    private $width;
    private $height;
    private $surfaceArea;
    private $lateralSurface;
    private $volume;

    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    // GETTERS
    private function getLength()
    {
        return $this->length;
    }

    private function getWidth()
    {
        return $this->width;
    }

    private function getHeight()
    {
        return $this->height;
    }

    public function getSurfaceArea()
    {
        $this->setSurfaceArea();
        return $this->surfaceArea;
    }

    public function getLateralSurface()
    {
        $this->setLateralSurface();
        return $this->lateralSurface;
    }

    public function getVolume()
    {
        $this->setVolume();
        return $this->volume;
    }



    // SETTERS
    private function setLength(float $length)
    {
        $this->length = $length;
    }

    private function setWidth(float $width)
    {
        $this->width = $width;
    }

    private function setHeight(float $height)
    {
        $this->height = $height;
    }

    private function setSurfaceArea()
    {
        $this->surfaceArea = 2 * ($this->getLength() * $this->getWidth()
                + $this->getLength() * $this->getHeight()
                + $this->getWidth() * $this->getHeight());
    }

    private function setLateralSurface()
    {
        $this->lateralSurface = 2 * $this->getHeight() * ($this->getLength() + $this->getWidth());
    }

    private function setVolume()
    {
        $this->volume = $this->getLength() * $this->getWidth() * $this->getHeight();
    }

    // MAGIC METHODS

    public function __toString()
    {
        return 'Surface Area - ' . number_format($this->getSurfaceArea(), 2,'.', '') . PHP_EOL
        . 'Lateral Surface Area - ' . number_format($this->getLateralSurface(), 2,'.', '') . PHP_EOL
        . 'Volume - ' . number_format($this->getVolume(), 2,'.', '');
    }
}

$length = floatval(trim(fgets(STDIN)));
$width = floatval(trim(fgets(STDIN)));
$height = floatval(trim(fgets(STDIN)));

$box = new Box($length, $width, $height);
echo $box;