<?php
class PluginI18nTranslate_to_json{
  public function get_json($filename, $path){
    /**
     * 
     */
    wfPlugin::includeonce('wf/yml');
    /**
     * 
     */
    $data = new PluginWfYml($filename);
    /**
     * 
     */
    wfPlugin::includeonce('i18n/translate_v1');
    $i18n = new PluginI18nTranslate_v1();
    /**
     * path
     */
    $i18n->path = $path;
    /**
     * data
     */
    $return = array();
    foreach($data->get() as $k => $v){
      $return[$k] = $i18n->translateFromTheme($v);
    }
    /**
     * 
     */
    return json_encode($return);
  }
}