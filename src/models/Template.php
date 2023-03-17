<?php 

class Template
{
    public $pageTitle;
    public $navBarActiveLink;
    

    public function __construct()
    {
        $this->pageTitle = "TORADI LOGISTIC";
        $this->navBarActiveLink = 'Accueil';
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
     * builNavBar
     * print Navbar with given ActiveLink
     * @return void
     */
    public function builNavBar(){
        
    }
    
    /**
     * buildSlideShow
     * build as Slide with the given Array Image
     * @param  mixed $arrayImages
     * @return void
     */
    public function buildSlideShow($arrayImages){
        
    }
}

?>