<?php
class CstmEvanFun{
  public function cstmTest(){
    $cars = array("http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/jquery.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/jquery.ui.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/timepicker.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/jquery.ui.datepicker-es.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/checkboxes/iphone.check.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/datatables/dataTables.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/datatables/ColVis.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/datatables/dataTablesReload.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/scrolltop/scrolltopcontrol.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/fancybox/jquery.fancybox.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/jscrollpane/mousewheel.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/jscrollpane/mwheelIntent.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/jscrollpane/jscrollpane.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/spinner/ui.spinner.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/tipsy/jquery.tipsy.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/editor/jquery.cleditor.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/chosen/chosen.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/confirm/jquery.confirm.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/validationEngine/jquery.validationEngine.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/validationEngine/jquery.validationEngine-es.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/vticker/jquery.vticker-min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/sourcerer/sourcerer.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/flot/flot.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/flot/flot.pie.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/flot/flot.resize.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/flot/graphtable.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/uploadifive/jquery.uploadifive.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/checkboxes/customInput.jquery.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/effect/jquery-jrumble.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/filestyle/jquery.filestyle.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/placeholder/jquery.placeholder.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/smartWizard/jquery.smartWizard.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/maskedinput/jquery.maskedinput.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/highlightText/highlightText.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/elastic/jquery.elastic.source.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/jquery.cookie.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/gmap3.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/zice.custom.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/notificaciones.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/controllers.js");
    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) {
    //echo"<a href=".$cars[$x].">Link".$x."</a>";
    //echo "<br>";
      self::createFileFromUrl($cars[$x]);
      //self::getFileNameFromUrl($cars[$x]);
    }
  }

  private static function createFileFromUrl($url){
    $file = basename($url);
    $fnew = fopen($file,"a");
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

  private static function getFileNameFromUrl($url){
        //$file = file_get_contents($url); // to get file
        $name = basename($url); // to get file name
        //$ext = pathinfo($url, PATHINFO_EXTENSION); // to get extension
        //$name2 =pathinfo($url, PATHINFO_FILENAME);
        //echo("File Name: ".$name.".".$ext);
        echo("File Name: ".$name);
      //  echo("</br>");
  }
}
?>
