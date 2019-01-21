<?php
/**
* Author:	Omar Muhammad
* Email:	admin@omar84.com
* Website:	http://omar84.com
* Component:Blank Component
* Version:	3.0.0
* Date:		03/11/2012
* copyright	Copyright (C) 2012 http://omar84.com. All Rights Reserved.
* @license	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
**/
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class RequestController extends JControllerLegacy
{

	public function display($cachable = false, $urlparams = false)
	{
		JRequest::setVar('view','request'); // force it to be the search view

		return parent::display($cachable, $urlparams);
	}


	public function save() {

        require_once JPATH_ADMINISTRATOR.'/components/com_request/tables/request.php';
        $request =& JTable::getInstance('Request', 'RequestTable');

        $form =& JRequest::getVar( 'jform', array(), 'post', 'array' );

        $request->name = $form['name'];
        $request->phone = $form['phone'];
        $request->email = $form['email'];

        //$request->store();

        if(!$request->store()){
            JError::raiseError(500, $request->getError() );
        }

        $mainframe =& JFactory::getApplication();
        $mainframe->Redirect('machine-translations');

    }




}
