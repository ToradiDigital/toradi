<?php 
    declare(strict_types=1);

    Class MountTemplate {

        public function __construct()
        {
            
        }
        /**
         * Undocumented function
         *
         * @param Template $template
         * @return void
         */
        public function mountTemplate(Template $template){

            if(count($template->getTmpContent()) > 0){

                foreach($template->getTmpContent() as $contentElement){

                    if($contentElement instanceof ContentClass) {
                        // print Content title and description
                        echo "<div class='container' id='best_services'>";
                            echo "<div class='row' id='title'>";
                                echo "<div class='col-12'>";
                                    echo "<h1>".$contentElement->getContentTitle()."</h1>";
                                echo "</div>";
                            echo "</div>";

                            echo "<div class='row' id='desc'>";
                                echo "<div class='col-12'>";
                                    echo "<p>".$contentElement->getContentDescription()."</p>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        //get Structur code
                        $contentElement->getContentStructur();

                        //get array of ContentItem
                        if(count($contentElement->getContentItems()) > 0){
                            $countRow = 0;
                            $countElement = 0;
                            echo " <div class='container' id= 'best_services_list'>
                            <div class='row'>
                                <div class='col-12'>
                                    <table  class='table'>
                                        <tbody>
                                            <tr id='tr_1'>
                             ";
            
                             foreach($contentElement->getContentItems() as $contentItem){
                                if($contentItem instanceof ContentItem){
                                    $countElement ++;
                                    if($countElement == 4){
                                        echo "</tr>";
                                        echo "<tr id='tr_".($countRow++)."'>";
                                        $countElement = 1;
                                    } 
                                        echo "<td id='td".$countElement."'>";
                                            echo "<div class='card mb-3'>";

                                                if($contentItem->getItemIcon() != null 
                                                    && $contentItem->getItemIcon() != "")
                                                        echo "<i class='".$contentItem->getItemIcon()."'></i>";
                                                
                                                echo "<div class='card-body'>";
                                                    echo "<h5 class='card-title'>".$contentItem->getItemTitle()."</h5>";
                                                    echo "<p class='card-text'>".$contentItem->getItemDescription()."</p>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</td>";
                                    
                                    
                                } else {
                                    throw new Exception('contentItem is not of type ContentItem');
                                }
                            }

                            if($countElement != 3){
                                echo "</tr>";
                            }
                            
                            echo "</tbody>";
                        echo "</table>";
                    echo "</div>";//close div col
                echo "</div>"; // close div row
            echo "</div>"; //close div class container

                        }

                    } else {
                        throw new Exception('contentElement is not of type ContentClass');
                    }
                    
                }
            }

        }
    }
?>