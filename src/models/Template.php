<?php 

class Template
{
    private $pageTitle;
    private $navBarActiveLink;
    private $slideImages; //array of SlideClass
    private $tmpContent = array(); //array of ContentClass

    public function __construct()
    {
        $this->pageTitle = "TORADI LOGISTIC";
        $this->navBarActiveLink = 'Accueil';
        $this->slideImages = array();
        $this->tmpContent = array();
    }

    /**
     * Get the value of pageTitle
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set the value of pageTitle
     */
    public function setPageTitle($pageTitle): self
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get the value of navBarActiveLink
     */
    public function getNavBarActiveLink()
    {
        return $this->navBarActiveLink;
    }

    /**
     * Set the value of navBarActiveLink
     */
    public function setNavBarActiveLink($navBarActiveLink): self
    {
        $this->navBarActiveLink = $navBarActiveLink;

        return $this;
    }

    /**
     * Get the value of slideImage
     */ 
    public function getSlideImages()
    {
        return $this->slideImages;
    }

    /**
     * Set the value of slideImage
     *
     * @return  self
     */ 
    public function setSlideImages($slideImages)
    {
        $this->slideImages = $slideImages;

        return $this;
    }

    /**
     * Get the value of tmpContent
     */ 
    public function getTmpContent()
    {
        return $this->tmpContent;
    }

    /**
     * Set the value of tmpContent
     *
     * @return  self
     */ 
    public function setTmpContent($tmpContent)
    {
        $this->tmpContent = $tmpContent;

        return $this;
    }
}
