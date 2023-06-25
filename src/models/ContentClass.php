<?php
    Class ContentClass
    {
        private $contentStructur;
        private $contentItems; //Array of ContentItem

        public function __construct()
        {
            $this->contentItems = array();
            $this->contentStructur = 1;
        }


        /**
         * Get the value of contentStructure
         */ 
        public function getContentStructur()
        {
                return $this->contentStructur;
        }

        /**
         * Set the value of contentStructure
         *
         * @return  self
         */ 
        public function setContentStructur($contentStructur)
        {
                $this->contentStructur = $contentStructur;

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