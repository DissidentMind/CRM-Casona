<?php
class UtilityFuncts{
    
    /**
     * Validate Url, if string or stringarray launch createFileFromUrlExec
     * @param {string} url Url to get file Format C:\\xxx\\
     * @param {string} path Destination Path to new files
     * @author {evanfa}
     * @return {boolean} Available to create file flag
     * @lastmodifiedDate {08.06.2018 9:0}
     */
    public function createFileFromUrl($url,$targetPath){
        //Determine the DataType (String or Array)
        if(gettype($url) == 'string'){
            self::createFileFromUrlExec($url,$targetPath);
        }elseif(gettype($url) == "array"){
            $arrlength = count($url);
        for($x = 0; $x < $arrlength; $x++) {
            self::createFileFromUrlExec($url[$x],$targetPath);
                }
        }else{
            echo("DataType-NotValid");
        }
    }
    /**
     * Create a file(s) from a specific URL or Specific String Array(URL), destination: current folder
     * @param {string} url Url to get file
     * @param {string} path Destination Path to new files
     * @author {evanfa}
     * @return {boolean} Available to create file flag
     * @lastmodifiedDate {08.06.2018 13:21}
     * 
     */
    private static function createFileFromUrlExec($url,$targetPath){
            $file = basename($url);
            $fnew = fopen($targetPath.$file,"a");
            $f1 = fopen($url, "r");
          
            if($f1){
              while (($line = fgets($f1)) !== false) {
                  fwrite($fnew,$line);
              }
                fclose($f1);
                fclose($fnew);
            }else{
              echo"Write Error";
            }
      }
    /**
     * From url download (copy) the refered picture
     * @param {string} $url        Picture Url
     * @param [[Type]] $targetPath Destination Path
     */
    public function generateImgFromUrl($url,$targetPath){
        $image = file_get_contents($url);
        file_put_contents($targetPath, $image); 
    }
    
}
?>