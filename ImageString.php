<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

class ImageString
{
    protected $format = '*';
    protected $string = 'A';

    private function createShape(string $string)
    {
        $characters = str_split($string);
        $shape = [];

        foreach ($characters as $character) {
            $characterShape = $this->$character();
            // dump($characterShape);

            if (count($shape) == 0) {
                $shape = $characterShape;
            } else {
                // character
                foreach ($characterShape as $i => $rowShape) {
                    $shape[$i] = array_merge($shape[$i], $rowShape);
                }
            }

            // space
            $spaceShape = $this->space();
            foreach ($spaceShape as $i => $rowShape) {
                $shape[$i] = array_merge($shape[$i], $rowShape);
            }
        }

        // dump($shape);
        return $shape;
    }

    private function getFormatSpace()
    {
        $formatSpaceLength = strlen($this->format);
        $formatSpace = str_repeat('&nbsp;', $formatSpaceLength);

        return $formatSpace;
    }

    private function space()
    {
        return [
            [0],
            [0],
            [0],
            [0],
            [0],
        ];
    }

    private function a()
    {
        return [
            [0, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 1, 1, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
        ];
    }

    private function b()
    {
        return [
            [1, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 1, 1, 0],
        ];
    }

    private function c()
    {
        return [
            [0, 1, 1, 1],
            [1, 0, 0, 0],
            [1, 0, 0, 0],
            [1, 0, 0, 0],
            [0, 1, 1, 1],
        ];
    }

    private function d()
    {
        return [
            [1, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 1, 1, 0],
        ];
    }

    private function e()
    {
        return [
            [1, 1, 1, 1],
            [1, 0, 0, 0],
            [1, 1, 1, 0],
            [1, 0, 0, 0],
            [1, 1, 1, 1],
        ];
    }

    private function f()
    {
        return [
            [1, 1, 1, 1],
            [1, 0, 0, 0],
            [1, 1, 1, 0],
            [1, 0, 0, 0],
            [1, 0, 0, 0],
        ];
    }

    private function g()
    {
        return [
            [0, 1, 1, 1],
            [1, 0, 0, 0],
            [1, 0, 1, 1],
            [1, 0, 0, 1],
            [0, 1, 1, 1],
        ];
    }

    private function h()
    {
        return [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 1, 1, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
        ];
    }

    private function i()
    {
        return [
            [1],
            [1],
            [1],
            [1],
            [1],
        ];
    }

    private function j()
    {
        return [
            [0, 0, 0, 1],
            [0, 0, 0, 1],
            [0, 0, 0, 1],
            [1, 0, 0, 1],
            [0, 1, 1, 0],
        ];
    }

    private function k()
    {
        return [
            [1, 0, 0, 1],
            [1, 0, 1, 0],
            [1, 1, 0, 0],
            [1, 0, 1, 0],
            [1, 0, 0, 1],
        ];
    }

    private function l()
    {
        return [
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [1, 1, 1],
        ];
    }

    private function m()
    {
        return [
            [1, 0, 0, 1],
            [1, 1, 1, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
        ];
    }

    private function n()
    {
        return [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 1, 0, 1],
            [1, 0, 1, 1],
            [1, 0, 0, 1],
        ];
    }

    private function o()
    {
        return [
            [0, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [0, 1, 1, 0],
        ];
    }

    private function p()
    {
        return [
            [1, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 1, 1, 0],
            [1, 0, 0, 0],
            [1, 0, 0, 0],
        ];
    }

    private function q()
    {
        return [
            [0, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 1, 1],
            [0, 1, 1, 1],
        ];
    }

    private function r()
    {
        return [
            [1, 1, 1, 0],
            [1, 0, 0, 1],
            [1, 1, 1, 0],
            [1, 0, 1, 0],
            [1, 0, 0, 1],
        ];
    }

    private function s()
    {
        return [
            [0, 1, 1, 1],
            [1, 0, 0, 0],
            [0, 1, 1, 0],
            [0, 0, 0, 1],
            [1, 1, 1, 0],
        ];
    }

    private function t()
    {
        return [
            [1, 1, 1],
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
        ];
    }

    private function u()
    {
        return [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 1, 1, 1],
        ];
    }

    private function v()
    {
        return [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [0, 1, 1, 0],
        ];
    }

    private function w()
    {
        return [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 1, 1, 1],
            [0, 1, 1, 0],
        ];
    }

    private function x()
    {
        return [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [0, 1, 1, 0],
            [0, 1, 1, 0],
            [1, 0, 0, 1],
        ];
    }

    private function y()
    {
        return [
            [1, 0, 1],
            [1, 0, 1],
            [1, 1, 1],
            [0, 1, 0],
            [0, 1, 0],
        ];
    }

    private function z()
    {
        return [
            [1, 1, 1, 1],
            [0, 0, 0, 1],
            [0, 0, 1, 0],
            [0, 1, 0, 0],
            [1, 1, 1, 1],
        ];
    }

    public function createImage()
    {
        $image = '';
        $shape = $this->createShape($this->string);

        $image = '<div style="font-family: monospace">';

        for ($y = 0; $y < count($shape); $y++) {
            $shapeColumn = $shape[$y];

            for ($x = 0; $x < count($shapeColumn); $x++) {
                $columnFilled = $shapeColumn[$x];

                if ($columnFilled == 0) {
                    $image .= $this->getFormatSpace();
                } else if ($columnFilled == 1) {
                    $image .= $this->format;
                }
            }

            $image .= '<br />';
        }

        $image .= '</div>';

        return $image;
    }

    public function setFormat(string $format)
    {
        $this->format = $format;
    }

    public function setString(string $string)
    {
        $this->string = $string;
    }
}

$imageString = new ImageString;
$imageString->setFormat('12');
$imageString->setString('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
$image = $imageString->createImage();

echo $image;
