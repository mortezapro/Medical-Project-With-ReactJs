<?php

namespace App\Services\Code;

class Code{

    public function putToFileWithLine(string $filePath, string $content,int $line)
    {
        $file = file($filePath);
        $content = PHP_EOL.$content.PHP_EOL;
        array_splice($file,$line,0,$content);
        file_put_contents($filePath,$file);
    }

    public function putToFile(string $filePath,string $startingCondition,$terminationCondition, string $content)
    {
        $file = file($filePath);
        $putLine = $this->getPlaceLine($file,$startingCondition,$terminationCondition);

        $content = PHP_EOL.$content.PHP_EOL;
        array_splice($file,$putLine,0,$content);
        file_put_contents($filePath,$file);
    }

    public function putToMethod(string $filePath,string $startingCondition,string $terminationCondition, string $content)
    {
        $file = file($filePath);
        $methodLine = $this->getPlaceLine($file,"function ".$startingCondition,$terminationCondition);
        $content = PHP_EOL.$content;
        array_splice($file,$methodLine,0,$content);
        file_put_contents($filePath,$file);
    }

    public function getPlaceLine(array $file,string $startingCondition, string $terminationCondition):int
    {
        $isFindMethod = false;
        $line = 0;
        foreach ($file as $key => $item) {
            if(str_contains($item,$startingCondition)){
                $isFindMethod = true;
            }
            if($isFindMethod && str_contains($item,$terminationCondition)){
                $line = $key;
                break;
            }
        }
        return $line;
    }
}
