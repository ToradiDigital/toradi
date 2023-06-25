<?php
    Class ContentItem{
        private $itemTitle;
        private $itemSubtitle;
        private $itemDescription;
        private $itemImage;
        private $itemIcon;
        private $itemLinkLabel;
        private $itemLinkIcon;
        private $itemLinkAdress;

        public function __construct()
        {
            
        }

        /**
         * Get the value of itemTitle
         */ 
        public function getItemTitle()
        {
                return $this->itemTitle;
        }

        /**
         * Set the value of itemTitle
         *
         * @return  self
         */ 
        public function setItemTitle($itemTitle)
        {
                $this->itemTitle = $itemTitle;

                return $this;
        }

        /**
         * Get the value of itemSubtitle
         */ 
        public function getItemSubtitle()
        {
                return $this->itemSubtitle;
        }

        /**
         * Set the value of itemSubtitle
         *
         * @return  self
         */ 
        public function setItemSubtitle($itemSubtitle)
        {
                $this->itemSubtitle = $itemSubtitle;

                return $this;
        }

        /**
         * Get the value of itemDescription
         */ 
        public function getItemDescription()
        {
                return $this->itemDescription;
        }

        /**
         * Set the value of itemDescription
         *
         * @return  self
         */ 
        public function setItemDescription($itemDescription)
        {
                $this->itemDescription = $itemDescription;

                return $this;
        }

        /**
         * Get the value of itemImage
         */ 
        public function getItemImage()
        {
                return $this->itemImage;
        }

        /**
         * Set the value of itemImage
         *
         * @return  self
         */ 
        public function setItemImage($itemImage)
        {
                $this->itemImage = $itemImage;

                return $this;
        }

        /**
         * Get the value of itemIcon
         */ 
        public function getItemIcon()
        {
                return $this->itemIcon;
        }

        /**
         * Set the value of itemIcon
         *
         * @return  self
         */ 
        public function setItemIcon($itemIcon)
        {
                $this->itemIcon = $itemIcon;

                return $this;
        }

        /**
         * Get the value of itemLinkLabel
         */ 
        public function getItemLinkLabel()
        {
                return $this->itemLinkLabel;
        }

        /**
         * Set the value of itemLinkLabel
         *
         * @return  self
         */ 
        public function setItemLinkLabel($itemLinkLabel)
        {
                $this->itemLinkLabel = $itemLinkLabel;

                return $this;
        }

        /**
         * Get the value of itemLinkIcon
         */ 
        public function getItemLinkIcon()
        {
                return $this->itemLinkIcon;
        }

        /**
         * Set the value of itemLinkIcon
         *
         * @return  self
         */ 
        public function setItemLinkIcon($itemLinkIcon)
        {
                $this->itemLinkIcon = $itemLinkIcon;

                return $this;
        }

        /**
         * Get the value of itemLinkAdress
         */ 
        public function getItemLinkAdress()
        {
                return $this->itemLinkAdress;
        }

        /**
         * Set the value of itemLinkAdress
         *
         * @return  self
         */ 
        public function setItemLinkAdress($itemLinkAdress)
        {
                $this->itemLinkAdress = $itemLinkAdress;

                return $this;
        }
    }
?>