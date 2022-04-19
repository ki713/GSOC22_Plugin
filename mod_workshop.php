<?php

/**
 * @Copyright
 * @package     Dummy Plugin
 * @author      Kiranpreet Sethi <kiranpreetsethi65@gmail.com>
 * @version     4.0.0 - 2022-15-04
 *
 * @license     GNU/GPL
 * 
 */
defined('_JEXEC') || die('Restricted access');
/*Note*/
/*new way of creating extensions in joomla 3.8 and higher
    using namespaces
    first it was used to be Jplugin
*/

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;


class PlgDummy extends CMSPlugin{

    /*
        parameter $subject = object
        parameter $config = array
     */
    public function __construct(&$subject, $config){
        parent::__construct($subject, $config);

        $document = JFactory::getDocument();


       

    }
   
    public function onContentPrepare($context, &$row, &$params, $page =0){
        echo '<script language="javascript">';
       echo 'alert("message successfully sent")';
        echo '</script>';
        
        /*does not need return value because its a reference*/
        if($context !== 'com_content.article'){
            return;
        }
        $document->addScript("plugins/content/mod_workshop/index.js");
    
        $user = Factory::getUser();
             
    }

   

}

?>
<head>
<script type="text/javascript">
    window.addEventListener("DOMContentLoaded",()=>{

    alert("lo");});
    
</script>
    </head>


