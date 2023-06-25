<?php
    Class ContentClass
    {
        private $contentStructur;
        private $contentTitle;
        private $contentDescription;
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

        /**
         * Get the value of contentDescription
         */ 
        public function getContentDescription()
        {
                return $this->contentDescription;
        }

        /**
         * Set the value of contentDescription
         *
         * @return  self
         */ 
        public function setContentDescription($contentDescription)
        {
                $this->contentDescription = $contentDescription;

                return $this;
        }

        /**
         * Get the value of contentTitle
         */ 
        public function getContentTitle()
        {
                return $this->contentTitle;
        }

        /**
         * Set the value of contentTitle
         *
         * @return  self
         */ 
        public function setContentTitle($contentTitle)
        {
                $this->contentTitle = $contentTitle;

                return $this;
        }
    }
?>