<?php

/*                                                                        *
 * This script belongs to the FLOW3 package "Fluid".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */
class Tx_Podcast_ViewHelpers_HtmlEntitiesViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

    /**
     * htmlentities — Wandelt alle geeigneten Zeichen in entsprechende HTML-Codes um
     * see: http://php.net/manual/de/function.htmlentities.php
     *
     * @param string $text
     * @return mixed
     */
    public function render($text) {
        return htmlentities($text);
	}
}
?>