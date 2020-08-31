<?php 
class Html
{
    private static $tag;
    
    public static function openTagHtml()
    {
        return self::$tag="<html>";
    }

    public static function closeTagHtml()
    {
        return '</html>';
    }   
}

print Html::openTagHtml();
print"\n";
print Html::closeTagHtml();
print"\n";
