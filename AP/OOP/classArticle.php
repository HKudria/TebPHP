<?php

abstract class Article
{
    public $title = 'New article';
    public $titleFontSize = 20;
    public $articleBody = 'test test test';
    public $articleBodyFontSize = 14;
    public $border = '1px solid black';
    public $bg;


    public function __construct(string $title,string $articleBody,string $border,string $bg,int $titleFontSize =20,int $articleBodyFontSize = 14){
        $this->title = $title;
        $this->titleFontSize = $titleFontSize;
        $this->articleBody = $articleBody;
        $this->articleBodyFontSize = $articleBodyFontSize;
        $this->border = $border;
        $this->bg=$bg;

    }
    public function printArticle() {
        echo "<div style='border:{$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>
              </div>";
    }
}

//$sportsNews = new Article();
//$sportsNews ->printArticle();
//$sportsNews1 = new Article();
//$sportsNews1 ->printArticle();
//$sportsNews2 = new Article();
//$sportsNews2 ->printArticle();
//$sportsNews1 ->title = 'Sport news';
//$sportsNews2 ->title = 'Auto news';
//$sportsNews->bg = 'red';
//$sportsNews1->bg = 'yellow';
//$sportsNews2->bg = 'blue';
//$sportsNews ->printArticle();
//$sportsNews1 ->printArticle();
//$sportsNews2 ->printArticle();


//now parents class is abstract
//$test = new Article('Sport news','Somthing about sport','2px solid black','blue');
//$test->printArticle();

class SportsArticle extends Article
{
    public $image;
    public function __construct(string $title, string $articleBody, string $border, string $bg, string $image,int $titleFontSize = 20, int $articleBodyFontSize = 14)
    {
        $this->image=$image;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }

    public function printArticle() 
    {
        echo "<div style='border:{$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>
                <img src='{$this->image}' alt='picture' width='100'>
              </div>";
    }
}

class WeatherArticle extends Article
{
    public $temperature;

    public function __construct(string $title, string $articleBody, string $border, string $bg, int $temperature, int $titleFontSize = 20, int $articleBodyFontSize = 14)
    {
        $this->temperature=$temperature;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }

    public function printArticle()
    {
        echo "<div style='border:{$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>
                <span>{$this->temperature}</span>
              </div>";
    }
}

class PoliticsArticle extends Article
{
    public $link;

    public function __construct(string $title, string $articleBody, string $border, string $bg,string $link = 'https://google.com', int $titleFontSize = 20, int $articleBodyFontSize = 14)
    {
        $this->link = $link;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }

    public function printArticle()
    {
        echo "<div style='border:{$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style='font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>
             <a href='{$this->link}'>link</a>
              </div>";
    }
}

$sportsNews = new SportsArticle('Sport Article','somethhing about sport', '3px solid red','yellow','test.jpg');
$sportsNews->printArticle();
$weatherNews = new WeatherArticle('Weather Article','somethhing about weather', '3px solid green','white',20);
$weatherNews->printArticle();
$politicsNews = new PoliticsArticle('Politics Article','somethhing about politics', '3px solid red','red');
$politicsNews->printArticle();

