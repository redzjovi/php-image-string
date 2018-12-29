ImageString

## How to use
```
$imageString = new ImageString;
$imageString->setFormat('12');
$imageString->setString('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
$image = $imageString->createImage();

echo $image;
```
