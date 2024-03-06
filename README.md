# Buto-Plugin-I18nTranslate_to_json

<p>Translate to json object.
Use object in Javascript script.</p>

<a name="key_0"></a>

## Settings



<a name="key_1"></a>

## Usage

<p>Add to code.</p>
<pre><code>wfPlugin::includeonce('i18n/translate_to_json');
$i18n_translate_to_json = new PluginI18nTranslate_to_json();</code></pre>
<p>Call method get_json with param filename and path to i18n folder.</p>
<pre><code>$json_i18n = $i18n_translate_to_json-&gt;get_json(__DIR__.'/element/i18n.yml', '/plugin/theme/heartbeat/i18n');</code></pre>
<p>Param $json_i18n could return this data for sv translation.</p>
<pre><code>{"version_lable":"Version \u00e4ndring","version_text":"Denna applikation har blivit uppdaterad. Ni har d\u00e4rf\u00f6r blivit utloggad och beh\u00f6ver starta om applikationen.","Restart":"Starta om","client_lable":"Sessions-\u00e4ndring","client_text":"Det verkar som att ni har tappat eran session. Ni beh\u00f6ver starta om applikationen och logga in igen."}</code></pre>
<p>Check out plugin theme/heartbeat as an example of using this!</p>

<a name="key_1_0"></a>

### filename

<p>Example of data used for filename.</p>
<pre><code>version_lable: Version change
version_text: This application have been updated. Therefore you have been signed out and should restart application.
Restart: Restart
client_lable: Session change
client_text: You seems to have lost your session. Therefore you should restart and sign in again.</code></pre>

<a name="key_2"></a>

## Pages



<a name="key_3"></a>

## Widgets



<a name="key_4"></a>

## Event



<a name="key_5"></a>

## Construct



<a name="key_6"></a>

## Methods



<a name="key_6_0"></a>

### get_json



