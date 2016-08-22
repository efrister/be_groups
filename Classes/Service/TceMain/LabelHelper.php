<?php
namespace Morphodo\BeGroups\Service\TceMain;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Michael Klapper <michael.klapper@morphodo.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * This class prepend the label of record sub-type.
 *
 * @link http://www.morphodo.com/
 * @author Michael Klapper <michael.klapper@morphodo.com>
 */
class LabelHelper {

	/**
	 * Retrieve a custom label
	 *
	 * @param array $params Current record
	 * @param object $pObj
	 * @access public
	 * @return string
	 */
	public function getCombinedTitle(&$params, &$pObj) {

		global $LANG;
		$type = $params['row']['tx_begroups_kind'];
		$label = $LANG->sL('LLL:EXT:be_groups/Resources/Private/Language/locallang.xlf:label.prefix.' . $type) . $params['row']['title'];

		$params['title'] = $label;
	}
}
