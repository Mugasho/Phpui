<?php
/**
 * Created by PhpStorm.
 * User: ScriptFloor
 * Date: 10/21/2017
 * Time: 10:30 PM.
 */
class HtmlDocument
{
    public $title = 'document';
    public $lang = 'eng';
    public $classes = [];
    public $metaViewport = '';
    public $metaDescription = '';
    public $metaKeywords = '';
    public $metaAuthor = '';

    /**
     * Html constructor.
     *
     * @param string $title
     * @param string $lang
     */
    public function __construct($title, $lang)
    {
        $this->title = $title;
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getMetaViewport()
    {
        return $this->metaViewport;
    }

    /**
     * @param $width
     * @param $initialScale
     * @param $userScalable
     * @param $ui
     */
    public function setMetaViewport($width, $initialScale, $userScalable, $ui)
    {
        $this->metaViewport = 'width='.$width.',initial-scale='.$initialScale.',user-scalable='.$userScalable.','.$ui;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return string
     */
    public function getMetaAuthor()
    {
        return $this->metaAuthor;
    }

    /**
     * @param string $metaAuthor
     */
    public function setMetaAuthor($metaAuthor)
    {
        $this->metaAuthor = $metaAuthor;
    }

    /**
     * @return array
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param array $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }

    /**
     * @param $class
     * add class to classes array
     */
    public function addClass($class)
    {
        $this->classes[] = $class;
    }

    /**
     *Generates a new Html Document using the given Parameters.
     */
    public function Start()
    {
        echo Tags::$openAngle.Tags::$html;
        if (!empty($this::getLang())) {
            echo ' lang="'.$this::getLang().'"';
        }
        if (!empty($this::getClasses())) {
            echo ' class="';
            foreach ($this::getClasses() as $class) {
                echo $class.' ';
            }
            echo '"';
        }
        echo Tags::$closeAngle;
        $head = new phpUI(typeOf::$head);
        $head->Start();
        if (!empty($this::getTitle())) {
            $title = new phpUI(typeOf::$title);
            $title->setText('myTitle');
            $title->Start();
            $title->End();
        }
        if (!empty($this->metaViewport)) {
            echo Tags::$newline;
            echo Tags::$openAngle
                .Tags::$meta.' '
                .Tags::$name.'="viewport" '.Tags::$content.'="'.$this::getMetaViewport().'"'
                .Tags::$closeAngle;
        }
        if (!empty($this->metaDescription)) {
            echo Tags::$newline;
            echo Tags::$openAngle
                .Tags::$meta.' '
                .Tags::$name.'="description" '.Tags::$content.'="'.$this::getMetaDescription().'"'
                .Tags::$closeAngle;
        }
        if (!empty($this->metaKeywords)) {
            echo Tags::$newline;
            echo Tags::$openAngle
                .Tags::$meta.' '
                .Tags::$name.'="keywords" '.Tags::$content.'="'.$this::getMetaKeywords().'"'
                .Tags::$closeAngle;
        }
        if (!empty($this->metaAuthor)) {
            echo Tags::$newline;
            echo Tags::$openAngle
                .Tags::$meta.' '
                .Tags::$name.'="author" '.Tags::$content.'="'.$this::getMetaAuthor().'"'
                .Tags::$closeAngle;
        }
        echo Tags::$newline;
        $head->End();
    }

    /**
     *Close Html document tag.
     */
    public static function End()
    {
        echo Tags::$newline;
        echo Tags::$openSlash.Tags::$html.Tags::$closeAngle;
    }
}
