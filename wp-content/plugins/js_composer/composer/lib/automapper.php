<?php
/**
* WPBakery Visual Composer Plugin
*
* @package VPBakeryVisualComposer
*
*/
if(!class_exists('VcAutoMapModel')) {
class VcAMShortcode {
    protected static $option_name = 'vc_automapped_shortcodes';
    protected static $option_data;
    public $id = false;
    protected $data;
    protected $vars = array('tag', 'name', 'category', 'description', 'params');
    function __construct($d) {
        $this->loadOptionData();
        $this->id = is_array($d) && isset($d['id']) ? $d['id'] : $d;
        if( is_array($d) ) $this->data = stripslashes_deep($d);
        foreach($this->vars as $var) {
            $this->$var = $this->get($var);
        }
    }
    static function findAll() {
        self::loadOptionData();
        $records = array();
        foreach(self::$option_data as $id => $record) {
            $record['id'] = $id;
            $model = new VcAMShortcode($record);
            if($model) $records[] = $model;
        }
        return $records;
    }
    final protected static function loadOptionData() {
        if(is_null(self::$option_data)) self::$option_data = get_option(self::$option_name);
        if(!self::$option_data) self::$option_data = array();
        return self::$option_data;
    }
    function get($key) {
        if(is_null($this->data)) $this->data = isset(self::$option_data[$this->id]) ? self::$option_data[$this->id] : array();
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
    function set($attr, $value = null) {
        if(is_array($attr)) {
            foreach($attr as $key => $value) {$this->set($key, $value);}
        } elseif(!is_null($value)) {
            $this->$attr = $value;
        }
    }
    function save() {
        if(!$this->isValid()) return false;
        foreach($this->vars as $var) {
            $this->data[$var] = $this->$var;
        }
        return $this->saveOption();
    }
    function delete() {
        return $this->deleteOption();
    }
    public function isValid() {
        if(!is_string($this->name) || empty($this->name)) {
            return false;
        }
        if(!preg_match('/^\S+$/', $this->tag)) return false;
        return true;
    }
    protected function saveOption() {
        self::$option_data[$this->id] = $this->data;
        return update_option(self::$option_name, self::$option_data);
    }
    protected function deleteOption() {
        unset(self::$option_data[$this->id]);
        return update_option(self::$option_name, self::$option_data);
    }
}
}

if (!class_exists('WPBakeryVisualComposerAutoMapper')) {
class WPBakeryVisualComposerAutoMapper extends WPBakeryVisualComposerAbstract {
    protected static $disabled = false;
    protected $tab_title = '';
    public function __construct() {
        $this->title = __('My shortcodes', 'js_composer');
    }
    /**
     * Singleton
     * @static
     * @return WPBakeryVisualComposerAutoMapper
     */
    public static function getInstance() {
        static $instance=null;
        if ($instance === null) $instance = new WPBakeryVisualComposerAutoMapper();
        return $instance;
    }
    // Render methods {{
    /**
     * Builds html for Automapper CRUD like administration block
     * @return bool
     */
    public function renderHtml() {
        if($this->disabled()) return false;
        ?>
        <div class="tab_intro">
            <p class="description"><?php _e('Use Visual Composer Shortcode Mapper in order to add your custom or 3rd party vendors shortcodes to the list of Visual Composer elements menu. In order to map shortcode you need it to be already installed on your WordPress site.', 'js_composer') ?></p>
        </div>
        <div class="vc-automapper-toolbar"><a href="#" class="button button-primary" id="vc-automapper-add-btn"><?php _e('Map shortcode', 'js_composer') ?></a></div>
        <ul class="vc-automapper-list">
        </ul>
        <?php $this->renderTemplates() ?>
        <?php
        return true;
    }
    public function renderListItem($shortcode) {
        echo '<li class="vc-automapper-item" data-item-id="">'
            .'<label>'.$shortcode->name.'</label>'
            .'<span class="vc-automapper-item-controls">'
                .'<a href="#" class="vc-automapper-edit-btn" data-id="'.$shortcode->id.'" data-tag="'.$shortcode->tag.'"></a>'
                .'<a href="#" class="vc-automapper-delete-btn" data-id="'.$shortcode->id.'" data-tag="'.$shortcode->tag.'"></a>'
            .'</span></li>';
    }

    public function renderMapFormTpl() {
        ?>
        <script type="text/html" id="vc-automapper-add-form-tpl">
                <label for="vc-atm-shortcode-string" class="vc-info"><?php _e('Please enter shortcode string', 'js_composer') ?></label>
                <div class="vc-wrapper">
                    <div class="vc-string">
                        <input id="vc-atm-shortcode-string" placeholder="<?php _e('Please enter valid shortcode') ?>" type="text" class="vc-atm-string">
                    </div>
                    <div class="vc-buttons">
                        <a href="#" id="vc-atm-parse-string" class="button button-primary vc-parse-btn"><?php _e('Parse shortcode' , 'js_composer') ?></a>
                        <a href="#" class="button vc-atm-cancel"><?php _e('Cancel' , 'js_composer') ?></a>
                    </div>
                </div>
                <span class="description"><?php _e('Please enter valid shortcode like [my_shortcode first_param="first_param_value"]My shortcode content[/my_shortcode]', 'js_composer') ?></span>
            </div>
        </script>
        <script type="text/html" id="vc-automapper-item-complex-tpl">
            <div class="widget-top">
                <div class="widget-title-action">
                    <a class="widget-action hide-if-no-js" href="#"></a>
                    <a class="widget-control-edit hide-if-js">
                        <span class="edit vc-automapper-edit-btn">Edit</span>
                        <span class="add vc-automapper-delete-btn">Add</span>
                        <span class="screen-reader-text">Search</span>
                    </a>
                </div>
                <div class="widget-title"><h4>{{ name }}<span class="in-widget-title"></span></h4></div>
            </div>
            <div class="widget-inside">
            </div>
        </script>
        <script type="text/html" id="vc-automapper-form-tpl">
            <input type="hidden" name="name" id="vc-atm-name" value="{{ name }}">
            <div class="vc-shortcode-preview" id="vc-shortcode-preview">
                {{{ shortcode_preview }}}
            </div>
            <div class="vc-line"></div>
            <div class="vc-wrapper">
                <h4 class="vc-h"><?php _e('General information') ?></h4>
                <div class="vc-field vc-tag">
                    <label for="vc-atm-tag"><?php _e('Tag:', 'js_composer') ?></label>
                    <input type="text" name="tag" id="vc-atm-tag" value="{{ tag }}">
                </div>
                <div class="vc-field vc-description">
                    <label for="vc-atm-description"><?php _e('Description:', 'js_composer') ?></label>
                    <textarea name="description" id="vc-atm-description">{{ description }}</textarea>
                </div>
                <div class="vc-field vc-category">
                    <label for="vc-atm-category"><?php _e('Category:', 'js_composer') ?></label>
                    <input type="text" name="category" id="vc-atm-category" value="{{ category }}">
                    <span class="description"><?php __('Comma separated categories names') ?></span>
                </div>
                <div class="vc-field vc-is-container">
                    <label for="vc-atm-is-container"><input type="checkbox" name="is_container" id="vc-atm-is-container" value=""> <?php _e('Include content param into shortcode', 'js_composer') ?></label>
                </div>
            </div>
            <div class="vc-line"></div>
            <div class="vc-wrapper">
                <h4 class="vc-h"><?php _e('Shortcode parameters') ?></h4>
                <a href="#" id="vc-atm-add-param" class="button vc-add-param">+ Add param</a>
                <div class="vc-params" id="vc-atm-params-list"></div>
            </div>
            <div class="vc-buttons">
                <a href="#" id="vc-atm-save" class="button button-primary"><?php _e('Save changes', 'js_composer') ?></a>
                <a href="#" class="button vc-atm-cancel"><?php _e('Cancel', 'js_composer') ?></a>
                <a href="#" class="button vc-atm-delete"><?php _e('Delete', 'js_composer') ?></a>
            </div>
        </script>
        <script type="text/html" id="vc-atm-form-param-tpl">
            <div class="vc-buttons">
                <a href="#" class="vc-move-param"></a>
                <a href="#" class="vc-delete-param"></a>
            </div>
            <div class="vc-fields">
                <div class="vc-param_name vc-param-field">
                    <label><?php _e('Param name', 'js_composer') ?></label>
                    <# if(param_name === 'content'){#>
                     <span class="vc-content"><?php _e('Content', 'js_composer') ?></span>
                     <input type="text" style="visibility: hidden;" name="param_name" value="{{ param_name }}" placeholder="<?php _e('Required value', 'js_composer') ?>" class="vc-param-name" data-system="true">
                     <span class="description" style="visibility: hidden;"><?php _e('Please use only letters, numbers and underscore.', 'js_composer') ?></span>
                    <# } else { #>
                    <input type="text" name="param_name" value="{{ param_name }}" placeholder="<?php _e('Required value', 'js_composer') ?>" class="vc-param-name">
                    <span class="description"><?php _e('Please use only letters, numbers and underscore.', 'js_composer') ?></span>
                    <# } #>
                </div>
                <div class="vc-heading vc-param-field">
                    <label><?php _e('Heading', 'js_composer') ?></label>
                    <input type="text" name="heading" value="{{ heading }}" placeholder="<?php _e('Required value', 'js_composer') ?>">
                    <span class="description"><?php _e('Heading for field in shortcode edit form.', 'js_composer') ?></span>
                </div>
                <div class="vc-type vc-param-field">
                    <label><?php _e('Field type', 'js_composer') ?></label>
                    <select name="type">
                        <option value=""><?php _e('Select field type', 'js_composer') ?></option>
                        <option value="textfield"<?php echo '<# if(type==="textfield") { #> selected="selected"<# } #>' ?>><?php _e('Textfield', 'js_composer') ?></option>
                        <option value="dropdown"<?php echo '<# if(type==="dropdown") { #> selected="selected"<# } #>' ?>><?php _e('Dropdown', 'js_composer') ?></option>
                        <option value="textarea"<?php echo '<# if(type==="textarea") { #> selected="selected"<# } #>' ?>><?php _e('Textarea', 'js_composer') ?></option>
                    </select>
                    <span class="description"><?php _e('Field type for shortcode edit form.', 'js_composer') ?></span>
                </div>
                <div class="vc-value vc-param-field">
                    <label><?php _e('Default value', 'js_composer') ?></label>
                    <input type="text" name="value" value="{{ value }}" class="vc-param-value">
                    <span class="description"><?php _e('Default value or list of values for dropdown type(separate by comma).', 'js_composer') ?></span>
                </div>
                <div class="description vc-param-field">
                    <label><?php _e('Description', 'js_composer') ?></label>
                    <textarea name="description" placeholder="">{{ description }}</textarea>
                    <span class="description"><?php _e('Explain param.', 'js_composer') ?></span>
                </div>
            </div>
        </script>
        <?php
    }
    public function renderTemplates() {
        ?>
        <script type="text/html" id="vc-automapper-item-tpl">
                <label class="vc-automapper-edit-btn">{{ name }}</label>
                <span class="vc-automapper-item-controls">
                    <a href="#" class="vc-automapper-delete-btn" title="<?php _e('Delete', 'js_composer') ?>"></a>
                    <a href="#" class="vc-automapper-edit-btn" title="<?php _e('Edit', 'js_composer') ?>"></a>
                </span>
        </script>
    <?php
    $this->renderMapFormTpl();
    }
    // }}
    // Action methods(CRUD) {{
    public function goAction() {
        $action = $this->post('vc_action');
        $this->result($this->$action());
    }
    public function create(){
        $data = $this->post('data');
        $shortcode = new VcAMShortcode($data);
        return $shortcode->save();
    }
    public function update() {
        $id = $this->post('id');
        $data = $this->post('data');
        $shortcode = new VcAMShortcode($id);
        if(!isset($data['params'])) $data['params'] = array();
        $shortcode->set($data);
        return $shortcode->save();
    }
    public function delete() {
        $id = $this->post('id');
        $shortcode = new VcAMShortcode($id);
        return $shortcode->delete();
    }
    public function read() {
        return VcAMShortcode::findAll();
    }
    // }}
    /**
     * Ajax result output
    */
    function result($data) {
        echo is_array($data) || is_object($data) ? json_encode($data) : $data;
        die();
    }
    /**
     * Setter/Getter for Disabling Automapper
     * @static
     * @param bool $disable
     */
    // {{
    public static function setDisabled($disable = true) {
        self::$disabled = $disable;
    }
    public static function disabled() {
        return self::$disabled;
    }
    // }}
    /**
     * Setter/Getter for Automapper title
     * @static
     * @param string $title
     */
    // {{
    public function setTitle($title) {
        $this->title = $title;
    }
    public function title() {
        return $this->title;
    }
    // }}
    public static function map() {
        $shortcodes = VcAMShortcode::findAll();
        foreach($shortcodes as $shortcode) {
            vc_map(array(
                "name" => $shortcode->name,
                "base" => $shortcode->tag,
                "category" => vc_atm_build_categories_array($shortcode->category),
                "description" => $shortcode->description,
                "params" => vc_atm_build_params_array($shortcode->params),
                "show_settings_on_create" => !empty($shortcode->params),
                "atm" => true,
                "icon" => 'icon-wpb-atm'
            ));
        }
    }
}
}

// Helpers
if(!function_exists('vc_atm_build_categories_array')) {
    function vc_atm_build_categories_array($string) {
        return array_map('vc_atm_textdomain_category', explode(',', preg_replace('/\,\s+/', ',', trim($string))));
    }
    function vc_atm_textdomain_category($value) {
        return __($value, 'js_composer');
    }
}
if(!function_exists('vc_atm_build_params_array')) {
    function vc_atm_build_params_array($array) {
        $params = array();
        if(is_array($array)) {
            foreach($array as $param) {
                if($param['type']==='dropdown') $param['value'] = explode(',', preg_replace('/\,\s+/', ',', trim($param['value'])));
                $params[] = $param;
            }
        }

        return $params;
    }
}

if(!function_exists('vc_automapper')) {
    function vc_automapper() {
        return WPBakeryVisualComposerAutoMapper::getInstance();
    }
}
if(!function_exists('vc_atm_map')) {
    function vc_atm_map() {
        vc_automapper()->map();
    }
}