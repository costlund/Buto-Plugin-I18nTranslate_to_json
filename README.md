# Buto-Plugin-I18nTranslate_to_json

<p>Get i18n into your Javascript code.</p>

<a name="key_0"></a>

## Usage

<p>Create file /element/i18n.yml and add some params.</p>
<pre><code>see_more: See more
see_less: See less</code></pre>
<p>Create file /i18n/sv.yml.</p>
<pre><code>See more: Visa mer
See less: Visa mindre</code></pre>

<a name="key_0_0"></a>

### PHP

<p>Widget where to include your Javascript add this code.</p>
<pre><code>public function widget_include(){
  /**
  * i18n
  */
  wfPlugin::includeonce('i18n/translate_to_json');
  $i18n_translate_to_json = new PluginI18nTranslate_to_json();
  $json_i18n = $i18n_translate_to_json-&gt;get_json(__DIR__.'/element/i18n.yml', '/plugin/my/plugin/i18n');
  /**
  * element
  */
  $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
  $element-&gt;setByTag(array('script' =&gt; "PluginMyPlugin.init($json_i18n)"));
  wfDocument::renderElement($element);
}</code></pre>
<p>File /element/widget_include.yml.</p>
<pre><code>-
  type: widget
  data:
    plugin: 'wf/embed'
    method: embed
    data:
      type: script
      file: /plugin/element/see_more/js/PluginMyPlugin.js
-
  type: script
  innerHTML: rs:script</code></pre>

<a name="key_0_1"></a>

### Javascript

<pre><code>function PluginMyPlugin(){
  this.i18n = {};
  this.init = function(i18n){
    this.i18n = i18n;
    console.log(this.i18n.see_more);
  }
}
var PluginMyPlugin = new PluginMyPlugin();</code></pre>

<a name="key_1"></a>

## Methods



<a name="key_1_0"></a>

### get_json

<p>Params.</p>
<ul>
<li>filename (file with object params)</li>
<li>path (i18n path)</li>
</ul>

