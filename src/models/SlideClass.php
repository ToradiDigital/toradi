<?php 
    Class SlideClass
    {
        private $slideImage;
        private $slideTitle;
        private $slideDesciption;

        public function __construct()
        {
            
        }    

        /**
         * Get the value of slideImage
         */ 
        public function getSlideImage()
        {
                return $this->slideImage;
        }

        /**
         * Set the value of slideImage
         *
         * @return  self
         */ 
        public function setSlideImage($slideImage)
        {
                $this->slideImage = $slideImage;

                return $this;
        }

        /**
         * Get the value of slideTitle
         */ 
        public function getSlideTitle()
        {
                return $this->slideTitle;
        }

        /**
         * Set the value of slideTitle
         *
         * @return  self
         */ 
        public function setSlideTitle($slideTitle)
        {
                $this->slideTitle = $slideTitle;

                return $this;
        }

        /**
         * Get the value of slideDesciption
         */ 
        public function getSlideDesciption()
        {
                return $this->slideDesciption;
        }

        /**
         * Set the value of slideDesciption
         *
         * @return  self
         */ 
        public function setSlideDesciption($slideDesciption)
        {
                $this->slideDesciption = $slideDesciption;

                return $this;
        }
    }
?>