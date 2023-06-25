<?php
    Class ContentClass
    {
        private $contentStructure;
        private $contentItems; //Array of ContentItem

        public function __construct()
        {
            $this->contentItems = array();
            $this->contentStructure = 1;
        }


        /**
         * Get the value of contentStructure
         */ 
        public function getContentStructure()
        {
                return $this->contentStructure;
        }

        /**
         * Set the value of contentStructure
         *
         * @return  self
         */ 
        public function setContentStructure($contentStructure)
        {
                $this->contentStructure = $contentStructure;

                return $this;
        }

        /**
         * Get the value of contentItems
         */ 
        public function getContentItems()
        {
                return $this->contentItems;
        }

        /**
         * Set the value of contentItems
         *
         * @return  self
         */ 
        public function setContentItems($contentItems)
        {
                $this->contentItems = $contentItems;

                return $this;
        }
    }
?>