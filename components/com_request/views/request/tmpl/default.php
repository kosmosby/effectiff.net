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
// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>

<table width="100%">
    <tr>
        <td align="center">
            <div style="width: 250px;" class="request-form">
                <form action="<?php echo JRoute::_('index.php'); ?>"
                      method="post" name="adminForm" id="userdetails-form" class="form-validate">
                    <?php
                        foreach($this->form->getFieldset() as $field):
                             echo $field->label;echo $field->input;
                         endforeach;
                    ?>
                    <input type="hidden" name="option" value="com_request" />
                    <input type="hidden" name="task" value="save" />
                    <?php echo JHtml::_('form.token'); ?>
                    <br />
                    <br />
                    <button type="submit" class="btn btn-primary">Download</button>
                </form>
            </div>
        </td>
    </tr>
</table>



