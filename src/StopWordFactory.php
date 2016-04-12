<?php 
/**
* @author yooper(dcardin2007@gmail.com)
* Loads a text file into memory
* @usage  $stopWords = StopWordFactory::get('stop-words-fox.txt');
*/
 
class StopWordFactory
{
    /** 
    *
    * @returns array The array is empty if the stop words file does not exist
    */
    static public function get($fileName)
    {
	    $path = realpath(dirname(__DIR__).'/data/'.basename($fileName));
        if(file_exists($path)) { 
            return array_map('trim', file($path));
        }
        return [];
    }
}
