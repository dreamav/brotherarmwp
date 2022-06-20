<?

class DetectCity
{
    public $query;

    public function __construct()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
		$this->query = json_decode(file_get_contents('http://ip-api.com/json/'.$ip.'?lang=ru'));

//		var_dump($ip); 46.219.219.61
    }

    public function getSubdomain($default, $subdomains){
        foreach ($subdomains as $sub_domain => $reg_codes){
            if (in_array($this->query->region,$reg_codes)){
                return $sub_domain;
            }
        }
        return $default;
    }

    public function getBestMatch($default, $langs)
    {
        $languages=array();
        foreach ($langs as $lang => $alias) {
            if (is_array($alias)) {
                foreach ($alias as $alias_lang) {
                    $languages[strtolower($alias_lang)] = strtolower($lang);
                }
            }else $languages[strtolower($alias)]=strtolower($lang);
        }
        foreach ($this->language as $l => $v) {
            $s = strtok($l, '-'); // убираем то что идет после тире в языках вида "en-us, ru-ru"
            if (isset($languages[$s]))
                return $languages[$s];
        }
        return $default;
    }

    /**
     * @return array|mixed|object
     */
    public function getQuery()
    {
        return $this->query;
    }
}